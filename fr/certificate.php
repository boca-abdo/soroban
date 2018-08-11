  <?php include 'assets/header.php' ?>
        <h1 class="h1 text-uppercase">Télécharger le certificat</h1>
				<hr>
        <?php if ($log_row['level'] >= 60): ?>
          <h2 class="h2">Vous pouvez changer votre nom et la langue du certificat</h2>
          <div class="input-group col-lg-6 mx-auto my-3">
            <input id="full-name" class="form-control text-center border-dark text-uppercase rounded-0 mx-auto" type="text" name="" value="<?php echo $log_row['fname']." ".$log_row['lname']; ?>" style="box-shadow:none" readonly="readonly">
            <div class="input-group-append">
              <a href="profile.php" class="btn btn-outline-dark rounded-0" type="button"><i class="fas fa-edit"></i></a>
            </div>
          </div>
          <div class="row justify-content-center text-uppercase my-5">
            <div class="col-sm-3 pb-3">
              <a href="../../ar/certificate.php" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">arabe</a>
            </div>
            <div class="col-sm-3 pb-3">
              <a href="#" class="btn btn-block btn-outline-dark rounded-0 active" style="box-shadow:none">français</a>
            </div>
            <div class="col-sm-3 pb-3">
              <a href="../../en/certificate.php" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">anglais</a>
            </div>
          </div>
          <button id="download" class="btn btn-lg btn-outline-dark text-uppercase rounded-0" type="button" name="button" style="box-shadow:none">Télécharger<i class="fas fa-download ml-2"></i></button>
        <?php else: ?>
          <h1 class="h1 text-danger animated flash infinite">يجب عليك اتمام جميع التمارين قبل الحصول على الشهادة</h1>
        <?php endif; ?>
			</div>
		</div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#spinner").addClass("d-none");
      $("#download").on("click", function(){
        var name = $("#full-name").val();
        if (name == "") {
          alert("Veuillez tapez votre nom dans la case");
        } else {
          window.open("../../include/certificate.php?lang=fr", "_blank");
        }
      });
		});
  </script>
</body>
</html>
