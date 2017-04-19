<?php

$token = '0ef4ed989cb6966b03d2595e814c2723780f9332aa41a2382553eebe53f696a0d5c1ce7f60ab0deceff6a';
//https://oauth.vk.com/authorize?client_id=5991701&display=page&redirect_uri=http://oauth.vk.com/blank.html&scope=friends,photos,wall&response_type=token

if (!empty($_FILES['image']['name'])) {
    if ($_FILES['image']['type'] != "image/gif" && $_FILES['image']['type'] != "image/jpeg"
        && $_FILES['image']['type'] != "image/png") {
        echo 'Выберите изображение формата jpeg, png или gif.';
        exit();
    }
}
$image = $_FILES['image'];
$user = $_POST['user_id'];
$url = file_get_contents('https://api.vk.com/method/photos.getWallUploadServer?access_token=' . $token . '&v=5.60');
$url = json_decode($url);
$url = $url->response->upload_url;

$fname = $image['tmp_name'];
$cfile = new CURLFile($fname, 'image/jpg', 'vks.jpg');
$file = [
    'photo' => $cfile,
    'message'=> 'Ирина отправила это фото из своего приложения ahh!'
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: multipart/form-data'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $file);

$result = curl_exec ($ch);


$photo = json_decode($result);

$photos = stripslashes($photo->photo);

$vksave = file_get_contents('https://api.vk.com/method/photos.saveWallPhoto?photo=' . $photos . '&server=' . $photo->server . '&hash=' . $photo->hash . '&access_token=' . $token);

$post_photo = json_decode($vksave);

$post_wall = file_get_contents('https://api.vk.com/method/wall.post?owner_id=' . $user . '&access_token=' . $token . '&attachments=' . $post_photo->response[0]->id);
$post_wall = json_decode($post_wall);

if ($post_wall->response->post_id > 0) {
    echo "Изображение ушпешно опубликовано: id поста " . $post_wall->response->post_id;
} else {
    echo 'Ошибка, укажите id пользователя';
}
