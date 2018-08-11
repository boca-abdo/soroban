<?php
  require "user_check.php";
  try {
    $new_lvl = $log_row['level']+1;
    $level_stmt = $srbn_con->query("UPDATE `users` SET `level`='$new_lvl' WHERE `id`='$log_id' AND `email`='$log_e' AND `password`='$log_p' LIMIT 1");
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
