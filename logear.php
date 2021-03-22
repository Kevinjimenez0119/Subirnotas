<?php

  session_start();
require 'basededatos.php';

  $message = '';
  $codigo= $_POST['codigo'];
  $usuario= $_POST['email'];
  $password= $_POST['password'];

  if(!empty($_POST['email']) && !empty($_POST['password']))
  {
    $q1 = "SELECT COUNT(*) as contar1 from profesor where codigo='$codigo ' and email='$usuario ' and password='$password '";
    $consulta1= mysqli_query($conn,$q1);
    $array1 = mysqli_fetch_array($consulta1);
    if($array1['contar1'] > 0)
    {
      $_SESSION['codigo']=$codigo;
      header('Location: /Terceranota/inicio.php');
    }
  }

  if(!empty($_POST['email']) && !empty($_POST['password']))
  {
    $q = "SELECT COUNT(*) as contar from users where codigo='$codigo ' and email='$usuario ' and password='$password '";
    $consulta= mysqli_query($conn,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0)
    {
      $_SESSION['codigo']=$codigo;
      header('Location: /Terceranota/inicio2.php');
    }else {
      echo'<script type="text/javascript">
          alert("Datos incorrectos");
          window.location.href="inicio-sesion.php";
          </script>';
      }
    }





?>
