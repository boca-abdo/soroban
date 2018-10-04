<?php
	include '../include/visiters.php';
	try {
		$today = date("Y-m-d");
		$first_day = date("Y-m-d", strtotime("01-".date("m")."-2018"));
		$last_day = date("Y-m-d", strtotime(date("t")."-".date("m")."-2018"));
		$query = $srbn_con->query("SELECT `id` FROM `users` WHERE 1");
		$members_all = $query->rowCount();
		$query = $srbn_con->query("SELECT `id` FROM `users` WHERE `first_login` BETWEEN '$first_day' AND '$last_day'");
		$members_month = $query->rowCount();
		$query = $srbn_con->query("SELECT `id` FROM `users` WHERE `first_login`='$today'");
		$members_day = $query->rowCount();
		$query = $srbn_con->query("SELECT * FROM `counter` WHERE 1");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$row = $query->fetch();
		$visits_all = $row['t_counts'];
		$visits_month = $row['m_counts'];
		$visits_day = $row['counts'];
	} catch (Exception $e) {
		echo $e->getMessage();
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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<style media="screen">
		@media (max-width: 600px) {
			#jumbo .display-2 {
				font-size : 2.5rem;
			}
			#jumbo .display-4 {
				font-size : 1.4rem;
			}
		}
	</style>
