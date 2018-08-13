<?php
  function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  }
  set_error_handler("exception_error_handler");
  try {
    include "../include/db.php";
    $update_best = $srbn_con->query("UPDATE `counter` SET `counts`='0'");
    if ($update_best) {
      echo "done";
    } else {
      echo "fail";
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
