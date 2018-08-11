<?php
	include "db.php";
	$query = $srbn_con->query("SELECT * FROM counter");
	$query->setFetchMode(PDO::FETCH_ASSOC);
	while ($row = $query->fetch()){
		$current_counts = $row["counts"];
		$current_m_counts = $row["m_counts"];
		$current_t_counts = $row["t_counts"];
		$new_counts = $current_counts+1;
		$new_m_counts = $current_m_counts+1;
		$new_t_counts = $current_t_counts+1;
		$update = $srbn_con->query("UPDATE counter SET counts='$new_counts', m_counts='$new_m_counts', t_counts='$new_t_counts'");
	}
?>
