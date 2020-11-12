<?php
  setcookie('user', $user['login'], time() - 10000, "/");
  header('Location: /');
 ?>
