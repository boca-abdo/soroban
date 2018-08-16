  <?php include 'assets/header.php' ?>
        <h1 class="h1 text-uppercase">Download your certificate</h1>
				<hr>
        <?php if ($log_row['level'] >= 60): ?>
          <h2 class="h2">You can change your name and certificate language</h2>
          <div class="input-group col-lg-6 mx-auto my-3">
            <input id="full-name" class="form-control text-center border-dark text-uppercase rounded-0 mx-auto" type="text" name="" value="<?php echo $log_row['fname']." ".$log_row['lname']; ?>" style="box-shadow:none" readonly="readonly">
            <div class="input-group-append">
              <a href="profile.php" class="btn btn-outline-dark rounded-0" type="button"><i class="fas fa-edit"></i></a>
            </div>
          </div>
          <div class="row justify-content-center text-uppercase my-5">
            <div class="col-sm-3 pb-3">
              <a href="../../ar/certificate.php" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">arab</a>
            </div>
            <div class="col-sm-3 pb-3">
              <a href="../../fr/certificate.php" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">french</a>
            </div>
            <div class="col-sm-3 pb-3">
              <a href="#" class="btn btn-block btn-outline-dark rounded-0 active" style="box-shadow:none">english</a>
            </div>
          </div>
          <button id="download" class="btn btn-lg btn-outline-dark text-uppercase rounded-0" type="button" name="button" style="box-shadow:none">Download<i class="fas fa-download ml-2"></i></button>
        <?php else: ?>
          <h1 class="h1 text-danger animated flash infinite">You should finish all the exercices to get certified</h1>
        <?php endif; ?>
			</div>
		</div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#spinner").addClass("d-none");
			$("a[href='certificate.php'],#dropdownMenu1").addClass("active");
      $("#download").on("click", function(){
        var name = $("#full-name").val();
        if (name == "") {
          alert("Please type your full name");
        } else {
          window.open("../../include/certificate.php?lang=en", "_blank");
        }
      });
		});
  </script>
</body>
</html>
