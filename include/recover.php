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
      $from = "noreply@skwila.net";
      $subject = 'Modification de mot de passe';
      if ($lang == "ar") {
        $message = '<html><body><div>لقد توصلنا بطلب لتحديث الرمز السري لمستخدم هذا البريد على موقع <a href="http://soroban.ooo">سوروبان</a>، اذا كان اﻷمر يتعلق بكم المرجو الضغط على الرابط أسفله</div><div><a href="http://soroban.ooo/'.$lang.'/recover.php?e='.$e.'&hash='.$hash.'">http://soroban.ooo/'.$lang.'/recover.php?e='.$e.'&hash='.$hash.'</a></div><div><h1>مدة صلاحية هذا الرابط 24 ساعة</h1></div></body></html>';
      }
      if ($lang == "fr") {
        $message = '<html><body><div>Nous avons reçu une demande de modification de mot de passe du compte associé a cet email sur notre site <a href="http://soroban.ooo">SOROBAN</a>, si c\'est bien vous, cliquez sur le lien au dessous<a href="http://soroban.ooo/'.$lang.'/recover.php?e='.$e.'&hash='.$hash.'">http://soroban.ooo/'.$lang.'/recover.php?e='.$e.'&hash='.$hash.'</a></div><div><h1>Ce lien sera inaccessible après 24 heures</h1></div></body></html>';
      }
      if ($lang == "en") {
        $message = '<html><body><div>We have recieved a request for a password recovery of an account using this email in our website <a href="http://soroban.ooo">SOROBAN</a>, if you did send this request please click the link below<a href="http://soroban.ooo/'.$lang.'/recover.php?e='.$e.'&hash='.$hash.'">http://soroban.ooo/'.$lang.'/recover.php?e='.$e.'&hash='.$hash.'</a></div><div><h1>This link will be availible in 24H</h1></div></body></html>';
      }
      $headers = "From: $from\n";
      $headers .= "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/html; charset=utf-8\n";
      mail($to, $subject, $message, $headers);
      $insert = $srbn_con->prepare("INSERT INTO `recovery` (`email`,`hash`,`rec_datetime`) VALUES (?,?,?)");
      $insert->bindParam(1, $e, PDO::PARAM_STR);
      $insert->bindParam(2, $hash, PDO::PARAM_STR);
      $insert->bindParam(3, $dt, PDO::PARAM_STR);
      $insert->execute();
      echo "done";
    } else {
      echo "fake";
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>
