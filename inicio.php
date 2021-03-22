<?php
session_start();
require 'basededatos.php';
 ?>

<!DOCTYPE html>
<html>

<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

  <div class="main-inicio contenedor">

    <!-- MENU ADMI -->
    <div class="menu-incio">
      <nav class="displey-flex-between">

        <!-- LOGO -->
        <ul class="displey-flex items-logos">
          <li>
            <img src="assets/img/UFPS/logoufps.jpg" title="Nuestra Universidad!" class="logo">
          </li>
        </ul>

        <!-- ENLACES -->
        <ul class="items displey-flex-between" id="menu-superior">
          <li>
            <a class="enlace cerrar-menu" onclick="abrirMenu()">
              <img img class="icono" src="assets/img/close.png" title="Cerrar Menú">
            </a>
          </li>

        </ul>

        <!-- ICONOS -->
        <ul class="displey-flex-between items-iconos">
          <li class="icono-menu">
            <a class="enlace" onclick="abrirMenu()">
              <img class="icono" src="assets/img/menu.png">
            </a>
          </li>
          <li class="displey-flex">
            <a class="enlace">
              <img class="icono" src="assets/img/user.png" title="Usuario">
            </a>
            <span><span></li>
          <li class="displey-flex">

              <img class="icono" src="assets/img/session.png" title="Cerrar Sesión">
            </a>
            <input type="button" onclick="location.href='inicio-sesion.php';" value="SALIR" />
        </ul>
      </nav>
    </div>
    <div class="section">
<div class="subir">
  <span >Subir excel: <input type="button" onclick="location.href='excel.php';" value="SUBIR" /><!-- <a href="excel.php">subir</a> --></span>
</div>


      <div class="contenedor-principal contenedor-tablas">
        <h1 class="titulo">Alumnos</h1>
        <table id="datos" class="tabla-clientes tabla-generica">
          <thead>
            <tr>
              <th>CODIGO</th>
              <th>NOMBRE</th>
              <th>CORREO</th>
              <th>TRABAJOS</th>
              <th>QUIZ</th>
              <th>ASISTENCIA</th>
              <th>TERCERA NOTA</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $squla="SELECT * from notas";
            $resulta=mysqli_query($conn,$squla);
            while ($mostrar=mysqli_fetch_array($resulta)) {


             ?>
            <tr>
              <td><?php echo $mostrar['codigo'] ?></td>
              <td><?php echo $mostrar['nombres'] ?></td>
              <td><?php echo $mostrar['email'] ?></td>
              <td><?php echo $mostrar['trabajos'] ?></td>
              <td><?php echo $mostrar['quiz'] ?></td>
              <td><?php echo $mostrar['asistencia'] ?></td>
              <td><?php echo $mostrar['terceranota'] ?></td>

            </tr>
            <?php
          } ?>
          </tbody>
        </table>
      </div>
    </div>




    <!--JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
</body>

</html>
