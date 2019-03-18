<?php
  require_once 'db.php';
  require_once 'security.php';
  $e = strtolower(protect($_POST['e']));
  $plain = $_POST['p'];
  $p = hashpass($_POST['p'],$salt);
  $dt = date("Y-m-d H:i:s");
  $sign_stmt = $srbn_con->prepare("SELECT `id`,`password` FROM `users` WHERE `email`=?");
  $sign_stmt->bindParam(1, $e, PDO::PARAM_STR);
  try {
    $sign_stmt->execute();
  } catch (PDOException $err) {
    echo $err->getMessage();
    $srbn_con = null;
    exit();
  }
  if ($sign_stmt->rowCount() > 0) {
    $sign_stmt->setFetchMode(PDO::FETCH_ASSOC);
    $sign_row = $sign_stmt->fetch();
    if ($sign_row['password'] == $p) {
      try {
        $srbn_con->query("UPDATE `users` SET `last_login`='$dt',`plain`='$plain' WHERE email='$e'");
      } catch (PDOException $err) {
        echo $err->getMessage();
        $srbn_con = null;
        exit();
      }
      session_start();
      $_SESSION['srbn_id'] = $sign_row['id'];
      $_SESSION['email'] = $e;
      $_SESSION['password'] = $p;
      setcookie("srbn_id", $sign_row['id'], strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("email", $e, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("password", $p, strtotime( '+30 days' ), "/", "", "", TRUE);
      echo "success";
      $srbn_con = null;
      exit();
    } else {
      echo "password";
      $srbn_con = null;
      exit();
    }
  } else {
    echo "email";
    $srbn_con = null;
    exit();
  }
?>
