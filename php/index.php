<!DOCTYPE html>
<html dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="miniplays; plays; minigames; games; slavik; игры; миниигры" />
		 <meta name="description" content="На этом сайте есть много интересных миниигр в которые можно играть с друзьями! а также на деньги))" />
		 <script src="kick1.js" defer>
		 </script>
		<title>Play</title>
		<link rel="stylesheet" type="text/css" href="dark.css">
		<link rel="stylesheet" type="text/css" href="light.css" id="theme-link">
		</head>
	<body>
		<?php
		if ($_COOKIE['user'] == ''):
		 ?>
		 <div class="top">
			 <button class="theme-button" id="theme-button">Сменить тему</button>
			 <a class="g" href="http://vk.com/minigames.space">Группа вк</a>
			 <button class="g" id="button1">Профиль</button>
			 <button class="g" id="button2">Play</button>
			 <p class="fail" id="fail"></p>
		 </div>
		 <style media="screen">
		 .fail {
			 float: left;
			 margin-left: 65%;
		 }
		 .theme-button{
			 margin-right: 25px;
		 }
		 .g {
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
		 margin-right: 30px;
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
				text-align: right;
				margin-top: 0px;
				margin-left: 0%;
				border: solid 3px #F4A460;
				background: #FFD700;
				padding: 25px 260px;
				text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
										 #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
										 #cad5e2 5px 5px 0;
			}
		 </style>
		 <div class="bigger">
	 <form action="avt.php" method="post">
			<div class="Box">
				<h2 class="div" style="color: #708090">Зарегистрироваться</h2>
				<input id="login" class="input" type="text" name="login" placeholder="Придумайте логин">
				<input id="password" class="inpute" type="password" name="password" placeholder="Придумайте пароль">
				<button class="but" type="submit" name="button">Зарегистрироваться</button>
				<script src="themes.js">

				</script>
			<style media="screen">
			.Box {
width:600px; /* Ширина блока */
height: 400px; /* Высота блока */
background-color: #fffffc; /* Фоновый цвет*/
border: 2px solid #D4D4D4; /* Ширина и цвет границ*/
border-radius: 10px; /* Радиус границ*/
box-shadow: 0 0 15px #A9A9A9; /* Размер и цвет тени блока*/
text-align: center;

}
	.div {
		box-shadow: 0 0 10px #F4A460;
	}
	.input {
		width: 580px;
		border: solid 3px #A9A9A9;
		font-size: 20px;
		margin-top: 10px;
	}
	.inpute {
		width: 580px;
		border: solid 3px #A9A9A9;
		margin-top: 25px;
		font-size: 20px;
	}
	.but {
		font-weight: 700;
 color: white;
 text-decoration: none;
 padding: .8em 1em calc(.8em + 3px);
 border-radius: 3px;
 background: rgb(64,199,129);
 box-shadow: 0 -3px rgb(53,167,110) inset;
 transition: 0.2s;
	font-size: 18px;
	margin-top: 30px;
	}
	.but:hover { background: rgb(53, 167, 110); }
	.but:active {
background: rgb(33,147,90);
box-shadow: 0 3px rgb(33,147,90) inset;
}
			</style>
		 	</div>
		 			<style media="screen">
		 			.boks {
		 width:600px; /* Ширина блока */
		 height: 400px; /* Высота блока */
		 background-color: #fffffc; /* Фоновый цвет*/
		 border: 2px solid #D4D4D4; /* Ширина и цвет границ*/
		 border-radius: 10px; /* Радиус границ*/
		 box-shadow: 0 0 15px #A9A9A9; /* Размер и цвет тени блока*/
		 margin-left: 50%;
		 margin-top: -30.5%;
		 text-align: center;
		 	}
		 			</style>
		 		 </div>
			 </form>
			<form action="avt2.php" method="post">
			 <div class="boks">
		<h2 class="div" style="color: #708090">Войти</h2>
		<input id="login" class="input" type="text" name="login" placeholder="Введите логин">
		<input id="password" class="inpute" type="password" name="password" placeholder="Введите пароль">
		<button class="but" type="submit" name="button">Войти</button>
		</form>
		<style media="screen">
			.bigger {
				margin-top: 20px;
			}
		</style>

	</div>
	<?php else: ?>

