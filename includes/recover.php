<?php
  function getCode() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    global $randomString;
    $randomString = '';
    for ($i = 0; $i < 12; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  try {
    require_once 'db.php';
    require_once 'security.php';
    $e = protect($_POST['e']);
    $lang = $_POST['lang'];
    $hash = getCode();
    $dt = date("Y-m-d H:i:s");
    $query = $srbn_con->query("SELECT `id` FROM `users` WHERE `email`='$e'");
    if ($query->rowCount() > 0) {
      $to = "$e";
      $c_e = encrypt($e, $k);
      $from = "noreply@skwila.net";
      $subject = 'Modification de mot de passe';
      if ($lang == "ar") {
        $message = '<html><body><div>لقد توصلنا بطلب لتحديث الرمز السري لمستخدم هذا البريد على موقع <a href="http://soroban.skwila.net">سوروبان</a>، اذا كان اﻷمر يتعلق بكم المرجو الضغط <a href="http://soroban.skwila.net/'.$lang.'/recover.php?e='.$c_e.'&hash='.$hash.'">هنا</a></div></body></html>';
      }
      if ($lang == "fr") {
        $message = '<html><body><div>Nous avons reçu une demande de modification de mot de passe du compte associé a cet email sur notre site <a href="http://soroban.skwila.net">SOROBAN</a>, si c\'est bien vous, veuillez <a href="http://soroban.skwila.net/'.$lang.'/recover.php?e='.$c_e.'&hash='.$hash.'">cliquez ici</a></div></body></html>';
      }
      if ($lang == "en") {
        $message = '<html><body><div>We have recieved a request for a password recovery of an account using this email in our website <a href="http://soroban.skwila.net">SOROBAN</a>, if you did send this request please <a href="http://soroban.skwila.net/'.$lang.'/recover.php?e='.$c_e.'&hash='.$hash.'">click here</a></div></body></html>';
      }
      $headers = "From: $from\n";
      $headers .= "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/html; charset=utf-8\n";
      mail($to, $subject, $message, $headers);
      echo "done";
    } else {
      echo "fake";
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
