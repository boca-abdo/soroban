<?php
  include "user_check.php";
  if ($log_id == "" && $log_e == "" && $log_p == "") {
    echo "nosession";
    exit();
  } else {
    $new_level = $log_row['level']+1;
    $update = $srbn_con->query("UPDATE `users` SET `level`='$new_level' WHERE `id`='$log_id'");
    echo "done";
  }
?>
