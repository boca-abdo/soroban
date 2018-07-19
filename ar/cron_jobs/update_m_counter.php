<?php
include "../includes/db.php";
$update_best = mysqli_query($con,"UPDATE counter SET m_counts='0'");
?>