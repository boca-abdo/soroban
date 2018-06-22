<?php
	try {
		$srbn_con = new PDO("mysql:host=localhost;dbname=soroban;charset=utf8", "root", "");
		$srbn_con->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
		$srbn_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
	} catch(PDOException $err) {
	    echo $err->getMessage();
	}
	date_default_timezone_set("Etc/GMT-1");
  // date_default_timezone_set("Etc/GMT");
?>
