<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /integrador login/login.php');
?>
