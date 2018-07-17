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
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/animate.css">
	<link rel="stylesheet" href="../../css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/lessons.css">
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/popper.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/abacus.js"></script>
</head>
<body class="bg-warning text-dark">
  <?php include 'assets/menu.php' ?>
	<div class="row no-gutters h-100 justify-content-center p-0 pt-5">
		<div class="col-12 align-self-top">
      <div class="container text-center">
        <h1 class="h1">تدرب على المبادلات</h1>
        <hr>
        <div class="row justify-content-center mt-5">
          <div class="col sm-6 col-lg-3">
            <label for="">نوع التمرين</label>
            <select class="custom-select custom-select-sm w-100 pt-0 background-transparent rounded-0 border border-dark" name="">
							<option value="simple_add" selected="selected">الجمع البسيط</option>
							<option value="simple_sub">الطرح البسيط</option>
							<option value="mob5_add">المبادلة بخمسة في الجمع</option>
							<option value="mob5_sub">المبادلة بخمسة في الطرح</option>
							<option value="mob10_add">المبادلة بعشرة في الجمع</option>
							<option value="mob10_sub">المبادلة بعشرة في الطرح</option>
							<option value="mob105_add">المبادلة بخمسة وعشرة في الجمع</option>
              <option value="mob105_sub">المبادلة بخمسة وعشرة في الطرح</option>
              <option value="all">تمارين عشوائية</option>
            </select>
          </div>
          <div class="col-sm-6 col-lg-3">
            <label for="">عدد اﻷرقام</label>
            <select class="custom-select custom-select-sm w-100 pt-0 background-transparent rounded-0 border border-dark" name="">
              <option selected="selected">3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>
          <div class="w-100"></div>
          <div class="col-lg-4 pt-5">
						<div class="row no-gutters justify-content-center h1 font-weight-bold">
							<div class="nbr1 col-auto animated flash infinite">
								<span></span><span></span><span></span>
							</div>
							<div class="nbr2 col-auto">
								<i class="fas fa-plus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span>
							</div>
						</div>
          </div>
          <div class="w-100"></div>
          <div class="col-lg-6 pt-5" style="">
            <div id="abacus" class="my-3 mr-sm-5" style="height: 143px;overflow: hidden"></div>
          </div>
          <div class="w-100"></div>
          <div class="col-sm-6 col-md-3 col-lg-2 mt-3">
            <button type="button" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">تحقق<i class="fas fa-check mr-2"></i></button>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-2 mt-3">
            <button type="button" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">تغيير العدد<i class="fas fa-redo mr-2"></i></button>
          </div>
          <div class="w-100 pt-3"></div>
        </div>
				<hr>
			</div>
		</div>
		<?php include '../assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
      var num;
      $tab = $(".container");
      rule = $("select:first").val();
      num = Number($("select:last").val());
      createAbacus(9);
      getNumber1();
      $("select:first").change(function() {
        rule = $(this).val();
        getNumber1();
      });
      $("select:last").change(function() {
        num = $(this).val();
				$(".nbr1,.nbr2").find("span").remove();
				i = 0;
				while (i < num) {
					$(".nbr1,.nbr2").append("<span></span>");
					i++;
				}
        getNumber1();
      });
			$tab.on("click", "button:last", function(){
				resetAbacus();
        getNumber1();
			});
			$tab.on("click", "button:first", function(){
				if (countAbacus() == res) {
          $tab.find(".w-100:last").html("<i class='far fa-smile fa-5x animated zoomIn'></i>");
          setTimeout(function(){
						$tab.find(".w-100:last").html("");
						resetAbacus();
						getNumber1();
					},1000);
        } else {
          $tab.find(".w-100:last").html("<i class='far fa-frown fa-5x animated zoomIn'></i>");
          setTimeout(function(){
						$tab.find(".w-100:last").html("");
						resetAbacus();
						getNumber1();
					},1000);
        }
			});
			$("body").on("keypress", function(event){
				keyCode = (event.keyCode ? event.keyCode : event.which);
				if (keyCode == 13) {
          if (countAbacus() == res) {
            $tab.find(".w-100:last").html("<i class='far fa-smile fa-5x animated zoomIn'></i>");
            setTimeout(function(){
							$tab.find(".w-100:last").html("");
							resetAbacus();
							getNumber1();
						},1000);
          } else {
            $tab.find(".w-100:last").html("<i class='far fa-frown fa-5x animated zoomIn'></i>");
            setTimeout(function(){
							$tab.find(".w-100:last").html("");
							resetAbacus();
							getNumber1();
						},1000);
          }
				}
			});
		});
  </script>
</body>
</html>
