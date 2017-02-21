<!doctype html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фото сервис</title>
</head>
<?php
error_reporting (E_ALL);
require "connect.php";

$sqlsave_id = "SELECT * FROM user_save";
$id_login = $connection->query($sqlsave_id);
$login_id = mysqli_fetch_assoc($id_login);
$login_id_save = $login_id['user_id'];

$len_login_id_save = strlen ($login_id_save);


$dirUpload = dirname(__FILE__);

$path = $dirUpload. '/photos';

$filelist = array();
	if ($handle = opendir($path)) {
	    while ($entry = readdir($handle)) {
	        if (substr($entry, 0, $len_login_id_save) == $login_id_save && strpos ($entry, '_') == $len_login_id_save) {
              $filelist[] = $entry;
	        }
	    }

      $len = count($filelist);
	}

  ?>

  <!doctype html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  </head>
  <body>

  <?php $sqlImgId = 'SELECT img_id FROM images WHERE img_name = ?'; ?>
  <?php $stmt = $connection->prepare($sqlImgId); ?>

  <?php for ($i = 0; $i < $len; $i++): ?>
      <form action="service.php" method="post">
          <?php $imgName = $filelist[$i]; ?>
          <?php $stmt->bind_param('s', $imgName); ?>
          <?php $stmt->execute(); ?>
          <?php $stmt->bind_result($imgName); ?>
          <?php $id =  mysqli_stmt_fetch($stmt); ?>

          <label><?php echo $filelist[$i];?>
              <input type="hidden" name="id" value="<?php echo $imgName; ?>">
              <input type="hidden" name="old" value="<?php echo $filelist[$i]; ?>">
              <?php
                  $fileid =  substr($filelist[$i], 0, $len_login_id_save + 1);
                  $file_name = str_replace ( $fileid, '', $filelist[$i]);
              ?>
              <input type="hidden" name="userid" value="<?php echo $fileid; ?>">
              <input type="text" name="edit" value="<?php echo $file_name; ?>">
              <br>
          </label>
              <input type="submit" name="action" value="Переименовать">
              <input type="submit" name="action" value="Удалить"><br>
              <br>
      </form>
  <?php endfor; ?>

<?php
echo "<a href='edit.php'><strong>Редактировать профиль</strong></a>"."<br>";
echo "<a href='index.php'><strong>На главную</strong></a>"."<br>";
$connection->close();
?>
