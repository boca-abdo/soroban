<?php
	include '../../includes/user_check.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("../location: auth.php");
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
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
        <h1 class="h1">تدريب السرعة</h1>
				<hr>
        <div class="row justify-content-center">
          <div class="col-sm-3">
            <label for="tp">نوع التدريب</label>
            <select id="tp" class="custom-select w-100 rounded-0 background-transparent border-dark pt-0" name="">
              <option value="add">جمع</option>
              <option value="sub">طرح</option>
              <option value="mix">جمع وطرح</option>
              <option value="mul">ضرب</option>
              <option value="div">قسمة</option>
            </select>
          </div>
          <div class="col-sm-3">
            <label for="dig">عدد اﻷرقام</label>
            <select id="dig" class="custom-select w-100 rounded-0 background-transparent border-dark pt-0" name="">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>8</option>
            </select>
          </div>
          <div class="col-sm-3">
            <label for="num">عدد اﻷعداد</label>
            <select id="num" class="custom-select w-100 rounded-0 background-transparent border-dark pt-0" name="">
              <option>4</option>
              <option>5</option>
              <option>8</option>
              <option>10</option>
              <option>20</option>
            </select>
          </div>
          <div class="col-sm-3">
            <label for="">عدد الثواني</label>
            <input id="spd" class="form-control text-center rounded-0 background-transparent border-dark" type="number" min="0.3" max="20" step="0.1" style="box-shadow: none">
          </div>
        </div>
		</div>
		<?php include '../assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
      var num = $("#num").val(),spd = $("#spd").val(),dig = $("#dig").val();
      function
		});
  </script>
</body>
</html>
