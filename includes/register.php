<?php
  require_once 'db.php';
  require_once 'security.php';
  if (!filter_var($_POST['e'], FILTER_VALIDATE_EMAIL)) {
    echo "email";
    $srbn_con = null;
    exit();
  }
  if (strlen($_POST['p']) < 6) {
    echo "pass";
    $srbn_con = null;
    exit();
  }
  $e = strtolower(protect($_POST['e']));
  $check_stmt = $srbn_con->prepare("SELECT `id` FROM `users` WHERE `email`=?");
  $check_stmt->bindParam(1, $e, PDO::PARAM_STR);
  try {
    $check_stmt->execute();
    if ($check_stmt->rowCount() > 0) {
        echo "dup";
        $srbn_con = null;
        exit();
    }
  } catch (PDOException $err) {
    echo $err->getMessage();
    $srbn_con = null;
    exit();
  }
  $p = hashpass($_POST['p'],$salt);
  $fn = strtolower(protect($_POST['fn']));
  $ln = strtolower(protect($_POST['ln']));
  $ip = preg_replace('#[^0-9.]#', '', $_SERVER['REMOTE_ADDR']);
  $dt = date("Y-m-d H:i:s");
  $register_stmt = $srbn_con->prepare("INSERT INTO `users` (`email`,`password`,`ip`,`fname`,`lname`,`first_login`,`last_login`) VALUES (?,?,?,?,?,?,?)");
  $register_stmt->bindParam(1, $e, PDO::PARAM_STR);
  $register_stmt->bindParam(2, $p, PDO::PARAM_STR);
  $register_stmt->bindParam(3, $ip, PDO::PARAM_STR);
  $register_stmt->bindParam(4, $fn, PDO::PARAM_STR);
  $register_stmt->bindParam(5, $ln, PDO::PARAM_STR);
  $register_stmt->bindParam(6, $dt, PDO::PARAM_STR);
  $register_stmt->bindParam(7, $dt, PDO::PARAM_STR);
  try {
    $register_ex = $register_stmt->execute();
  } catch (PDOException $err) {
    echo $err->getMessage();
    $srbn_con = null;
    exit();
  }
  $last_id = $srbn_con->lastInsertId();
  $dir = $_SERVER['DOCUMENT_ROOT']."/"."users/".$last_id;
  if (!is_dir($dir)) {
    mkdir($dir,0755,true);
  }
  session_start();
  $_SESSION['srbn_id'] = $last_id;
  $_SESSION['email'] = $e;
  $_SESSION['password'] = $p;
  echo "success";
  $srbn_con = null;
?>
