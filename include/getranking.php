<?php
  include 'user_check.php';
  $from = intval(protect($_POST['from']));
  $data = array();
  $query = $srbn_con->query("SELECT fname,lname,points FROM users WHERE points > 0 ORDER BY 3 DESC LIMIT $from, 9");
  $query->setFetchMode(PDO::FETCH_ASSOC);
  while ($row = $query->fetch()) {
    $from++;
    $data[$from] = array();
    array_push($data[$from],$row['fname'],$row['lname'],$row['points']);
    array_push($data,$data[$from]);
  }
  echo json_encode($data, true);
?>
