var s = document.getElementById("b");
document.getElementById("button").onclick = function () {
      var f = (Math.floor((Math.random()) * 1000));
      s.innerHTML = ("ВАМ ВЫПАЛО ЧИСЛО " + f);
}
