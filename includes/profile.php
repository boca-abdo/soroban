<?php
  require_once 'user_check.php';
  $fn = protect(strtolower($_POST['fn']));
  $fn = preg_replace('/[0-9]/', '', $fn);
  $ln = protect(strtolower($_POST['ln']));
  $ln = preg_replace('/[0-9]/', '', $ln);
  $ad = protect(strtolower($_POST['ad']));
  $ct = protect($_POST['ct']);
  $tl = preg_replace('/[^0-9]/', '', $_POST['tl']);
  $tt = protect(strtolower($_POST['tt']));
  $tt = preg_replace('/[0-9]/', '', $tt);
  $bd = date("Y-m-d", strtotime($_POST['bd']));
  try {
    $update_stmt = $srbn_con->prepare("UPDATE `users` SET `fname`=?,`lname`=?,`adress`=?,`city`=?,`tel`=?,`teacher`=?,`b_date`=? WHERE `id`=? AND `email`=? AND `password`=?");
    $update_stmt->bindParam(1, $fn, PDO::PARAM_STR);
    $update_stmt->bindParam(2, $ln, PDO::PARAM_STR);
    $update_stmt->bindParam(3, $ad, PDO::PARAM_STR);
    $update_stmt->bindParam(4, $ct, PDO::PARAM_STR);
    $update_stmt->bindParam(5, $tl, PDO::PARAM_STR);
    $update_stmt->bindParam(6, $tt, PDO::PARAM_STR);
    $update_stmt->bindParam(7, $bd, PDO::PARAM_STR);
    $update_stmt->bindParam(8, $log_id, PDO::PARAM_INT);
    $update_stmt->bindParam(9, $log_e, PDO::PARAM_STR);
    $update_stmt->bindParam(10, $log_p, PDO::PARAM_STR);
    $update_stmt->execute();
    echo "done";
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
?>
