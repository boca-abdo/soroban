<?php
  include_once 'user_check.php';
  $filename = $_FILES["file"]["name"];
	$filetmploc = $_FILES["file"]["tmp_name"];
	$filetype = $_FILES["file"]["type"];
	$filesize = $_FILES["file"]["size"];
	$fileerror = $_FILES["file"]["error"];
  if ($fileerror) {
		echo $fileerror;
		exit();
	}
  if ($filesize > 5000000) {
    echo "size";
    exit();
  }
  if ($filetype != "image/jpeg") {
    echo "type";
    exit();
  }
  $file = $_SERVER['DOCUMENT_ROOT']."/"."users/".$log_id."/avatar.jpg";
  if(is_file($file)) {
    unlink($file);
  }
  move_uploaded_file($filetmploc, $file);
  echo "done";
?>
