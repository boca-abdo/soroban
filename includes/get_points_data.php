<?php
  require_once 'db.php';
  require_once 'user_check.php';
  $data = array();
  $v = $_POST['v'];
  $m = $_POST['m'];
  $y = $_POST['y'];
  $w = $_POST['w'];
  $d = $_POST['d'];
  $days_in_month = date("t", strtotime($y."-".$m));
  switch ($v) {
    case 'year':
      $start = date("Y-m-d H:i:s", strtotime($y."-01-01"));
      $end = date("Y-m-d H:i:s", strtotime($y."-12-31"));
      break;
    case 'month':
      $start = date("Y-m-d H:i:s", strtotime($y."-".$m."-01"));
      $end = date("Y-m-d H:i:s", strtotime($y."-".$m."-".$days_in_month));
      break;
    case 'week':
      $start = date("Y-m-d H:i:s", strtotime($y.'W'.str_pad($w, 2, '0', STR_PAD_LEFT)));
      $end = date("Y-m-d H:i:s", strtotime($y.'W'.str_pad($w, 2, '0', STR_PAD_LEFT)." +6 days"));
      break;
    case 'day':
      $start = date("Y-m-d H:i:s", strtotime($y."-".$m."-".$d." 00:00:00"));
      $end = date("Y-m-d H:i:s", strtotime($y."-".$m."-".$d." 23:59:59"));
      break;
  }
  $points_stmt = $srbn_con->query("SELECT `b_stats_points`,`b_stats_datetime` FROM `b_stats` WHERE `b_user_id`='$log_id' AND `b_stats_datetime` BETWEEN '$start' AND '$end'");
  $points_stmt->setFetchMode(PDO::FETCH_ASSOC);
  $data["b"] = array();
  $data["b"]["date"] = array();
  $data["b"]["points"] = array();
  while ($points_row = $points_stmt->fetch()) {
    array_push($data["b"]["date"],$points_row['b_stats_datetime']);
    array_push($data["b"]["points"],$points_row['b_stats_points']);
  }
  $points_stmt = $srbn_con->query("SELECT `e_stats_points`,`e_stats_datetime` FROM `e_stats` WHERE `e_user_id`='$log_id' AND `e_stats_datetime` BETWEEN '$start' AND '$end'");
  $points_stmt->setFetchMode(PDO::FETCH_ASSOC);
  $data["e"] = array();
  $data["e"]["date"] = array();
  $data["e"]["points"] = array();
  while ($points_row = $points_stmt->fetch()) {
    array_push($data["e"]["date"],$points_row['e_stats_datetime']);
    array_push($data["e"]["points"],$points_row['e_stats_points']);
  }
  echo json_encode($data);
?>
