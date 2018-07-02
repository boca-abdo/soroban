<?php
  require_once 'db.php';
  require_once 'security.php';
  $dt = date("Y-m-d H:i:s");
  $p = hashpass("facebook",$salt);
  $ip = $_SERVER['REMOTE_ADDR'];
  $fb_id = $_POST['id'];
  $fb_email = protect(strtolower($_POST['email']));
  $fn = protect(strtolower($_POST['first_name']));
  $ln = protect(strtolower($_POST['last_name']));
  $gn = protect(strtolower($_POST['gender']));
  $lc = protect(strtolower($_POST['location']['name']));
  $bd = date("Y-m-d", strtotime($_POST['birthday']));
  $url = $_POST['picture']['data']['url'];
  try {
    $fb_stmt = $srbn_con->prepare("SELECT `id`,`fb_id`,`password` FROM `users` WHERE `email`=? LIMIT 1");
    $fb_stmt->bindParam(1, $fb_email, PDO::PARAM_STR);
    $fb_stmt->execute();
    if ($fb_stmt->rowCount() > 0) {
      $fb_stmt->setFetchMode(PDO::FETCH_ASSOC);
      $fb_row = $fb_stmt->fetch();
      if ($fb_row['fb_id'] === null) {
        try {
          $update_stmt = $srbn_con->prepare("UPDATE `users` SET `last_login`=?,`fb_id`=? WHERE `email`=?");
          $update_stmt->bindParam(1, $dt, PDO::PARAM_STR);
          $update_stmt->bindParam(2, $fb_id, PDO::PARAM_INT);
          $update_stmt->bindParam(3, $fb_email, PDO::PARAM_STR);
          $update_stmt->execute();
        } catch (PDOException $err) {
          $err->getMessage();
          $srbn_con = null;
          exit();
        }
      } else {
        if ($fb_row['fb_id'] != $fb_id) {
          echo "missmatch";
          $srbn_con = null;
          exit();
        }
      }
      session_start();
      $_SESSION['srbn_id'] = $fb_row['id'];
      $_SESSION['email'] = $fb_email;
      $_SESSION['password'] = $fb_row['password'];
      setcookie("srbn_id", $fb_row['srbn_id'], strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("email", $fb_email, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("password", $fb_row['password'], strtotime( '+30 days' ), "/", "", "", TRUE);
    } else {
      try {
        $insert_stmt = $srbn_con->prepare("INSERT INTO `users` (`fb_id`,`email`,`password`,`srbn_ip`,`fname`,`lname`,`gender`,`location`,`b_date`,`first_login`,`last_login`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $insert_stmt->bindParam(1, $fb_id, PDO::PARAM_INT);
        $insert_stmt->bindParam(2, $fb_email, PDO::PARAM_STR);
        $insert_stmt->bindParam(3, $p, PDO::PARAM_STR);
        $insert_stmt->bindParam(4, $ip, PDO::PARAM_STR);
        $insert_stmt->bindParam(5, $fn, PDO::PARAM_STR);
        $insert_stmt->bindParam(6, $ln, PDO::PARAM_STR);
        $insert_stmt->bindParam(7, $gn, PDO::PARAM_STR);
        $insert_stmt->bindParam(8, $lc, PDO::PARAM_STR);
        $insert_stmt->bindParam(9, $bd, PDO::PARAM_STR);
        $insert_stmt->bindParam(10, $dt, PDO::PARAM_STR);
        $insert_stmt->bindParam(11, $dt, PDO::PARAM_STR);
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
      $_SESSION['email'] = $fb_email;
      $_SESSION['password'] = $p;
      setcookie("srbn_id", $last_id, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("email", $fb_email, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("password", $p, strtotime( '+30 days' ), "/", "", "", TRUE);
    }
  } catch (PDOException $err) {
    echo $err->getMessage();
  }
  echo "done";
  $srbn_con = null;
?>
