<?php include 'assets/header.php' ?>
				<h1 class="h1 d-none d-md-block mb-3">احصائيات النقط التي سجلتها</h1>
				<h4 class="h4 d-md-none mb-3">احصائيات النقط التي سجلتها</h4>
				<div class="row justify-content-center" id="views">
					<div class="col-sm-3 mb-2">
						<button type="button" class="btn btn-block btn-outline-dark rounded-0 active" style="box-shadow: none">سنة<span id="year" class="mr-2"><?php echo $year ?></span></button>
					</div>
					<div class="col-sm-3 mb-2">
						<button type="button" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">اﻷسبوع<span id="week" class="mr-2"><?php echo $week ?></span></button>
					</div>
					<div class="col-sm-3 mb-2">
						<button type="button" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">شهر<span id="month" class="mr-2"><?php echo $month_arr[$month][0] ?></span></button>
					</div>
					<div class="col-sm-3 mb-2">
						<button type="button" class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">اليوم<span id="day" class="mr-2"><?php echo $day ?></span></button>
					</div>
				</div>
				<hr class="bg-dark">
				<h1 class="h1 d-none d-md-block mb-3 dp">السنوات</h1>
				<h4 class="h4 d-md-none mb-3 dp">السنوات</h4>
				<div class="row justify-content-center" id="calendar"></div>
				<hr class="bg-dark">
				<div class="w-100 my-3">
					<div class="chart-container w-100"></div>
				</div>
			</div>
		</div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			var i,lbls,b_lbls,e_lbls,b_points,e_points,
			view = "year",
			year = <?php echo $year ?>,
			month = <?php echo $month ?>,
			week = <?php echo $week ?>,
			day = <?php echo $day ?>,
			ttl = "مبيان نقط سنة " + year,
			months = [
				{
					days: 31,
					name: "يناير"
				},{
					days: 28,
					name: "فبراير"
				},{
					days: 31,
					name: "مارس"
				},{
					days: 30,
					name: "أبريل"
				},{
					days: 31,
					name: "ماي"
				},{
					days: 30,
					name: "يونيو"
				},{
					days: 31,
					name: "يوليوز"
				},{
					days: 31,
					name: "غشت"
				},{
					days: 30,
					name: "شتنبر"
				},{
					days: 31,
					name: "أكتوبر"
				},{
					days: 30,
					name: "نونبر"
				},{
					days: 31,
					name: "دجنبر"
				}
			];
			function createChart(l,b,e){
				$('.chart-container').find("canvas").remove();
				$('.chart-container').append('<canvas id="chart"></canvas>');
				var ctx = document.getElementById('chart').getContext('2d');
				document.getElementById('chart').style.height = "600px";
				var myChart = new Chart(ctx, {
					type: "horizontalBar",
					data: {
						labels: l,
						datasets: [{
							label: "المبتدئين",
							data: b,
							backgroundColor: 'rgba(192, 57, 43,1.0)',
							lineTension: 0,
							fill: true,
							borderColor: 'rgba(72,33,33,1)',
							borderWidth: 1,
							borderDash: [0],
							pointBorderColor: 'red',
							pointBackgroundColor: 'red',
							steppedLine: false,
						},{
							label: "المتفوقين",
							data: e,
							backgroundColor: 'rgba(44, 62, 80,1.0)',
							lineTension: 0,
							fill: true,
							borderColor: 'rgba(0,0,0,1)',
							borderWidth: 1,
							borderDash: [0],
							pointBorderColor: 'red',
							pointBackgroundColor: 'red',
							steppedLine: false,
						}],
					},
			    options: {
						title: {
            	display: true,
            	text: ttl
        		},
						scales: {
			        yAxes: [{
			          ticks: {
		            	min: 0,
									max: 100,
			          }
		        	}]
		        }
			    }
				});
			}
			function getData(v,y,m,w,d) {
				$("#spinner").removeClass("d-none").addClass("d-flex");
				$(".chart-container").html("");
				lbls = [];
				b_lbls = [];
				e_lbls = [];
				b_points = [];
				e_points = [];
				$.ajax({
					url: "../includes/get_points_data.php",
					type: "POST",
					data: {
						v: v,
						y: y,
						m: m,
						w: w,
						d: d
					},
					error: function(stt,xhr,err) {
						console.log(err)
					},
					success: function(res) {
						data = JSON.parse(res);
						for (i = 0; i < data.b.points.length; i++) {
							b_lbls[i] = "المحاولة " + (i+1);
							b_points[i] = Number(data.b.points[i]);
						}
						for (i = 0; i < data.e.points.length; i++) {
							e_lbls[i] = "المحاولة " + (i+1);
							e_points[i] = Number(data.e.points[i]);
						}
						lbls = b_lbls;
						if (e_lbls.length > b_lbls.length) {
							lbls = e_lbls;
						}
						if (lbls.length > 0) {
							createChart(lbls,b_points,e_points);
						} else {
							$(".chart-container").html("<h3 class='animated flash infinite text-danger'>لا توجد معطيات لهذا التاريخ</h3>");
						}
					},
					complete: function() {
						$("#spinner").removeClass("d-flex").addClass("d-none");
					}
				});
			}
			function fillCalendar(v) {
				$("#spinner").removeClass("d-none").addClass("d-flex");
				$("#calendar").html("");
				switch (v) {
					case "year":
						i = 2016;
						while (i <= <?php echo date("Y") ?>) {
							$("#calendar").append('<div class="col-sm-4 pb-2"><button class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">'+i+'</button></div>');
							i++;
						}
						break;
					case "month":
						i = 0;
						while (i < 12) {
							i++;
							if (i < 10) {
								$("#calendar").append('<div class="col-4 col-sm-3 pb-2"><button class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">0'+i+'</button></div>');
							} else {
								$("#calendar").append('<div class="col-4 col-sm-3 pb-2"><button class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">'+i+'</button></div>');
							}
						}
						break;
					case "week":
						i = 0;
						while (i < 52) {
							i++;
							if (i < 10) {
								$("#calendar").append('<div class="col-3 col-sm-2 col-lg-1 pb-2"><button class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">0'+i+'</button></div>');
							} else {
								$("#calendar").append('<div class="col-3 col-sm-2 col-lg-1 pb-2"><button class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">'+i+'</button></div>');
							}
						}
						break;
					case "day":
						i = 0;
						while (i < months[month-1].days) {
							i++;
							if (i < 10) {
								$("#calendar").append('<div class="col-3 col-sm-2 col-lg-1 pb-2"><button class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">0'+i+'</button></div>');
							} else {
								$("#calendar").append('<div class="col-3 col-sm-2 col-lg-1 pb-2"><button class="btn btn-block btn-outline-dark rounded-0" style="box-shadow: none">'+i+'</button></div>');
							}
						}
						break;
				}
				$.ajax({
					url: "../includes/get_active_days.php",
					type: "POST",
					data: {
						v: v,
						y: year,
						m: month,
						w: week,
						d: day,
					},
					error: function(stt,xhr,err) {
						console.log(err)
					},
					success: function(res) {
						// console.log(res);
						data = JSON.parse(res);
						for (i = 0; i < data.length; i++) {
							$("#calendar").find("button:contains("+data[i]+")").addClass("active");
						}
					},
					complete: function() {
						$("#spinner").removeClass("d-flex").addClass("d-none");
					}
				});
			}
			fillCalendar(view);
			getData(view,year,month,week,day);
			$("#views").on("click", "button", function(){
				$("#views").find("button").removeClass("active");
				$(this).addClass("active");
				view = $(this).find("span").attr("id");
				switch (view) {
					case 'year':
						$(".dp").text("السنوات");
						$(".st").text("مبيان نقط سنة " + year);
						break;
					case 'month':
						$(".dp").text("أشهر سنة " + year);
						$(".st").text("مبيان نقط شهر " + months[month-1].name + " " + year);
						break;
					case 'week':
						$(".dp").text("أسابيع سنة " + year);
						$(".st").text("مبيان نقط اﻷسبوع " + week + " من سنة " + year);
						break;
					case 'day':
						$(".dp").text("أيام شهر " + months[month-1].name + " " + year);
						$(".st").text("مبيان نقط يوم " + day + " " + months[month-1].name + " " + year);
						break;
				}
				fillCalendar(view);
				getData(view,year,month,week,day);
			});
			$("#calendar").on("click", "button", function(e){
				val = Number($(this).text());
				switch (view) {
					case "year":
						$("span#year").text(val);
						$("span#week").text(1);
						year = val;
						week = 1;
						ttl = "مبيان نقط سنة " + year;
						break;
					case "month":
						$("span#month").text(months[val-1].name);
						$("span#day").text(1);
						month = val;
						day = 1;
						ttl = "مبيان نقط شهر " + months[month-1].name + " " + year;
						break;
					case "week":
						$("span#week").text(val);
						week = val;
						ttl = "مبيان نقط اﻷسبوع " + week + " من سنة " + year;
						break;
					case "day":
						$("span#day").text(val);
						day = val;
						ttl = "مبيان نقط يوم " + day + " " + months[month-1].name + " " + year;
						break;
				}
				getData(view,year,month,week,day);
			});
		});
  </script>
</body>
</html>
