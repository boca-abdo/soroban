	<?php include 'assets/header.php' ?>
        <h1 class="h1 text-uppercase mt-3">Representation of numbers on abacus</h1>
        <ol class="text-left h3 p-0">
          <li><span class="text-uppercase">components of abacus</span>
            <img src="../../images/comp.png" alt="" class="img-fluid center-block">
            <p class="lead text-indent text-justify mt-3">The SOROBAN abacus consists of an outer wooden frame, a crossbar separating the lower and upper beads and iron bars carrying beads.</p>
          </li>
          <li><span class="text-uppercase">how to use abacus</span>
            <div class="row no-gutters">
              <div class="col-md-6">
                <figure class="figure">
        					<img class="figure-img img-fluid" src="../../images/sit1.png" alt="sitting front">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">The SOROBAN abacus must be parallel to the edge of the table and at a distance of 7 to 12 cm. To hold the abacus, two or three fingers can be used. The position of the abacus on the table must be stable and well fixed.</figcaption>
        				</figure>
              </div>
              <div class="col-md-6">
                <figure class="figure">
        					<img class="figure-img img-fluid" src="../../images/sit2.png" alt="sitting over">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">The position of the learner must be comfortable. It is recommended that the abdomen be 10 cm away from the table, and that the curvature of the person should be comfortable at an angle of 15 degrees to the horizontal of the table.</figcaption>
        				</figure>
              </div>
            </div>
          </li>
          <li><span class="text-uppercase">Representation by fingers</span>
            <p class="lead text-indent text-justify">We always start in the SOROBAN program to represent the numbers with the fingers. The maximum number that can be represented by both hands is ninety-nine instead of ten. By observing the hand, we see that it can be divided into two groups: The first is composed of four fingers with almost the same length, namely the index, the middle finger, the ring finger and the little finger. And the second containing a single finger isolated from the others named thumb.</p>
						<p class="lead text-indent text-justify">The value of each of the fingers of the first group is one, while the value of the thumb is five.</p>
						<p class="lead text-indent text-justify">The right hand is used to represent the units, while the left hand is used to represent the tens.</p>
            <hr>
            <h5 class="h5 text-center font-weight-bold my-3">representation of units</h5>
            <div class="row no-gutters justify-content-center">
              <?php
                $i = 1;
                while ($i < 10) {
              ?>
              <div class="col-4 col-sm-2">
                <figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/hands/hand_<?php echo $i ?>.png" alt="hand">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">number <?php echo $i ?></figcaption>
        				</figure>
              </div>
              <?php
                  $i++;
                }
              ?>
              <div class="w-100"></div>
              <hr>
              <div class="col-12 text-center">
                <h5 class="h5 font-weight-bold mt-3">the zero</h5>
                <img src="../../images/hands/hand_00.png" alt="hand 0">
                <img src="../../images/hands/hand_0.png" alt="hand 0">
              </div>
            </div>
            <hr>
						<div class="text-center" dir="rtl">
              <h5 class="h5 text-center font-weight-bold mt-3">representation of tens</h5>
              <img src="../../images/hands/hand_0.png" alt="hand">
              <img src="../../images/hands/hand_00.png" alt="hand">
              <input id="hand" class="col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark mt-3" type="number" min="0" max="99" placeholder="type a number from 0 to 99" style="box-shadow: none">
              <span class="text-danger"></span>
            </div>
          </li>
          <li><span class="text-uppercase">Representation by abacus</span>
						<div class="text-center">
							<img src="../../images/hand_abacus.png" alt="abacus hands representation">
						</div>
						<p class="lead text-indent text-justify">By observing the image above, we find that the upper bead is equivalent to the thumb, while the lower beads are equivalent to the other fingers. Or, the upper bead represents five, and the lower beads represent one each.</p>
						<div class="row no-gutters justify-content-center">
              <?php
                $i = 0;
                while ($i < 10) {
              ?>
              <div class="col-4 col-sm-2">
                <figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/<?php echo $i ?>.png" alt="hand">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">number <?php echo $i ?></figcaption>
        				</figure>
              </div>
              <?php
                  $i++;
                }
              ?>
							<div class="w-100">
								<p class="lead text-indent text-justify">Moving to the representation using the abacus, we can represent the large numbers (more than 99) and also the decimal numbers, and this using the points on the crossbar of the abacus that serve to indicate the beginning of each part.</p>
							</div>
							<div class="col-md-6 text-center p-2">
								<img src="../../images/fosol.png" alt="fosol" class="img-fluid">
							</div>
							<div class="col-md-6 text-center p-2">
								<img src="../../images/fosol2.png" alt="fosol" class="img-fluid">
							</div>
						</div>
						<hr>
						<div class="text-center" dir="rtl">
							<div class="">
								<img src="../../images/abacus/0.png" alt="abacus line" class="">
								<img src="../../images/abacus/0.png" alt="abacus line" class="">
								<img src="../../images/abacus/0.png" alt="abacus line" class="">
								<img src="../../images/abacus/0.png" alt="abacus line" class="">
								<img src="../../images/abacus/0.png" alt="abacus line" class="">
								<img src="../../images/abacus/0.png" alt="abacus line" class="">
							</div>
							<input id="abacus" class="col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark mt-3" type="number" min="0" max="999999" placeholder="Type a number to see the representation" style="box-shadow: none">
							<small class="text-danger"></small>
						</div>
					</li>
					<li><span class="text-uppercase">How to move beads</span>
					<p class="lead text-indent text-justify">The role of the fingers in the movement of the beads is essential: the thumb is used to lift the lower beads upwards towards the crossbar, while the index is used to lower them. While the middle finger is used to lift or lower the upper bead.</p>
						<div class="row justify-content-center" id="move-beads">
							<div class="col-md-4">
								<figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/active5_0.png" alt="activate beads">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">The middle finger is used to move the upper bead up or down</figcaption>
        				</figure>
							</div>
							<div class="col-md-4">
								<figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/active1_0.png" alt="activate beads">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">The thumb is used to move the lower beads down and the index finger up</figcaption>
        				</figure>
							</div>
						</div>
					</li>
        </ol>
				<p class="lead text-indent text-justify font-weight-bold">Note: Practice on the abacus is a sport for the fingers that will undoubtedly contribute to improve the quality of writing and to shake hands. When the fingertips touch the beads, a neurotransmitter is sent to the brain and, with intense practice, a strong neural link is created that helps the learner to imagine a mental arithmetic without relying on the abacus.</p>
				<hr>
				<h2 class="h2 text-center text-uppercase animated flash infinite">Get certified</h2>
				<h5 class="h5 my-3">Finish the exercices of each unit to get certified.</h5>
				<p class="lead animated flash infinite text-danger font-weight-bold"></p>
				<div class="row border border-dark mx-3">
					<ul class="nav nav-fill nav-tabs border-bottom-0 text-uppercase w-100 p-0" id="exercices" role="tablist">
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="0" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">exercice </span>1</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="1" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">exercice </span>2</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="2" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">exercice </span>3</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="3" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">exercice </span>4</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="4" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">exercice </span>5</a>
					  </li>
					</ul>
					<div class="tab-content w-100 text-center" id="exercices_content">
						<div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 1</h5>
							<p class="lead">Type the equivalent of the representation</p>
							<div class="py-3" dir="rtl">
								<img src="../../images/hands/hand_0.png" alt="hand" class="">
								<img src="../../images/hands/hand_00.png" alt="hand" class="">
								<input class="col-8 col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark my-3" type="number" min="0" max="99" style="box-shadow: none">
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>check</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>change</button>
							</div>
							<p></p>
						</div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 2</h5>
							<p class="lead">Type the equivalent of the representation</p>
							<div class="py-3" dir="rtl">
								<img src="../../images/abacus/0.png" alt="abacus" class="">
								<img src="../../images/abacus/0.png" alt="abacus" class="">
								<input class="col-8 col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark my-3" type="number" min="0" max="99" style="box-shadow: none">
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>check</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>change</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 3</h5>
							<p class="lead">Represent the number on abacus</p>
							<div class="py-3" dir="rtl">
								<img src="../../images/hands/hand_0.png" alt="hand" class="">
								<img src="../../images/hands/hand_00.png" alt="hand" class="">
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>check</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>change</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 4</h5>
							<p class="lead">Represent the number on abacus</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold animated flash infinite">
									<div class="nbr col-1">
										<span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>check</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>change</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 5</h5>
							<p class="lead">Represent the number on abacus</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold animated flash infinite">
									<div class="nbr col-1">
										<span></span><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>check</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>change</button>
							</div>
							<p></p>
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
			$("a[href='repr.php'],#dropdownMenu1").addClass("active");
			var r,l,v,val,level;
			function activate(mg,bd) {
				$("#move-beads").find("img:eq("+mg+")").attr("src","../../images/abacus/active"+bd+".png");
				setTimeout(function(){
					$("#move-beads").find("img:eq("+mg+")").attr("src","../../images/abacus/inactive"+bd+".png");
					setTimeout(function(){activate(mg,bd)},800);
				},800);
			}
			activate(0,5);
			activate(1,1);
			$("#hand").on("change keyup", function(){
        r = "0";
				l = "0";
        $(this).next().text("");
        v = $(this).val();
				if (v.length == 2) {
					r = v.substring(1,2);
          l = v.substring(0,1);
				} else if (v.length == 1) {
					r = v.substring(0,1);
					l = "0";
				} else {
					$(this).next().text("المرجو ادخال عدد من 0 الى 99");
				}
        $(this).prev().attr("src","../../images/hands/hand_"+l+"0.png").prev().attr("src","../../images/hands/hand_"+r+".png");
      });
			$("#abacus").on("change keyup", function() {
				$(this).prev().find("img").attr("src","../../images/abacus/0.png");
				$(this).next().text("");
				val = $(this).val();
				i = val.length - 1;
				if (i < 0 || i > 5) {
					$(this).next().text("de 0 à 999999");
				} else if (/^\+?(0|[1-9]\d*)$/.test(val) == false) {
					$(this).next().text("Les nombre décimaux ne sont pas prises en charge");
				} else {
					for (x in val) {
						$(this).prev().find("img:eq("+x+")").attr("src","../../images/abacus/"+val[i]+".png");
						i--;
					}
				}
			});
			$('#exercices').on('click', 'a', function () {
				$("h2.animated").removeClass('animated');
				$btn = $(this);
				$btn.closest(".row").prev().text("");
				ex = $btn.data("ex");
				$tab = $(".tab-pane:eq("+ex+")");
				$input = $tab.find("input");
				$check = $tab.find("button:first");
				$refill = $tab.find("button:last");
				$p = $tab.find("p:last");
				switch (ex) {
					case 0:
						func = getHand;
						lvl = 0;
						break;
					case 1:
						func = getAbacus;
						lvl = 1;
						break;
					case 2:
						func = getHand;
						lvl = 2;
						createAbacus(2);
						break;
					case 3:
						func = getNumber;
						lvl = 3;
						createAbacus(2);
						break;
					case 4:
						func = getNumber;
						lvl = 4;
						createAbacus(3);
						break;
				}
				checkLevel(lvl,0);
				rset();
			});
			$(".tab-pane").on("click", "button:last", function(){
				rset();
			});
			$(".tab-pane").on("click", "button:first", function(){
				check();
			});
			$("body").on("keypress", function(event){
				keyCode = (event.keyCode ? event.keyCode : event.which);
				if (keyCode == 13) {
					check();
				}
			});
		});
  </script>
</body>
</html>
