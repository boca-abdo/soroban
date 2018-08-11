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
          <?php
						require_once '../include/db.php';
						require_once '../include/security.php';
	          date_default_timezone_set("Etc/GMT");
	          $today = date("Y-m-d H:i:s");
            if (isset($_GET['e']) && isset($_GET['hash'])) {
              $e = $_GET['e'];
              $hash = $_GET['hash'];
							$query = $srbn_con->query("SELECT * FROM `recovery` WHERE `email`='$e' AND `hash`='$hash'");
							$num1 = $query->rowCount();
							$query->setFetchMode(PDO::FETCH_ASSOC);
              $row = $query->fetch();
              $today = date("Y-m-d H:i:s");
              $diff = round((strtotime($today) - strtotime($row['rec_datetime']))/(60*60));
              $query = $srbn_con->query("SELECT * FROM `users` WHERE `email`='$e'");
              $num2 = $query->rowCount();
              if ($num1 < 1 || $num2 < 1 || $diff > 24) {
          ?>
					<i class="far fa-frown animated zoomIn text-danger fa-5x mt-5"></i>
					<h1 class="text-danger animated flash infinite mt-3">Page indisponible</h1>
					<?php
              } else {
          ?>
          <div class="card bg-dark rounded-0 text-warning card-shadow mt-3">
            <div class="card-header border-warning">
              <h5 class="card-title">Changement du mot de passe</h5>
            </div>
            <div class="card-block p-3">
							<fieldset class="form-group">
								<label for="">Mot de passe</label>
	  						<input id="p" class="form-control text-center background-transparent border-warning rounded-0" type="password">
							</fieldset>
							<fieldset class="form-group">
								<label for="">Confirmer mot de passe</label>
	  						<input id="c_p" class="form-control text-center background-transparent border-warning rounded-0" type="password">
							</fieldset>
  						<button id="recover" class="btn btn-outline-warning rounded-0 my-3" type="button" name="button" style="box-shadow:none">Changer<i class="fas fa-redo ml-2"></i></button>
  						<div id="status"></div>
  					</div>
            <div class="card-footer border-warning text-sm-right">
              <a href="auth.php" class="text-warning">connexion</a>
            </div>
          </div>
          <?php
              }
            }
          ?>
      </div>
      <div class="w-100"></div>
      <?php include 'assets/footer.php' ?>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			$("#recover").on("click", function(){
				$("#status").text("");
				var p = $("#p").val();
				var c_p = $("#c_p").val();
				if (p.length < 6) {
					$("#status").text("Pas moins de 6 caractères");
				} else if (p != c_p) {
					$("#status").text("Mots de passe non identiques");
				} else {
					$.ajax({
						url: "../include/update_pass.php",
						type: "POST",
						data: {
							e: "<?php echo $_GET['e']?>",
							p: p,
						},
						error: function(stt,xhr,err) {
							console.log(err);
						},
						success: function(res) {
							if (res == "done") {
								$("#status").text("Votre mot de passe a été changé avec succes");
								setTimeout(function(){
									window.open("auth.php", "_self");
								},1000);
							}
						}
					});
				}
			});
    });
  </script>
</body>
</html>
