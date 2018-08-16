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
<html lang="fr" dir="ltr">
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
	  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0&appId=209610666128223&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- spinner before page loading -->
	<?php include '../assets/spinner.php' ?>
	<!-- here starts jumbo block -->
  <div id="top" class="container-fluid" style="height: 100vh;background-image: url('../images/home.jpg'); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;">
		<div class="btn-group my-3 position-absolute" style="right:10px">
			<a href="../ar/index.php"><img src="../images/ar.png"></a>
			<a href="../en/index.php"><img src="../images/us.png"></a>
		</div>
		<div class="row justify-content-center align-items-end h-100 pb-3">
      <div class="col-12 text-center text-warning" id="jumbo">
				<img class="img-fluid" src="../images/logo.png" alt="logo">
        <h1 class="display-2 text-uppercase">programme soroban</h1>
        <h1 class="display-4">pour le calcul mental et dévelopement de l'intelligence</h1>
        <div class="mx-auto my-sm-5">
          <a href="auth.php" class="btn btn-lg btn-outline-warning rounded-0 font-weight-bold text-uppercase px-5" style="box-shadow:none">entrer<i class="fas fa-sign-in-alt ml-2"></i></a>
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
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#about" style="box-shadow: none"><span class="d-none d-sm-block">A propos</span><i class="fas fa-info-circle px-2 d-sm-none"></i></a>
	      </li>
	      <li>
	        <a class="btn btn-outline-warning font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" href="#products" style="box-shadow: none"><span class="d-none d-sm-block">Certifié</span><i class="fas fa-graduation-cap px-2 d-sm-none"></i></a>
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
			<i class="fas fa-info-circle fa-5x"></i>
			<h3 class="h3 font-weight-bold text-uppercase my-3">a propos</h3>
			<p class="lead font-weight-bold text-justify text-indent">Programme Soroban pour la calculer mental est un programme d'éducation et de formation pour les enfants, visant leurs capacités mentales, et le développement de leurs pensées, de leurs concentrations,de leurs précisions et de leurs observations...  Le programme dépend de la technologie moderne dans l'enseignement des mathématiques .A l'aide du boulier japonais "Soroban" et des nombres,l’apprenant arrive à manipuler les quatre opérations (addition, soustraction, multiplication et division) d'une manière où il y a beaucoup de plaisir et d'amusement. .</p>
			<hr class="bg-dark">
			<div class="row text-center">
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Fixation</h4>
					<i class="fas fa-anchor fa-2x my-2"></i>
					<p class="font-weight-bold">Développer la capacité mentale du cerveau et fixer l'image mentale.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Important</h4>
					<i class="fas fa-briefcase fa-2x my-2"></i>
					<p class="font-weight-bold">Développer les capacités de réflexion, de concentration, de précision,  d'observation et d'analyse.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Puissant</h4>
					<i class="fas fa-bolt fa-2x my-2"></i>
					<p class="font-weight-bold">Renforcer l'imagination et stimuler le cerveau.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Fiable</h4>
					<i class="far fa-smile fa-2x my-2"></i>
					<p class="font-weight-bold">Créativité, initiative et  concurrence loyale.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Aimable</h4>
					<i class="fas fa-heart fa-2x my-2"></i>
					<p class="font-weight-bold">Faire aimer les mathématiques et lui apprendre confiance en lui et autosuffisant.</p>
				</div>
				<div class="col-sm-6 col-md-4 border border-dark border-top-0 border-left-0 border-right-0 py-3">
					<h4 class="h4 font-weight-bold">Utile</h4>
					<i class="fas fa-graduation-cap fa-2x my-2"></i>
					<p class="font-weight-bold">Relier le lobe droit et gauche du cerveau et les rendre en harmonie.</p>
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
				    <h5 class="font-weight-bold">François leclerc</h5>
				    <p>Programme très utile pour l'intelligence</p>
			    </div>
			    <div class="carousel-item">
						<h5 class="font-weight-bold">Auderie fallois</h5>
				    <p>Ça m'as beaucoup aidé à se concentrer sur mes études</p>
			    </div>
			    <div class="carousel-item">
						<h5 class="font-weight-bold">Travis noisy</h5>
				    <p>J'ai beaucoup aimé le math graçe à ce programme</p>
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
			<h3 class="h3 font-weight-bold text-uppercase my-3">Certificat du site</h3>
			<img class="img-fluid img-thumbnail" src="../images/soroban_book.jpg" alt="Generic placeholder image">
			<p class="lead font-weight-bold text-justify text-indent mt-3">
				Nous vous proposons un cours de très haute qualité visant toutes les compétences requises pour acquerir un niveau professionnel au programme soroban pour le dévelopement de l'intelligence. En outre, un certificat de fin de cours vous sera offert gratuitement.
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
			<h3 class="h3 font-weight-bold text-uppercase my-3">Statistiques</h3>
			<hr class="bg-dark">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-sm-6">
						<i class="fas fa-2x fa-users"></i>
						<h5>Membres</h5>
						<ul class="list-group pr-0">
						  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-dark text-warning border-warning">
						    Aujourd'hui
						    <span class="badge badge-warning badge-pill"><?php echo $members_day; ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-warning border-warning">
						    Ce mois
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
						<h5>Visites</h5>
						<ul class="list-group pr-0">
						  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-dark text-warning border-warning">
						    Aujourd'hui
						    <span class="badge badge-warning badge-pill"><?php echo $visits_day; ?></span>
						  </li>
						  <li class="list-group-item d-flex justify-content-between align-items-center bg-dark text-warning border-warning">
						    Ce mois
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
				<h3 class="h3 font-weight-bold text-uppercase my-3">Contactez nous</h3>
				<hr class="bg-warning">
				<div class="row justify-content-center text-left">
					<div class="col-md-8 py-3">
						<form class="" action="" method="post" novalidate autocomplete="off">
							<fieldset class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="name" class="form-label">Nom et prénom</label>
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
							<li><i class="fas fa-briefcase mr-2"></i>Professeur EP</li>
							<li><i class="fas fa-map-marker-alt mr-2"></i>Tarrast - inzgane</li>
							<li><i class="fas fa-phone mr-2"></i>00212641636015</li>
							<li><i class="fas fa-graduation-cap mr-2"></i>Entraîneur soroban agrée</li>
							<li><i class="fas fa-laptop mr-2"></i>Programmeur - écrivain</li>
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
				<p class="m-0">Tous les droits résérvés 2016 - <?php echo date("Y"); ?></p>
				<p class="text-uppercase m-0" dir="ltr">designed by <a href="http://aws.skwila.net" target="_blank" class="text-warning"><i>aws</i></a> - <a href="../terms.php">Privacy</a></p>
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
					$("#nwsltr_status").text("Tous les champs sont obligatoires");
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
								$("#nwsltr_status").text("Nous vous remercions");
							}
						}
					});
				}
			});
    });
  </script>
</body>
</html>
