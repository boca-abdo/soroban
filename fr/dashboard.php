<?php include 'assets/header.php' ?>
				<h2 class="h2">سينتهي هذا اﻷسبوع بعد</h2>
				<div class="row justify-content-center" id="nextweek">
					<div class="col-auto h4 font-weight-bold rounded-circle bg-dark text-warning" style="height:60px; width:60px; padding-top: 13px"></div>
					<div class="col-auto h4 font-weight-bold rounded-circle bg-dark text-warning" style="height:60px; width:60px; padding-top: 13px"></div>
					<div class="col-auto h4 font-weight-bold rounded-circle bg-dark text-warning" style="height:60px; width:60px; padding-top: 13px"></div>
					<div class="col-auto h4 font-weight-bold rounded-circle bg-dark text-warning" style="height:60px; width:60px; padding-top: 13px"></div>
				</div>
				<div class="row justify-content-center">
					<div class="" style="width:60px"></div>
					<div class="" style="width:60px"></div>
					<div class="" style="width:60px"></div>
					<div class="" style="width:60px"></div>
				</div>
				<div class="row justify-content-center">
		      <div class="col-md-6 pt-3">
		        <div class="card bg-dark text-warning rounded-0">
		          <div class="card-header">
								<h4 class="card-title">قسم المبتدئين</h4>
		          </div>
		          <div class="card-block">
		            <ul class="nav nav-tabs justify-content-center w-100 p-0" id="beginners-tab" role="tablist">
		              <li class="nav-item w-50">
		                <a class="btn btn-outline-warning active w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="week1-tab" data-toggle="tab" href="#week1" role="tab" aria-controls="week1" aria-selected="true" style="box-shadow:none">الترتيب الاسبوعي</a>
		              </li>
		              <li class="nav-item w-50">
		                <a class="btn btn-outline-warning w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="all1-tab" data-toggle="tab" href="#all1" role="tab" aria-controls="all1" aria-selected="false" style="box-shadow:none">الترتيب العام</a>
		              </li>
		            </ul>
		            <div class="tab-content p-3" id="beginners">
			            <div class="tab-pane fade show active" id="week1" role="tabpanel" aria-labelledby="week1-tab">
			              <table class="table table-sm table-hover table-bordered table-striped text-right">
			                <thead>
			                  <tr>
			                    <th>المركز</th>
			                    <th>العضو</th>
			                    <th>النقاط</th>
			                  </tr>
			                </thead>
			                <tbody></tbody>
			              </table>
										<button type="button" class="btn btn-outline-warning rounded-0 d-block mt-3 mx-auto" style="box-shadow:none" data-toggle="modal" data-target="#Mymodal" data-list="bw">الترتيب الكامل<i class="fas fa-list-ol mr-2"></i></button>
			            </div>
			            <div class="tab-pane fade" id="all1" role="tabpanel" aria-labelledby="all-tab">
										<table class="table table-sm table-hover table-bordered table-striped text-right">
			                <thead>
			                  <tr>
			                    <th>المركز</th>
			                    <th>العضو</th>
			                    <th>النقاط</th>
			                  </tr>
			                </thead>
			                <tbody></tbody>
			              </table>
										<button type="button" class="btn btn-outline-warning rounded-0 d-block mt-3 mx-auto" style="box-shadow:none" data-toggle="modal" data-target="#Mymodal" data-list="bt">الترتيب الكامل<i class="fas fa-list-ol mr-2"></i></button>
			            </div>
			          </div>
		          </div>
							<div class="card-footer justify-content-center">
								<a href="challenge.php" class="btn btn-outline-warning rounded-0">دخول القسم<i class="fas fa-sign-in-alt mr-2"></i></a>
		          </div>
		        </div>
		      </div>
					<div class="col-md-6 pt-3">
		        <div class="card bg-dark text-warning rounded-0">
		          <div class="card-header">
								<h4 class="card-title">قسم المتفوقين</h4>
		          </div>
		          <div class="card-block">
		            <ul class="nav nav-tabs justify-content-center w-100 p-0" id="experts-tab" role="tablist">
		              <li class="nav-item w-50">
		                <a class="btn btn-outline-warning active w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="week2-tab" data-toggle="tab" href="#week2" role="tab" aria-controls="week2" aria-selected="true" style="box-shadow:none">الترتيب الاسبوعي</a>
		              </li>
		              <li class="nav-item w-50">
		                <a class="btn btn-outline-warning w-100 rounded-0 border-right-0 border-left-0 border-top-0 border-bottom-0" id="all2-tab" data-toggle="tab" href="#all2" role="tab" aria-controls="all2" aria-selected="false" style="box-shadow:none">الترتيب العام</a>
		              </li>
		            </ul>
		            <div class="tab-content p-3" id="experts">
			            <div class="tab-pane fade show active" id="week2" role="tabpanel" aria-labelledby="week2-tab">
			              <table class="table table-sm table-hover table-bordered table-striped text-right">
			                <thead>
			                  <tr>
			                    <th>المركز</th>
			                    <th>العضو</th>
			                    <th>النقاط</th>
			                  </tr>
			                </thead>
			                <tbody></tbody>
			              </table>
										<button type="button" class="btn btn-outline-warning rounded-0 d-block mt-3 mx-auto" style="box-shadow:none" data-toggle="modal" data-target="#Mymodal" data-list="ew">الترتيب الكامل<i class="fas fa-list-ol mr-2"></i></button>
			            </div>
			            <div class="tab-pane fade" id="all2" role="tabpanel" aria-labelledby="all2-tab">
										<table class="table table-sm table-hover table-bordered table-striped text-right">
			                <thead>
			                  <tr>
			                    <th>المركز</th>
			                    <th>العضو</th>
			                    <th>النقاط</th>
			                  </tr>
			                </thead>
			                <tbody></tbody>
			              </table>
										<button type="button" class="btn btn-outline-warning rounded-0 d-block mt-3 mx-auto" style="box-shadow:none" data-toggle="modal" data-target="#Mymodal" data-list="et">الترتيب الكامل<i class="fas fa-list-ol mr-2"></i></button>
			            </div>
			          </div>
		          </div>
		          <div class="card-footer justify-content-center">
								<a href="challenge.php" class="btn btn-outline-warning rounded-0">دخول القسم<i class="fas fa-sign-in-alt mr-2"></i></a>
		          </div>
		        </div>
		      </div>
				</div>
	    </div>
	  </div>
		<div id="Mymodal" class="modal fade bd-example-modal-lg mt-5">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content bg-dark text-warning text-center">
					<div class="modal-header p-0">
						<h3 class="modal-title mx-auto p-3">الترتيب الكامل</h3>
						<button type="button" class="btn btn-sm btn-danger rounded-0" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</div>
					<div class="modal-body p-0">
						<div class="table-responsive">
						  <table class="table table-sm table-dark text-warning">
						    <thead>
									<th>المركز</th>
									<th>العضو</th>
									<th>المدينة</th>
									<th>اﻷستاذ</th>
						    	<th>النقاط</th>
						    </thead>
								<tbody></tbody>
						  </table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			var days,hours,minutes,seconds,days_disp,hours_disp,minutes_disp,seconds_disp,
			username = "<?php echo $log_row['fname'].' '.$log_row['lname'] ?>",
			points = [];
			points["bw"] = <?php echo $log_row['b_points'] ?>;
			points["ew"] = <?php echo $log_row['e_points'] ?>;
			function getData(lst,tbl,tbody) {
				tbody.html("");
				$.ajax({
					url: "../includes/getlist.php",
					type: "POST",
					data: {
						lst: lst,
						tbl: tbl
					},
					error: function(stt,xhr,err) {
						console.log(err);
					},
					success: function(res) {
						var data = JSON.parse(res);
						for (var i = 0; i < data.length; i++) {
							if (lst == "nor") {
								tbody.append("<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td></tr>");
							}
							if (lst == "mdl") {
								tbody.append("<tr><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td><td>"+data[i][4]+"</td></tr>");
							}
						}
					},
					complete: function() {
						row = tbody.find("tr");
						if (row.length == 4 && lst == "nor") {
							row.last().addClass("bg-warning text-dark").before("<tr><td colspan='3' class='text-center'>مركزك الحالي هو</td></tr>");
						}
						if (row.length == 0) {
							tbody.parent().after("<a class='text-warning animated bounceIn infinite' href='challenge.php'>كن أول من يسجل نقاطا هذا اﻷسبوع من هنا</a>");
						}

						if (lst == "mdl") {
							row.each(function(){
								if ($(this).find("td:eq(1)").text() == username) {
									$(this).addClass("bg-warning text-dark font-weight-bold");
								}
							});
						} else {
							if ((tbl == "bw" && row.length != 0) || (tbl == "ew" && row.length != 0)) {
								var names = "";
								row.each(function(){
									names += $(this).find("td:eq(1)").text();
								});
								if (names.search(username) == -1) {
									tbody.parent().after("<a class='text-warning animated bounceIn infinite' href='challenge.php'>سجل أول نقاطك لهذا اﻷسبوع من هنا</a>");
								} else {
									if (points[tbl] != 100) {
										tbody.parent().after("<a class='text-warning animated bounceIn infinite' href='challenge.php'>أحصل على نقاط أكثر من هنا</a>");
									}
								}
							}
						}
					}
				});
			}
			getData("nor","bw",$("tbody:eq(0)"));
			getData("nor","bt",$("tbody:eq(1)"));
			getData("nor","ew",$("tbody:eq(2)"));
			getData("nor","et",$("tbody:eq(3)"));
			$("#Mymodal").on('show.bs.modal', function (e) {
				var button = $(e.relatedTarget);
  			var recipient = button.data('list');
				getData("mdl",recipient,$(this).find("tbody"));
			});
			$("#nextweek").countdown("<?php echo $next_monday; ?>", function(event) {
				days = Number(event.strftime("%D"));
				hours = Number(event.strftime("%H"));
				minutes = Number(event.strftime("%M"));
				seconds = Number(event.strftime("%S"));
				if (days < 3) {
					days_disp = "يوم";
				} else {
					days_disp = "أيام";
				}
				if (hours > 1 && hours < 11) {
					hours_disp = "ساعات";
				} else {
					hours_disp = "ساعة";
				}
				if (minutes > 1 && minutes < 11) {
					minutes_disp = "دقائق";
				} else {
					minutes_disp = "دقيقة";
				}
				if (seconds > 1 && seconds < 11) {
					seconds_disp = "ثواني";
				} else {
					seconds_disp = "ثانية";
				}
				$(this).find("div:eq(0)").text(event.strftime('%D'));
				$(this).find("div:eq(1)").text(event.strftime('%H'));
				$(this).find("div:eq(2)").text(event.strftime('%M'));
				$(this).find("div:eq(3)").text(event.strftime('%S'));
				$(this).next().find("div:eq(0)").text(days_disp);
				$(this).next().find("div:eq(1)").text(hours_disp);
				$(this).next().find("div:eq(2)").text(minutes_disp);
				$(this).next().find("div:eq(3)").text(seconds_disp);
			});
    });
  </script>
</body>
</html>