<div class="bruh">
			<div class="top">
				<a class="g" href="http://vk.com/minigames.space">Группа вк</a>
				<a class="g" href="/profil.php">Профиль</a>
				<a class="g" href="javascript:PopUpShow()">Play</a>
				<div class="b-popup" id="popup1">
			      <div class="b-popup-content">
			          <p class="str">Режимы:</p>

								<a class="ggg" href="play\nvut.php">Nute</a>
								<br><br><br>
								<a class="ggg" href="play\numb.php">Numb</a>
								<br><br><br>
								<a class="ggg" href="play\door.php">Door</a>
								<br><br><br>
			      <a class="ggg" href="javascript:PopUpHide()">Закрыть</a>
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
				<button class="g" id="theme-button">Сменить тему</button>
				<a class="gg" href="/exits.php">Выйти из аккаунта</a>
				 <script src="themes.js"></script>
			 </div>
			 <br>
			 <br>

			<div class="warning">
				<h1 class="stroke"> <p>ЗДРАВСТВУЙТЕ <?=$_COOKIE['user'] ?> </p> ТУТ МНОГО РАЗНЫХ ИГР<br>НАПРИМЕР КРЕСТИКИ НОЛИКИ УГАДАЙ ЧИСЛО И РАНДОМАЙЗЕР <br>СКОРО БУДЕТ ЕЩЕ! </h1>
				<style media="screen">
				.str {
					margin-top: -70px;
					font-size: 25px;
				}
								.ggg {
	position: relative;
	font-weight: bold;
	color: white;
	text-decoration: none;
	text-shadow: 0 -1px 1px #cc5500;
	user-select: none;
	padding: .3em 1em;
	outline: none;
	border-radius: 1px;
	background: linear-gradient(to left, rgba(0,0,0,.6), rgba(0,0,0,.0) 100%, rgba(0,0,0,.3)), linear-gradient(#c1c1c1, #ba5, #d77c34);
	background-size: 100% 100%, auto;
	background-position: 50% 50%;
	box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #34af00, #ca5422 0 0 0 1px, #ccc 0 10px 15px -10px;
	transition: 0.2s;
}
	.ggg:hover {
	background-size: 140% 100%, auto;
	cursor: pointer;

}
	.ggg:active {
	top: 1px;
	color: #c1c1c1;
	box-shadow: inset #cdbb00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000;
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
				    background-color: #FFD700;
				    border-radius:5px;
				    box-shadow: 0px 0px 10px #000;
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
.g {
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
margin-right: 30px;
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
						margin-top: -10px;
						margin-right: 10px;
						text-align: right;
						margin-left: 0%;
						border: solid 3px #F4A460;
						background: #FFD700;
						padding: 25px 260px;
						text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
												 #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
												 #cad5e2 5px 5px 0;
						}

					.warning {
			width: 50em;
			border: 1px solid #533;
			box-shadow: 8px 8px 5px #754;
			padding: 40px 250px;
			background-image: linear-gradient(400deg, #ccf, #dcd 30%, #fcc);
			margin-bottom: 4%
		}
		.stroke {
		font: bold 1em Arial, sans-serif;
		color: #0d3967;
		text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
								 #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
								 #cad5e2 5px 5px 0;
	 }
	 </style>
	 </div>
	 <center>
	 <a href="index12.php" class="pop">Играть в угадай число</a>
		<style media="screen">

			.pop, .pop2, .pop3 {
		text-decoration: none;
		outline: none;
		display: inline-block;
		margin: 5px 20px;
		padding: 15px 30px;
		overflow: hidden;
		border: 2px solid;
		border-bottom-width: 4px;
		font-family: 'Montserrat', sans-serif;
		text-transform: uppercase;
		font-weight: bold;
		letter-spacing: 2px;
		color: rgba(30,255,188,1);
		background: rgba(255,255,255,1);
		transition: color .3s, background .5s;
	}
	.pop, .pop2, .pop3 :hover {
		animation: stripes .75s infinite linear;
		background: linear-gradient(45deg, rgba(30,255,188,1) 25%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 50%, rgba(30,255,188,1) 50%,      rgba(30,255,188,1) 75%, rgba(255,255,255,1) 75%, rgba(255,255,255,1));
		background-size: 10px 10px;
		color: #FF50E5;
	}
	@keyframes stripes {
		0% {background-position: 0 0;}
		100% {background-position: 50px 0;}
	}
		</style>
		<br>
		<a href="pt.php" class="pop2">Играть в крестики - нолики</a>
				<style media="screen">
					.pop, .pop2, .pop3 {
				text-decoration: none;
				outline: none;
				display: inline-block;
				margin: 5px 20px;
				padding: 15px 30px;
				overflow: hidden;
				border: 2px solid;
				border-bottom-width: 4px;
				font-family: 'Montserrat', sans-serif;
				text-transform: uppercase;
				font-weight: bold;
				letter-spacing: 2px;
				color: rgba(30,255,188,1);
				background: rgba(255,255,255,1);
				transition: color .3s, background .5s;
			}
			.pop, .pop2, .pop3 {
				animation: stripes .75s infinite linear;
				background: linear-gradient(45deg, rgba(30,255,188,1) 25%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 50%, rgba(30,255,188,1) 50%,      rgba(30,255,188,1) 75%, rgba(255,255,255,1) 75%, rgba(255,255,255,1));
				background-size: 10px 10px;
				color: #FF50E5;
			}
			@keyframes stripes {
				0% {background-position: 0 0;}
				100% {background-position: 50px 0;}
			}
				</style>
				<a href="index3.php" class="pop3">Играть в рандомайзер</a>
						<style media="screen">
							.pop, .pop2, .pop3 {
						text-decoration: none;
						outline: none;
						display: inline-block;
						margin: 5px 20px;
						padding: 15px 30px;
						overflow: hidden;
						border: 2px solid;
						border-bottom-width: 4px;
						font-family: 'Montserrat', sans-serif;
						text-transform: uppercase;
						font-weight: bold;
						letter-spacing: 2px;
						color: rgba(30,255,188,1);
						background: rgba(255,255,255,1);
						transition: color .3s, background .5s;
					}
					.pop, .pop2, .pop3 :hover {
						/*animation: stripes .75s infinite linear;
						background: linear-gradient(45deg, rgba(30,255,188,1) 25%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 50%, rgba(30,255,188,1) 50%,      rgba(30,255,188,1) 75%, rgba(255,255,255,1) 75%, rgba(255,255,255,1));
						background-size: 10px 10px;
						color: #FF50E5; */
					}
					@keyframes stripes {
						0% {background-position: 0 0;}
						100% {background-position: 50px 0;}
					}
						</style>
		</left>
<style type="text/css">
body{
background-color: #F8F8FF;
background-repeat: no-repeat;
background-position: top center;
background-attachment: fixed;
background-size: 100%;
}
.stroke {
		font: bold 1em Arial, sans-serif;
		color: #0d3967;
		text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
								 #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
								 #cad5e2 5px 5px 0;
	 }
</style>
			</div>
</center>
<br>
<br>
<br>
<br>
<div class="shadow">
	<p> <font size="6" color="black" face="Arial"> ПРАВИЛА: ВЫ МОЖЕТЕ ИГРАТЬ КАК ХОТИТЕ. <br> ГЛАВНОЕ НЕ ЖУЛЬНИЧАТЬ </font></p>
	<style media="screen">
	.shadow {
		font: bold 1em Arial, sans-serif;
		color: #0d3967;
		text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
								 #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
								 #cad5e2 5px 5px 0;
width: 38em;
border: 5px solid #533;
padding: 30px 350px;
margin-left: 0px;
margin-top: -20px;
margin-right: 30px;
}
	</style>
</div>
<div class="block4"> <font size="6" color="black" face="Calibri">СУТЬ ИГРЫ КРЕСТИКИ НОЛИКИ: НАЖИМАТЬ НА ЛЮБУЮ КЛЕТКУ, ГЛАВНОЕ ПОБЕДИТЬ! В ТАБЛИЧКАХ ЕСТЬ СЧЁТЧИК ПОБЕД.<BR> <BR>
	 СУТЬ ИГРЫ УГАДАЙ ЧИСЛО: НУЖНО УГАДАТЬ ЧИСЛО КОТОРОЕ ЗАГАДАЛА СИСТЕМА. <BR> <BR>СУТЬ ИГРЫ РАНДОМАЙЗЕР: Я ДУМАЮ ИТАК ПОНЯТНО. </font>
	 <br>
	 <br>
	 <h4>Помочь проекту: <br>  </h4>
	 <a href="https://www.donationalerts.com/r/miniplay_tech_beget" class="popa">Donation Alerts</a>
	 <br>
	 <a href="https://qiwi.com/p/79180051315" class="popa">Qiwi</a>
	 <style>
		.popa   {
		border: 1px solid #333;
		display: inline-block;
		padding: 5px 15px;
		text-decoration: none;
		color: #000;
	}
	 .c:hover {
		box-shadow: 0 0 5px rgba(0,0,0,0.3); /* Тень */
		background: linear-gradient(to bottom, #fcfff4, #e9e9ce); /* Градиент */
		color: #a00;
	 }
	 .block4 {
		 font: bold 1em Arial, sans-serif;
 		color: #0d3967;
 		text-shadow: #cad5e2 1px 1px 0, #cad5e2 2px 2px 0,
 								 #cad5e2 3px 3px 0, #cad5e2 4px 4px 0,
 								 #cad5e2 5px 5px 0;
 width: 38em;
 border: 5px solid #533;
 padding: 30px 350px;
 margin-left: 0px;
 margin-top: 30px;
 margin-right: 30px;
 }
	 </style>
	 </div>
	 <div class="osnovnoy_block">
	<h5 class="col"> Все права защищены. 2020 </h5>
	<style type="text/css">
	.col {
		color: #111;
	}
	.osnovnoy_block {
		width: 38em;
		border: 2px solid #533;
		padding: 30px 350px;
		margin-left: 0px;
		margin-top: 30px;
		margin-right: 30px;
		}
	</style>
</div>

<br>
<br>
<br>
<style>
.case{
	background: #333;
	height: 290px;
}
h2, h3, h4, h5{
	margin-top: 0;
	text-transform: uppercase;
	font-size: 30px;
	font-family: Tahoma, sans-serif;
	text-align: center;
	cursor: default;
	position: relative;
}
h2::after{
	content: "";
	width: 296px;
	height: 3px;
	background: #fff;
	position: absolute;
	margin-top: 20px;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.flex{
	display: flex;
	justify-content: space-around;
}
.case_card{
	width: 320px;
	height: 210px;
	text-align: center;
	position: relative;
	box-sizing: border-box;
}
.case_img{
	background-repeat: no-repeat;
	background-position: center;
	width: 320px;
	height: 180px;
	border-radius: 5px;
}
.blink:hover{
	filter: blur(5px);
	transition: all 1s ease;
}
.name_case{
	font-size: 30px;
	font-family: 'Anton', sans-serif;
	background: #0A0A0A;
	margin-top: -5px;
	text-transform: uppercase;
}
.text_case{
	position: absolute;
	left: 28%;
	top: 15%;
	text-transform: uppercase;
	font-size: 25px;
	font-family: Tahoma, sans-serif;
	font-weight: 700;
}
.text_case2{
	font-family: Tahoma, sans-serif;
	position: absolute;
	left: 2%;
	top: 40%;
	color: #FFDD00;
}
.text_case3{
	position: absolute;
	left: 40%;
	top: 50%;
	font-size: 25px;
	font-family: Arial, Tahoma, sans-serif;
}
.text_case4{
	position: absolute;
	left: 38%;
	top: 65%;
	font-size: 30px;
	font-family: Arial, Tahoma, sans-serif;
	background-color: #BF2F38;
}
.text_case, .text_case2, .text_case3, .text_case4{
	opacity: 0;
}
.case_card:hover .text_case{
	opacity: 1;
	transition: all 1s ease-out;
}
.case_card:hover .text_case2{
	opacity: 1;
	transition: all 1s ease-out;
}
.case_card:hover .text_case3{
	opacity: 1;
	transition: all 1s ease-out;
}
.case_card:hover .text_case4{
	opacity: 1;
	transition: all 1s ease-out;
}
.case_wot{
	background: linear-gradient(45deg, #312A6C, #852D91);
	height: 290px;
}
h3::after{
	content: "";
	width: 296px;
	height: 3px;
	background: #fff;
	position: absolute;
	top: 120%;
	left: 50%;
	transform: translate(-50%, -50%);
}
h4::after{
	content: "";
	width: 296px;
	height: 3px;
	background: #fff;
	position: absolute;
	top: 120%;
	left: 50%;
	transform: translate(-50%, -50%);
}
</style>
	<?php endif; ?>
	</body>
</html>
