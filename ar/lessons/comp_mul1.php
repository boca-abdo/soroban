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
        <h1 class="h1">الضرب المركب بالطريقة اﻷولى</h1>
				<hr>
				<p class="lead">يقصد بالضرب المركب، ضرب عدد في عدد مكون من أكثر من رقم واحد، وفي هذه الدرس سنعتمد على قواعد الضرب البسيط التي تعلمناها  في الوحدة السابقة. </p>
				<p class="text-danger font-weight-bold">لاحظ المثال</p>
				<i class="fas fa-2x fa-hand-point-down d-block animated fadeInDown infinite"></i>
				<img src="../../images/mul1_2.gif" alt="mul1_2" class="img-fluid center-block border border-dark mt-3">
				<hr>
				<h2 class="h2 text-center animated flash infinite">احصل على شهادة التدريب</h2>
				<h5 class="h5 my-3">قم بانهاء جميع التمارين بعد نهاية كل وحدة للحصول على شهادة التدريب</h5>
				<p class="lead animated flash infinite text-danger font-weight-bold"></p>
				<div class="row border border-dark mx-3">
					<ul class="nav nav-fill nav-tabs border-bottom-0 w-100 p-0" id="exercices" role="tablist">
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="0" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>1</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="1" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>2</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="2" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>3</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="3" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>4</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="4" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>5</a>
					  </li>
					</ul>
					<div class="tab-content w-100 text-center" id="exercices_content">
						<div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 1</h5>
							<p class="lead">قم بالحسابات اللازمة على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-times mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
						</div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 2</h5>
							<p class="lead">قم بالحسابات اللازمة على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-times mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 3</h5>
							<p class="lead">قم بالحسابات اللازمة على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-times mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 4</h5>
							<p class="lead">قم بالحسابات اللازمة على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-times mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 5</h5>
							<p class="lead">قم بالحسابات اللازمة على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-times mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<?php include '../assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			var r,l,v,val,level;
			$('#exercices').on('click', 'a', function () {
				$("h2.animated").removeClass('animated');
				$btn = $(this);
				$btn.closest(".row").prev().text("");
				ex = $btn.data("ex");
				$tab = $(".tab-pane:eq("+ex+")");
				$input = $tab.find("input");
				$check = $tab.find("button:first");
				$refill = $tab.find("button:last");
				$p = $tab.find("p:last");
				switch (ex) {
					case 0:
						func = getNumber2;
						lvl = 50;
						createAbacus(4);
						break;
					case 1:
						func = getNumber2;
						lvl = 51;
						createAbacus(5);
						break;
					case 2:
						func = getNumber2;
						lvl = 52;
						createAbacus(6);
						break;
					case 3:
						func = getNumber2;
						lvl = 53;
						createAbacus(6);
						break;
					case 4:
						func = getNumber2;
						lvl = 54;
						createAbacus(7);
						break;
				}
				checkLevel(lvl,50);
				rset();
			});
			$(".tab-pane").on("click", "button:last", function(){
				rset();
			});
			$(".tab-pane").on("click", "button:first", function(){
				check();
			});
			$("body").on("keypress", function(event){
				keyCode = (event.keyCode ? event.keyCode : event.which);
				if (keyCode == 13) {
					check();
				}
			});
		});
  </script>
</body>
</html>
