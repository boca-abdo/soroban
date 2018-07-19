<?php include 'assets/header.php' ?>
				<div class="card bg-dark text-warning rounded-0 mt-3">
          <div class="card-header">
						<h4 class="card-title">المعلومات الشخصية</h4>
          </div>
          <div class="card-block p-3">
						<div class="mx-auto position-relative" style="width:150px;height:150px">
							<img id="avatar" src="<?php echo $path; ?>" alt="Profile picture" class="rounded-circle h-100 w-100">
	            <input type="file" class="position-absolute rounded-circle myfile">
						</div>
            <form class="form-row justify-content-center" action="" method="post" autocomplete="off" novalidate>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="fname">الاسم العائلي</label>
                  <input id="fname" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" type="text" style="background:transparent" value="<?php echo $log_row['fname'] ?>">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="lname">الاسم الشخصي</label>
                  <input id="lname" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" type="text" style="background:transparent" value="<?php echo $log_row['lname'] ?>">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="adress">العنوان</label>
                  <input id="adress" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" type="text" style="background:transparent" value="<?php echo $log_row['adress'] ?>">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="city">المدينة</label>
                  <input id="city" onkeydown="initialize()" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" type="text" style="background:transparent" value="<?php echo $log_row['city'] ?>">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="tel">رقم الهاتف</label>
                  <input id="tel" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" type="text" style="background:transparent" value="<?php echo $log_row['tel'] ?>">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset class="form-group">
                  <label for="teacher">الأستاذ</label>
                  <input id="teacher" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" type="text" style="background:transparent" value="<?php echo $log_row['teacher'] ?>">
                </fieldset>
              </div>
							<div class="col-md-6">
                <fieldset class="form-group">
                  <label for="b_date">تاريخ الازدياد</label>
                  <input id="b_date" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" type="date" max="<?php echo date("Y-m-d") ?>" style="background:transparent" value="<?php echo $log_row['b_date'] ?>">
                </fieldset>
              </div>
							<div class="col-md-6">
								<label>الرمز السري</label>
								<button type="button" class="btn btn-block btn-outline-warning font-weight-bold rounded-0" data-toggle="modal" data-target="#Modal">تحديث الرمز السري</button>
							</div>
            </form>
          </div>
					<div class="card-footer justify-content-center" style="overflow:hidden">
						<span class="d-block text-danger"></span>
						<button id="update" type="button" class="btn btn-outline-warning rounded-0 my-3 px-5">تحديث<i class="fas fa-sign-in-alt mr-2"></i></a>
          </div>
        </div>
			</div>
		</div>
		<?php include 'assets/footer.php' ?>
		<div id="Modal" class="modal fade mt-5">
			<div class="modal-dialog" role="document">
				<div class="modal-content bg-dark text-warning text-center">
					<div class="modal-header p-0">
						<h3 class="modal-title p-3">تحديث الرمز السري</h3>
						<button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</div>
					<div class="modal-body">
            <form class="" action="" method="post" autocomplete="off" novalidate>
              <fieldset class="form-group">
                <label for="old">الرمز السري السابق</label>
                <input type="password" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" style="background:transparent" id="old">
              </fieldset>
              <fieldset class="form-group">
                <label for="password">الرمز السري الجديد</label>
                <input type="password" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" style="background:transparent" id="password">
              </fieldset>
							<fieldset class="form-group">
                <label for="c_password">تأكيد الرمز السري</label>
                <input type="password" class="form-control rounded-0 border-warning text-center text-warning font-weight-bold" style="background:transparent" id="c_password">
              </fieldset>
            </form>
					</div>
					<div class="modal-footer justify-content-center">
						<div class="w-100 text-danger"></div>
						<button type="button" class="btn btn-block btn-outline-warning rounded-0" id="pass">تحديث<i class="fas fa-sign-in-alt mr-2"></i></button>
					</div>
				</div>
			</div>
		</div>
  </div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-DwrDvpw1603_mFQ_15Q5dsMT3HNuNP4&libraries=places"></script>
	<script type="text/javascript">
		var geocoder;
		function initialize() {
			geocoder = new google.maps.Geocoder();
		 	var input = document.getElementById("city");
		 	var autocomplete = new google.maps.places.Autocomplete(input);
		}
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			var $btn = $("#update"),
			testTel = new RegExp('^[0-9]+$');
			function alertShow(msg) {
				$btn.removeClass("btn-outline-info").addClass("btn-outline-danger").html("هناك خطأ<i class='fas fa-exclamation-triangle animated bounceIn infinite mr-2'></i>").prev().removeClass("animated fadeOutLeft").addClass("animated fadeInRight").text(msg);
			}
			function alertHide() {
				$btn.removeClass("btn-outline-danger").addClass("btn-outline-warning").html("تحديث<i class='fas fa-sign-in-alt mr-2'></i>").prev().removeClass("animated fadeInRight").addClass("animated fadeOutLeft");
			}
			$(".myfile").on('change', function(){
				$("#spinner").removeClass("d-none").addClass("d-flex");
				$btn = $("#update");
				alertHide();
				$btn.removeClass("btn-outline-warning").addClass("btn-outline-info").html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
				var file = $(this).prop("files")[0]
				if (file.type != "image/jpeg") {
					alertShow("لا يسمح الا بالصور من فئة jpg");
				} else if (file.size > 5000000) {
					alertShow("حجم الصورة لا يجب أن يتعدى 5 ميجا");
				} else {
					formdata = new FormData();
					formdata.append("file", file);
					$.ajax({
						url: "../includes/file_upload.php",
		        type: "POST",
		        dataType: 'text',
		        cache: false,
		        contentType: false,
		        processData: false,
		        data: formdata,
						error: function(stt,xhr,err) {
							console.log(err);
						},
		        success: function(res){
							if (res == "done") {
								$btn.removeClass("btn-outline-info").addClass("btn-outline-success").html("تم بنجاح<i class='fas fa-check mr-2'></i>");
								setTimeout(function(){location.reload()},1000);
							} else if (res == "size") {
								alertShow("حجم الصورة لا يجب أن يتعدى 5 ميجا");
							} else if (res == "type") {
								alertShow("لا يسمح الا بالصور من فئة jpg");
							} else {
								alertShow("حدث خطأ غير متوقع أثناء تحميل الصورة، المرجو اعادة المحاولة لاحقا");
								// console.log(res);
							}
		        },
						complete: function() {
							$("#spinner").removeClass("d-flex").addClass("d-none");
						}
					});
				}
			});
			$("#update").on('click', function(){
				$btn = $(this);
				alertHide();
				$btn.removeClass("btn-outline-warning").addClass("btn-outline-info").html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
				if ($("#fname").val() == "") {
					alertShow("المرجو ادخال الاسم العائلي");
				} else if ($("#lname").val() == "") {
					alertShow("المرجو ادخال الاسم الشخصي");
				} else if (testTel.test($("#tel").val()) == false) {
					alertShow("المرجو استعمال الارقام فقط");
				} else if ($("#b_date").val() == "") {
					alertShow("المرجو ادخال تاريخ ازدياد صحيح");
				} else {
					$.ajax({
						url: "../includes/profile.php",
						type: "POST",
						data: {
							fn: $("#fname").val(),
							ln: $("#lname").val(),
							ad: $("#adress").val(),
							ct: $("#city").val(),
							tl: $("#tel").val(),
							tt: $("#teacher").val(),
							bd: $("#b_date").val(),
						},
						error: function(stt,xhr,err) {
							console.log(err);
						},
						success: function(res) {
							if (res == "done") {
								$btn.removeClass("btn-outline-info").addClass("btn-outline-success").html("تم بنجاح<i class='fas fa-check mr-2'></i>");
								setTimeout(function(){location.reload()},1000);
							} else {
								console.log(res);
							}
						}
					});
				}
			});
			$("#pass").on('click', function(){
				$btn = $(this);
				alertHide();
				$btn.removeClass("btn-outline-warning").addClass("btn-outline-info").html("المرجو الانتظار<i class='fas fa-spinner fa-spin mr-2'></i>");
				if ($("#old").val() == "" || $("#password").val() == "" || $("#c_password").val() == "") {
					alertShow("يجب تعبئة جميع الخانات");
				} else if ($("#password").val().length < 6) {
					alertShow("المرجو استعمال 6 حروف على اﻷقل");
				} else if ($("#password").val() != $("#c_password").val()) {
					alertShow("الرمزان غير متطابقان");
				} else {
					$.ajax({
						url: "../includes/password.php",
						type: "POST",
						data: {
							old: $("#old").val(),
							p: $("#password").val(),
						},
						error: function(stt,xhr,err) {
							console.log(err);
						},
						success: function(res) {
							if (res == "old") {
								alertShow("الرمز السري خاطئ");
							} else if (res == "short") {
								alertShow("المرجو استعمال 6 حروف على اﻷقل");
							} else if (res == "done") {
								$btn.removeClass("btn-outline-info").addClass("btn-outline-success").html("تم بنجاح<i class='fas fa-check mr-2'></i>");
								setTimeout(function(){location.reload()},1000)
							} else {
								console.log(res);
							}
						}
					});
				}
			});
			$(".form-control").on('focus', function(){
				setTimeout(function(){alertHide()},500)
			});
		});
  </script>
</body>
</html>
