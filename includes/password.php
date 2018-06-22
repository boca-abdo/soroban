<?php
  include 'user_check.php';
  $old = hashpass($_POST['old'],$salt);
  $p = hashpass($_POST['p'],$salt);
  if (strlen($_POST['p']) < 6) {
    echo "short";
    $srbn_con = null;
    exit();
  }
  if ($log_p != $old) {
    echo "old";
    $srbn_con = null;
    exit();
  }
  try {
    $stmt = $srbn_con->prepare("UPDATE users SET password=? WHERE id=? AND email=? AND password=?");
    $stmt->bindParam(1, $p, PDO::PARAM_STR);
    $stmt->bindParam(2, $log_id, PDO::PARAM_INT);
    $stmt->bindParam(3, $log_e, PDO::PARAM_STR);
    $stmt->bindParam(4, $log_p, PDO::PARAM_STR);
    $stmt->execute();
    session_destroy();
    session_start();
    $_SESSION['srbn_id'] = $log_id;
    $_SESSION['email'] = $log_e;
    $_SESSION['password'] = $p;
    setcookie("srbn_id", $log_id, strtotime( '+30 days' ), "/", "", "", TRUE);
    setcookie("email", $log_e, strtotime( '+30 days' ), "/", "", "", TRUE);
    setcookie("password", $p, strtotime( '+30 days' ), "/", "", "", TRUE);
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>
