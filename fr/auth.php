<?php
	include '../includes/user_check.php';
	if ($log_id != "" && $log_e != "" && $log_p != "") {
		$log_stmt = $srbn_con->prepare("SELECT * FROM `users` WHERE `id`=? AND `email`=? AND `password`=?");
		$log_stmt->bindParam(1, $log_id, PDO::PARAM_INT);
    $log_stmt->bindParam(2, $log_e, PDO::PARAM_STR);
    $log_stmt->bindParam(3, $log_p, PDO::PARAM_STR);
    try {
      $log_stmt->execute();
      if ($log_stmt->rowCount() > 0) {
        $log_stmt->setFetchMode(PDO::FETCH_ASSOC);
        $log_row = $log_stmt->fetch();
				header("location: dashboard.php");
      }
    } catch (PDOException $err) {
      echo $err->getMessage();
    }
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
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '209610666128223',
	      cookie     : true,
	      xfbml      : true,
	      version    : 'v2.8'
	    });
	    FB.AppEvents.logPageView();
	  };
	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "https://connect.facebook.net/fr_FR/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
</head>
<body class="bg-warning text-dark">
	<?php include '../assets/spinner.php' ?>
  <div class="container" style="height: 100vh">
    <div class="row justify-content-center h-100">
      <div class="col-lg-8 align-self-top text-center pt-3">
        <a href="index.php"><img src="../images/logo.png" class="img-fluid" alt="Soroban logo"></a>
        <div class="card bg-dark rounded-0 text-warning card-shadow mt-3">
          <div class="card-header border-warning">
            <i class="fas fa-user-circle fa-4x"></i>
          </div>
          <div class="card-block py-3">
						<ul class="nav nav-tabs justify-content-center w-100 p-0" id="myTab" role="tablist">
						  <li class="nav-item w-50">
						    <a class="btn btn-outline-warning text-uppercase font-weight-bold active w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="box-shadow:none">connexion</a>
						  </li>
						  <li class="nav-item w-50">
						    <a class="btn btn-outline-warning text-uppercase font-weight-bold w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="box-shadow:none">inscription</a>
						  </li>
						</ul>
						<div class="tab-content p-3" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<form class="" action="" method="post" autocomplete="off" novalidate>
									<div class="row">
										<div class="col-md-6">
											<fieldset class="form-group">
				                <label for="email">Email</label>
				                <div class="input-group">
				                  <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-at"></i></span>
				                  <input type="email" id="s_e" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
				                </div>
				              </fieldset>
										</div>
										<div class="col-md-6">
											<fieldset class="form-group">
				                <label for="password">Mot de passe</label>
				                <div class="input-group">
				                  <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-lock"></i></span>
				                  <input type="password" id="s_p" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
				                </div>
				              </fieldset>
										</div>
									</div>
		              <div class="alert bg-warning text-dark rounded-0 font-weight-bold animated d-none"></div>
		              <fieldset class="form-group row justify-content-center">
		                <div class="col-sm-4 mx-auto">
		                  <button type="button" id="s_s" class="btn btn-outline-warning btn-block rounded-0" name="button">Entrer<i class="fas fa-sign-in-alt ml-2"></i></button>
		                </div>
		              </fieldset>
		            </form>
						  </div>
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<form class="" action="" method="post" autocomplete="off" novalidate>
		              <div class="row">
		                <div class="col-md-6">
		                  <fieldset class="form-group">
		                    <label for="email">Email</label>
		                    <div class="input-group">
		                      <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-at"></i></span>
		                      <input type="email" id="r_e" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
		                    </div>
		                  </fieldset>
		                </div>
		                <div class="col-md-6">
		                  <fieldset class="form-group">
		                    <label for="c_email">Confirmer email</label>
		                    <div class="input-group">
		                      <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-at"></i></span>
		                      <input type="email" id="r_e_c" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
		                    </div>
		                  </fieldset>
		                </div>
		                <div class="col-md-6">
		                  <fieldset class="form-group">
		                    <label for="fname">Nom</label>
		                    <div class="input-group">
		                      <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-user"></i></span>
		                      <input type="text" id="r_fn" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
		                    </div>
		                  </fieldset>
		                </div>
		                <div class="col-md-6">
		                  <fieldset class="form-group">
		                    <label for="lname">Prénom</label>
		                    <div class="input-group">
		                      <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-user"></i></span>
		                      <input type="text" id="r_ln" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
		                    </div>
		                  </fieldset>
		                </div>
		                <div class="col-md-6">
		                  <fieldset class="form-group">
		                    <label for="password">Mot de passe</label>
		                    <div class="input-group">
		                      <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-lock"></i></span>
		                      <input type="password" id="r_p" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
		                    </div>
		                  </fieldset>
		                </div>
		                <div class="col-md-6">
		                  <fieldset class="form-group">
		                    <label for="c_password">Confirmer mot de passe</label>
		                    <div class="input-group">
		                      <span class="input-group-prepend p-2 rounded-0 bg-warning text-dark border-left-0 border-top-0 border-bottom-0" style="background: transparent"><i class="fas fa-lock"></i></span>
		                      <input type="password" id="r_p_c" class="form-control rounded-0 text-center text-warning border-warning" style="background: transparent">
		                    </div>
		                  </fieldset>
		                </div>
		              </div>
		              <div class="alert bg-warning text-dark rounded-0 font-weight-bold animated d-none"></div>
		              <fieldset class="form-group row justify-content-center">
		                <div class="col-sm-4 mx-auto">
		                  <button type="button" id="r_s" class="btn btn-outline-warning btn-block rounded-0" name="button">Entrer<i class="fas fa-sign-in-alt ml-2"></i></button>
		                </div>
		              </fieldset>
		            </form>
						  </div>
						</div>
						<div class="row justify-content-center align-items-center px-3">
							<div class="col-3 col-sm-4 col-xl-5">
								<hr class="bg-warning">
							</div>
							<div class="col-auto">
								<span class="text-uppercase">ou</span>
							</div>
							<div class="col-3 col-sm-4 col-xl-5">
								<hr class="bg-warning">
							</div>
							<div class="w-100"></div>
							<div class="col-sm-6 col-md-4 my-2">
								<button type="button" class="btn btn-outline-warning btn-block rounded-0 text-uppercase" id="fb">facebook<i class="fab fa-facebook-square ml-2"></i></button>
							</div>
							<div class="col-sm-6 col-md-4 my-2">
								<button type="button" class="btn btn-outline-warning btn-block rounded-0 text-uppercase" id="ggl">google<i class="fab fa-google ml-2"></i></button>
							</div>
							<div class="col-12 text-center" id="scl"></div>
						</div>
          </div>
          <div class="card-footer border-warning text-sm-right">
            <a href="forget.php" class="text-warning">Mot de passe oublié?</a>
          </div>
        </div>
				<div class="alert bg-dark text-warning alert-dismissible fade show d-none rounded-0 px-5 mt-3">
					<button type="button" class="close p-3" aria-label="Close">
				    <span aria-hidden="true"><i class="fas fa-xs fa-times text-light"></i></span>
				    <span class="sr-only">Close</span>
				  </button>
					<span class="font-weight-bold">notre site utilise les cookies afin de garantir une navigation facile. pour plus d'informations veuillez lire notre charte de confidentialité à la fin de la page.</span>
				</div>
      </div>
      <div class="w-100"></div>
      <?php include 'assets/footer.php' ?>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
      var $btn,$alert,
			$s_e = $("#s_e"),
			$s_p = $("#s_p"),
			$r_e = $("#r_e"),
			$r_e_c = $("#r_e_c"),
			$r_fn = $("#r_fn"),
			$r_ln = $("#r_ln"),
			$r_p = $("#r_p"),
			$r_p_c = $("#r_p_c"),
			testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i,
			googleUser = {};
		  function startApp() {
		    gapi.load('auth2', function(){
		      auth2 = gapi.auth2.init({
		        client_id: '839308074656-uuafprdn1rqrrlik0c1go8eqdohu1d67.apps.googleusercontent.com',
		        cookiepolicy: 'single_host_origin',
		        scope: 'profile'
		      });
		      attachSignin(document.getElementById('ggl'));
		    });
		  };
		  function attachSignin(element) {
		    auth2.attachClickHandler(element, {},
	        function(googleUser) {
						$.ajax({
							url: "../includes/gglogin.php",
							type: "POST",
							data: {
								id: googleUser.getBasicProfile().getId(),
								e: googleUser.getBasicProfile().getEmail(),
								fn: googleUser.getBasicProfile().getGivenName(),
								ln: googleUser.getBasicProfile().getFamilyName(),
								pic: googleUser.getBasicProfile().getImageUrl()
							},
							success: function(res) {
								if (res === "done") {
									location.reload();
								} else {
									$("#scl").text("Erreure inattendue, veuillez réessayer plus tard");
									console.log(res);
								}
							},
							error: function(stt,xhr,err) {
								console.log(err);
							}
						});
	        }, function(error) {
	          console.log(JSON.stringify(error, undefined, 2));
	        });
		  }
			function fbAPI() {
				FB.api('/me?fields=id,email,first_name,last_name,picture', function (response) {
					$.ajax({
						url: "../includes/fblogin.php",
						type: "POST",
						data: response,
						success: function(res) {
							if (res === "done") {
								location.reload();
							} else {
								$("#scl").text("Erreure inattendue, veuillez réessayer plus tard");
								console.log(res);
							}
						},
						error: function(stt,xhr,err) {
							console.log(err);
						}
					});
				});
			}
			function testAPI() {
				FB.login(function(response) {
					if (response.status === 'connected') {
						fbAPI()
					}
				}, {scope:'email,user_birthday,user_location,user_hometown'});
			}
			function statusChangeCallback(response) {
				if (response.status === 'connected') {
					fbAPI()
				} else {
					testAPI();
				}
			}
			function checkLoginState(){
				FB.getLoginStatus(function(response) {
					statusChangeCallback(response);
				});
			}
			function alertShow(msg,al) {
				al.removeClass("d-none");
				$btn.removeClass("btn-info").addClass("btn-danger").html('Corrigez<i class="fas fa-exclamation-triangle fa-fw ml-2 animated zoomIn infinite"></i>');
				al.removeClass("fadeOut").addClass("fadeIn").text(msg);
			}
			function alertHide(al) {
				$btn.removeClass("btn-danger").addClass("btn-outline-warning").html('Entrer<i class="fas fa-sign-in-alt fa-fw ml-2"></i>');
				al.removeClass("fadeIn").addClass("fadeOut");
			}
			setTimeout(function(){
				$(".alert").last().removeClass("d-none").addClass("animated fadeInRight");
			},5000);
			$(".alert:last").on("click", ".close", function(){
				$(".alert:last").addClass("animated fadeOutLeft");
				setTimeout(function(){ // change this to trigger in the end of the animation
					$(".alert:last").addClass("d-none");
				},1000);
			});
			$("#s_s").on("click", function(){
				$btn = $(this);
				$alert = $(this).parents("fieldset").prev();
				$btn.removeClass("btn-outline-warning").addClass("btn-info").html('Patientez<i class="fas fa-spinner fa-pulse fa-fw ml-2"></i>');
				if ($s_e.val() == "") {
					alertShow("Champ obligatoire",$alert);
				} else if($s_p.val() == "") {
					alertShow("Champ obligatoire",$alert);
				} else {
					$.ajax({
						url: "../includes/sign.php",
						type: "POST",
						data: {
							e: $s_e.val(),
							p: $s_p.val()
						},
						success: function(res) {
							if (res === "email") {
								alertShow("Email indisponible",$alert);
							} else if (res === "password") {
								alertShow("Mot de passe incorrect",$alert);
							} else if (res === "success") {
								$btn.removeClass("btn-info").addClass("btn-success").html('Bienvenue<i class="fas fa-check fa-fw ml-2"></i>');
								setTimeout(function(){location.reload()},1000);
							} else {
								alertShow("Erreure inattendue, veuillez réessayer plus tard",$alert);
								console.log(res);
							}
						},
						error: function(stt,xhr,err) {
							console.log(err);
						}
					});
				}
			});
			$("#r_s").on("click", function(){
				$btn = $(this);
				$alert = $(this).parents("fieldset").prev();
				$btn.removeClass("btn-outline-warning").addClass("btn-info").html('Patientez<i class="fas fa-spinner fa-pulse fa-fw ml-2"></i>');
        if ($r_e.val() == "" || $r_fn.val() == "" || $r_ln.val() == "" || $r_p.val() == "") {
					alertShow("Champ obligatoire",$alert);
				} else if(testEmail.test($r_e.val()) == false) {
					alertShow("Email incorrect",$alert);
				} else if($r_e_c.val() == "") {
					alertShow("Confirmez votre email",$alert);
				} else if($r_e.val() !== $r_e_c.val()) {
					alertShow("Emails non identiques",$alert);
				} else if($r_p.val().length < 6) {
					alertShow("Pas moins de 6 caractères",$alert);
				} else if($r_p_c.val() == "") {
					alertShow("Confirmez votre mot de passe",$alert);
				} else if($r_p.val() !== $r_p_c.val()) {
					alertShow("Mots de passe non identiques",$alert);
				} else {
					$.ajax({
						url: "../includes/register.php",
						type: "POST",
						data: {
              e: $r_e.val(),
              fn: $r_fn.val(),
							ln: $r_ln.val(),
							p: $r_p.val()
						},
						success: function(res) {
              if (res === "email") {
								alertShow("Email incorrect",$alert);
							} else if (res === "dup") {
								alertShow("Email déjà utilisé",$alert);
							} else if (res === "pass") {
								alertShow("Pas moins de 6 caractères",$alert);
							} else if (res === "success") {
								$btn.removeClass("btn-outline-info").addClass("btn-outline-success").html('Bienvenue<i class="fas fa-check fa-fw ml-2"></i>');
								setTimeout(function() {location.reload();},1000);
							} else {
								alertShow("Erreure inattendue, veuillez réessayer plus tard",$alert);
								console.log(res);
							}
						},
						error: function(stt,xhr,err) {
							console.log(err);
						}
					});
				}
			});
			$(".form-control").on("focus", function(){
				setTimeout(function(){alertHide($(".alert"))},1000);
			});
			$("#fb").on('click', function(){
				$("#scl").text("");
				checkLoginState();
			});
			$("#ggl").on('click', function(){
				$("#scl").text("");
				startApp();
			});
    });
  </script>
</body>
</html>