</head>
<body class="bg-warning text-dark">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=209610666128223&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- spinner before page loading -->
	<?php include '../assets/spinner.php' ?>
	<!-- here starts jumbo block -->
  <div id="top" class="container-fluid" style="height: 100vh;background-image: url('../images/home.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
		<div class="btn-group my-3 position-absolute" style="right:10px">
			<a href="../ar/index.php"><img src="../images/ar.png"></a>
			<a href="../fr/index.php"><img src="../images/fr.png"></a>
		</div>
		<div class="row justify-content-center align-items-end h-100 pb-3">
      <div class="col-12 text-center text-warning" id="jumbo">
				<img class="img-fluid" src="../images/logo.png" alt="logo">
        <h1 class="display-2 text-uppercase">soroban program</h1>
        <h1 class="display-4">for mental calculation</h1>
        <div class="mx-auto my-sm-5">
          <a href="auth.php" class="btn btn-lg btn-outline-warning rounded-0 font-weight-bold text-uppercase px-5" style="box-shadow:none">enter<i class="fas fa-sign-in-alt ml-2"></i></a>
        </div>
        <a href="#about" class="btn btn-outline-warning animated bounce infinite mt-3" style="border-radius: 20px;box-shadow:none"><i class="fas fa-angle-double-down fa-2x" style="cursor:pointer"></i></a>
      </div>
    </div>
  </div>
	<div class="container-fluid px-0" id="main">
		<!-- here starts the sticky navbar -->
		<nav class="navbar navbar-dark bg-dark py-0">
	    <ul class="nav justify-content-center w-100 p-0" id="menu">
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#about" style="box-shadow: none"><span class="d-none d-sm-block">About</span><i class="fas fa-info-circle px-2 d-sm-none"></i></a>
	      </li>
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#products" style="box-shadow: none"><span class="d-none d-sm-block">Certified</span><i class="fas fa-graduation-cap px-2 d-sm-none"></i></a>
	      </li>
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#stats" style="box-shadow: none"><span class="d-none d-sm-block">Stats</span><i class="fas fa-chart-pie px-2 d-sm-none"></i></a>
	      </li>
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#contact" style="box-shadow: none"><span class="d-none d-sm-block">Contact</span><i class="fas fa-envelope px-2 d-sm-none"></i></a>
	      </li>
	    </ul>
		</nav>
		<!-- here starts about block -->
		<div class="container py-5 text-center" id="about">
			<div class="w-100 text-center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- soroban_pub -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-9602705169757138"
				     data-ad-slot="8304940901"
				     data-ad-format="link"
				     data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			<i class="fas fa-info-circle fa-5x"></i>
			<h3 class="h3 font-weight-bold text-uppercase my-3">about</h3>
			<p class="lead font-weight-bold text-justify text-indent">Soroban Program for the Mental calculation is a program of education and training for children, aimed at their mental abilities, and the development of their thoughts, their concentrations, their precisions and their observations ... The program depends on the modern technology in mathematics education. Using the Japanese "Soroban" abacus and numbers, the learner manages to manipulate the four operations (addition, subtraction, multiplication and division) in a way that is much fun.</p>
			<hr class="bg-dark">
			<div class="row text-center">
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Fixation</h4>
					<i class="fas fa-anchor fa-2x my-2"></i>
					<p class="font-weight-bold">Develop the mental capacity of the brain and fix the mental image.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Important</h4>
					<i class="fas fa-briefcase fa-2x my-2"></i>
					<p class="font-weight-bold">Develop the capacities of reflection, concentration, precision, observation and analysis.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Powerful</h4>
					<i class="fas fa-bolt fa-2x my-2"></i>
					<p class="font-weight-bold">Reinforce the imagination and stimulate the brain.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Reliable</h4>
					<i class="far fa-smile fa-2x my-2"></i>
					<p class="font-weight-bold">Creativity, initiative and fair competition.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Aimable</h4>
					<i class="fas fa-heart fa-2x my-2"></i>
					<p class="font-weight-bold">Love mathematics and teach self-confidence and self-reliance.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Useful</h4>
					<i class="fas fa-graduation-cap fa-2x my-2"></i>
					<p class="font-weight-bold">Connect the right and left lobes of the brain in harmony.</p>
				</div>
			</div>
		</div>
		<!-- here starts carousel block -->
		<div class="w-100 py-5 text-center" style="background-image: url('../images/home1.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
			<i class="fab fa-twitter fa-2x bg-primary text-white p-3 rounded-circle"></i>
			<h3 class="h3 font-weight-bold text-warning my-3">tweets</h3>
			<div id="mycarousel" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner text-warning">
			    <div class="carousel-item active">
				    <h5 class="font-weight-bold">Jack travis</h5>
				    <p>Very useful program for mathematics</p>
			    </div>
			    <div class="carousel-item">
						<h5 class="font-weight-bold">Nick junior</h5>
				    <p>It helps me improving the quality of thinking and analysing</p>
			    </div>
			    <div class="carousel-item">
						<h5 class="font-weight-bold">Lindlet afferd</h5>
				    <p>My students become smarter and creative</p>
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
			<i class="fas fa-award fa-5x"></i>
			<h3 class="h3 font-weight-bold text-uppercase my-3">Website certificate</h3>
			<img class="img-fluid img-thumbnail" src="../images/soroban_book.jpg" alt="Generic placeholder image">
			<p class="lead font-weight-bold text-justify text-indent mt-3">
				We offer a very high quality course for all skills required to acquire a professional level Soroban program for the development of intelligence. In addition, a certificate of completion will be offered free of charge.
			</p>
		</div>
		<!-- here starts facebook block -->
		<div class="w-100 py-5 text-center" style="background-image: url('../images/home2.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
			<i class="fab fa-facebook-square fa-2x bg-primary text-white p-3 rounded"></i>
			<h3 class="h3 font-weight-bold text-warning my-3">Facebook</h3>
			<div class="container">
				<div class="bg-light p-3 my-3" style="overflow: auto">
					<div class="fb-comments" data-href="https://www.facebook.com/sorobane/comments" data-numposts="5" data-width="100%"></div>
					<hr>
					<div class="fb-page" data-href="https://www.facebook.com/Sorobane" data-tabs="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/Sorobane" class="fb-xfbml-parse-ignore">
							<a href="https://www.facebook.com/Sorobane">Programme soroban pour le calcul mental</a>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
		<!-- here starts stats block -->
		<div class="container py-5 text-center" id="stats">
			<i class="fas fa-chart-pie fa-5x"></i>
			<h3 class="h3 font-weight-bold text-uppercase my-3">Statistcs</h3>
			<hr class="bg-dark">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-sm-6">
						<i class="fas fa-2x fa-users"></i>
						<h5>Members</h5>
						<ul class="list-group pr-0">
						  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-dark text-warning border-warning">
						    Today
						    <span class="badge badge-warning badge-pill"><?php echo $members_day; ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-warning border-warning">
						    This month
						    <span class="badge badge-warning badge-pill"><?php echo $members_month; ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-dark text-warning border-warning">
						    Total
						    <span class="badge badge-warning badge-pill"><?php echo $members_all; ?></span>
						  </li>
						</ul>
					</div>
					<div class="col-sm-6">
						<i class="fas fa-2x fa-eye"></i>
						<h5>Visits</h5>
						<ul class="list-group pr-0">
						  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-dark text-warning border-warning">
						    Today
						    <span class="badge badge-warning badge-pill"><?php echo $visits_day; ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-warning border-warning">
						    This month
						    <span class="badge badge-warning badge-pill"><?php echo $visits_month; ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-dark text-warning border-warning">
						    Total
						    <span class="badge badge-warning badge-pill"><?php echo $visits_all; ?></span>
						  </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w-100 text-center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- soroban_pub -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-9602705169757138"
				     data-ad-slot="8304940901"
				     data-ad-format="link"
				     data-full-width-responsive="true"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
		<!-- here starts youtube block -->
		<div class="w-100 py-5 text-center" style="background-image: url('../images/home3.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
			<i class="fab fa-youtube-square fa-2x bg-danger text-white py-2 px-3 rounded"></i>
			<h3 class="h3 font-weight-bold text-warning my-3">Youtube</h3>
			<div class="container">
				<div class="bg-danger p-sm-3 my-3">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/nOYMWltP1kQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- here starts contact block -->
		<div class="w-100 bg-dark text-warning text-center py-3" id="contact">
			<div class="container">
				<i class="fas fa-envelope fa-5x"></i>
				<h3 class="h3 font-weight-bold text-uppercase my-3">Contact us</h3>
				<hr class="bg-warning">
				<div class="row justify-content-center text-left">
					<div class="col-md-8 py-3">
						<form class="" action="" method="post" novalidate autocomplete="off">
							<fieldset class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="name" class="form-label">Full name</label>
										<input id="nwsltr_name" class="form-control border-warning text-warning rounded-0" style="background: transparent" type="text" name="name">
									</div>
									<div class="col-md-6">
										<label for="email" class="form-label">Email</label>
										<input id="nwsltr_e" class="form-control border-warning text-warning rounded-0" style="background: transparent" type="email" name="email">
									</div>
								</div>
							</fieldset>
							<fieldset class="form-group">
								<label for="name" class="form-label">Message</label>
								<textarea id="nwsltr_msg" class="form-control border-warning text-warning rounded-0" style="background: transparent" name="message" rows="7" cols="80" maxlength="200"></textarea>
							</fieldset>
							<div class="text-center" id="nwsltr_status"></div>
							<button id="nwsltr_btn" type="button" class="btn btn-outline-warning font-weight-bold rounded-0 float-right" name="send" style="box-shadow:none">Envoyer<i class="fas fa-envelope ml-2"></i></button>
						</form>
					</div>
					<div class="col-10 col-md-4 text-center text-md-left order-md-first mt-3 mt-md-0">
						<img class="img-thumbnail my-3" src="../images/salah.jpg" width="200" alt="afhim salah">
						<ul class="list-unstyled pr-0">
							<li><i class="fas fa-user-circle mr-2"></i>Afhim salah</li>
							<li><i class="fas fa-briefcase mr-2"></i>Teacher EP</li>
							<li><i class="fas fa-map-marker-alt mr-2"></i>Tarrast - inzgane</li>
							<li><i class="fas fa-phone mr-2"></i>00212641636015</li>
							<li><i class="fas fa-graduation-cap mr-2"></i>Soroban traîner</li>
							<li><i class="fas fa-laptop mr-2"></i>Developper - writer</li>
						</ul>
					</div>
				</div>
			</div>
			<hr class="bg-warning">
			<div id="logo-warning">
				<a href="#top"><img class="img-fluid my-3" src="../images/logo-warning.png" alt="logo"></a>
			</div>
			<nav class="nav justify-content-center">
        <a class="nav-link text-warning" href="https://www.facebook.com/sorobane/" target="_blank" style="box-shadow: none"><i class="fab fa-facebook-square fa-lg px-2"></i></a>
        <a class="nav-link text-warning" href="https://twitter.com/Soroban_online" target="_blank" style="box-shadow: none"><i class="fab fa-twitter-square fa-lg px-2"></i></a>
        <a class="nav-link text-warning" href="https://plus.google.com/u/0/117099424530846763778" target="_blank" style="box-shadow: none"><i class="fab fa-google-plus-square fa-lg px-2"></i></a>
        <a class="nav-link text-warning" href="https://www.youtube.com/channel/UC4aEPO_MU_NJ3JHybb3cBIg" target="_blank" style="box-shadow: none"><i class="fab fa-youtube-square fa-lg px-2"></i></a>
	    </nav>
			<div class="font-weight-bold">
				<p class="m-0">copyright 2016 - <?php echo date("Y"); ?></p>
				<p class="text-uppercase m-0" dir="ltr">designed by <a href="https://www.facebook.com/idbenjaa" target="_blank" class="text-warning"><i>boca</i></a> - <a href="../terms.php">Privacy</a></p>
			</div>
		</div>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			// remove spinner after page load
			$("#spinner").addClass("d-none");
			var el,pos,anim,hash;
			// smooth scrolling on menu
      $("#jumbo,#menu,#logo-warning").on('click', 'a', function(e) {
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
				// add active class for menu links
				$("#menu").find("a").each(function(){
					hash = this.hash;
					if (window.pageYOffset >= ($(hash).offset().top) - 100) {
						$("#menu").find("a").removeClass("active");
						$("a[href='"+hash+"']").addClass("active");
					}
				});
			});
			$("#nwsltr_btn").on("click", function(){
				$("#nwsltr_status").text("");
				name = $("#nwsltr_name").val();
				e = $("#nwsltr_e").val();
				msg = $("#nwsltr_msg").val();
				if (name == "" || e == "" || msg == "") {
					$("#nwsltr_status").text("Fields required");
				} else {
					$.ajax({
						url: "../include/newsletter.php",
						type: "POST",
						data: {
							name: name,
							e: e,
							msg: msg,
						},
						error: function(stt,xhr,err) {
							console.log(err);
						},
						success: function(res) {
							if (res == "done") {
								$("#nwsltr_btn").addClass("d-none");
								$("#nwsltr_status").text("Thanks for your feedback");
							}
						}
					});
				}
			});
    });
  </script>
</body>
</html>
