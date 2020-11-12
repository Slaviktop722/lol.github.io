<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="miniplays; plays; minigames; games; slavik; игры; миниигры" />
     <meta name="description" content="На этом сайте есть много интересных миниигр в которые можно играть с друзьями! а также на деньги))" />
      <title>КРЕСТИКИ-НОЛИКИ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="top">
    <a class="g" href="/index.php">Назад</a>
    <a class="gg" href="/exits.php">Выйти из аккаунта</a>

  </div>
  <style media="screen">
    .g {
      right: 30px;
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
      .g:hover {
      background-size: 140% 100%, auto;
      }
      .g:active {
      top: 1px;
      color: #ffdead;
      box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000;
      }


    .gg {
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

    .top {
      margin-right: 10px;
      text-align: right;
      margin-left: 0%;
      border: solid 3px #F4A460;
      background: #FFD700;
      padding: 30px 260px;
      text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
                   #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
                   #cad5e2 5px 5px 0;
      }
      </style>

  <style>
  body { background: url(https://images.wallpaperscraft.ru/image/uzory_fon_svetlyy_linii_tekstura_50877_300x188.jpg) }
</style>
<center>
<h1> ДАННЫЙ РЕЖИМ ПОКА ЧТО НЕ РАБОТАЕТ НА ТЕЛЕФОНАХ
<br>(включите версию экрана для ПК чтобы играть на телефоне)</h1>
    </center>
    <div class="content">

        <div class="currentPlayer">
            <span></span>Сейчас ходит: <span id="curPlyr">X</span></span>
        </div>

        <div id="area"></div>

        <div class="stat">
            <table>
                <th colspan="2">Статистика</th>
                <tr>
                    <td>X</td>
                    <td><span id="sX">0</span></td>
                </tr>
                <tr>
                    <td>O</td>
                    <td><span id="sO">0</span></td>
                </tr>
                <tr>
                    <td>Ничьи</td>
                    <td><span id="sD">0</span></td>
                </tr>
            </table>
        </div>

        <script src="main.js"></script>
    </div>
    <div class="lol">
  <style media="screen">
    .lol {
      width: 50em;
      border: 1px solid #533;
      box-shadow: 8px 8px 5px #754;
      padding: 100px 270px;
      background-image: linear-gradient(400deg, #ccf, #dcd 30%, #fcc);
      margin-bottom: 4%

    }
  </style>

    </div>
    <style>
        media (max-width: 1160px) {
            .currentPlayer {
              width: 100%;
              height: 100% ;
             font-size: 100px;
            }
            .stat {
            width: 100%;
            height: 100%;
            font-size: 100px;
            }
            .lol {
             width: 100%;
             font-size: 50px;
            line-height: 30px;
            margin-top: 800px;
            }



        }




    </style>
</body>
</html>
