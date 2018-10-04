<?php include 'assets/header.php' ?>
				<audio id="beep">
			    <source src="../beep.mp3" type="audio/mpeg">
			    <source src="../beep.ogg" type="audio/mpeg">
			    <source src="../beep.wav" type="audio/mpeg">
			  </audio>
        <div class="row justify-content-center pt-5" id="levels">
        <?php
          $json_data = file_get_contents('../json/challenge.json');
          $data = json_decode($json_data, true);
          foreach ($data as $key => $value) {
        ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card text-warning rounded-0 d-none mb-3" style="box-shadow: -5px 5px 15px #20343B; background-color: rgba(32, 52, 59, <?php echo ($log_row['chal_level'] < $value['level']) ? '0.7' : '1' ?>)">
              <div class="card-header text-left">
                <?php echo ($log_row['chal_level'] <= $value['level']) ? "Niveau ".$key : "Niveau ".$key."<i class='far fa-lg fa-check-circle float-right'></i>" ?>
              </div>
              <div class="card-body py-0">
								<ul class="list-group p-0">
								  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-transparent border-warning">
								    Chiffres
								    <span class="badge badge-warning badge-pill"><?php echo strlen((string)$value['rank']) ?></span>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-warning">
								    Nombres
								    <span class="badge badge-warning badge-pill"><?php echo $value['numbers'] ?></span>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 bg-transparent border-warning">
								    Secondes
								    <span class="badge badge-warning badge-pill"><?php echo $value['speed']/1000 ?></span>
								  </li>
								</ul>
              </div>
              <div class="card-footer">
                <button type="button" data-level="<?php echo $value['level'] ?>" data-points="<?php echo $value['points'] ?>" class="px-5 rounded-0 btn btn-outline-warning" style="box-shadow: none"><?php echo ($log_row['chal_level'] >= $value['level']) ? "Commencer" : "Indisponible" ?></button>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
        </div>
			</div>
		</div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
			$("#spinner").addClass("d-none");
			$("a[href='challenge.php']").addClass("active");
			var i,j,dig,num,spd,lvl,points,correct,anim,answer,keyCode,rand,res,intvl,gen,clr,face;
			function nextLevel() {
				$.ajax({
					url: "../include/nextlevel.php",
					type: "POST",
					data: {lvl: lvl,points: points},
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
          face = "smile";
					correct--;
        } else {
	        face = "frown";
					correct = 3;
        }
				$("#tv").append("<div class='table-responsive w-75 pt-3 mx-auto'><table class='table table-sm table-bordered border-dark'><tr><td class='border-dark'>Réponse</td><td class='border-dark'>Correcte</td></tr><tr><td class='border-dark'>"+answer+"</td><td class='border-dark'>"+res+"</td></tr></table></div><i class='far fa-5x fa-"+face+" animated zoomIn'></i>");
				if (correct === 0) {
					nextLevel();
				} else {
					setTimeout(function(){
						showInfo();
					},4000);
				}
      }
			function showInput() {
				$("#tv").html("<div class='input-group w-75 mx-auto' dir='rtl'><div class='input-group-append'><button style='box-shadow:none' class='btn btn-lg btn-outline-dark rounded-0 bg-transparent border-left-0'><i class='fas fa-arrow-right'></i></button></div><input type='number' class='form-control text-center rounded-0 border-dark text-dark bg-transparent' style='box-shadow:none'></div>");
        $("#tv").find("input").focus().prev().on("click", "button", function(event){
          check();
        });
        $("#tv").find("input").on("keyup", function(event){
          keyCode = (event.keyCode ? event.keyCode : event.which);
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
				$("#bluestatic").removeClass("d-none").addClass("d-flex").find("#tv").html("<h1>Completez l'exercice <span>"+correct+"</span> fois pour atteindre le niveau suivant.</h1>");
				setTimeout(function(){playSerie()},2000);
			}
			function playSerie() {
        i = 0;
        res = 0;
        intvl = setInterval(function(){
          gen = Math.floor(getRandom(0.1) * Math.pow(10,dig));
          $("#beep").get(0).play();
          clr = "dark";
          if (i % 2 == 0) {
            clr = "primary";
          }
          $("#tv").html("<div class='gen text-"+clr+"'>"+gen+"</div>");
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
      j = 0;
      anim = setInterval(function(){
        $("#levels").find("div.card:eq("+j+")").removeClass("d-none").addClass("animated fadeInRight");
        j++;
        if (j > $("#levels").find("button").length) {
          clearInterval(anim);
        }
      },250);
			$("#levels").on("click", "button", function() {
				dig = Number($(this).closest(".card").find(".badge:first").text());
				num = Number($(this).closest(".card").find(".badge:eq(1)").text());
				spd = Number($(this).closest(".card").find(".badge:last").text());
				lvl = $(this).data('level');
				points = $(this).data('points');
				correct = 3;
				if ($(this).text() == "Commencer") {
					showInfo();
				}
			});
		});
  </script>
</body>
</html>
