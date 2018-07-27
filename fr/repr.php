	<?php include 'assets/header.php' ?>
        <h1 class="h1 text-uppercase mt-3">Représentation des nombres sur le boulier</h1>
        <ol class="text-left h3 p-0">
          <li><span class="text-uppercase">composants du boulier</span>
            <img src="../../images/comp.png" alt="" class="img-fluid center-block">
            <p class="lead text-indent text-justify mt-3">Le boulier SOROBAN est composé d'un cadre extérieur en bois, d'une barre transversale séparant les perles inférieures et supérieure et de barres de fer portant des billes en bois.</p>
          </li>
          <li><span class="text-uppercase">positionner son boulier</span>
            <div class="row no-gutters">
              <div class="col-md-6">
                <figure class="figure">
        					<img class="figure-img img-fluid" src="../../images/sit1.png" alt="sitting front">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">Le boulier SOROBAN doit être parallèle au bord de la table et à une distance de 7 à 12 cm. Pour tenir le boulier, deux ou trois doigts peuvent être utilisés. La position du boulier sur la table doit être stable et bien fixe.</figcaption>
        				</figure>
              </div>
              <div class="col-md-6">
                <figure class="figure">
        					<img class="figure-img img-fluid" src="../../images/sit2.png" alt="sitting over">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">La position de l'apprenant doit être confortable. Il est recommandé que l'abdomen soit à 10 cm de la table, et que la courbure de la personne soit confortable avec un angle de 15 degrés par rapport à l'horizontal de la table.</figcaption>
        				</figure>
              </div>
            </div>
          </li>
          <li><span class="text-uppercase">La représentation par les doigts</span>
            <p class="lead text-indent text-justify">On commence toujours dans le programme SOROBAN par représenter les nombres avec les doigts. Le nombre maximum pouvant être représenté par les deux mains est de quatre-vingt-dix-neuf au lieu de dix. En observant la main, on constate qu'elle peut être divisés en deux groupes: Le premier se compose de quatre doigts avec presque la même longueur, à savoir l'index, le majeur, l'annulaire et l'auriculaire. Et le deuxième contenant un seul doigt isolé des autres nommé le pouce.</p>
						<p class="lead text-indent text-justify">La valeur de chacun des doigts du premier groupe est de un, alors que la valeur du pouce est de cinq.</p>
						<p class="lead text-indent text-justify">La main droite est utilisé pour représenter les unités, alors que la main gauche sert à représenter les dizaines.</p>
            <hr>
            <h5 class="h5 text-center font-weight-bold my-3">représentation des unités</h5>
            <div class="row no-gutters justify-content-center">
              <?php
                $i = 1;
                while ($i < 10) {
              ?>
              <div class="col-4 col-sm-2">
                <figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/hands/hand_<?php echo $i ?>.png" alt="hand">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">le chiffre <?php echo $i ?></figcaption>
        				</figure>
              </div>
              <?php
                  $i++;
                }
              ?>
              <div class="w-100"></div>
              <hr>
              <div class="col-12 text-center">
                <h5 class="h5 font-weight-bold mt-3">le nombre zéro</h5>
                <img src="../../images/hands/hand_00.png" alt="hand 0">
                <img src="../../images/hands/hand_0.png" alt="hand 0">
              </div>
            </div>
            <hr>
						<div class="text-center" dir="rtl">
              <h5 class="h5 text-center font-weight-bold mt-3">représentation des dizaines</h5>
              <img src="../../images/hands/hand_0.png" alt="hand">
              <img src="../../images/hands/hand_00.png" alt="hand">
              <input id="hand" class="col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark mt-3" type="number" min="0" max="99" placeholder="أكتب عددا هنا لترى تمثيله" style="box-shadow: none">
              <span class="text-danger"></span>
            </div>
          </li>
          <li><span class="text-uppercase">La représentation à l'aide du boulier</span>
						<div class="text-center">
							<img src="../../images/hand_abacus.png" alt="abacus hands representation">
						</div>
						<p class="lead text-indent text-justify">En observant l'image au dessus, on constate que la perle supérieure est équivalente au pouce, alors que les perles inférieures sont équivalentes aux autres doigts. Soit, la perle supérieure représente cinq, et les perles inférieures représentent un chacune.</p>
						<div class="row no-gutters justify-content-center">
              <?php
                $i = 0;
                while ($i < 10) {
              ?>
              <div class="col-4 col-sm-2">
                <figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/<?php echo $i ?>.png" alt="hand">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">le chiffre <?php echo $i ?></figcaption>
        				</figure>
              </div>
              <?php
                  $i++;
                }
              ?>
							<div class="w-100">
								<p class="lead text-indent text-justify">En passant à la représentation à l'aide du boulier, on peut représenter les grands nombre (plus de 99) et aussi les nombres décimaux, et cela à l'aide des points situés sur la barre transversale du boulier qui servent à indiquer le début de chaque partie.</p>
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
							<input id="abacus" class="col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark mt-3" type="number" min="0" max="999999" placeholder="أكتب عددا هنا لترى تمثيله" style="box-shadow: none">
							<small class="text-danger"></small>
						</div>
					</li>
					<li><span class="text-uppercase">Comment déplacer les perles</span>
					<p class="lead text-indent text-justify">Le rôle des doigts dans le déplacement des billes est primordial: le pouce sert à soulever les perles inférieures vers le haut en direction de la barre transversale, tandis que l'index sert à les baisser. Alors que le majeur sert à soulever ou baisser la perle supérieure.</p>
						<div class="row justify-content-center" id="move-beads">
							<div class="col-md-4">
								<figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/active5_0.png" alt="activate beads">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">On utilise le majeur pour déplacer la perle supérieure vers le haut ou vers le bas</figcaption>
        				</figure>
							</div>
							<div class="col-md-4">
								<figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/active1_0.png" alt="activate beads">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">On utilise le pouce pour déplacer les perles inférieures vers le bas et l'index vers le haut</figcaption>
        				</figure>
							</div>
						</div>
					</li>
        </ol>
				<p class="lead text-indent text-justify font-weight-bold">Note: La pratique sur le boulier est un sport pour les doigts qui contribuera sans aucun doute à améliorer la qualité de l'écriture et à serrer la main. Lorsque le bout des doigts touche les perles, un neurotransmetteur est envoyé au cerveau et, avec une pratique intense, un lien neuronal fort est créé qui aide l'apprenant à imaginer un calcul mental sans dépendre de l'abaque.</p>
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
							<h5 class="h3 my-3 text-uppercase">exercice 1</h5>
							<p class="lead">Tapez le nombre équivalent à la représentation</p>
							<div class="py-3" dir="rtl">
								<img src="../../images/hands/hand_0.png" alt="hand" class="">
								<img src="../../images/hands/hand_00.png" alt="hand" class="">
								<input class="col-8 col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark my-3" type="number" min="0" max="99" style="box-shadow: none">
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
							</div>
							<p></p>
						</div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 2</h5>
							<p class="lead">Tapez le nombre équivalent à la représentation</p>
							<div class="py-3" dir="rtl">
								<img src="../../images/abacus/0.png" alt="abacus" class="">
								<img src="../../images/abacus/0.png" alt="abacus" class="">
								<input class="col-8 col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark my-3" type="number" min="0" max="99" style="box-shadow: none">
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 3</h5>
							<p class="lead">Représente le nombre sur le boulier</p>
							<div class="py-3" dir="rtl">
								<img src="../../images/hands/hand_0.png" alt="hand" class="">
								<img src="../../images/hands/hand_00.png" alt="hand" class="">
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-check ml-2"></i>vérifier</button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark text-uppercase rounded-0 my-2" style="box-shadow: none"><i class="fas fa-undo ml-2"></i>changer</button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3 text-uppercase">exercice 4</h5>
							<p class="lead">Représente le nombre sur le boulier</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold animated flash infinite">
									<div class="nbr col-1">
										<span></span><span></span>
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
							<h5 class="h3 my-3 text-uppercase">exercice 5</h5>
							<p class="lead">Représente le nombre sur le boulier</p>
							<div class="py-3" dir="rtl">
								<div class="row no-gutters justify-content-center h1 font-weight-bold animated flash infinite">
									<div class="nbr col-1">
										<span></span><span></span><span></span>
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
