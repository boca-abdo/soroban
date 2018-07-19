<?php
include "../includes/db.php";
$update_best = $srbn_con->query("UPDATE `counter` SET `m_counts`='0'");
?>
