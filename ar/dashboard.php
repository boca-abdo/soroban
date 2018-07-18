<?php
	include '../includes/user_check.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("location: auth.php");
	}
	$next_monday = date("Y-m-d", strtotime("Next monday"));
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
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.countdown.min.js"></script>
</head>
<body class="bg-warning text-dark">
  <div class="container" style="height: 100vh">
    <div class="navbar fixed-top justify-content-between bg-dark p-0">
      <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 float-left" href="index.php" style="box-shadow:none"><i class="fas fa-home"></i></a>
      <ul class="nav p-0">
        <li class="nav-item">
          <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 active" href="dashboard.php" style="box-shadow:none"><span class="d-none d-md-inline">مركزي</span><i class="fas fa-list-ol mr-md-2"></i></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="profile.php" style="box-shadow:none"><span class="d-none d-md-inline">معلوماتي</span><i class="fas fa-user mr-md-2"></i></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="stats.php" style="box-shadow:none"><span class="d-none d-md-inline">ارقامي</span><i class="fas fa-chart-pie mr-md-2"></i></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="lessons/index.php" style="box-shadow:none"><span class="d-none d-md-inline">دروسي</span><i class="fas fa-graduation-cap mr-md-2"></i></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="challenge.php" style="box-shadow:none"><span class="d-none d-md-inline">التحدي</span><i class="fas fa-stopwatch mr-md-2"></i></a>
        </li>
      </ul>
      <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 float-left" href="../includes/logout.php?q=ar" style="box-shadow:none"><i class="fas fa-power-off"></i></a>
    </div>
    <div class="row justify-content-center h-100">

			<div class="col-auto align-self-top pt-5 text-center">
				<a href="index.php"><img src="../images/logo.png" class="img-fluid" alt="Soroban logo"></a><br>
				<h2 class="h2">سينتهي هذا اﻷسبوع بعد</h2>
				<h5 class="h3 text-danger animated pulse infinite font-weight-bold" id="nextweek"></h3>
			</div>
			<div class="w-100"></div>
      <div class="col-md-6 align-self-center text-center pt-3">
        <div class="card bg-dark text-warning rounded-0">
          <div class="card-header">
						<h4 class="card-title">قسم المبتدئين</h4>
          </div>
          <div class="card-block" style="min-height:300px">
            <ul class="nav nav-tabs justify-content-center w-100 p-0" id="beginners-tab" role="tablist">
              <li class="nav-item w-50">
                <a class="btn btn-outline-warning active w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="week1-tab" data-toggle="tab" href="#week1" role="tab" aria-controls="week1" aria-selected="true" style="box-shadow:none">الترتيب الاسبوعي</a>
              </li>
              <li class="nav-item w-50">
                <a class="btn btn-outline-warning w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="all1-tab" data-toggle="tab" href="#all1" role="tab" aria-controls="all1" aria-selected="false" style="box-shadow:none">الترتيب العام</a>
              </li>
            </ul>
            <div class="tab-content p-3" id="beginners">
	            <div class="tab-pane fade show active" id="week1" role="tabpanel" aria-labelledby="week1-tab">
	              <table class="table table-sm table-hover table-bordered table-striped text-right">
	                <thead>
	                  <tr>
	                    <th>المركز</th>
	                    <th>العضو</th>
	                    <th>النقاط</th>
	                  </tr>
	                </thead>
	                <tbody></tbody>
	              </table>
	            </div>
	            <div class="tab-pane fade" id="all1" role="tabpanel" aria-labelledby="all-tab">
								<table class="table table-sm table-hover table-bordered table-striped text-right">
	                <thead>
	                  <tr>
	                    <th>المركز</th>
	                    <th>العضو</th>
	                    <th>النقاط</th>
	                  </tr>
	                </thead>
	                <tbody></tbody>
	              </table>
	            </div>
	          </div>
          </div>
					<div class="card-footer justify-content-center">
						<a href="challenge.php" class="btn btn-outline-warning rounded-0">دخول القسم<i class="fas fa-sign-in-alt mr-2"></i></a>
          </div>
        </div>
      </div>
			<div class="col-md-6 align-self-center text-center pt-3">
        <div class="card bg-dark text-warning rounded-0">
          <div class="card-header">
						<h4 class="card-title">قسم المتفوقين</h4>
          </div>
          <div class="card-block" style="min-height:300px">
            <ul class="nav nav-tabs justify-content-center w-100 p-0" id="experts-tab" role="tablist">
              <li class="nav-item w-50">
                <a class="btn btn-outline-warning active w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="week2-tab" data-toggle="tab" href="#week2" role="tab" aria-controls="week2" aria-selected="true" style="box-shadow:none">الترتيب الاسبوعي</a>
              </li>
              <li class="nav-item w-50">
                <a class="btn btn-outline-warning w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="all2-tab" data-toggle="tab" href="#all2" role="tab" aria-controls="all2" aria-selected="false" style="box-shadow:none">الترتيب العام</a>
              </li>
            </ul>
            <div class="tab-content p-3" id="experts">
	            <div class="tab-pane fade show active" id="week2" role="tabpanel" aria-labelledby="week2-tab">
	              <table class="table table-sm table-hover table-bordered table-striped text-right">
	                <thead>
	                  <tr>
	                    <th>المركز</th>
	                    <th>العضو</th>
	                    <th>النقاط</th>
	                  </tr>
	                </thead>
	                <tbody></tbody>
	              </table>
	            </div>
	            <div class="tab-pane fade" id="all2" role="tabpanel" aria-labelledby="all2-tab">
								<table class="table table-sm table-hover table-bordered table-striped text-right">
	                <thead>
	                  <tr>
	                    <th>المركز</th>
	                    <th>العضو</th>
	                    <th>النقاط</th>
	                  </tr>
	                </thead>
	                <tbody></tbody>
	              </table>
	            </div>
	          </div>
          </div>
          <div class="card-footer justify-content-center">
						<a href="challenge.php" class="btn btn-outline-warning rounded-0">دخول القسم<i class="fas fa-sign-in-alt mr-2"></i></a>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <?php include 'assets/footer.php' ?>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
			var username = "<?php echo $log_row['fname'].' '.$log_row['lname'] ?>",
			points = [];
			points["bw"] = <?php echo $log_row['b_points'] ?>;
			points["ew"] = <?php echo $log_row['e_points'] ?>;
			function getData(tbl,tbody) {
				$.ajax({
					url: "../includes/getlist.php",
					type: "POST",
					data: {
						tbl: tbl
					},
					error: function(stt,xhr,err) {
						console.log(err);
					},
					success: function(res) {
						var data = JSON.parse(res);
						for (var i = 0; i < data.length; i++) {
							tbody.append("<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td></tr>");
						}
					},
					complete: function() {
						row = tbody.find("tr");
						if (row.length == 4) {
							row.last().addClass("bg-warning text-dark").before("<tr><td colspan='3' class='text-center'>مركزك الحالي هو</td></tr>");
						}
						if (row.length == 0) {
							tbody.parent().after("<a class='text-warning animated bounceIn infinite' href='challenge.php'>كن أول من يسجل نقاطا هذا اﻷسبوع من هنا</a>");
						}
						if ((tbl == "bw" && row.length != 0) || (tbl == "ew" && row.length != 0)) {
							var names = "";
							row.each(function(){
								names += $(this).find("td:eq(1)").text();
							});
							if (names.search(username) == -1) {
								tbody.parent().after("<a class='text-warning animated bounceIn infinite' href='challenge.php'>سجل أول نقاطك لهذا اﻷسبوع من هنا</a>");
							} else {
								if (points[tbl] != 100) {
									tbody.parent().after("<a class='text-warning animated bounceIn infinite' href='challenge.php'>أحصل على نقاط أكثر من هنا</a>");
								}
							}
						}
					}
				});
			}
			getData("bw",$("tbody:eq(0)"));
			getData("bt",$("tbody:eq(1)"));
			getData("ew",$("tbody:eq(2)"));
			getData("et",$("tbody:eq(3)"));
			$("#nextweek").countdown("<?php echo $next_monday; ?>", function(event) {$(this).text(event.strftime('%D:%H:%M:%S'));});
    });
  </script>
</body>
</html>
