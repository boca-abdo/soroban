<?php
  require_once 'db.php';
  require_once 'security.php';
  function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  }
  set_error_handler("exception_error_handler");
  try {
    $dt = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $gg_id = $_POST['id'];
    $gg_email = protect(strtolower($_POST['e']));
    $fn = protect(strtolower($_POST['fn']));
    $ln = protect(strtolower($_POST['ln']));
    $url = $_POST['pic'];
    $gg_stmt = $srbn_con->prepare("SELECT `id`,`gg_id`,`password` FROM `users` WHERE `email`=? LIMIT 1");
    $gg_stmt->bindParam(1, $gg_email, PDO::PARAM_STR);
    $gg_stmt->execute();
    if ($gg_stmt->rowCount() > 0) {
      $gg_stmt->setFetchMode(PDO::FETCH_ASSOC);
      $gg_row = $gg_stmt->fetch();
      if ($gg_row['gg_id'] === null) {
        $update_stmt = $srbn_con->prepare("UPDATE `users` SET `last_login`=?,`gg_id`=? WHERE `email`=?");
        $update_stmt->bindParam(1, $dt, PDO::PARAM_STR);
        $update_stmt->bindParam(2, $gg_id, PDO::PARAM_INT);
        $update_stmt->bindParam(3, $gg_email, PDO::PARAM_STR);
        $update_stmt->execute();
        session_start();
        $_SESSION['srbn_id'] = $gg_row['id'];
        $_SESSION['email'] = $gg_email;
        $_SESSION['password'] = $gg_row['password'];
        setcookie("srbn_id", $gg_row['id'], strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("email", $gg_email, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("password", $gg_row['password'], strtotime( '+30 days' ), "/", "", "", TRUE);
        echo "done";
      } elseif ($gg_row['gg_id'] != $gg_id) {
        echo "missmatch";
      }
    } else {
      $insert_stmt = $srbn_con->prepare("INSERT INTO `users` (`gg_id`,`email`,`ip`,`fname`,`lname`,`first_login`,`last_login`) VALUES (?,?,?,?,?,?,?)");
      $insert_stmt->bindParam(1, $gg_id, PDO::PARAM_INT);
      $insert_stmt->bindParam(2, $gg_email, PDO::PARAM_STR);
      $insert_stmt->bindParam(3, $ip, PDO::PARAM_STR);
      $insert_stmt->bindParam(4, $fn, PDO::PARAM_STR);
      $insert_stmt->bindParam(5, $ln, PDO::PARAM_STR);
      $insert_stmt->bindParam(6, $dt, PDO::PARAM_STR);
      $insert_stmt->bindParam(7, $dt, PDO::PARAM_STR);
      $insert_stmt->execute();
      $last_id = $srbn_con->lastInsertId();
      $user_dir = $_SERVER['DOCUMENT_ROOT']."/"."users/".$last_id;
      if (is_dir($user_dir) !== true) {
        mkdir($user_dir,0755,true);
      }
      $img = $user_dir.'/avatar.jpg';
      file_put_contents($img, file_get_contents($url));
      session_start();
      $_SESSION['srbn_id'] = $last_id;
      $_SESSION['email'] = $gg_email;
      $_SESSION['password'] = '';
      setcookie("srbn_id", $last_id, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("email", $gg_email, strtotime( '+30 days' ), "/", "", "", TRUE);
      setcookie("password", '', strtotime( '+30 days' ), "/", "", "", TRUE);
      echo "done";
    }
  } catch (Exception $err) {
    echo $err->getMessage();
  }
?>
