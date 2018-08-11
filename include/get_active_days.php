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
      $start = date("Y-m-d H:i:s", strtotime("2016-10-01"));
      $end = date("Y-m-d H:i:s");
      break;
    case 'month':
    case 'week':
      $start = date("Y-m-d H:i:s", strtotime($y."-01-01"));
      $end = date("Y-m-d H:i:s", strtotime($y."-12-31"));
      break;
    case 'day':
      $start = date("Y-m-d H:i:s", strtotime($y."-".$m."-01"));
      $end = date("Y-m-d H:i:s", strtotime($y."-".$m."-".$days_in_month));
      break;
  }
  $days_stmt = $srbn_con->query("SELECT `b_stats_datetime` FROM `b_stats` WHERE `b_user_id`='$log_id' AND `b_stats_datetime` BETWEEN '$start' AND '$end' UNION SELECT `e_stats_datetime` FROM `e_stats` WHERE `e_user_id`='$log_id' AND `e_stats_datetime` BETWEEN '$start' AND '$end'");
  if ($days_stmt->rowCount() > 0) {
    $days_stmt->setFetchMode(PDO::FETCH_ASSOC);
    while ($days_row = $days_stmt->fetch()) {
      switch ($v) {
        case 'year':
          $year = date("Y", strtotime($days_row['b_stats_datetime']));
          if (!in_array($year,$data)) {
            array_push($data,$year);
          }
          break;
        case 'month':
          $month = date("m", strtotime($days_row['b_stats_datetime']));
          if (!in_array($month,$data)) {
            array_push($data,$month);
          }
          break;
        case 'week':
          $week = date("W", strtotime($days_row['b_stats_datetime']));
          if (!in_array($week,$data)) {
            array_push($data,$week);
          }
          break;
        case 'day':
          $day = date("d", strtotime($days_row['b_stats_datetime']));
          if (!in_array($day,$data)) {
            array_push($data,$day);
          }
          break;
      }
    }
  }
  echo json_encode($data);
?>
