<?php
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
  throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");


header('Content-type: text/html; charset=utf-8');


  try {
    include 'include/db.php';

  } catch (Exception $e) {
    echo $e-getMessage();
  }
  $from = 0;
  $data = array();
  $query = $srbn_con->query("SELECT DISTINCT `fname`,`lname`,`points`,`city`,`teacher` FROM `users` WHERE `points` > 0 ORDER BY 3 DESC LIMIT $from, 9");
  $query->setFetchMode(PDO::FETCH_ASSOC);
  while ($row = $query->fetch()) {
    $from++;
    $data[$from] = array();
    array_push($data[$from],$row['fname'],$row['lname'],$row['city'],$row['teacher'],$row['points']);
    array_push($data,$data[$from]);
  }
$data = array_map("unserialize", array_unique(array_map("serialize", $data)));
var_dump($data);
?>
