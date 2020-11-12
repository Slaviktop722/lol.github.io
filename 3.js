
//tempOut = document.getElementById ('temp-out');
//tempOut.innerHTML = prNum;
function f1() {
  var prNum, tempOut;
  prNum = Math.floor((Math.random() * 10) + 1 );
  var num, out;
  num = document.getElementById('mynum').value;
  out = document.getElementById('out');
  var point = document.getElementById('point');
  point = 0;


if (num == prNum) {
   out.innerHTML = ("ВЫ УГАДАЛИ, ЗАГАДАННОЕ ЧИСЛО: " + prNum + "!");
  out2.innerHTML = ((point+1));
    }
else if (num > prNum) {
   out.innerHTML = ("Число больше загаданного. ВЕРНЫЙ ОТВЕТ " + prNum);
   out2.innerHTML = ((point--));
    }
else if (num < prNum) {
   out.innerHTML = ("Число меньше загаданного. ВЕРНЫЙ ОТВЕТ " + prNum);
   out2.innerHTML = ((point-1));
    }

  }
