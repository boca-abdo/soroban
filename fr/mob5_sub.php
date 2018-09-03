  <?php include 'assets/header.php' ?>
        <h1 class="h1">Les amis de 5 - soustraction -</h1>
				<hr>
				<p class="lead">On utilise les amis de 5 dans la soustraction pour la même raison qu'on additin mais contrairement: On désactive la perle supérieure puis on active une où plusieures perles inférieures.</p>
        <div class="row justify-content-center">
					<div class="col-auto bg-dark text-warning py-3 m-2">
						<span class="h1 font-weight-bold">5</span><br>=<br><span class="h1 font-weight-bold">2 + 3</span><br>l'ami de 5 pour 3 est 2<br>l'ami de 5 pour 2 est 3
					</div>
					<div class="col-auto bg-dark text-warning py-3 m-2">
						<span class="h1 font-weight-bold">5</span><br>=<br><span class="h1 font-weight-bold">1 + 4</span><br>l'ami de 5 pour 4 est 1<br>l'ami de 5 pour 1 est 4
					</div>
				</div>
				<h3 class="h3 my-3 d-none d-sm-block">Les cas de l'ami de 5 en soustraction</h3>
				<div class="table-responsive d-none d-sm-block">
				  <table class="table table-striped table-sm">
						<thead>
							<tr class="border border-dark">
								<th class="border-top-0 border-bottom-0">cas</th>
								<th class="border-top-0 border-bottom-0">règle</th>
								<th class="border-top-0 border-bottom-0">raisonnement</th>
							</tr>
						</thead>
						<tbody>
							<tr class="border border-dark">
								<td class="border-top-0">-1</td>
								<td class="border-top-0">On désactive la perle supérieure puis on active 4 perles inférieures</td>
								<td class="border-top-0" dir="ltr">-1 = -5 + 4</td>
							</tr>
							<tr class="border border-dark">
								<td class="border-top-0">-2</td>
								<td class="border-top-0">On désactive la perle supérieure puis on active 3 perles inférieures</td>
								<td class="border-top-0" dir="ltr">-2 = -5 + 3</td>
							</tr>
							<tr class="border border-dark">
								<td class="border-top-0">-3</td>
								<td class="border-top-0">On désactive la perle supérieure puis on active 2 perles inférieures</td>
								<td class="border-top-0" dir="ltr">-3 = -5 + 2</td>
							</tr>
							<tr class="border border-dark">
								<td class="border-top-0">-4</td>
								<td class="border-top-0">On désactive la perle supérieure puis on active 1 perle inférieure</td>
								<td class="border-top-0" dir="ltr">-4 = -5 + 1</td>
							</tr>
						</tbody>
				  </table>
				</div>
				<p class="text-danger font-weight-bold">Exemples</p>
				<i class="fas fa-2x fa-hand-point-down d-block animated fadeInDown infinite"></i>
				<img src="../../images/mob5_sub.gif" alt="mob5 sub" class="img-fluid center-block border border-dark mt-3">
				<hr>
        <h2 class="h2 text-center text-uppercase animated flash infinite">Obtener votre certificat</h2>
				<h5 class="h5 my-3">Complétez les exercices de chaque unité pour obtenir votre certificat.</h5>
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
							<p class="lead">Représente le premier nombre puis soustrait le second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-minus mr-2 d-inline" style="font-size: 20px"></i><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
							</div>
							<p></p>
						</div>
					  <div class="tab-pane fade" role="tabpanel">
              <h5 class="h3 my-3 text-uppercase">Exercice 2</h5>
							<p class="lead">Représente le premier nombre puis soustrait le second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-minus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
              <h5 class="h3 my-3 text-uppercase">Exercice 3</h5>
							<p class="lead">Représente le premier nombre puis soustrait le second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span><span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-minus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
              <h5 class="h3 my-3 text-uppercase">Exercice 4</h5>
							<p class="lead">Représente le premier nombre puis soustrait le second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span><span></span><span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-minus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
              <h5 class="h3 my-3 text-uppercase">Exercice 5</h5>
							<p class="lead">Représente le premier nombre puis soustrait le second</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto animated flash infinite">
										<span></span><span></span><span></span><span></span><span></span>
									</div>
									<div class="nbr2 col-auto">
										<i class="fas fa-minus mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span><span></span><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
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
			$("a[href='mob5_sub.php'],#dropdownMenu1").addClass("active");
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
						lvl = 30;
						rule = "mob5_sub",
						createAbacus(1);
						break;
					case 1:
						func = getNumber1;
						lvl = 31;
						rule = "mob5_sub",
						createAbacus(2);
						break;
					case 2:
						func = getNumber1;
						lvl = 32;
						rule = "mob5_sub",
						createAbacus(3);
						break;
					case 3:
						func = getNumber1;
						lvl = 33;
						rule = "mob5_sub",
						createAbacus(4);
						break;
					case 4:
						func = getNumber1;
						lvl = 34;
						rule = "mob5_sub",
						createAbacus(5);
						break;
				}
				checkLevel(lvl,30);
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
