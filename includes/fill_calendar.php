<?php
  require "user_check.php";
  require "date.php";
  $data = array();
  $v = $_POST['v'];
  $y = $_POST['y'];
  $m = $_POST['m'];
  $w = $_POST['w'];
  $d = $_POST['d'];
  $calendar_stmt = $srbn_con->query("SELECT `b_stats_datetime` FROM `b_stats` WHERE `b_user_id`='$log_id' UNION SELECT `e_stats_datetime` FROM `e_stats` WHERE `e_user_id`='$log_id'");
  $calendar_stmt->setFetchMode(PDO::FETCH_ASSOC);
  switch ($v) {
    case 'year':
    while ($calendar_row = $calendar_stmt->fetch()) {
      $day = date("Y", strtotime($calendar_row['b_stats_datetime']));
      if (!in_array($day,$data)) {
        array_push($data,$day);
      }
    }
      break;
    case 'month':
      # code...
      break;
    case 'week':
      # code...
      break;
    case 'day':
      # code...
      break;
  }
  // if (strlen($m) == 1) {
  //   $m = "0".$m;
  // }
  // $y = $_POST['y'];
  // $l = intval($_POST['l']);
  // $m_name = $month_arr[$m][$l];
  // $data = array();
  // $first_day = date("N", strtotime($y."-".$m."-01"));
  // $days_in_month = date("t", strtotime($y."-".$m));
  // array_push($data,$first_day,$days_in_month,$m_name);
  echo json_encode($data);
?>
