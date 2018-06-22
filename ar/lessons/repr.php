<?php
	include '../../includes/user_check.php';
	if ($log_id == "" && $log_e == "" && $log_p == "") {
		header("../location: auth.php");
	}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<title>موقع سوروبان</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../images/fav.ico">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/animate.css">
	<link rel="stylesheet" href="../../css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../../css/style.css">
  <style media="screen">
    .dropdown-item {
      color: #ffc107; !important
    }
    .dropdown-item:focus,
    .dropdown-item:hover {
      background-color: #ffc107; !important
        color: #343a40;
    }
  </style>
	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/popper.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/abacus.js"></script>
</head>
<body class="bg-warning text-dark">
	<?php include 'assets/menu.php' ?>
	<div class="row no-gutters h-100 justify-content-center p-0 pt-5">
		<div class="col-12 align-self-top">
      <div class="container text-center">
        <h1 class="h1">تمثيل اﻷعداد</h1>
        <ol class="text-right h3 p-0">
          <li>مكونات المعداد
            <img src="../../images/comp.png" alt="" class="img-fluid center-block">
            <p class="lead text-indent text-justify mt-3">يتكون معداد السوروبان من إطار خارجي مصنوع من الخشب، وعارضة فاصلة بين الخرزات السفلية والعلوية، وقضبان حديدية تحمل خرزات مصنوعة من خشب العرعار.</p>
            <p class="lead text-indent text-justify font-weight-bold"><span class="text-danger">ملاحظة هامة : </span>لا ننصح الآباء بالمعداد المصنوع من البلاستيك نظرا لخطورته على صحة المتعلم حيث أن مادة البلاستيك لها مدة نهاية الصلاحية يجب احترامها, كما أن البلاستيك مادة غير معقمة عكس خشب العرعار المعروف انه معقم و مانح للطاقة. بالإضافة إلى أن المعداد المصنوع من البلاستيك به خرزات صغيرة الحجم و جد متقاربة لا تتيح مرونة للمتعلم اثناء استخدامه من طرف الأفارقة والأوروبيين عکس الآسيويين لخصوصيتهم الجسدية.</p>
          </li>
          <li>كيف أتعامل مع المعداد
            <div class="row no-gutters">
              <div class="col-md-6">
                <figure class="figure">
        					<img class="figure-img img-fluid" src="../../images/sit1.png" alt="sitting front">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">يجب أن يكون المعداد سوروبان متوازيا مع حافة الطاولة، وعلى بعد 7 الى 12 سم. لمسك المعداد يمكن استعمال اصبعين أو ثلاثة أصابع. ويجب أن تكون وضعية المعداد على الطاولة مستقرة وتابثة. </figcaption>
        				</figure>
              </div>
              <div class="col-md-6">
                <figure class="figure">
        					<img class="figure-img img-fluid" src="../../images/sit2.png" alt="sitting over">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">يجب أن تكون وضعية المتدرب مريحة وتابثة. من أجب ذلك يستحسن أن يكون البطن على بعد 10سم من الطاولة أوالمكتب، كما يجب أن يكون انحناء الشخص مريحا محققا زاوية 15 درجة عن الوضعية الافقية للطاولة.</figcaption>
        				</figure>
              </div>
            </div>
          </li>
          <li>التمثيل باستخدام اﻷصابع
            <p class="lead text-indent text-justify">دائما في برنامج السوروبان أحسن طريقة للتقديم هي البدء بتمثيل الأعداد بالأصابع. أقصى عدد يمكن تمثيله بكلتا اليدين هو تسعة و تسعون وليس عشرة. عند التدقيق في أصابع اليدين جيدا نلاحظ أنه يمكن تقسيمها إلى مجموعتين. المجموعة الأولى تضم أربعة أصابع متشابهة ومجتمعة ولها تقريبا نفس الطول و هي كل من السبابة، الوسطى، الخنصر والبنصر. أما المجموعة الثانية فيها أصبع واحد مختلف عن الأصابع اﻷخرى معزول عنها وهو الإبهام. قيمة كل واحد من أصابع المجموعة الأولى هي واحد أي قيمة السبابة هي واحد. وقيمة الوسطى واحد إلا أنها تأتي في المرتبة الثانية فتصبح اثنان. وقيمة الخنصر واحد إلا أنها تأتي في المرتبة الثالثة فتصبح ثلاثة . وقيمة البنصر واحد إلا أنها تأتي في المرتبة الرابعة فتصبح أربعة. لكن ما القيمة التي سيأخذها الإبهام؟ نعلم جيدا أن قيمة الشيء لا تقدر إلا إذا افتقدناها. لنفترض مثلا ید بدون إبهام. هل تستطيع هذه اليد الكتابة بشكل سليم؟ هل تستطيع استعمال الفرشاة لحك الاسنان؟ الجواب طبعا لا. إذن قيمة الإبهام أعلى مرتبة ودرجة من الأصابع اﻷخرى. من هنا جاءت قيمة الإبهام هي خمسة.</p>
            <hr>
            <h5 class="h5 text-center font-weight-bold my-3">تمثيل اﻷرقام من 1 الى 9</h5>
            <div class="row no-gutters justify-content-center">
              <?php
                $i = 1;
                while ($i < 10) {
              ?>
              <div class="col-4 col-sm-2">
                <figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/hands/hand_<?php echo $i ?>.png" alt="hand">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">تمثيل الرقم <?php echo $i ?></figcaption>
        				</figure>
              </div>
              <?php
                  $i++;
                }
              ?>
              <div class="w-100"></div>
              <hr>
              <div class="col-12 text-center">
                <h5 class="h5 font-weight-bold mt-3">تمثيل العدد 0</h5>
                <img src="../../images/hands/hand_0.png" alt="hand 0">
                <img src="../../images/hands/hand_00.png" alt="hand 0">
                <p class="lead text-justify text-indent mt-3">نمثل العدد صفر بإدخال جميع الأصابع داخل كف اليد. أي إحكام قبضة اليد. آنفا عندما كنا نعد من واحد الى تسعة باستعمال الأصابع لاحظنا بروزها و خروجها، الآن في وضعية الصفر نلاحظ انقباضها واختبائها داخل الكف كأنها تقول لصاحبها، إذا ارتكبت جريمة فانا لست شريكك فيها. كما تفسر كذلك بأن كل من يهتم بالقتال والملاكمة فهو يساوي صفر.</p>
              </div>
            </div>
            <hr>
            <div class="text-center">
              <h5 class="h5 text-center font-weight-bold mt-3">تمثيل اﻷعداد أكبر من 9</h5>
              <img src="../../images/hands/hand_0.png" alt="hand">
              <img src="../../images/hands/hand_00.png" alt="hand">
              <input id="hand" class="col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark mt-3" type="number" min="0" max="99" placeholder="أكتب عددا هنا لترى تمثيله" style="box-shadow: none">
              <span class="text-danger"></span>
              <p class="lead text-justify text-indent mt-3">لتمثيل اﻷعداد أكبر من 9 نستعمل كلتا اليدين. اليد اليمنى لتمثيل الوحدات و اليد اليسرى لتمثيل العشرات</p>
            </div>
          </li>
          <li>التمثيل باستخدام المعداد
						<div class="text-center">
							<img src="../../images/hand_abacus.png" alt="abacus hands representation">
						</div>
						<p class="lead text-indent text-justify">بملاحظة الصورة أعلاه نستنتج أن تمثيل اﻷعداد بالمعداد مطابق لتمثيلها باﻷصابع، حيث تأخد الخرزة العلوية دور الإبهام بينما تأخد الخرزات السفلية دور كل من السبابة والوسطى والخنصر والبنصر</p>
						<div class="row no-gutters justify-content-center">
              <?php
                $i = 0;
                while ($i < 10) {
              ?>
              <div class="col-4 col-sm-2">
                <figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/<?php echo $i ?>.png" alt="hand">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">تمثيل الرقم <?php echo $i ?></figcaption>
        				</figure>
              </div>
              <?php
                  $i++;
                }
              ?>
							<div class="w-100">
								<p class="lead text-indent text-justify">ويمكننا التمثيل بالمعداد من الانتقال إلى تمثيل اﻷعداد اﻷكبر من 99، وكذلك اﻷعداد العشرية حيث نستغل النقاط المتواجدة على بعض اﻷعمدة لتحديد بداية كل فصل.</p>
							</div>
							<div class="col-md-6 text-center p-2">
								<img src="../../images/fosol.png" alt="fosol" class="img-fluid">
							</div>
							<div class="col-md-6 text-center p-2">
								<img src="../../images/fosol2.png" alt="fosol" class="img-fluid">
							</div>
						</div>
						<hr>
						<div class="text-center">
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
					<li>طريقة تحريك الخززات
					<p class="lead text-indent text-justify">بالنسبة لبرنامج السوروبان يتم ايلاء اهمية قصوى لدور الاصابع في تحريك الخرزات، فالإبهام دوره رفع الخرزات السفلية نحو الأعلى في اتجاه العارضة، أما السبابة فدورها هو إنزال الخرزات السفلية نحو الأسفل في حين يتمثل دور الوسطى في رفع أو إنزال الخرزات العلوية.</p>
						<div class="row justify-content-center" id="move-beads">
							<div class="col-md-4">
								<figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/active5_0.png" alt="activate beads">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">استعمل الوسطى لتحريك الخرزة العلوية للأعلى وللأسفل</figcaption>
        				</figure>
							</div>
							<div class="col-md-4">
								<figure class="figure text-center">
        					<img class="figure-img img-fluid" src="../../images/abacus/active1_0.png" alt="activate beads">
        					<figcaption class="figure-caption text-dark text-center px-2" style="font-size: 1rem">استعمل الإبهام لتنشيط الخرزات السفلية والسبابة لتعطيلها</figcaption>
        				</figure>
							</div>
						</div>
					</li>
        </ol>
				<p class="lead text-indent text-justify font-weight-bold">ملاحظة : إن الممارسة على معداد السوروبان تعتبر بمثابة رياضة للأصابع و التي بدون شك ستساعد في تحسين جودة الخط و إحكام قبضة اليد. كما أن الأصابع عندما تلمس الخرزات يتم إرسال سيالة عصبية إلى الدماغ ومع الممارسة المكثفة يتم خلق رابط عصبي قوي يساعد المتعلم في عملية التخيل أي عملية الحساب الذهني دون الاعتماد على المعداد.</p>
				<hr>
				<h2 class="h2 text-center animated flash infinite">احصل على شهادة التدريب</h2>
				<h5 class="h5 my-3">قم بانهاء جميع التمارين بعد نهاية كل وحدة للحصول على شهادة التدريب</h5>
				<p class="lead animated flash infinite text-danger font-weight-bold"></p>
				<div class="row border border-dark mx-3">
					<ul class="nav nav-fill nav-tabs border-bottom-0 w-100 p-0" id="exercices" role="tablist">
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="0" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>1</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="1" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>2</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="2" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>3</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="3" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>4</a>
					  </li>
					  <li class="nav-item">
					    <a class="btn btn-block btn-outline-dark border-right-0 border-left-0 border-top-0 rounded-0" data-ex="4" data-toggle="tab" role="tab" aria-selected="false" style="box-shadow: none"><span class="d-none d-md-inline">التمرين </span>5</a>
					  </li>
					</ul>
					<div class="tab-content w-100 text-center" id="exercices_content">
						<div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 1</h5>
							<p class="lead">اكتب العدد الموافق للتمثيل ثم اضعط على زر التحقق</p>
							<div class="py-3">
								<img src="../../images/hands/hand_0.png" alt="hand" class="">
								<img src="../../images/hands/hand_00.png" alt="hand" class="">
								<input class="col-8 col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark my-3" type="number" min="0" max="99" style="box-shadow: none">
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
						</div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 2</h5>
							<p class="lead">اكتب العدد الموافق للتمثيل ثم اضعط على زر التحقق</p>
							<div class="py-3">
								<img src="../../images/abacus/0.png" alt="abacus" class="">
								<img src="../../images/abacus/0.png" alt="abacus" class="">
								<input class="col-8 col-sm-4 form-control rounded-0 text-center background-transparent mx-auto border-dark my-3" type="number" min="0" max="99" style="box-shadow: none">
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 3</h5>
							<p class="lead">مثل العدد على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<img src="../../images/hands/hand_0.png" alt="hand" class="">
								<img src="../../images/hands/hand_00.png" alt="hand" class="">
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 4</h5>
							<p class="lead">مثل العدد على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<div class="row no-gutters justify-content-center h1 font-weight-bold animated flash infinite">
									<div class="nbr col-1">
										<span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					  <div class="tab-pane fade" role="tabpanel">
							<h5 class="h3 my-3">التمرين 5</h5>
							<p class="lead">مثل العدد على المعداد ثم اضغط على زر التحقق</p>
							<div class="py-3">
								<div class="row no-gutters justify-content-center h1 font-weight-bold animated flash infinite">
									<div class="nbr col-1">
										<span></span><span></span><span></span>
									</div>
								</div>
								<div id="abacus" class="my-3" style="height: 143px"></div>
								<div id="status"></div>
								<button type="button" class="col-8 col-sm-4 col-md-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تحقق<i class="fas fa-check mr-2"></i></button>
								<button type="button" class="col-8 col-sm-4 col-lg-2 btn btn-outline-dark rounded-0 my-2" style="box-shadow: none">تغيير العدد<i class="fas fa-undo mr-2"></i></button>
							</div>
							<p></p>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<?php include '../assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
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
					$(this).next().text("المرجو ادخال عدد من 0 الى 999999");
				} else if (/^\+?(0|[1-9]\d*)$/.test(val) == false) {
					$(this).next().text("المرجو ادخال اﻷعداد الصحيحة فقط");
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
