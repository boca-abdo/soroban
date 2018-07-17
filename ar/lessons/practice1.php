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
        <h1 class="h1">تدرب على تمثيل اﻷعداد</h1>
        <hr>
        <div class="row justify-content-center mt-5">
          <div class="col sm-6 col-lg-2">
            <label for="">نوع التمرين</label>
            <select class="custom-select custom-select-sm w-100 pt-0 background-transparent rounded-0 border border-dark" name="">
              <option value="read" selected="selected">قراءة تمثيل</option>
              <option value="repr">تمثيل عدد</option>
            </select>
          </div>
          <div class="col-sm-6 col-lg-2">
            <label for="">عدد اﻷرقام</label>
            <select class="custom-select custom-select-sm w-100 pt-0 background-transparent rounded-0 border border-dark" name="">
              <option selected="selected">3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select>
          </div>
          <div class="w-100"></div>
          <div class="col-lg-4 pt-5">
            <input class="form-control form-control-lg font-weight-bold rounded-0 background-transparent border border-dark border-top-0 border-right-0 border-left-0 text-center" type="text" placeholder="أكتب اجابتك هنا">
          </div>
          <div class="w-100"></div>
          <div class="col-lg-6 pt-5" style="">
            <div id="abacus" class="my-3 pr-sm-5" style="height: 143px;overflow: hidden"></div>
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
      var val,ex_type,func;
      $tab = $(".container");
      $input = $("input");
      ex_type = $("select:first").val();
      num = Number($("select:last").val());
      createAbacus(num);
      func = readAbacus;
      func();
      $("select:first").change(function() {
        ex_type = $(this).val();
        if (ex_type == "read") {
          func = readAbacus;
        }
        if (ex_type == "repr") {
          func = representNumber;
        }
        func();
      });
      $("select:last").change(function() {
        num = $(this).val();
        createAbacus(num);
        if (ex_type == "read") {
          func = readAbacus;
        }
        if (ex_type == "repr") {
          func = representNumber;
        }
        func();
      });
			$tab.on("click", "button:last", function(){
        func();
			});
			$tab.on("click", "button:first", function(){
        val = $("input").val();
				if (countAbacus() == val) {
          $tab.find(".w-100:last").html("<i class='far fa-smile fa-5x animated zoomIn'></i>");
          setTimeout(function(){func()},1000);
        } else {
          $tab.find(".w-100:last").html("<i class='far fa-frown fa-5x animated zoomIn'></i>");
          setTimeout(function(){func()},1000);
        }
			});
			$("body").on("keypress", function(event){
				keyCode = (event.keyCode ? event.keyCode : event.which);
				if (keyCode == 13) {
          val = $("input").val();
          if (countAbacus() == val) {
            $tab.find(".w-100:last").html("<i class='far fa-smile fa-5x animated zoomIn'></i>");
            setTimeout(function(){func()},1000);
          } else {
            $tab.find(".w-100:last").html("<i class='far fa-frown fa-5x animated zoomIn'></i>");
            setTimeout(function(){func()},1000);
          }
				}
			});
		});
  </script>
</body>
</html>
