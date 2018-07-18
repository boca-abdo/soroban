<?php
	include '../../includes/user_check.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("location: ../auth.php");
	}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>موقع سوروبان</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../images/fav.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/lessons.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="../../js/abacus.js"></script>
</head>
<body class="bg-warning text-dark">
	<?php include '../../assets/spinner.php' ?>
  <div class="navbar fixed-top justify-content-between bg-dark p-0" style="z-index: 5005">
    <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="../dashboard.php" style="box-shadow:none"><i class="fas fa-home"></i></a>
    <div class="dropdown open">
      <button class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow:none"><i class="fas fa-list-ol"></i></button>
      <div class="dropdown-menu bg-dark rounded-0 text-center p-0" aria-labelledby="dropdownMenu1" style="left: -120px;z-index: 9999">
        <a class="dropdown-item" href="index.php">ماهو سوروبان؟</a>
        <a class="dropdown-item" href="repr.php">تمثيل اﻷعداد</a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item" href="practice1.php">تدريب تمثيل اﻷعداد</a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item" href="simple_add.php">الجمع البسيط</a>
        <a class="dropdown-item" href="simple_sub.php">الطرح البسيط</a>
        <a class="dropdown-item" href="mob5_add.php">المبادلة بخمسة في الجمع</a>
        <a class="dropdown-item" href="mob5_sub.php">المبادلة بخمسة في الطرح</a>
        <a class="dropdown-item" href="mob10_add.php">المبادلة بعشرة في الجمع</a>
        <a class="dropdown-item" href="mob10_sub.php">المبادلة بعشرة في الطرح</a>
        <a class="dropdown-item" href="mob105_add.php">المبادلة بخمسة وعشرة في الجمع</a>
        <a class="dropdown-item" href="mob105_sub.php">المبادلة بخمسة وعشرة في الطرح</a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item" href="practice2.php">تدريب المبادلات</a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item" href="mul1.php">الضرب - الطريقة 1 -</a>
        <a class="dropdown-item" href="mul2.php">الضرب - الطريقة 2 -</a>
        <a class="dropdown-item" href="division.php">القسمة</a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item" href="practice3.php">تدريب السرعة</a>
        <div class="dropdown-divider m-0"></div>
        <a class="dropdown-item bg-danger" href="certificate.php">تحميل الشهادة</a>
      </div>
    </div>
    <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="../../includes/logout.php?q=ar" style="box-shadow:none"><i class="fas fa-power-off"></i></a>
  </div>
