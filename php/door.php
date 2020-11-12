<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Угадай дверь</title>

  </head>
  <body>
    <div class="top">
      <p class="balance">Баланс: 0 руб</p>
      <a class="g" href="/index.php">Назад</a>
      <a class="gg" href="/exits.php">Выйти из аккаунта</a>

      <div class="block">

      <div class="undblock">
          <p class="text">ИГРА УГАДАЙ ДВЕРЬ</p>
          <a class="ab" href="javascript:PopUpShow()">Правила игры</a>
          <div class="b-popup" id="popup1">
  			  <div class="b-popup-content">
            <h5>Ваша задача угадать дверь в которой находятся деньги!
            если не угадываете ваша ставка сжигается</h5>
              <a class="a" href="javascript:PopUpHide()">Закрыть</a>
        </div>
        </div>
        <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
				<script>
				    $(document).ready(function(){
				        //Скрыть PopUp при загрузке страницы
				        PopUpHide();
				    });
				    //Функция отображения PopUp
				    function PopUpShow(){
				        $("#popup1").show();
				    }
				    //Функция скрытия PopUp
				    function PopUpHide(){
				        $("#popup1").hide();
				    }
				</script>
        <style media="screen">
          .a {
          top: -15px;
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
          .ab {
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
        .balance {
          position: relative;
          top: 20px;
          left: 30px;
          font-size: 25px;
        }

        					*{
        				    font-family: Areal;
        				}
        				.b-container{
        				    width:200px;
        				    height:150px;
        				    background-color: #ccc;
        				    margin:0px auto;
        				    padding:10px;
        				    font-size:30px;
        				    color: #fff;
        				}
        				.b-popup{
        					text-align: center;
        				    width:100%;
        				    min-height:13%;
        				    background-color: rgba(0,0,0,0.5);
        				    overflow:hidden;
        				    position:fixed;
        				    top:-10px;

        				}
        				.b-popup {
        				    margin:60px 100px 100px auto;
        				    width:100px;
        				    height: 40px;
        				    padding:100px;
        				    background-color: #dabd;
        				    border-radius:5px;
        				    box-shadow: 0px 0px 10px #000;
        				}


          .block {
            margin-top: 100px;
            border: solid 3px #dabd;
            width: 100%;
            height: 800px;
            background: #dabd;
          }
          .undblock {
            text-align: center;
            border: solid 2px #dabd;
            background: #dabd;
            margin-top: 0px;
            height: 100px;
          }
          .g {
            left: 900px;
            top: -10px;
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
            .top {
                width: 100%;
                height: 130px;
                background: #FFD700;
                text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
                             #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
                             #cad5e2 5px 5px 0;
                border: solid 3px #dabd;
            }
            .gg {
    left: 1000px;
    top: -10px;
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
      <div class="kek">
        <input class="in" type="text" name="bet" value="1">
      <style media="screen">
      .but {
        margin-top: 5px;
      margin-left: 45.5%;
      font-size: 13px;
      font-weight: 400px;
     color: white;
     text-decoration: none;
     padding: .4em 1em calc(.8em + 3px);
     border-radius: 3px;
     background: rgb(64,199,129);
     box-shadow: 0 -3px rgb(53,167,110) inset;
     transition: 0.2s;


      }
      .but:hover { background: rgb(53, 167, 110); }
      .but:active {
    background: rgb(33,147,90);
    box-shadow: 0 3px rgb(33,147,90) inset;
    }
          .in {
          margin-top: 25px;
          height: 18px;
        }
        .kek{
          margin-top: 20px;
          text-align: center;
          border: solid 4px #acdb;
          height: 70px;
        }
      </style>
      </div>
        <button class="but" type="button" name="button">Сделать ставку</button>
        <br><br><br>
        <img class="c" src="foratom.jpeg">
        <button class="one" type="button" name="button">Выбрать дверь 1</button>
        <center>
        <img class="d" src="foratom.jpeg">
          <button class="two" type="button" name="button">Выбрать дверь 2</button>
      </center>
        <style media="screen">
        .c {
          float: left; /* Выравнивание по правому краю */
     margin: 0 1000px 5px 200px; /* Отступы вокруг фотографии */
        }
          .d {
            float: right;
            margin-top: -360px;
            margin-right: 45%;
          }
          .e {
            float: right;
            margin-top: -360px;
            margin-right: 20%;
          }
          .one {
            margin-top: 25px;
          margin-left: 16%;
          font-size: 13px;
          font-weight: 400px;
         color: white;
         text-decoration: none;
         padding: .3em 1em (.8em + 3px);
         border-radius: 3px;
         background: rgb(15,19,129);
         box-shadow: 0 -3px rgb(3,9,167);
         transition: 0.2s;


          }
          .one:hover { background: rgb(86, 5, 110); }
          .one:active {
        background: rgb(3,9,167);
        box-shadow: 0 3px rgb(3,9,167) inset;
        }
        .two {
          float: right;
          margin-right: 46%;
          margin-top: -25px;
          font-size: 13px;
          font-weight: 400px;
         color: white;
         text-decoration: none;
         padding: .3em 1em (.8em + 3px);
         border-radius: 3px;
         background: rgb(15,19,129);
         box-shadow: 0 -3px rgb(3,9,167);
         transition: 0.2s;


          }
          .two:hover { background: rgb(86, 5, 110); }
          .two:active {
        background: rgb(3,9,167);
        box-shadow: 0 3px rgb(3,9,167) inset;
      }
        .three {
          float: right;
          margin-top: -25px;
          display: block;
          margin-right: 21%;
            font-size: 13px;
            font-weight: 400px;
           color: white;
           text-decoration: none;
           padding: .3em 1em (.8em + 3px);
           border-radius: 3px;
           background: rgb(15,19,129);
           box-shadow: 0 -3px rgb(3,9,167);
           transition: 0.2s;
            }
            .three:hover { background: rgb(86, 5, 110); }
            .three:active {
          background: rgb(3,9,167);
          box-shadow: 0 3px rgb(3,9,167) inset;
        }
        </style>
        <img class="e" src="foratom.jpeg">
          <button class="three" type="button" name="button">Выбрать дверь 3</button>
          <p class="down">Все права защищены </p>

          <p class="udown">© 2020</p>
          <style media="screen">
            .down {
              margin-top: 6%;
              margin-left: 85%;
            }
            .udown {
              margin-left: 85%;
            }
          </style>
    </div>
  </body>
</html>
