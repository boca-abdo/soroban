  <?php include 'assets/header.php' ?>
        <h1 class="h1 text-uppercase">Division</h1>
				<hr>
        <p class="lead">Pour diviser un nombre en utilisant le boulier, on divise d'abord le boulier en deux parties: une pour faire la soustraction et l'autre pour ajouter le résultat.</p>
				<p class="lead">On répresente le premier nombre sur la partie gauche, puis en commence a en soustraire le second multiplié a chque fois sur la puissance de 10 la plus proche au premier. À chaque fois on soustrait on ajoute la puissance multiplié au résultat final sur la partie droite.</p>
				<p class="text-danger font-weight-bold">Exemple</p>
				<i class="fas fa-2x fa-hand-point-down d-block animated fadeInDown infinite"></i>
				<img src="../../images/division.gif" alt="division" class="img-fluid center-block border border-dark mt-3">
				<h3 class="mt-3">Explication de l'exemple</h3>
				<p class="lead">Dans cet exemple l'opération se fait en quatre étapes :</p>
				<ol class="text-left lead">
					<li>après avoir représenter le premier nombre dans la parite gauche du boulier, on en soustrait le second multiplier par la puissance de 10 la plus proche <span class="font-weight-bold font-italic">ici c'est 10 car 12 x 100 = 1200 > 266, </span>après la soustraction de 12x10 de 266 on obtient 146. On ajoute <span class="font-weight-bold">10</span> au résultat sur la partie droite.</li>
					<li>On répète la même démarche pour le reste 146 <i class="fas fa-long-arrow-alt-right"></i> 146 - 12x10 = 26, et on ajoute une autre 10 au résultat.</li>
					<li>Lorsque le reste est moins de 12x10, on passe à la puissance 1 <i class="fas fa-long-arrow-alt-right"></i> 26 - 12x1 = 14, puis on ajoute cette fois 1 au résultat.</li>
					<li>On répète la même démarche pour le reste 14 <i class="fas fa-long-arrow-alt-right"></i> 14 - 12x1 = 2, et on ajoute une autre 1 au résultat.</li>
				</ol>
				<p class="lead font-weight-bold">Lorsque on trouve que le reste est plus moins que le second nombre on arrête l'opération.</p>
				<p class="lead font-weight-bold">Il est possible de continuer l'opération pour un avoir résultat décimal.</p>
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
							<p class="lead">Fait les calculs sur le boulier puis vérifie</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-divide mr-2 d-inline" style="font-size: 20px"></i><span></span>
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
							<p class="lead">Fait les calculs sur le boulier puis vérifie</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-divide mr-2 d-inline" style="font-size: 20px"></i><span></span>
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
							<p class="lead">Fait les calculs sur le boulier puis vérifie</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-divide mr-2 d-inline" style="font-size: 20px"></i><span></span>
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
							<p class="lead">Fait les calculs sur le boulier puis vérifie</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-divide mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span>
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
							<p class="lead">Fait les calculs sur le boulier puis vérifie</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold">
									<div class="nbr1 col-auto">
										<span></span><span></span><span></span><span></span>
									</div>
									<div class="w-100"></div>
									<div class="nbr2 col-auto">
										<i class="fas fa-divide mr-2 d-inline" style="font-size: 20px"></i><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px;overflow:hidden"></div>
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
			$("a[href='division.php'],#dropdownMenu1").addClass("active");
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
						func = getNumber3;
						lvl = 55;
						createAbacus(4);
						break;
					case 1:
						func = getNumber3;
						lvl = 56;
						createAbacus(6);
						break;
					case 2:
						func = getNumber3;
						lvl = 57;
						createAbacus(8);
						break;
					case 3:
						func = getNumber3;
						lvl = 58;
						createAbacus(6);
						break;
					case 4:
						func = getNumber3;
						lvl = 59;
						createAbacus(8);
						break;
				}
				checkLevel(lvl,55);
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
