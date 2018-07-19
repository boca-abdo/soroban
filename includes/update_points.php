<?php
  date_default_timezone_set("Etc/GMT");
  require_once 'user_check.php';
  $points = intval($_POST['p']);
  $class = $_POST['cl'];
  $dt = date("Y-m-d H:i:s");
  if ($class == "beg") {
    $insert_stmt = $srbn_con->prepare("INSERT INTO `b_stats` (`b_user_id`,`b_stats_datetime`,`b_stats_points`) VALUES (?,?,?)");
  }
  if ($class == "exp") {
    $insert_stmt = $srbn_con->prepare("INSERT INTO `e_stats` (`e_user_id`,`e_stats_datetime`,`e_stats_points`) VALUES (?,?,?)");
  }
  $insert_stmt->bindParam(1, $log_id, PDO::PARAM_INT);
  $insert_stmt->bindParam(2, $dt, PDO::PARAM_STR);
  $insert_stmt->bindParam(3, $points, PDO::PARAM_INT);
  $insert_stmt->execute();
  $pt_stmt = $srbn_con->query("SELECT `b_points`,`e_points`,`b_total`,`e_total` FROM `users` WHERE `id`='$log_id'");
  $pt_stmt->setFetchMode(PDO::FETCH_ASSOC);
  $pt_row = $pt_stmt->fetch();
  $old = intval($pt_row['b_points']);
  $total = intval($pt_row['b_total']) + $points;
  if ($class == "exp") {
    $old = intval($pt_row['e_points']);
    $total = intval($pt_row['e_total']) + $points;
    $tt_stmt = $srbn_con->query("UPDATE `users` SET `e_total`='$total' WHERE `id`='$log_id'");
  } else {
    $tt_stmt = $srbn_con->query("UPDATE `users` SET `b_total`='$total' WHERE `id`='$log_id'");
  }
  if ($points > $old) {
    if ($class == "beg") {
      $up_stmt = $srbn_con->query("UPDATE `users` SET `b_points`='$points' WHERE `id`='$log_id'");
    }
    if ($class == "exp") {
      $up_stmt = $srbn_con->query("UPDATE `users` SET `e_points`='$points' WHERE `id`='$log_id'");
    }
    echo "top";
  } else {
    echo $old;
  }
 ?>
