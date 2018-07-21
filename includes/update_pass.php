<?php
  require_once 'db.php';
  require_once 'security.php';
  $e = $_POST['e'];
  $p = hashpass($_POST['p'], $salt);
  $query = $srbn_con->query("SELECT * FROM `recovery` WHERE `email`='$e'");
  if ($query->rowCount() > 0) {
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $row = $query->fetch();
    $id = $row['id'];
    $today = date("Y-m-d H:i:s");
    $diff = round((strtotime($today) - strtotime($row['rec_datetime']))/(60*60));
    if ($diff < 24) {
      $update = $srbn_con->prepare("UPDATE `users` SET `password`=? WHERE `email`=?");
      $update->bindParam(1, $p, PDO::PARAM_STR);
      $update->bindParam(2, $e, PDO::PARAM_STR);
      if ($update->execute()) {
        $delete = $srbn_con->query("DELETE FROM `recovery` WHERE `id`='$id'");
        session_destroy();
        unset($_COOKIE['srbn_id']);
    		unset($_COOKIE['password']);
    		unset($_COOKIE['email']);
    		setcookie('srbn_id', null, -1, '/');
    		setcookie('password', null, -1, '/');
    		setcookie('email', null, -1, '/');
        echo "done";
      }
    }
  }
?>
