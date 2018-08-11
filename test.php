<?php
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
  throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");


header('Content-type: text/html; charset=utf-8');


  try {
    include 'include/db.php';

  } catch (Exception $e) {
    echo $e-getMessage();
  }


?>
