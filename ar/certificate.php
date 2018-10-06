  <?php include 'assets/header.php' ?>
        <h1 class="h1">تحميل الشهادة</h1>
				<hr>
        <?php if ($log_row['level'] >= 60): ?>
          <h2 class="h2">يمكنك تغيير الاسم ولغة الشهادة أسفله</h2>
          <div class="input-group col-lg-6 mx-auto my-3">
            <input id="full-name" class="form-control text-center border-dark text-uppercase rounded-0 mx-auto" type="text" name="" value="<?php echo $log_row['fname']." ".$log_row['lname']; ?>" style="box-shadow:none" readonly="readonly">
            <div class="input-group-append">
              <a href="profile.php" class="btn btn-outline-dark rounded-0" type="button"><i class="fas fa-edit"></i></a>
            </div>
          </div>
          <div class="row justify-content-center my-5">
            <div class="col-sm-3 mb-3">
              <a href="#" class="btn btn-block btn-outline-dark rounded-0 active" style="box-shadow:none">العربية</a>
            </div>
            <div class="col-sm-3 mb-3">
              <a href="../../fr/certificate.php" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">الفرنسية</a>
            </div>
            <div class="col-sm-3 mb-3">
              <a href="../../en/certificate.php" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow:none">الانجليزية</a>
            </div>
          </div>
          <button id="download" class="btn btn-lg btn-outline-dark rounded-0" type="button" name="button" style="box-shadow:none">تحميل الشهادة<i class="fas fa-download mr-2"></i></button>
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
			$("a[href='certificate.php'],#dropdownMenu1").addClass("active");
      $("#download").on("click", function(){
        var name = $("#full-name").val();
        if (name == "") {
          alert("المرجو كتابة اسمك كاملا في الخانة");
        } else {
          window.open("../../include/certificate.php?name="+name+"&lang=ar", "_blank");
        }
      });
		});
  </script>
</body>
</html>
