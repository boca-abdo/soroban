<?php
$k = md5(sha1("afhim"));
$salt = md5(sha1("afhim"));
// function encrypt($s,$k){
// 	$s = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $k, $s, MCRYPT_MODE_ECB)));
// 	return $s;
// }
// function decrypt($s,$k){
// 	$s = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $k, base64_decode($s), MCRYPT_MODE_ECB));
// 	return $s;
// }
function hashpass($str, $salt){
	$str = crypt($str, '$s1$'.$salt.'b1$');
	return $str;
}
function protect($st){
	$st = trim(strip_tags(addslashes($st)));
	return $st;
}
?>
