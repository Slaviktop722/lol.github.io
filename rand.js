let num = document.getElementById('num');
let rand = Math.floor((Math.random () * 3 ) + 1);
console.log (rand);
let bet = 1;
  function f1() {
    if (bet == rand) {
      num.innerHTML = ("Вы угадали");
    }
    else if (bet < rand) {
      num.innerHTML = ("Вы не угадали, правильная дверь " + rand);
    }
  }
  function f2() {
    let tem = 2;
    if (tem == rand){
      num.innerHTML = ("Вы угадали!");
    }
    else if (tem < rand) {
      num.innerHTML = ("Вы не угадали, правильная дверь " + rand);
    }
    else if (tem > rand) {
      num.innerHTML = ("Вы не угадали, правильная дверь " + rand);
  }
}
  function f3() {
    let kol = 3;
    if (kol == rand){
      num.innerHTML = ("Вы угадали!");
    }
    else if (kol > rand) {
      num.innerHTML = ("Вы не угадали, правильная дверь " + rand);
    }
  }
