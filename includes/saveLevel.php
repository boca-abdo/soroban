<?php
  require_once "user_check.php";
  $new_lvl = $log_row['level']+1;
  $level_stmt = $srbn_con->query("UPDATE `users` SET `level`='$new_lvl' WHERE `id`='$log_id' AND `email`='$log_e' AND `password`='$log_p' LIMIT 1");
?>
