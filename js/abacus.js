var i,r,rs,res,num,rand,intvl,n1,n2,pw,func,lvl,level,rule,$btn,$tab,$input,$check,$refill,$lines = [],
rules = {
  "simple_add": {
    1:[1,2,3,5,6,7,8],
    2:[1,2,5,6,7],
    3:[1,5,6],
    4:[5],
    5:[1,2,3,4],
    6:[1,2,3],
    7:[1,2],
    8:[1]
  },
  "simple_sub": {
    9:[1,2,3,4,5,6,7,8],
    8:[1,2,3,5,6,7],
    7:[1,2,5,6],
    6:[1,5],
    4:[1,2,3],
    3:[1,2],
    2:[1]
  },
  "mob5_add": {
    1:[4],
    2:[3,4],
    3:[2,3,4],
    4:[1,2,3,4],
  },
  "mob5_sub": {
    5:[1,2,3,4],
    6:[2,3,4],
    7:[3,4],
    8:[4],
  },
  "mob10_add": {
    1:[9],
    2:[8,9],
    3:[7,8,9],
    4:[6,7,8,9],
    5:[5],
    6:[4,5,9],
    7:[3,4,5,8,9],
    8:[2,3,4,5,7,8,9],
    9:[1,2,3,4,5,6,7,8,9],
  },
  "mob10_sub": {
    1:[2,3,4,5,7,8,9],
    2:[3,4,5,8,9],
    3:[4,5,9],
    4:[5],
    5:[6,7,8,9],
    6:[7,8,9],
    7:[8,9],
    8:[9],
  },
  "mob105_add": {
    5:[6,7,8,9],
    6:[6,7,8],
    7:[6,7],
    8:[6],
  },
  "mob105_sub": {
    1:[6],
    2:[6,7],
    3:[6,7,8],
    4:[6,7,8,9],
  },
  "all": {
    0:[0,1,2,3,4,5,6,7,8,9],
    1:[0,1,2,3,4,5,6,7,8,9],
    2:[0,1,2,3,4,5,6,7,8,9],
    3:[0,1,2,3,4,5,6,7,8,9],
    4:[0,1,2,3,4,5,6,7,8,9],
    5:[0,1,2,3,4,5,6,7,8,9],
    6:[0,1,2,3,4,5,6,7,8,9],
    7:[0,1,2,3,4,5,6,7,8,9],
    8:[0,1,2,3,4,5,6,7,8,9],
    9:[0,1,2,3,4,5,6,7,8,9],
  }
};
function pickRandomProperty(obj) {
  var result;
  var count = 0;
  for (var prop in obj)
    if (Math.random() < 1/++count)
      result = prop;
  return result;
}
function createAbacus(lines) {
  $lines = [];
  i = 0;
  r = 0;
  while (i < lines) {
    r -= 4;
    $lines.push('<div class="line d-inline-block position-relative h-100" style="width: 30px;border-top: 10px solid #343a40;border-bottom: 10px solid #343a40;border-left: 5px solid #343a40;right : '+r+'px">');
    $lines.push('<div class="five" style="border-bottom: 10px solid #343a40;height: 34%">');
    $lines.push('<div class="position-relative rounded-circle bg-dark" style="height: 15px; width: 30px; top: 1px; right: 13.5px;z-index: 5001;transition:0.3s"></div></div>');
    $lines.push('<div class="ones position-relative" style="height: 66%">');
    $lines.push('<div class="position-relative rounded-circle bg-dark" style="height: 15px; width: 30px; top: 16px; right: 13.5px;z-index: 5001;transition:0.3s"></div>');
    $lines.push('<div class="position-relative rounded-circle bg-dark" style="height: 15px; width: 30px; top: 17px; right: 13.5px;z-index: 5001;transition:0.3s"></div>');
    $lines.push('<div class="position-relative rounded-circle bg-dark" style="height: 15px; width: 30px; top: 18px; right: 13.5px;z-index: 5001;transition:0.3s"></div>');
    $lines.push('<div class="position-relative rounded-circle bg-dark" style="height: 15px; width: 30px; top: 19px; right: 13.5px;z-index: 5001;transition:0.3s"></div></div></div>');
    i++;
  }
  $tab.find("#abacus").html('<div class="d-inline-block position-relative h-100" style="border: 5px solid #343a40;right: 5px"></div>'+$lines.join('\n')+'<div class="d-inline-block position-relative h-100" style="border: 10px solid #343a40; border-right: 0; width: 30px;right: '+(r-5)+'px"><div style="border-bottom: 10px solid #343a40;height: 34%"></div></div>');
  moveBeads();
}
function countAbacus() {
  rs = 0;
  pw = 1;
  $tab.find(".line").each(function() {
    rs += $(this).find(".five .bg-primary").length * 5 * pw;
    rs += $(this).find(".ones .bg-primary").length * pw;
    pw *= 10;
  });
  return rs;
}
function resetAbacus() {
  $tab.find(".five .bg-primary").css("top","-=15px").removeClass("bg-primary").addClass("bg-dark");
  $tab.find(".ones .bg-primary").css("top","+=15px").removeClass("bg-primary").addClass("bg-dark");
}
function readAbacus() {
  resetAbacus();
  $input.focus().val("");
  $tab.find(".w-100:last").html("");
  i = 0;
  setTimeout(function(){
    while (i < num) {
      var gen = Math.floor(rndm(0) * 10);
      if (gen % 2 == 0) {
        $(".line:eq("+i+")").find(".five div").css("top","+=15px").removeClass("bg-dark").addClass("bg-primary");
      }
      $(".line:eq("+i+")").find(".ones div:eq("+gen+")").css("top","-=15px").removeClass("bg-dark").addClass("bg-primary").prevAll(".bg-dark").css("top","-=15px").removeClass("bg-dark").addClass("bg-primary");
      i++;
    }
  },350);
}
function moveBeads() {
  $tab.find(".five").on("click", ".bg-dark", function() {
    $(this).css("top","+=15px").removeClass("bg-dark").addClass("bg-primary");
  });
  $tab.find(".five").on("click", ".bg-primary", function() {
    $(this).css("top","-=15px").removeClass("bg-primary").addClass("bg-dark");
  });
  $tab.find(".ones").on("click", ".bg-dark", function() {
    $(this).css("top","-=15px").removeClass("bg-dark").addClass("bg-primary").prevAll(".bg-dark").css("top","-=15px").removeClass("bg-dark").addClass("bg-primary");
  });
  $tab.find(".ones").on("click", ".bg-primary", function() {
    $(this).css("top","+=15px").removeClass("bg-primary").addClass("bg-dark").nextAll(".bg-primary").css("top","+=15px").removeClass("bg-primary").addClass("bg-dark");
  });
}
function checkLevel(l,st) {
  $.ajax({
    url: "../../includes/checkLevel.php",
    type: "GET",
    dataType: "text",
    error: function(stt, xhr,err) {
      console.log(err);
    },
    success: function(res) {
      console.log(res);
      if (Number(res) > l) {
        correct = 0;
        $p.html("");
        toggleTab();
      } else if (Number(res) === l) {
        correct = 5;
        $p.html("يمكنك المرور الى التمرين الموالي بعد "+correct+" اجابات صحيحة");
        toggleTab();
      } else if (Number(res) < st) {
        $(".tab-pane.show").removeClass("show active");
        $("#exercices").find("a.active").removeClass("active");
        $btn.closest(".row").prev().text("لا يمكنك انجاز هذا التمرين الا بعد اتمام تمارين الوحدة السابقة");
      }	else {
        $(".tab-pane.show").removeClass("show active");
        $("#exercices").find("a.active").removeClass("active");
        $btn.closest(".row").prev().text("لا يمكنك انجاز هذا التمرين الا بعد انجاز التمارين السابقة");
      }
    }
  });
}
function saveLevel() {
  $.ajax({
    url: "../../includes/saveLevel.php",
    type: "POST",
    data: {},
    error: function(stt, xhr,err) {
      console.log(err);
    },
    success: function(r) {
      console.log(r);
    }
  });
}
function toggleTab() {
  $('#exercices').find("a").removeClass("active");
  $btn.addClass("active");
  $(".tab-pane").removeClass("show active");
  $tab.addClass("show active");
}
function rndm(max) {
  rand = Math.random();
  while (rand < max) {
    rand = Math.random();
  }
  return rand;
}
function rset() {
  res = 0;
  res1 = 0;
  res2 = 0;
  n1 = 0;
  n2 = 0;
  pw = 1;
  $input.val("").focus();
  $tab.find("#status").html("");
  resetAbacus();
  func();
}
function check() {
  if ($tab.find('input').length == 0) {
    answer = countAbacus();
  }
  if ($tab.find('input').length == 1) {
    answer = Number($input.val());
  }
  if (answer == Number(res)) {
    $tab.find("#status").html("<i class='far fa-4x fa-smile animated zoomIn'></i>");
    correct--;
  } else {
    $tab.find("#status").html("<i class='far fa-4x fa-frown animated zoomIn'></i>");
    if (correct > 0) {
      correct++;
    }
  }
  setTimeout(function(){
    if (correct > 0) {
      $p.html("يمكنك المرور الى التمرين الموالي بعد "+correct+" اجابات صحيحة");
    } else if (correct == 0) {
      $p.html("يمكنك المرور الى التمرين الموالي");
      saveLevel();
    } else {
      $p.html("يمكنك المرور الى التمرين الموالي");
    }
    rset();
  },1000);
}
function getHand() {
  clearInterval(intvl);
  i = 0;
  intvl = setInterval(function(){
    n1 = Math.floor(rndm(0) * 10);
    n2 = Math.floor(rndm(0) * 10);
    $tab.find("img:first").attr("src","../../images/hands/hand_"+n1+".png").next().attr("src","../../images/hands/hand_"+n2+"0.png");
    i++;
    if (i > 15) {
      clearInterval(intvl);
      $input.focus();
      res = n2+""+n1;
    }
  },50);
}
function getNumber() {
  clearInterval(intvl);
  i = 0;
  intvl = setInterval(function(){
    $tab.find(".nbr").find("span").each(function() {
      n1 = Math.floor(rndm(0) * 10);
      $(this).text(n1);
    });
    i++;
    if (i > 15) {
      res = Number($tab.find(".nbr").text());
      clearInterval(intvl);
    }
  },50);
}
function getAbacus() {
  clearInterval(intvl);
  i = 0;
  intvl = setInterval(function(){
    pw = 1;
    res = 0;
    $tab.find("img").each(function() {
      n1 = Math.floor(rndm(0) * 10);
      res += (n1 * pw);
      pw *= 10;
      $(this).attr("src","../../images/abacus/"+n1+".png");
    });
    i++;
    if (i > 15) {
      clearInterval(intvl);
      $input.focus();
    }
  },50);
}
function getNumber1() {
  $tab.find(".nbr1").removeClass("d-none").addClass("d-block");
  $tab.find(".nbr2").removeClass("d-block").addClass("d-none");
  clearInterval(intvl);
  i = 0;
  intvl = setInterval(function(){
    $tab.find(".nbr1").find("span").each(function() {
      $tab.find(".animated").removeClass("animated flash infinite");
      $(this).text(Math.floor(rndm(0.1)*10));
    });
    i++;
    if (i > 15) {
      clearInterval(intvl);
      i = ($tab.find(".nbr1").find("span").length) - 1;
      j = ($tab.find(".nbr2").find("span").length) - 1;
      while (j >= 0) {
        n1 = pickRandomProperty(rules[rule]);
        $tab.find(".nbr1").find("span:eq("+i+")").text(n1);
        n2 = rules[rule][n1][Math.floor(Math.random()*rules[rule][n1].length)];
        $tab.find(".nbr2").find("span:eq("+j+")").text(n2);
        i--;
        j--;
      }
      $tab.find(".nbr1").addClass("animated flash infinite");
      res1 = Number($tab.find(".nbr1").text());
      res2 = Number($tab.find(".nbr2").text());
      $tab.find("#abacus").on("click",".rounded-circle", function(){
        $tab.find(".animated").removeClass("animated flash infinite");
        if (countAbacus() == res1) {
          $tab.find(".nbr1").removeClass("d-block").addClass("d-none");
          $tab.find(".nbr2").removeClass("d-none").addClass("d-block animated flash infinite");
          if (rule == "simple_add" || rule == "mob5_add" || rule == "mob10_add" || rule == "mob105_add") {
            $(".nbr2").find("i").removeClass("fa-minus").addClass("fa-plus");
            res = res1 + res2;
          } else if (rule == "all") {
            if (Math.floor(rndm(0) * 10) % 2 == 0) {
              $(".nbr2").find("i").removeClass("fa-minus").addClass("fa-plus");
              res = res1 + res2;
            } else {
              $(".nbr2").find("i").removeClass("fa-plus").addClass("fa-minus");
              res = res1 - res2;
            }
          } else {
            $(".nbr2").find("i").removeClass("fa-plus").addClass("fa-minus");
            res = res1 - res2;
          }
        }
      });
    }
  },50);
}
function getNumber2() {
  clearInterval(intvl);
  i = 0;
  intvl = setInterval(function(){
    $tab.find(".nbr1,.nbr2").find("span").each(function() {
      $(this).text(Math.floor(rndm(0.2)*10));
    });
    i++;
    if (i > 15) {
      clearInterval(intvl);
      res1 = Number($tab.find(".nbr1").text());
      res2 = Number($tab.find(".nbr2").text());
      res = res1 * res2;
    }
  },50);
}
function representNumber(){
  resetAbacus();
  $tab.find(".w-100:last").html("");
  rs = 0;
  i = 0;
  pw = 1;
  while (i < num) {
    var gen = Math.floor(rndm(0) * 10);
    rs += gen * pw;
    i++;
    pw *= 10;
  }
  $input.val(rs);
}
