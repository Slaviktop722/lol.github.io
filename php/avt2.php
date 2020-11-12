
    <?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

  $mysql = new mysqli('localhost', 'root', 'root', 'login-bd');
  $resultat = $mysql->query("SELECT * FROM `usi` WHERE `login` = '$login' AND `password` = '$password'");
  $user = $resultat->fetch_assoc();
  if(count ($user) == 0) {
  echo "ПОЛЬЗОВАТЕЛЬ НЕ НАЙДЕН";
  exit();
}

setcookie('user', $user['login'], time() + 10000, "/");
setcookie('pass', $password['password']);
$mysql->close();

  header('Location: /');

 ?>
