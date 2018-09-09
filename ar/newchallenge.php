<?php include 'assets/header.php' ?>
				<audio id="beep">
			    <source src="../beep.mp3" type="audio/mpeg">
			    <source src="../beep.ogg" type="audio/mpeg">
			    <source src="../beep.wav" type="audio/mpeg">
			  </audio>
				<ul class="nav justify-content-center nav-tabs border-bottom-0 p-0 mt-3" id="main" role="tablist">
				  <li class="nav-item col-6 col-sm-3 pb-2">
				    <a class="btn btn-block btn-outline-dark rounded-0" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true" style="box-shadow: none">الجمع</a>
				  </li>
				  <li class="nav-item col-6 col-sm-3 pb-2">
				    <a class="btn btn-block btn-outline-dark rounded-0" id="sub-tab" data-toggle="tab" href="#sub" role="tab" aria-controls="sub" aria-selected="false" style="box-shadow: none">الطرح</a>
				  </li>
				  <li class="nav-item col-6 col-sm-3 pb-2">
				    <a class="btn btn-block btn-outline-dark rounded-0" id="mul-tab" data-toggle="tab" href="#mul" role="tab" aria-controls="mul" aria-selected="false" style="box-shadow: none">الضرب</a>
				  </li>
				  <li class="nav-item col-6 col-sm-3 pb-2">
				    <a class="btn btn-block btn-outline-dark rounded-0" id="div-tab" data-toggle="tab" href="#div" role="tab" aria-controls="div" aria-selected="false" style="box-shadow: none">القسمة</a>
				  </li>
				</ul>
				<div class="tab-content" id="main_content">
				  <div class="tab-pane fade pt-3" id="add" role="tabpanel">
            <div class="row justify-content-center">
            <?php
              $json_data = file_get_contents('../json/challenge.json');
              $data = json_decode($json_data, true);
              foreach ($data["add"] as $key => $value) {
            ?>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card bg-dark text-warning rounded-0 d-none mb-3" style="box-shadow: -5px 5px 15px #20343B">
                  <div class="card-header text-right">
                    <?php echo ($log_row['level'] <= $value['level']) ? "المستوى ".$key : "المستوى ".$key."<i class='far fa-lg fa-check-circle float-left'></i>" ?>
                  </div>
                  <div class="card-body py-0">
										<ul class="list-group p-0">
										  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-transparent border-warning">
										    عدد اﻷرقام
										    <span class="badge badge-warning badge-pill"><?php echo strlen((string)$value['rank']) ?></span>
										  </li>
										  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-warning">
										    عدد اﻷعداد
										    <span class="badge badge-warning badge-pill"><?php echo $value['numbers'] ?></span>
										  </li>
										  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-transparent border-warning">
										    عدد الثواني
										    <span class="badge badge-warning badge-pill"><?php echo $value['speed']/1000 ?></span>
										  </li>
										</ul>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="px-5 rounded-0 btn btn-outline-warning <?php echo ($log_row['level'] < $value['level']) ? "disabled" : "" ?>" style="box-shadow: none"><?php echo ($log_row['level'] < $value['level']) ? "غير متاح" : "أبدأ" ?></button>
                  </div>
                </div>
              </div>
            <?php
              }
            ?>
            </div>
					</div>
				  <div class="tab-pane fade pt-3" id="sub" role="tabpanel">

					</div>
				  <div class="tab-pane fade pt-3" id="mul" role="tabpanel">

					</div>
				  <div class="tab-pane fade pt-3" id="div" role="tabpanel">

					</div>
				</div>
			</div>
		</div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			$("a[href='challenge.php']").addClass("active");
			var i,keyCode,cl,cls,res,gen,gen2,sr_intvl,cd_intvl,prog_intvl,wd,rand,points,result,point,fa,
			sr_num = 0,
			tbl_res = [],
			tbl_answer = [];
			function nextLevel() {
				$.ajax({
					url: "../include/nextlevel.php",
					type: "POST",
					data: {},
					error: function(stt,xhr,err) {
						console.log(xhr);
					},
					success: function(rs) {
						if (rs == "done") {
							location.reload();
						} else {
							console.log(rs);
						}
					}
				});
			}
			function check() {
        answer = $("#tv").find("input").val();
        if (res == answer) {
          $("#tv").append("<div class='text-success animated zoomIn' style='font-size: 7rem'>"+res+"</div>");
					correct--;
        } else {
	        $("#tv").append("<div class='text-danger animated zoomIn' style='font-size: 7rem'>"+res+"</div>");
					correct = 3;
        }
				if (correct === 0) {
					nextLevel();
				} else {
					setTimeout(function(){
						showInfo();
					},1500);
				}
      }
			function showInput() {
				$("#tv").html("<div class='input-group w-75 mx-auto'><div class='input-group-append'><button style='box-shadow:none' class='btn btn-lg btn-outline-light rounded-0 bg-transparent border-left-0'><i class='fas fa-arrow-right'></i></button></div><input type='number' class='form-control text-center rounded-0 border-light text-light bg-transparent' style='box-shadow:none'></div>");
          $("#tv").find("input").focus().prev().on("click", "button", function(event){
            check();
          });
          $("#tv").find("input").on("keyup", function(event){
            var keyCode = (event.keyCode ? event.keyCode : event.which);
            if (keyCode == 13) {
              check();
            }
          });
			}
			function getRandom(min) {
				rand = Math.random();
				while (rand < min) {
					rand = Math.random();
				}
				return rand;
			}
			function showInfo() {
				$("#bluestatic").removeClass("d-none").addClass("d-flex").find("#tv").html("<h1>يجب عليك اجتياز هذا التمرين <span>"+correct+"</span> مرات متتالية للوصول إلى المستوى الموالي.</h1>");
				setTimeout(function(){playSerie()},2000);
			}
			function playSerie() {
        i = 0;
        res = 0;
        intvl = setInterval(function(){
          gen = Math.floor(getRandom(0.1) * Math.pow(10,dig));
          $("#beep").get(0).play();
          clr = "light";
          if (i % 2 == 0) {
            clr = "warning";
          }
          $("#tv").html("<div class='text-"+clr+"' style='font-size: 7rem; text-shadow: -2px 2px 5px #000'>"+gen+"</div>");
          res += gen;
          i++;
          if (i == num) {
            clearInterval(intvl);
						setTimeout(function(){
							console.log(res);
							showInput();
						},spd * 1000);
          }
        },spd * 1000);
      }
			$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        tab = $(this).attr('href');
        i = 0;
        anim = setInterval(function(){
          $(tab).find("div.card:eq("+i+")").removeClass("d-none").addClass("animated fadeInRight");
          i++;
          if (i > $(tab).find("button").length) {
            clearInterval(anim);
          }
        },250);
			});
			$(".tab-pane").on("click", "button", function() {
				dig = Number($(this).closest(".card").find(".badge:first").text());
				num = Number($(this).closest(".card").find(".badge:eq(1)").text());
				spd = Number($(this).closest(".card").find(".badge:last").text());
				correct = 3;
				showInfo();
			});
		});
  </script>
</body>
</html>
