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

</head>
<body class="bg-warning text-dark">
	<?php include '../assets/spinner.php' ?>
  <div class="container" style="height: 100vh">
    <div class="row justify-content-center h-100">
      <div class="col-lg-8 align-self-top text-center pt-3">
        <a href="index.php"><img src="../images/logo.png" class="img-fluid" alt="Soroban logo"></a>
        <div class="card bg-dark rounded-0 text-warning card-shadow mt-3">
          <div class="card-header border-warning">
            <h5 class="card-title">Mot de passe oublié</h5>
          </div>
          <div class="card-block p-3">
						<label for="">Email</label>
						<input class="form-control text-center background-transparent border-warning rounded-0" type="email" name="" value="">
						<small class="form-text">
							Nous vous envoyerons un message de confirmation sur cet email
						</small>
						<button id="send" class="btn btn-outline-warning rounded-0 my-3" type="button" name="button" style="box-shadow:none">Envoyer<i class="fas fa-envelope ml-2"></i></button>
						<div id="status"></div>
						</div>
          <div class="card-footer border-warning text-sm-right">
            <a href="auth.php" class="text-warning">connexion</a>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <?php include 'assets/footer.php' ?>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			$("#send").on("click", function(){
				$("#status").text("");
				e = $("input").val();
				if (e == "") {
					$("#status").text("Email incorrect");
				} else {
					$.ajax({
						url: "../includes/recover.php",
						type: "POST",
						data: {
							e: e,
							lang: "fr"
						},
						error: function(stt,xhr,err) {
							console.log(err);
							$("#status").text("Erreure inattendue, veuillez réessayer plus tard");
						},
						success: function(res) {
							if (res == "fake") {
								$("#status").text("Cet email n'est pas disponible sur notre site");
							} else if (res == "done") {
								$("#status").text("Demande enregistrée avec succes, veuillez consultez votre boite de récéption ou spam");
							} else {
								$("#status").text("Erreure inattendue, veuillez réessayer plus tard");
							}
						}
					});
				}
			});
    });
  </script>
</body>
</html>
