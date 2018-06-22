<?php
  $lines = 2;
?>
<div id="abacus-block" class="mx-auto" style="height: 230px">
  <div class="d-inline-block position-relative h-100" style="border: 10px solid #343a40"></div>
<?php
  $i = 0;
  $r = 0;
  while ($i < $lines) {
    $r -= 4;
?>
  <div class="d-inline-block position-relative h-100" style="width: 60px;border-top: 15px solid #343a40;border-bottom: 15px solid #343a40;border-left: 5px solid #343a40;right : <?php echo $r ?>px">
    <div style="border-bottom: 15px solid #343a40;height: 35%">
      <div class="position-relative rounded-circle bg-dark" style="height: 25px; width: 50px; top: 2px; right: 33.5px"></div>
    </div>
    <div class="position-relative" style="height: 65%">
      <div class="position-relative rounded-circle bg-dark" style="height: 25px; width: 50px; top: 26px; right: 33.5px"></div>
      <div class="position-relative rounded-circle bg-dark" style="height: 25px; width: 50px; top: 27px; right: 33.5px"></div>
      <div class="position-relative rounded-circle bg-dark" style="height: 25px; width: 50px; top: 28px; right: 33.5px"></div>
      <div class="position-relative rounded-circle bg-dark" style="height: 25px; width: 50px; top: 29px; right: 33.5px"></div>
    </div>
  </div>
<?php
  	$i++;
  }
?>
  <div class="d-inline-block position-relative h-100" style="border: 15px solid #343a40; border-right: 0; width: 80px;right: <?php echo $r-15 ?>px">
    <div style="border-bottom: 15px solid #343a40;height: 35%"></div>
  </div>
</div>
