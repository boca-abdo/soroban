<?php
include "../includes/db.php";
$update_best = mysqli_query($con,"UPDATE counter SET counts='0'");
?>