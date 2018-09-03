  <?php include 'assets/header.php' ?>
        <h1 class="h1">Complement of 5 & 10 - addition -</h1>
				<hr>
				<p class="lead">We disable the upper bead and enable one or more lower beads in a column then enable a bead in the next column.</p>
				<h3 class="h3 my-3 d-none d-sm-block">The complement of 5 & 10 cases</h3>
				<div class="table-responsive d-none d-sm-block">
				  <table class="table table-striped table-sm">
						<thead>
							<tr class="border border-dark">
								<th class="border-top-0 border-bottom-0">case</th>
								<th class="border-top-0 border-bottom-0">rule</th>
								<th class="border-top-0 border-bottom-0">reasoning</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border border-dark">
								<td class="border-top-0">+6</td>
								<td class="border-top-0">We enable 1 lower bead, disable the upper bead then enable a bead in the next column.</td>
								<td class="border-top-0" dir="ltr">+6 = +10 - 5 + 1</td>
							</tr>
							<tr class="border border-dark">
								<td class="border-top-0">+7</td>
								<td class="border-top-0">We enable 2 lower beads, disable the upper bead then enable a bead in the next column.</td>
								<td class="border-top-0" dir="ltr">+7 = +10 - 5 + 2</td>
							</tr>
							<tr class="border border-dark">
								<td class="border-top-0">+8</td>
								<td class="border-top-0">We enable 3 lower beads, disable the upper bead then enable a bead in the next column.</td>
								<td class="border-top-0" dir="ltr">+8 = +10 - 5 + 3</td>
							</tr>
							<tr class="border border-dark">
								<td class="border-top-0">+9</td>
								<td class="border-top-0">We enable 4 lower beads, disable the upper bead then enable a bead in the next column.</td>
								<td class="border-top-0" dir="ltr">+9 = +10 - 5 + 4</td>
							</tr>
						</tbody>
				  </table>
				</div>
				<p class="text-danger font-weight-bold">Example</p>
				<i class="fas fa-2x fa-hand-point-down d-block animated fadeInDown infinite"></i>
        <img src="../../images/mob105_add.gif" alt="mob105 add" class="img-fluid center-block border border-dark mt-3">
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
              <h5 class="h3 my-3 text-uppercase">Exercice 1</h5>
							<p class="lead">Represent first number then add the second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-plus mr-2 d-inline" style="font-size: 20px"></i><span></span>
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
              <h5 class="h3 my-3 text-uppercase">Exercice 2</h5>
							<p class="lead">Represent first number then add the second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span>
									</div>
									<div class="nbr2 col-1">
										<i class="fas fa-plus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span>
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
              <h5 class="h3 my-3 text-uppercase">Exercice 3</h5>
							<p class="lead">Represent first number then add the second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span><span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-plus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span>
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
              <h5 class="h3 my-3 text-uppercase">Exercice 4</h5>
							<p class="lead">Represent first number then add the second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span><span></span><span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-plus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span><span></span>
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
              <h5 class="h3 my-3 text-uppercase">Exercice 5</h5>
							<p class="lead">Represent first number then add the second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span><span></span><span></span><span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-plus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span><span></span><span></span>
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
			$("a[href='mob105_add.php'],#dropdownMenu1").addClass("active");
			var r,l,v,val,level;
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
						func = getNumber1;
						lvl = 25;
						rule = "mob105_add",
						createAbacus(2);
						break;
					case 1:
						func = getNumber1;
						lvl = 26;
						rule = "mob105_add",
						createAbacus(3);
						break;
					case 2:
						func = getNumber1;
						lvl = 27;
						rule = "mob105_add",
						createAbacus(4);
						break;
					case 3:
						func = getNumber1;
						lvl = 28;
						rule = "mob105_add",
						createAbacus(5);
						break;
					case 4:
						func = getNumber1;
						lvl = 29;
						rule = "mob105_add",
						createAbacus(6);
						break;
				}
				checkLevel(lvl,25);
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
