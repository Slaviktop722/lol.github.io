<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 3 || mb_strlen($login) > 20) {
    echo "неккоректный логин";
    exit();
  }
  else if(mb_strlen($password) < 3 || mb_strlen($password) > 10) {
    echo "неккоректный пароль";
    exit();
  }

  $mysql = new mysqli('localhost', 'root', 'root', 'login-bd');
  $mysql->query("INSERT INTO `usi` (`login`, `password`, `ip`)
  VALUES ('$login', '$password', '$_SERVER[REMOTE_ADDR]')");

  $mysql->close();

  header('Location: /');

  exit();
 ?>
