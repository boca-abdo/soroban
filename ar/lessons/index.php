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
        <h1 class="h1">نبذة تاريخية</h1>
    		<p class="lead text-justify text-indent">منذ أكثر من 26 قرنا استخدم اليونانيون علب مصنوعة من الرخام لحساب صفقات السلع. وفي وقت لاحق، انشرت هذه العلب بين المناطق الشرقية والوسطى للإمبراطورية الرومانية .</p>
				<p class="lead text-justify text-indent">ثم تم استخدام صندوق به رمال أو غبار رقيق فيما بعد لرسم خطوط عليها بالعصي او بالاصابع للقيام بالعمليات الحسابية. ويبدو أن الشعب الصيني تمكن في وقت لاحق من تشكيل نوع مختلف من المعداد الخاص بهم (سوان بان SUAN - PAN) ، عبارة عن علبة بها قضبان تحمل 5 خرزات سفلية و خرزتين علويتين.</p>
				<hr>
				<figure class="figure">
					<img class="figure-img img-thumbnail" src="../../images/suan-pan.png" alt="suan-pan abacus">
					<figcaption class="figure-caption text-dark">معداد سوان بان الصيني</figcaption>
				</figure>
				<p class="lead text-justify text-indent">في نهاية المطاف، سافر المعداد الصيني إلى اليابان في القرن 16 من خلال الصفقات التجارية بينهما. قام اليابانيون بدراسته ما يقارب 300 سنة ثم قاموا بنزع خرزة واحدة سفلية وأخرى علوية فيما بعد، ليتوصلوا إلى معدادهم الخاص سنة 1930م والذي ينمي الذكاء أكثر من غيره.</p>
				<hr>
				<figure class="figure">
					<img class="figure-img img-thumbnail" src="../../images/abacus.png" alt="soroban abacus">
					<figcaption class="figure-caption text-dark">معداد سوروبان الياباني</figcaption>
				</figure>
				<p class="lead text-justify text-indent">مؤخرا تم اعتماد السوروبان في البرامج التعليمية للعديد من الدول ليتم تدريسه في المدارس للتلاميذ، كما قامت منظمة اليونسكو بإضافة المعداد الى قائمة التراث الثقافي العالمي غير المادي.</p>
				<hr>
				<h1 class="h1">أهداف تدريس السوروبان</h1>
				<ul class="text-right h5">
					<li>تنمية وتطوير قدرات الطفل الذهنية</li>
					<li>إحداث توازن بين الفص الأيمن والفص الأيسر للدماغ</li>
					<li>إكساب الطفل التركيز، السرعة في القراءة والكتابة والثقة في النفس</li>
					<li>إكتساب العديد من المواهب الذهنية التي ستساعده من دون شك مدى الحياة</li>
					<li>تنمية القدرات العقلية، زيادة سرعة الاستجابة وتقوية الذاكرة</li>
					<li>زيادة عدد خلايا الدماغ المستخدمة أثناء العمليات</li>
					<li>ينشط الفص الأيمن للدماغ (اكتشف العلماء في تجربة قاموا بها أن الفص الأيمن سجل نشاطا كهربائيا عاليا، عندما تم وضعه تحت جهاز مخطط كهربائي للدماغ أثناء قيام المستخدم بالحساب الذهني عن طريق تصور المعداد)</li>
					<li>تأدية مختلف العمليات الحسابية مهما كان حجمها أو تعقيدها وتحبيب الرياضيات لدى المتعلم</li>
					<li>استخدام حاسة السمع وحاسة البصر أي أنه يشد انتباه المتعلم، وهذا ما يكسبه قدرة عالية على التركيز</li>
					<li>يمنع شيخوخة الدماغ ومرض الزهايمر. في الواقع عند تكرار حركة الأصابع على خرزات المعداد لوحظ تدفق الدم في الدماغ. لذلك هناك دورات سوروبان في اليابان للمسنين</li>
					<li>يعتبر البرنامج أرضية هادفة وتربوية للطفل، فعوض ترکه والمؤثرات السلبية كالرسوم المتحركة وألعاب الإنترنت دون رقيب، يجد الطفل في البرنامج ضالته ويقضي فعلا وقتا ممتعا ومفيدا في التعل</li>
					<li>يدرب المتعلم على حل المشكلات الرياضياتية لأكبر وقت ممكن. يقول أينشتاين: <span class="font-weight-bold">ليست الفكرة في أني فائق الذكاء، بل كل ما في الأمر أني أقضي وقتا أطول في حل المشاكل</span></li>
				</ul>
				<hr>
				<p class="lead text-justify text-indent">أظهرت دراسة أمريكية حديثة أن تدريب الدماغ البشري على إجراء العمليات الحسابية، وحل مسائل
الرياضيات، يعزز الصحة النفسية للأشخاص، ويكافح أعراض الاكتئاب والقلق. الدراسة أجراها باحثون بجامعة "ديوك" الأمريكية، ونشروا نتائجها في دورية Clinical psychological science العلمية.
</p>
				<p class="lead text-justify text-indent">وحلل الباحثون نشاط الدماغ لدى 186 من الطلاب الجامعيين، عبر استخدام نوع من مسح الدماغ، يسمى التصوير بالرنين المغناطيسي الوظيفي، وذلك أثناء إجراء بعض العمليات الرياضية، اعتمادا على المعلومات الموجودة بذاكرتهم. ووجدوا أن حل العمليات الرياضية، اعتمادا على الذاكرة، يحفز منطقة في الدماغ تسمى<span class="font-italic font-weight-bold"> القشرة ما قبل الجبهية الظهرية الوحشية </span>المرتبطة بمشاعر الاكتئاب والقلق.</p>
				<p class="lead text-justify text-indent">ووجد الباحثون أيضا أن النشاط المكثف لتلك المنطقة بالدماغ مرتبط بانخفاض
أعراض القلق والاكتئاب لدى الأشخاص.
</p>
				<p class="lead text-justify text-indent">وقال الباحثون إن نتائج الدراسة تحفزهم في المستقبل على بناء استراتيجيات جديدة لمساعدة الناس على تنظيم عواطفهم، ومنع أعراض القلق والاكتئاب، خاصة في البلدان النامية، التي يتعرض سكانها المستويات مرتفعة من القلق والاكتئاب.</p>
			</div>
		</div>
		<?php include '../assets/footer.php' ?>
	</div>
</body>
</html>
