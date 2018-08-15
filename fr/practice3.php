  <?php include 'assets/header.php' ?>
    	<audio id="beep">
        <source src="../../beep.mp3" type="audio/mpeg">
        <source src="../../beep.ogg" type="audio/mpeg">
        <source src="../../beep.wav" type="audio/mpeg">
      </audio>
        <h1 class="h1 text-uppercase">Entraînement de vitesse</h1>
        <h4 class="h4">FLASHCALC/flashanzan</h4>
				<hr>
        <div class="row justify-content-center">
          <div class="col-sm-3">
            <label for="dig">Chiffres</label>
            <input id="dig" class="form-control text-center rounded-0 background-transparent border-dark" type="number" value="1" style="box-shadow: none">
          </div>
          <div class="col-sm-3">
            <label for="num">Nombres</label>
            <input id="num" class="form-control text-center rounded-0 background-transparent border-dark" type="number" value="4" style="box-shadow: none">
          </div>
          <div class="col-sm-3">
            <label for="">Secondes</label>
            <input id="spd" class="form-control text-center rounded-0 background-transparent border-dark" type="number" min="0.3" max="20" step="0.1" value="1" style="box-shadow: none">
          </div>
          <div id="bd" class="w-100 text-center font-weight-bold pt-5 mt-5"></div>
          <button id="start" type="button" class="btn btn-lg btn-outline-dark text-uppercase rounded-0 px-5">Commencer<i class="fas fa-stopwatch ml-2"></i></button>
        </div>
      </div>
		</div>
		<?php include 'assets/footer.php' ?>
	</div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#spinner").addClass("d-none");
			$("a[href='practice3.php'],#dropdownMenu1").addClass("active");
      var num,spd,dig,clr,gen,rand,i,res,answer,intvl,keyCode;
      function rndm(max) {
        rand = Math.random();
        while (rand < max) {
          rand = Math.random();
        }
        return rand;
      }
      function playSerie() {
        i = 0;
        res = 0;
        intvl = setInterval(function(){
          gen = Math.floor(rndm(0.1) * Math.pow(10,dig));
          $("#beep").get(0).play();
          clr = "dark";
          if (i % 2 == 0) {
            clr = "primary";
          }
          $("#bd").html("<div class='text-"+clr+"' id='gen'>"+gen+"</div>");
          res += gen
          i++;
          if (i == num) {
            clearInterval(intvl);
            setTimeout(function(){
              $("#bd").html("<div class='input-group w-50 mx-auto' dir='rtl'><span class='input-group-btn'><button class='btn btn-lg btn-outline-dark rounded-0 background-transparent border-left-0'><i class='fas fa-arrow-right'></i></button></span><input type='number' class='form-control form-control-lg text-center rounded-0 border-dark background-transparent' style='box-shadow:none'></div>");
              $("#bd").find("input").focus().prev().on("click", "button", function(event){
                answer = $("#bd").find("input").val();
  							if (res == answer) {
                  $("#bd").html("<div class='text-success animated zoomIn' id='gen'>"+res+"</div>");
                } else {
                  $("#bd").html("<div class='text-danger animated zoomIn' id='gen'>"+res+"</div>");
                }
                setTimeout(function(){
                  $("#start").removeClass("d-none").addClass("d-block");
                  $("#bd").html("");
                },2000);
              });
              $("#bd").find("input").on("keyup", function(event){
                var keyCode = (event.keyCode ? event.keyCode : event.which);
                if (keyCode == 13) {
                  answer = $("#bd").find("input").val();
    							if (res == answer) {
                    $("#bd").html("<div class='text-success animated zoomIn' id='gen'>"+res+"</div>");
                  } else {
                    $("#bd").html("<div class='text-danger animated zoomIn' id='gen'>"+res+"</div>");
                  }
                  setTimeout(function(){
                    $("#start").removeClass("d-none").addClass("d-block");
                    $("#bd").html("");
                  },2000);
                }
              });
            },spd * 1000);
          }
        },spd * 1000);
      }
      $("#start").on("click", function(){
        $(this).removeClass("d-block").addClass("d-none");
        num = Number($("#num").val());
        spd = Number($("#spd").val());
        dig = Number($("#dig").val());
        playSerie();
      })
		});
  </script>
</body>
</html>
