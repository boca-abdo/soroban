<?php
	include '../include/user_check.php';
	include '../include/date.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("location: auth.php");
		exit();
	}
	$path = "../users/".$log_id."/avatar.jpg";
	if (!file_exists($path)) {
		$path = "../images/avatar.png";
	}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>موقع سوروبان</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/fav.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/lessons.css">
	<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<script src="../js/abacus.js"></script>
	<script src="../js/series.js"></script>
	<script src="../js/Chart.min.js"></script>
	<script src="../js/jquery.countdown.min.js"></script>
</head>
<body class="bg-warning text-dark">
	<div id="bluestatic" class="position-fixed d-none bg-warning text-dark justify-content-center align-items-center" style="height:100vh;width:100vw;z-index:5001">
		<div class="container" style="overflow: auto">
			<div class="row justify-content-center">
				<div id="tv" class="w-100 text-center font-weight-bold">
				</div>
				<div class="col-6 py-md-5">
					<div id="prog" class="bg-light" style="width: 0; height:10px"></div>
				</div>
			</div>
		</div>
	</div>
	<?php include '../assets/spinner.php' ?>
  <div class="navbar fixed-top justify-content-between bg-dark p-0" style="z-index: 5005">
		<div class="dropdown open float-left">
			<button class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow:none"><img src="<?php echo $path; ?>" alt="avatar" width="25" height="25" class="rounded-circle"></button>
			<div class="dropdown-menu bg-dark rounded-0 text-right p-0" aria-labelledby="dropdownMenu2" style="left: -120px;z-index: 9999">
				<a class="dropdown-item" href="profile.php"><i class="fas fa-user ml-2"></i>معلوماتي</a>
				<a class="dropdown-item" href="../include/logout.php?q=ar"><i class="fas fa-power-off ml-2"></i>تسجيل الخروج</a>
			</div>
		</div>
		<ul class="nav p-0">
			<li class="nav-item">
				<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="dashboard.php" style="box-shadow:none"><span class="d-none d-md-inline">مركزي</span><i class="fas fa-list-ol mr-md-2"></i></a>
			</li>
			<!-- <li class="nav-item">
				<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="stats.php" style="box-shadow:none"><span class="d-none d-md-inline">ارقامي</span><i class="fas fa-chart-pie mr-md-2"></i></a>
			</li> -->
			<li class="nav-item">
				<div class="dropdown open">
		      <button class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow:none"><span class="d-none d-md-inline">دروسي</span><i class="fas fa-graduation-cap mr-md-2"></i></button>
		      <div class="dropdown-menu bg-dark rounded-0 text-center p-0" aria-labelledby="dropdownMenu1" style="left: -120px;z-index: 9999">
		        <a class="dropdown-item" href="history.php">ماهو سوروبان؟</a>
		        <a class="dropdown-item" href="repr.php">تمثيل اﻷعداد</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="practice1.php">تدريب تمثيل اﻷعداد</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="simple_add.php">الجمع البسيط</a>
		        <a class="dropdown-item" href="simple_sub.php">الطرح البسيط</a>
		        <a class="dropdown-item" href="mob5_add.php">المبادلة بخمسة في الجمع</a>
		        <a class="dropdown-item" href="mob10_add.php">المبادلة بعشرة في الجمع</a>
		        <a class="dropdown-item" href="mob105_add.php">المبادلة بخمسة وعشرة في الجمع</a>
		        <a class="dropdown-item" href="mob5_sub.php">المبادلة بخمسة في الطرح</a>
		        <a class="dropdown-item" href="mob10_sub.php">المبادلة بعشرة في الطرح</a>
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
		        <a class="dropdown-item" href="certificate.php">تحميل الشهادة</a>
		      </div>
		    </div>
			</li>
			<li class="nav-item">
				<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="challenge.php" style="box-shadow:none"><span class="d-none d-md-inline">التحدي</span><i class="fas fa-stopwatch mr-md-2"></i></a>
			</li>
		</ul>
    <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 float-left" href="index.php" style="box-shadow:none"><i class="fas fa-home"></i></a>
  </div>
	<div class="row no-gutters h-100 justify-content-center p-0 pt-5">
		<div class="col-12 align-self-top">
      <div class="container text-center">
				<a href="index.php"><img src="../images/logo.png" class="img-fluid" alt="Soroban logo"></a>
				<div class="w-100 text-center p-3">
					<!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					soroban_pub
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-9602705169757138"
					     data-ad-slot="8304940901"
					     data-ad-format="link"
					     data-full-width-responsive="true"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script> -->
				</div>
