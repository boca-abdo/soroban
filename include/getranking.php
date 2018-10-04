<?php
  include 'user_check.php';
  $from = intval(protect($_POST['from']));
  $data = array();
  $query = $srbn_con->query("SELECT DISTINCT `fname`,`lname`,`points`,`city`,`teacher` FROM `users` WHERE `points` > 0 ORDER BY 3 DESC LIMIT $from, 10");
  $query->setFetchMode(PDO::FETCH_ASSOC);
  while ($row = $query->fetch()) {
    $from++;
    $data[$from] = array();
    array_push($data[$from],$row['fname'],$row['lname'],$row['city'],$row['teacher'],$row['points']);
    array_push($data,$data[$from]);
  }
  $data = array_map("unserialize", array_unique(array_map("serialize", $data)));
  echo json_encode($data, true);
?>
