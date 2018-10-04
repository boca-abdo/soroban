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
<html lang="en" dir="ltr">
<head>
	<title>SOROBAN ONLINE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/fav.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/lessons.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
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
  <div class="navbar fixed-top justify-content-between text-uppercase bg-dark p-0" style="z-index: 5005">
		<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="index.php" style="box-shadow:none"><i class="fas fa-home"></i></a>
		<ul class="nav p-0">
			<li class="nav-item">
				<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="dashboard.php" style="box-shadow:none"><i class="fas fa-list-ol mr-md-2"></i><span class="d-none d-md-inline">ranking</span></a>
			</li>
			<!-- <li class="nav-item">
				<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="stats.php" style="box-shadow:none"><i class="fas fa-chart-pie mr-md-2"></i><span class="d-none d-md-inline">stats</span></a>
			</li> -->
			<li class="nav-item">
				<div class="dropdown open">
		      <button class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow:none"><i class="fas fa-graduation-cap mr-md-2"></i><span class="d-none d-md-inline text-uppercase">lessons</span></button>
		      <div class="dropdown-menu bg-dark rounded-0 text-center p-0" aria-labelledby="dropdownMenu1" style="left: -120px;z-index: 9999">
		        <a class="dropdown-item" href="history.php">SOROBAN?</a>
		        <a class="dropdown-item" href="repr.php">Representation</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="practice1.php">Practice 1</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="simple_add.php">simple addition</a>
		        <a class="dropdown-item" href="simple_sub.php">simple subtraction</a>
		        <a class="dropdown-item" href="mob5_add.php">complement of 5 - addition -</a>
		        <a class="dropdown-item" href="mob10_add.php">complement of 10 - addition -</a>
		        <a class="dropdown-item" href="mob105_add.php">complement of 5 and 10 - addition -</a>
		        <a class="dropdown-item" href="mob5_sub.php">complement of 5 - subtraction -</a>
		        <a class="dropdown-item" href="mob10_sub.php">complement of 10 - subtraction -</a>
		        <a class="dropdown-item" href="mob105_sub.php">complement of 5 and 10 - subtraction -</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="practice2.php">Practice 2</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="mul1.php">multiplication 1</a>
		        <a class="dropdown-item" href="mul2.php">multiplication 2</a>
		        <a class="dropdown-item" href="division.php">division</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="practice3.php">Practice 3</a>
		        <div class="dropdown-divider m-0"></div>
		        <a class="dropdown-item" href="certificate.php">certificate</a>
		      </div>
		    </div>
			</li>
			<li class="nav-item">
				<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="challenge.php" style="box-shadow:none"><i class="fas fa-stopwatch mr-md-2"></i><span class="d-none d-md-inline">Challenge</span></a>
			</li>
		</ul>
		<div class="dropdown open">
			<button class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow:none"><img src="<?php echo $path; ?>" alt="avatar" width="25" height="25" class="rounded-circle"></button>
			<div class="dropdown-menu bg-dark rounded-0 text-left p-0" aria-labelledby="dropdownMenu2" style="left: -120px;z-index: 9999">
				<a class="dropdown-item" href="profile.php"><i class="fas fa-user mr-2"></i>profile</a>
				<a class="dropdown-item" href="../include/logout.php?q=en"><i class="fas fa-power-off mr-2"></i>logout</a>
			</div>
		</div>
  </div>
	<div class="row no-gutters h-100 justify-content-center p-0 pt-5">
		<div class="col-12 align-self-top">
      <div class="container text-center">
				<a href="index.php"><img src="../images/logo.png" class="img-fluid" alt="Soroban logo"></a>
