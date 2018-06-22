<?php
  require_once 'db.php';
  require_once 'security.php';
  $dt = date("Y-m-d H:i:s");
  $p = hashpass("google",$salt);
  $ip = $_SERVER['REMOTE_ADDR'];
  $gg_id = $_POST['id'];
  $gg_email = protect(strtolower($_POST['e']));
  $fn = protect(strtolower($_POST['fn']));
  $ln = protect(strtolower($_POST['ln']));
  $url = $_POST['pic'];
  try {
    $gg_stmt = $srbn_con->prepare("SELECT `srbn_id`,`ggl_id`,`password` FROM `users` WHERE `email`=? LIMIT 1");
    $gg_stmt->bindParam(1, $gg_email, PDO::PARAM_STR);
    $gg_stmt->execute();
    if ($gg_stmt->rowCount() > 0) {
      $gg_stmt->setFetchMode(PDO::FETCH_ASSOC);
      $gg_row = $gg_stmt->fetch();
      if ($gg_row['ggl_id'] === null) {
        try {
          $update_stmt = $srbn_con->prepare("UPDATE `users` SET `last_login`=?,`ggl_id`=? WHERE `email`=?");
          $update_stmt->bindParam(1, $dt, PDO::PARAM_STR);
          $update_stmt->bindParam(2, $gg_id, PDO::PARAM_INT);
          $update_stmt->bindParam(3, $gg_email, PDO::PARAM_STR);
          $update_stmt->execute();
        } catch (PDOException $err) {
          $err->getMessage();
          $srbn_con = null;
          exit();
        }
      } else {
        if ($gg_row['ggl_id'] != $gg_id) {
          echo "missmatch";
          $srbn_con = null;
          exit();
        }
      }
      session_start();
      $_SESSION['srbn_id'] = $gg_row['srbn_id'];
      $_SESSION['email'] = $gg_email;
      $_SESSION['password'] = $gg_row['password'];
      setcookie("srbn_id", $gg_row['srbn_id'], strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("email", $gg_email, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("password", $gg_row['password'], strtotime( '+30 days' ), "/", "", "", TRUE);
    } else {
      try {
        $insert_stmt = $srbn_con->prepare("INSERT INTO `users` (`ggl_id`,`email`,`password`,`srbn_ip`,`fname`,`lname`,`first_login`,`last_login`) VALUES (?,?,?,?,?,?,?,?)");
        $insert_stmt->bindParam(1, $gg_id, PDO::PARAM_INT);
        $insert_stmt->bindParam(2, $gg_email, PDO::PARAM_STR);
        $insert_stmt->bindParam(3, $p, PDO::PARAM_STR);
        $insert_stmt->bindParam(4, $ip, PDO::PARAM_STR);
        $insert_stmt->bindParam(5, $fn, PDO::PARAM_STR);
        $insert_stmt->bindParam(6, $ln, PDO::PARAM_STR);
        $insert_stmt->bindParam(7, $dt, PDO::PARAM_STR);
        $insert_stmt->bindParam(8, $dt, PDO::PARAM_STR);
        $insert_stmt->execute();
      } catch (PDOException $err) {
        $err->getMessage();
        $srbn_con = null;
        exit();
      }
      try {
        $last_id = $srbn_con->lastInsertId();
        $user_dir = $_SERVER['DOCUMENT_ROOT']."/"."users/".$last_id;
        if (is_dir($user_dir) !== true) {
          mkdir($user_dir,0755,true);
          $img = $user_dir.'/avatar.jpg';
        }
      } catch (PDOException $err) {
        echo $err->getMessage();
        $srbn_con = null;
        exit();
      }
      try {
        file_put_contents($img, file_get_contents($url));
      } catch (PDOException $err) {
        echo $err->getMessage();
        $srbn_con = null;
        exit();
      }
      session_start();
      $_SESSION['srbn_id'] = $last_id;
      $_SESSION['email'] = $gg_email;
      $_SESSION['password'] = $p;
      setcookie("srbn_id", $last_id, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("email", $gg_email, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("password", $p, strtotime( '+30 days' ), "/", "", "", TRUE);
    }
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
  echo "done";
  $srbn_con = null;
?>
