<?php

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
	<style media="screen">
		@media (max-width: 600px) {
			#jumbo .display-2 {
				font-size : 2.5rem;
			}
			#jumbo .display-4 {
				font-size : 1.5rem;
			}
		}
	</style>
</head>
<body class="bg-warning text-dark">
	<!-- spinner before page loading -->
	<?php include '../assets/spinner.php' ?>
	<!-- here starts jumbo block -->
  <div id="" class="container-fluid" style="height: 100vh;background-image: url('../images/home.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
    <div class="row justify-content-center align-items-end h-100 pb-5">
      <div class="col-auto text-center text-warning" id="jumbo">
        <h1 class="display-2 animated fadeInLeft">برنامج سوروبان</h1>
        <h1 class="display-4 animated fadeInRight">للحساب الذهني وتنمية الذكاء</h1>
				<div class="btn-group my-3">
					<a href="../fr/index.php" class="btn btn-outline-warning rounded-0">Version française</a>
					<a href="../en/index.php" class="btn btn-outline-warning rounded-0">English version</a>
				</div>
        <div class="w-25 mx-auto my-3">
          <a href="auth.php" class="btn btn-lg btn-block btn-outline-warning rounded-0 font-weight-bold">دخول<i class="fas fa-sign-in-alt mr-2 d-none d-sm-inline-block"></i></a>
        </div>
        <a href="#about" class="btn btn-outline-warning animated bounce infinite mt-3" style="border-radius: 20px"><i class="fas fa-angle-double-down fa-3x" style="cursor:pointer"></i></a>
      </div>
    </div>
  </div>
	<div class="container-fluid px-0" id="main">
		<!-- here starts the sticky navbar -->
		<nav class="navbar navbar-dark bg-dark py-0">
	    <ul class="nav justify-content-center w-100 p-0" id="menu">
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#about" style="box-shadow: none"><span class="d-none d-sm-block">عن البرنامج</span><i class="fas fa-info-circle px-2 d-sm-none"></i></a>
	      </li>
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#products" style="box-shadow: none"><span class="d-none d-sm-block">منتوجاتنا</span><i class="fas fa-bullhorn px-2 d-sm-none"></i></a>
	      </li>
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#stats" style="box-shadow: none"><span class="d-none d-sm-block">احصائيات</span><i class="fas fa-chart-pie px-2 d-sm-none"></i></a>
	      </li>
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#contact" style="box-shadow: none"><span class="d-none d-sm-block">اتصل بنا</span><i class="fas fa-envelope px-2 d-sm-none"></i></a>
	      </li>
	    </ul>
		</nav>
		<!-- here starts about block -->
		<div class="container py-5 text-center" id="about">
			<h1 class="h1 font-weight-bold">عن البرنامج</h1>
			<p class="lead text-justify font-weight-bold">
						برنامج سروبان للحساب الذهني هو برنامج تعليمي و تدريبي للطفل، يهدف إلى تنمية القدرات الذهنية للطفل و تطوير مهارات التفكير و التركيز، دقة الملاحظة ، القراءة و الكتابة ٠٠٠و يعتمد البرنامج على تقنية حديثة في تدريس الرياضيات باستخدام المعداد الياباني "سوروبان" و الاعداد للنهوض بالقدرات الذهنية و تعليمه العمليات الحسابية (جمع،طرح،ضرب وقسمة) بطريقة فيها الكثير من المتعة و المرح.
			</p>
			<hr class="bg-dark">
			<div class="row text-center">
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3 anim d-none" data-animation="animated fadeInRightBig">
					<h4 class="h4 font-weight-bold">تثبيت</h4>
					<i class="fas fa-anchor fa-2x my-2"></i>
					<p class="font-weight-bold">ينمي القدرات العقلية و يثبت الصورة الذهنية.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3 anim d-none" data-animation="animated fadeInDownBig">
					<h4 class="h4 font-weight-bold">مهم</h4>
					<i class="fas fa-briefcase fa-2x my-2"></i>
					<p class="font-weight-bold">يربط بين فصي الدماغ  الايمن و الايسر ويجعلهما متناغمين.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3 anim d-none" data-animation="animated fadeInLeftBig">
					<h4 class="h4 font-weight-bold">قوي</h4>
					<i class="fas fa-bolt fa-2x my-2"></i>
					<p class="font-weight-bold">يقوي التخيل و ينشط الدماغ.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3 anim d-none" data-animation="animated fadeInRightBig">
					<h4 class="h4 font-weight-bold">مرن</h4>
					<i class="fas fa-smile fa-2x my-2"></i>
					<p class="font-weight-bold">يساعد على الابداع ،المبادرة و التنافس الشريف.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3 anim d-none" data-animation="animated fadeInUpBig">
					<h4 class="h4 font-weight-bold">محبوب</h4>
					<i class="fas fa-heart fa-2x my-2"></i>
					<p class="font-weight-bold">يحبب مادة  الرياضيات لديه ويجعله يثق بنفسه ويعتمد عليها .</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3 anim d-none" data-animation="animated fadeInLeftBig">
					<h4 class="h4 font-weight-bold">مفيد</h4>
					<i class="fas fa-graduation-cap fa-2x my-2"></i>
					<p class="font-weight-bold">يطور مهارات التفكير،التركيز ،دقة الملاحظة و سرعة التحليل.</p>
				</div>
			</div>
		</div>
		<!-- here starts carousel block -->
		<div class="w-100 py-5 text-center" style="background-image: url('../images/home1.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
			<i class="fab fa-twitter fa-2x bg-primary text-white p-3 rounded-circle"></i>
			<h3 class="h3 font-weight-bold text-warning my-3">تويتات</h3>
			<div id="mycarousel" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner text-warning">
			    <div class="carousel-item active">
				    <h5 class="font-weight-bold">محمد البدري</h5>
				    <p>برنامج مفيد ساعدني كثيرا في تطوير قدراتي</p>
			    </div>
			    <div class="carousel-item">
						<h5 class="font-weight-bold">إيمان المسناوي</h5>
				    <p>استفذت من الحساب الذهني كيف أركز في عملي بشكل أفضل</p>
			    </div>
			    <div class="carousel-item">
						<h5 class="font-weight-bold">حسن المخلص</h5>
				    <p>أستخدمته في تدريس تلاميذي فأصبحوا يحبون الرياضيات كثيرا</p>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<!-- here starts products block -->
		<div class="container pt-5 text-center" id="products">
			<h3 class="h3 font-weight-bold">كتاب تعلم سوروبان</h3>
			<div class="row align-items-center anim d-none" data-animation="animated fadeInRightBig">
				<div class="col-md-3 py-3">
			  	<img class="img-fluid img-thumbnail" src="../images/soroban_book.jpg" alt="Generic placeholder image">
				</div>
			  <div class="col-md-9 py-3">
					<p class="lead font-weight-bold text-justify">
						دار نشر المانية تقوم بطباعة كتابي الاول ''منهجية تدريس السوروبان - تَعَلَّمْ و عَلِّمْ السوروبان'' الكتاب موجه ل :السادة الاساتذة - الاباء و الامهات الغيوريين على ابنائهم و الذين لا يجدون مؤسسة تدرس السوروبان بالقرب من سكناهم - المدارس الخاصة و الجمعيات العاطلون عن العمل ذوي الشواهد العليا. الكتاب به جميع اسرار السوروبان و كل ما تحتاجه لتدريسه.لست مرغما بعد اليوم حضور الدورات التكوينية المكلفة و التنقل و حجز الفنادق . الكتاب الان يباع في نسخته الالكترونية ,ويتم طبعه الان وسيتم بيعه في 40 دولة عبر العالم و سيكون في الاسواق قريبا ان شاء الله.
					</p>
				</div>
			</div>
			<hr class="bg-dark">
			<h3 class="h3 font-weight-bold">المعداد سوروبان</h3>
			<div class="row align-items-center anim d-none" data-animation="animated fadeInLeftBig">
				<div class="col-md-3 py-3">
					<img class="img-fluid img-thumbnail" src="../images/abacus_for_sell.jpg" alt="Generic placeholder image">
				</div>
			  <div class="col-md-9 py-3">
					<p class="lead font-weight-bold text-justify">
						معداد خشبي من النوع الجيد (الطول24cm, العرض 10.5cm عرض الخرزة 1.7cm - عدد القضبان 11 - الثمن 100 دراهم مغربية ما يعادل 10دولار امريكي) معداد الاستاذ (350 درهم = 35دولار امريكي) لمن يهمه الامر الرجاء مراسلتي على afhim101@gmail.com
					</p>
				</div>
			</div>
		</div>
		<!-- here starts facebook block -->
		<div class="w-100 py-5 text-center" style="background-image: url('../images/home2.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
			<i class="fab fa-facebook-square fa-2x bg-primary text-white p-3 rounded"></i>
			<h3 class="h3 font-weight-bold text-warning my-3">فيسبوك</h3>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<?php // add a facebook share div ?>
					</div>
					<div class="w-100"></div>
					<hr class="bg-dark">
					<div class="col-auto">
						<?php // add a facebook comments plugin div ?>
					</div>
				</div>
			</div>
		</div>
		<!-- here starts contact block -->
		<div class="w-100 bg-dark text-warning text-center py-3" id="contact">
			<div class="container">
				<h3 class="h3 font-weight-bold">اتصل بنا</h3>
				<div class="row justify-content-center text-right">
					<div class="col-md-8 py-3">
						<form class="" action="" method="post" novalidate autocomplete="off">
							<fieldset class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="name" class="form-label">الاسم الكامل</label>
										<input class="form-control border-warning text-warning rounded-0" style="background: transparent" type="text" name="name">
									</div>
									<div class="col-md-6">
										<label for="email" class="form-label">البريد الالكتروني</label>
										<input class="form-control border-warning text-warning rounded-0" style="background: transparent" type="email" name="email">
									</div>
								</div>
							</fieldset>
							<fieldset class="form-group">
								<label for="name" class="form-label">الرسالة</label>
								<textarea class="form-control border-warning text-warning rounded-0" style="background: transparent" name="message" rows="7" cols="80"></textarea>
							</fieldset>
							<button type="submit" class="btn btn-outline-warning font-weight-bold rounded-0 float-left" name="send">أرسل<i class="fas fa-envelope mr-2"></i></button>
						</form>
					</div>
					<div class="col-10 col-md-4 text-center text-md-right order-md-first mt-3 mt-md-0">
						<img class="img-thumbnail my-3" src="../images/salah.jpg" width="200" alt="afhim salah">
						<ul class="list-unstyled pr-0">
							<li><i class="fas fa-user-circle ml-2"></i>صالح أفهيم</li>
							<li><i class="fas fa-briefcase ml-2"></i>استاذ التعليم الابتدائي</li>
							<li><i class="fas fa-map-marker-alt ml-2"></i>تراست انزكان - المغرب</li>
							<li><i class="fas fa-phone ml-2"></i>00212641636015</li>
							<li><i class="fas fa-graduation-cap ml-2"></i>مدرب سوروبان معتمد</li>
							<li><i class="fas fa-laptop ml-2"></i>مبرمج ومؤلف</li>
						</ul>
					</div>
				</div>
			</div>
			<hr class="bg-warning">
			<nav class="nav justify-content-center">
        <a class="nav-link text-warning" href="#" style="box-shadow: none"><i class="fab fa-facebook-square fa-lg px-2"></i></a>
        <a class="nav-link text-warning" href="#" style="box-shadow: none"><i class="fab fa-twitter-square fa-lg px-2"></i></a>
        <a class="nav-link text-warning" href="#" style="box-shadow: none"><i class="fab fa-google-plus-square fa-lg px-2"></i></a>
        <a class="nav-link text-warning" href="#" style="box-shadow: none"><i class="fab fa-youtube-square fa-lg px-2"></i></a>
	    </nav>
			<div class="font-weight-bold">
				<p class="m-0">جميع الحقوق محفوظة لموقع سوروبان 2016-<?php echo date("Y"); ?></p>
				<p class="text-uppercase m-0" dir="ltr">designed by <a href="http://aws.skwila.net" target="_blank" class="text-warning"><i>aws</i></a> - <a href="../terms.php">Privacy</a></p>
			</div>
		</div>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			var el,pos,anim,hash;
			// remove spinner after page load
			$("#spinner").addClass("d-none");
			// smooth scrolling on menu
      $("#jumbo,#menu").on('click', 'a', function(e) {
				$("#menu").find("a").removeClass("active");
				$(this).addClass("active");
        if (this.hash !== "") {
          e.preventDefault();
          hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800);
        }
      });
			// events trigged on windows scroll
			$(window).scroll(function(){
				// add sticky class for the navbar
				if (window.pageYOffset >= $(".navbar").offset().top) {
			    $(".navbar").addClass("sticky-top");
			  }
				// animate block on scroll point
				$(".anim").each(function(){
					var el = $(this);
					var anim = el.data('animation');
					var pos = el.offset().top;
					if (pos < $(window).scrollTop() + 600) {
							el.removeClass("d-none").addClass(anim)
					}
				});
				// add active class for menu links
				$("#menu").find("a").each(function(){
					hash = this.hash;
					if (window.pageYOffset >= ($(hash).offset().top) - 100) {
						$("#menu").find("a").removeClass("active");
						$("a[href='"+hash+"']").addClass("active");
					}
				});
			});
    });
  </script>
</body>
</html>
