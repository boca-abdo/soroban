<?php
include "../includes/db.php";
$update_best = $srbn_con->query("UPDATE `users` SET `b_points`='0', `e_points`='0'");
?>
