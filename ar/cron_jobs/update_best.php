<?php
include "../includes/db.php";
$update_best = mysqli_query($con,"UPDATE users SET b_points='0', e_points='0'");
?>