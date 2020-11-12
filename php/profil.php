<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profil</title>

  </head>
  <body>
    <center>
    <div class="profil">
      <b class="size">Данные</b>
      <p class="left">Ник: <?=$_COOKIE['user'] ?></p>
      <p class="left">Баланс: 0</p>
      <a class="gg" href="donate.php">Покупка привилегий</a>
      <a class="g" href="index.php">Назад</a>
      <style media="screen">
        .g {
          top: 30px;
          right: 220px;
          position: relative;
          font-weight: bold;
          color: white;
          text-decoration: none;
          text-shadow: 0 -1px 1px #cc5500;
          user-select: none;
          padding: .3em 1em;
          outline: none;
          border-radius: 1px;
          background: linear-gradient(to left, rgba(0,0,0,.3), rgba(0,0,0,.0) 50%, rgba(0,0,0,.3)), linear-gradient(#d77d31, #fe8417, #d77d31);
          background-size: 100% 100%, auto;
          background-position: 50% 50%;
          box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, #000 0 10px 15px -10px;
          transition: 0.2s;
        }
          .gg:hover {
          background-size: 140% 100%, auto;
        }
          .gg:active {
          top: 1px;
          color: #ffdead;
          box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000;
        }

          .size {
          font-size: 40px;

        }
        .profil {
          width: 350px;
          height: 180px;
            border: 1.6px solid #b1abab;
            padding: 70px;
            text-align: left;
            transition: 0.3s all;
            overflow: hidden;
            margin: 50px 0;
            cursor: pointer;
            border-radius: 3px;
            box-shadow: 3px 3px 14px 0px rgba(144, 137, 137, 0.24), 0px 9px 27px -12px rgba(33, 31, 31, 0.1);
        }
        .left {
          font: bold 1.2em Arial, sans-serif;
      		color: #0d3967;
      		text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
      								 #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
      								 #cad5e2 5px 5px 0;
      	 }

        .gg {
  right: -120px;
  top: 30px;
  position: relative;
  font-weight: bold;
  color: white;
  text-decoration: none;
  text-shadow: 0 -1px 1px #cc5500;
  user-select: none;
  padding: .3em 1em;
  outline: none;
  border-radius: 1px;
  background: linear-gradient(to left, rgba(0,0,0,.3), rgba(0,0,0,.0) 50%, rgba(0,0,0,.3)), linear-gradient(#d77d31, #fe8417, #d77d31);
  background-size: 100% 100%, auto;
  background-position: 50% 50%;
  box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, #000 0 10px 15px -10px;
  transition: 0.2s;
}
  .gg:hover {
  background-size: 140% 100%, auto;
}
  .gg:active {
  top: 1px;
  color: #ffdead;
  box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000;
}
      </style>
    </div>
  </center>
  </body>
</html>
