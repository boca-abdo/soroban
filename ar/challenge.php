<?php
	include '../includes/user_check.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("location: auth.php");
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
	<style media="screen">
		.gen {
			font-size: 3rem;
			text-shadow: -5px 5px 10px #000
		}
		.nfo {
			text-shadow: -2px 2px 5px #000
		}
		@media screen and (min-width: 768px) {
			.gen {
				font-size: 8rem;
			}
			.nfo {
				font-size: 3rem
			}
		}
		@media screen and (min-width: 1200px) {
			.gen {
				font-size: 12rem;
			}
			.nfo {
				font-size: 5rem
			}
		}
	</style>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/series.js"></script>
</head>
<body class="bg-warning text-dark" style="height: 100vh">
	<audio id="beep">
    <source src="../beep.mp3" type="audio/mpeg">
    <source src="../beep.ogg" type="audio/mpeg">
    <source src="../beep.wav" type="audio/mpeg">
  </audio>
	<div id="spinner" class="position-fixed d-none bg-primary text-light h-100 w-100 justify-content-center align-items-center" style="z-index:5001">
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
  <div class="navbar fixed-top justify-content-between bg-dark p-0">
    <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 float-left" href="index.php" style="box-shadow:none"><i class="fas fa-home"></i></a>
    <ul class="nav p-0">
      <li class="nav-item">
        <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="dashboard.php" style="box-shadow:none"><span class="d-none d-md-inline">مركزي</span><i class="fas fa-list-ol mr-md-2"></i></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="profile.php" style="box-shadow:none"><span class="d-none d-md-inline">معلوماتي</span><i class="fas fa-user mr-md-2"></i></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="stats.php" style="box-shadow:none"><span class="d-none d-md-inline">ارقامي</span><i class="fas fa-chart-pie mr-md-2"></i></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="lessons.php" style="box-shadow:none"><span class="d-none d-md-inline">دروسي</span><i class="fas fa-graduation-cap mr-md-2"></i></a>
      </li>
			<li class="nav-item">
				<a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 active" href="challenge.php" style="box-shadow:none"><span class="d-none d-md-inline">التحدي</span><i class="fas fa-stopwatch mr-md-2"></i></a>
			</li>
    </ul>
    <a class="btn btn-outline-warning rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0 float-left" href="../includes/logout.php?q=ar" style="box-shadow:none"><i class="fas fa-power-off"></i></a>
  </div>
	<div class="row no-gutters h-100 justify-content-center align-items-center p-0 pt-5">
		<div class="col-12 align-self-center">
			<div class="container">
				<ul class="nav nav-fill nav-tabs border-bottom-0 w-50 mx-auto p-0" id="main" role="tablist">
				  <li class="nav-item pb-2">
				    <a class="btn btn-block btn-outline-dark rounded-0" id="beg-tab" data-toggle="tab" href="#beg" role="tab" aria-controls="beg" aria-selected="true" style="box-shadow: none">قسم المبتدئين</a>
				  </li>
				  <li class="nav-item pb-2">
				    <a class="btn btn-block btn-outline-dark rounded-0" id="exp-tab" data-toggle="tab" href="#exp" role="tab" aria-controls="exp" aria-selected="false" style="box-shadow: none">قسم المتفوقين</a>
				  </li>
				</ul>
				<div class="tab-content col-lg-6 mx-auto" id="main_content">
				  <div class="tab-pane fade pt-3" id="beg" role="tabpanel">
						<div class="card border-dark background-transparent text-center rounded-0">
							<div class="card-header">
								<h4 class="card-title font-weight-bold">تحدي الوقت</h4>
							</div>
							<div class="card-block">
								<div id="beg_prog" class="bg-dark" style="width:0;height: 10px"></div>
								<div id="beg_content">
									<div class="d-block p-3" id="beg_tab">
										<p class="lead">في هذا التحدي يجب عليك اتمام <span class="badge badge-dark" id="beg_series"></span> سلاسل</p>
										<ul class="list-group text-warning p-0"></ul>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="button" id="beg_start" class="btn btn-lg btn-outline-dark font-weight-bold rounded-0 px-5" data-toggle="modal" data-target="#Modal" style="box-shadow: none">انطلق</button>
							</div>
						</div>
					</div>
				  <div class="tab-pane fade pt-3" id="exp" role="tabpanel" aria-labelledby="exp-tab">
						<div class="card border-dark background-transparent text-center rounded-0">
							<div class="card-header">
								<h4 class="card-title font-weight-bold">تحدي الوقت</h4>
							</div>
							<div class="card-block">
								<div id="exp_prog" class="bg-dark" style="width:0;height: 10px"></div>
								<div id="exp_content">
									<div class="d-block p-3" id="exp_tab">
										<p class="lead">في هذا التحدي يجب عليك اتمام <span class="badge badge-dark" id="exp_series"></span> سلسلة</p>
										<ul class="list-group text-warning p-0"></ul>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="button" id="exp_start" class="btn btn-lg btn-outline-dark font-weight-bold rounded-0 px-5" data-toggle="modal" data-target="#Modal" style="box-shadow: none">انطلق</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-100 align-self-end font-weight-bold text-center mt-5">
			<p class="m-0">جميع الحقوق محفوظة لموقع سوروبان 2016-<?php echo date("Y"); ?></p>
			<p class="text-uppercase m-0" dir="ltr">designed by <a href="http://aws.skwila.net" target="_blank" class="text-dark"><i>aws</i></a></p>
		</div>
		<div id="Modal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content bg-dark text-warning text-center">
					<div class="modal-header p-0">
						<h3 class="modal-title mx-auto p-3">وقت التركيز</h3>
					</div>
					<div class="modal-body">
						<img class="img-fluid" src="../images/reflex.png" alt="وقت التركيز">
					</div>
					<div class="modal-footer justify-content-center">
						<div class="col-md-4">
							<button type="button" class="btn btn-block btn-outline-warning rounded-0 font-weight-bold" data-dismiss="modal">مستعد ؟</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			var i,keyCode,cl,cls,res,gen,gen2,sr_intvl,cd_intvl,prog_intvl,wd,rand,points,result,point,fa,
			sr_num = 0,
			tbl_res = [],
			tbl_answer = [];
			function showResult() {
				$("#spinner").removeClass("d-flex").addClass("d-none");
				$("#"+cls+"_series").parent().removeClass("d-block").addClass("d-none");
				$("#tv").html("");
				$("#"+cls+"_tab").find("ul.list-group").html("");
				$("#"+cls+"_tab").find("h3").remove();
				points = 0;
				sr_num = 0;
				for (i = 0; i < tbl_res.length; i++) {
					if (tbl_res[i] == tbl_answer[i]) {
						point = cl[i].points;
						fa = 'success';
					} else {
						point = 0;
						fa = 'danger';
					}
					points += point;
					$("#"+cls+"_tab").find("ul.list-group").append("<li class='list-group-item border-warning bg-dark rounded-0 d-flex justify-content-between align-items-center'><span>"+(i+1)+"</span><span class='text-"+fa+"'>"+tbl_answer[i]+"</span><span>"+tbl_res[i]+"</span><span>"+point+"+ </span></li>");
				}
				$("#"+cls+"_tab").find("ul.list-group").append("<li class='list-group-item border-warning bg-dark rounded-0 d-flex justify-content-between align-items-center'>مجموع النقط<span>"+points+"</span></li>");
				$.ajax({
					url: "../includes/update_points.php",
					type: "POST",
					data: {
						cl: cls,
						p: points
					},
					error: function(stt,xhr,err) {
						console.log(err);
					},
					success: function(res) {
						console.log(res);
						if (res == "top") {
							$("#"+cls+"_tab").append("<h3 class='animated flash infinite'>تهانينا، لقد حصلت على أفضل محاولة لك هذا اﻷسبوع</h3>");
						} else {
							$("#"+cls+"_tab").append("<h3 class='animated flash infinite'>لقد حصلت على "+res+" نقطة خلال هذا اﻷسبوع، حاول الحصول على أكثر</h3>");
						}
						$("#"+cls).find(".card-footer").find("button").text("إعادة المحاولة");
					}
				});
			}
			function showInput() {
				$("#tv").html("<input type='number' min='0' class='form-control form-control-lg w-50 mx-auto rounded-0 border-dark text-center font-weight-bold' style='box-shadow: none'>");
				$("#tv").find("input").focus();
				sr_num++;
				if (sr_num >= cl.length) {
					console.log(sr_num+"--------"+cl.length);
					$("#tv").find("input").on("keypress", function(event){
						keyCode = (event.keyCode ? event.keyCode : event.which);
						if (keyCode == 13) {
							tbl_answer.push(Number($("#tv").find("input").val()));
							clearInterval(prog_intvl);
							$("#prog").width("0");
							showResult();
						}
					});
					showProg(cl[sr_num-1].prog,showResult);
				} else {
					$("#tv").find("input").on("keypress", function(event){
						keyCode = (event.keyCode ? event.keyCode : event.which);
						if (keyCode == 13) {
							tbl_answer.push(Number($("#tv").find("input").val()));
							clearInterval(prog_intvl);
							$("#prog").width("0");
							showInfo();
						}
					});
					showProg(cl[sr_num-1].prog,showInfo);
				}
			}
			function getRandom(min) {
				rand = Math.random();
				while (rand < min) {
					rand = Math.random();
				}
				return rand;
			}
			function playSerie() {
				i = 0;
				res = 0;
				if (cl[sr_num].opr_ar.indexOf("جمع") > -1) {
					sr_intvl = setInterval(function(){
						i++;
						if (i > cl[sr_num].rank2) {
							tbl_res.push(res);
							console.log(res);
							clearInterval(sr_intvl);
							setTimeout(function(){showInput()},1000);
						} else {
							gen = Math.floor(getRandom(0.1) * 10 * cl[sr_num].rank1);
							res += gen;
							$("#beep").get(0).play();
							if ((i % 2) == 0) {
								$("#tv").html("<p class='gen text-warning'>"+gen+"</p>");
							} else {
								$("#tv").html("<p class='gen'>"+gen+"</p>");
							}
						}
					},cl[sr_num].speed);
				}
				if (cl[sr_num].opr_ar.indexOf("ضرب") > -1) {
					gen = Math.floor(getRandom(0.1) * 10 * cl[sr_num].rank1);
					gen2 = Math.floor(getRandom(0.4) * 10 * cl[sr_num].rank2);
					res = gen * gen2;
					$("#tv").html("<p class='gen m-0'>"+gen+"</p><p class='text-left pl-5 m-0'><i class='fas fa-2x fa-times text-warning mx-2 d-md-none'></i><i class='fas fa-5x fa-times text-warning mx-4 d-none d-md-inline'></i><p class='gen m-0'>"+gen2+"</p>");
					tbl_res.push(res);
					console.log(res);
					setTimeout(function(){showInput()},cl[sr_num].speed);
				}
				if (cl[sr_num].opr_ar.indexOf("طرح") > -1) {
					gen = Math.floor(getRandom(0.1) * 10 * cl[sr_num].rank1);
					gen2 = Math.floor(getRandom(0.1) * 10 * cl[sr_num].rank2);
					while (gen2 > gen) {
						gen = Math.floor(getRandom(0.1) * 10 * cl[sr_num].rank1);
						gen2 = Math.floor(getRandom(0.1) * 10 * cl[sr_num].rank2);
					}
					res = gen - gen2;
					$("#tv").html("<p class='gen m-0'>"+gen+"</p><p class='text-left pl-5 m-0'><i class='fas fa-2x fa-minus text-warning mx-2 d-md-none'></i><i class='fas fa-5x fa-minus text-warning mx-4 d-none d-md-inline'></i><p class='gen m-0'>"+gen2+"</p>");
					tbl_res.push(res);
					console.log(res);
					setTimeout(function(){showInput()},cl[sr_num].speed);
				}
			}
			function showInfo() {
				$("#spinner").removeClass("d-none").addClass("d-flex");
				$("#tv").html("<h1 class='nfo font-weight-bold'>السلسلة "+(sr_num+1)+"</h1><h1 class='nfo font-weight-bold'>"+cl[sr_num].opr_ar+"</h1>");
				setTimeout(function(){playSerie()},1000);
			}
			function showProg(sp,func) {
				wd = 0;
				prog_intvl = setInterval(function(){
					wd += 1;
					$("#prog").width(wd+"%");
					if (wd == 100) {
						if (func != playSerie) {
							tbl_answer.push(Number($("#tv").find("input").val()));
						}
						clearInterval(prog_intvl);
						$("#prog").width("0");
						func();
					}
				},sp);
			}
			function createSeries(el,tbl) {
				$("#"+el+"_series").text(tbl.length);
				for (i = 0; i < tbl.length; i++) {
					$("#"+el+"_tab").find("ul").append("<li class='list-group-item border-warning bg-dark rounded-0 d-flex justify-content-between align-items-center'>"+(i+1)+" - "+tbl[i].opr_ar+"<span class='badge badge-danger badge-pill'>"+tbl[i].points+" نقط</span></li>");
				};
			};
			$("#Modal").on("show.bs.modal", function(){
				$(".modal-footer").find("button").text("مستعد ؟");
				i = 5;
				cd_intvl = setInterval(function(){
					$(".modal-footer").find("button").html("<span class='animated zoomIn'>"+i+"</span>");
					i--;
					if (i < 0) {
						clearInterval(cd_intvl);
						$("#Modal").modal("hide");
					}
				},1000);
			});
			$("#Modal").on("hide.bs.modal", function(){
				tbl_res = [];
				tbl_answer = [];
				showInfo();
			});
			$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
				$("#"+cls+"_tab").find("ul.list-group").html("");
				$("#"+cls).find(".card-footer").find("button").text("انطلق")
				cl = beg,
				cls = "beg";
			  if ($(this).attr('href') == "#exp") {
					cl = exp,
					cls = "exp"
				}
				createSeries(cls,cl);
			});
		});
  </script>
</body>
</html>
