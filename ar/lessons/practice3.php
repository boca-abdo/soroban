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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/lessons.css">
  <style media="screen">
		#bd {
			font-size: 3rem;
		}
		@media screen and (min-width: 768px) {
			#bd {
				font-size: 8rem;
			}
		}
		@media screen and (min-width: 1200px) {
			#bd {
				font-size: 12rem;
			}
		}
	</style>
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/popper.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</head>
<body class="bg-warning text-dark">
  <audio id="beep">
    <source src="../../beep.mp3" type="audio/mpeg">
    <source src="../../beep.ogg" type="audio/mpeg">
    <source src="../../beep.wav" type="audio/mpeg">
  </audio>
  <?php include 'assets/menu.php' ?>
	<div class="row no-gutters h-100 justify-content-center p-0 pt-5">
		<div class="col-12 align-self-top">
      <div class="container text-center">
        <h1 class="h1">تدريب السرعة</h1>
				<hr>
        <div class="row justify-content-center">
          <div class="col-sm-3">
            <label for="dig">عدد اﻷرقام</label>
            <select id="dig" class="custom-select w-100 rounded-0 background-transparent border-dark pt-0" name="">
              <option value="10">1</option>
              <option value="100">2</option>
              <option value="1000">3</option>
              <option value="10000">4</option>
              <option value="100000000">8</option>
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
            <input id="spd" class="form-control text-center rounded-0 background-transparent border-dark" type="number" min="0.3" max="20" step="0.1" value="1" style="box-shadow: none">
          </div>
          <div id="bd" class="w-100 text-center font-weight-bold pt-5 mt-5"></div>
          <button id="start" type="button" class="btn btn-lg btn-outline-dark rounded-0 px-5">ابدأ<i class="fas fa-stopwatch mr-2"></i></button>
        </div>
      </div>
		</div>
		<?php include '../assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
      var num,spd,dig,gen,rand,i,res,answer,intvl,keyCode;
      function rndm(max) {
        rand = Math.random();
        while (rand < max) {
          rand = Math.random();
        }
        return rand;
      }
      function playSerie() {
        i = 0;
        res = 0;
        intvl = setInterval(function(){
          gen = Math.floor(rndm(0.1) * dig);
          $("#beep").get(0).play();
          if (gen % 2 == 0 && res >= gen) {
            res -= gen;
            $("#bd").html(gen+"<i class='fas fa-minus mr-2' style='font-size: 1rem'></i>");
          } else {
            $("#bd").html(gen+"<i class='fas fa-plus mr-2' style='font-size: 1rem'></i>");
            res += gen
          }
          i++;
          if (i == num) {
            clearInterval(intvl);
            setTimeout(function(){
              $("#bd").html("<input type='number' class='col-8 col-md-2 form-control form-control-lg text-center rounded-0 border-dark background-transparent mx-auto'>");
              $("#bd").find("input").focus().on("keyup", function(event){
                answer = $(this).val();
                keyCode = (event.keyCode ? event.keyCode : event.which);
    						if (keyCode == 13) {
    							if (res == answer) {
                    $("#bd").html("<i class='far fa-smile animated zoomIn d-block'></i>");
                  } else {
                    $("#bd").html("<i class='far fa-frown animated zoomIn d-block'></i>");
                  }
    						}
                setTimeout(function(){
                  $("#start").removeClass("d-none").addClass("d-block");
                  $("#bd").html("");
                },2000);
              });
            },spd * 1000);
          }
        },spd * 1000);
      }
      $("#start").on("click", function(){
        $(this).removeClass("d-block").addClass("d-none");
        num = Number($("#num").val());
        spd = Number($("#spd").val());
        dig = Number($("#dig").val());
        playSerie();
      })
		});
  </script>
</body>
</html>