<?php
  require "date.php";
  $m = $_POST['m'];
  if (strlen($m) == 1) {
    $m = "0".$m;
  }
  $y = $_POST['y'];
  $l = intval($_POST['l']);
  $m_name = $month_arr[$m][$l];
  $data = array();
  $first_day = date("N", strtotime($y."-".$m."-01"));
  $days_in_month = date("t", strtotime($y."-".$m));
  array_push($data,$first_day,$days_in_month,$m_name);
  echo json_encode($data);
?>
