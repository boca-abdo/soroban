<?php
  require_once 'db.php';
  require_once 'user_check.php';
  $m = intval($_POST['m']);
  $y = intval($_POST['y']);
  $l = date("t", strtotime($y."-".$m));
  $start = date("Y-m-d H:i:s", strtotime($y."-".$m."-01"));
  $end = date("Y-m-d H:i:s", strtotime($y."-".$m."-".$l));
  // var_dump($end);
  $data = array();
  try {
    $b_points_stmt = $srbn_con->query("SELECT `b_datetime` FROM `b_stats2` WHERE `b_user_id`='$log_id' AND `b_datetime` BETWEEN '$start' AND '$end'");
    // $b_points_stmt->bindParam(1, $log_id, PDO::PARAM_INT);
    // $b_points_stmt->bindParam(2, $y, PDO::PARAM_INT);
    // $b_points_stmt->bindParam(3, $m, PDO::PARAM_INT);
    // $b_points_stmt->bindParam(4, $log_id, PDO::PARAM_INT);
    // $b_points_stmt->bindParam(5, $y, PDO::PARAM_INT);
    // $b_points_stmt->bindParam(6, $m, PDO::PARAM_INT);
    // $b_points_stmt->execute();
    echo $b_points_stmt->rowCount();
    // if ($b_points_stmt->rowCount() > 0) {
    //   $b_points_stmt->setFetchMode(PDO::FETCH_ASSOC);
    //   $b_points_row = $b_points_stmt->fetch();
    //   // if (!in_array($b_points_row['b_stats_day_number'],$data)) {
    //     array_push($data,$b_points_row['b_stats_day_number']);
    //   // }
    // }
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
  // echo json_encode($data);
?>
