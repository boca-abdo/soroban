<?php
  try {
    require_once 'db.php';
    require_once 'security.php';
    $name = protect($_POST['name']);
    $e = protect($_POST['e']);
    $msg = protect($_POST['msg']);
    $dt = date("Y-m-d H:i:s");
    $query = $srbn_con->prepare("INSERT INTO `newsletter` (`email`,`full_name`,`message`,`msg_date`) VALUES (?,?,?,?)");
    $query->bindParam(1, $e, PDO::PARAM_STR);
    $query->bindParam(2, $name, PDO::PARAM_STR);
    $query->bindParam(3, $msg, PDO::PARAM_STR);
    $query->bindParam(4, $dt, PDO::PARAM_STR);
    $query->execute();
    echo "done";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
?>
