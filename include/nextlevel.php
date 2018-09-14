<?php
  include "user_check.php";
  $lvl = intval(protect($_POST['lvl']));
  $points = intval(protect($_POST['points']));
  if ($log_id == "" && $log_e == "" && $log_p == "") {
    echo "nosession";
    exit();
  } else {
    if ($lvl == $log_row['chal_level']) {
      $new_level = $lvl + 1;
      $update = $srbn_con->query("UPDATE `users` SET `chal_level`='$new_level' WHERE `id`='$log_id'");
    }
    $new_points = $log_row['points'] + $points;
    $update = $srbn_con->query("UPDATE `users` SET `points`='$new_points' WHERE `id`='$log_id'");
    echo "done";
  }
?>
