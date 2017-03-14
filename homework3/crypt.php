<?php
//$passv = "Meet me at 11 o'clock behind the monument.";
//echo $passv."<br>" ;
//$iv = mcrypt_create_iv (mcrypt_get_iv_size (MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
//$key = "This is a very secret key";
//$pass = mcrypt_encrypt (MCRYPT_RIJNDAEL_256, $key, $passv, MCRYPT_MODE_ECB, $iv);
//echo $pass."<br>" ;
//$passp = mcrypt_decrypt (MCRYPT_RIJNDAEL_256, $key, $pass, MCRYPT_MODE_ECB, $iv);
//echo $passp."<br>" ;


//$key = 'That golden key that opens the palace of eternity.';
//$data = 'The chicken escapes at dawn. Send help with Mr. Blue.';
//$alg = MCRYPT_BLOWFISH;
//$mode = MCRYPT_MODE_CBC;
//$iv = mcrypt_create_iv(mcrypt_get_iv_size($alg,$mode),MCRYPT_DEV_URANDOM);
//$encrypted_data = mcrypt_encrypt($alg, $key, $data, $mode, $iv);
//$plain_text = base64_encode($encrypted_data);
//print $plain_text."<br>";
//$decoded = mcrypt_decrypt($alg,$key,base64_decode($plain_text),$mode,$iv);
//print $decoded."<br>";


$key = 'That golden key that opes the palace of eternity.';
$data = 'The chicken escapes at dawn. Send help with Mr. Blue.';
$alg = MCRYPT_BLOWFISH;
$iv = mcrypt_create_iv(mcrypt_get_block_size($alg),MCRYPT_DEV_URANDOM);
$encrypted_data = mcrypt_cbc($alg,$key,$data,MCRYPT_ENCRYPT, $iv);
$plain_text = base64_encode($encrypted_data);
print $plain_text."<br>";
$decoded = mcrypt_cbc($alg,$key,base64_decode($plain_text),MCRYPT_DECRYPT, $iv);
print $decoded."<br>";

if ($decoded !== $data) {
  echo '7'."<br>" ;
} else {
  echo '5'."<br>" ;
}
//string mcrypt_decrypt (string cipher, string key, string data, string mode [, string iv]);
//string mcrypt_encrypt (string cipher, string key, string data, string mode [, string iv])
