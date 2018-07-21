<?php
  require_once 'db.php';
  require_once 'user_check.php';
  $data = array();
  $tbl = $_POST["tbl"];
  $lst = $_POST["lst"];
  switch ($tbl) {
    case 'bw':
      $sql = "SELECT * FROM `users` WHERE `b_points`>0 ORDER BY `b_points` DESC";
      break;
    case 'bt':
      $sql = "SELECT * FROM `users` WHERE `b_total`>0 ORDER BY `b_total` DESC";
      break;
    case 'ew':
      $sql = "SELECT * FROM `users` WHERE `e_points`>0 ORDER BY `e_points` DESC";
      break;
    case 'et':
      $sql = "SELECT * FROM `users` WHERE `e_total`>0 ORDER BY `e_total` DESC";
      break;
  }
  try {
    $stmt = $srbn_con->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $i = 1;
    while ($row = $stmt->fetch()){
      if ($lst == "nor") {
        if ($i < 4) {
          switch ($tbl) {
            case 'bw':
              $points = $row['b_points'];
              break;
            case 'bt':
              $points = $row['b_total'];
              break;
            case 'ew':
              $points = $row['e_points'];
              break;
            case 'et':
              $points = $row['e_total'];
              break;
          }
          array_push($data,array($i,$row['fname']." ".$row['lname'],$points));
        }
        if ($log_id == $row['id'] && $i > 3) {
          switch ($tbl) {
            case 'bw':
              $points = $row['b_points'];
              break;
            case 'bt':
              $points = $row['b_total'];
              break;
            case 'ew':
              $points = $row['e_points'];
              break;
            case 'et':
              $points = $row['e_total'];
              break;
          }
          array_push($data,array($i,$row['fname']." ".$row['lname'],$points));
        }
      }
      if ($lst == "mdl") {
        switch ($tbl) {
          case 'bw':
            $points = $row['b_points'];
            break;
          case 'bt':
            $points = $row['b_total'];
            break;
          case 'ew':
            $points = $row['e_points'];
            break;
          case 'et':
            $points = $row['e_total'];
            break;
        }
        array_push($data,array($i,$row['fname']." ".$row['lname'],$row['city'],$row['teacher'],$points));
      }
      $i++;
    }
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
  echo json_encode($data);
?>
