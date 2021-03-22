<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body>


    <div class="displey-flex  main-login position-fixed-full">

      <!-- FORMULARIO LOGIN -->
      <div class="formulario contenedor-principal">

        <img class="logo" src="assets/img/UFPS/logoufps.jpg" alt="Error mostrar logo" title="Nuestro Logo!">
        <h1 class="titulo">Tercera nota Ufps</h1>
        <h2 class="subtitulo">Login</h2>

        <form id="login-form" action="logear.php" method="POST" class="login">

          <input type="hidden" name="solicitud" value="login">
          <input name="codigo" type="text" placeholder="codigo" class="input-text">
          <input name="email" type="text" placeholder="Email" class="input-text">
          <input name="password" type="password" placeholder="Contraseña" class="input-text">


          <div class="displey-flex contenedor-selector">

             <!-- SELECTOR -->
            <div class="selector">
              <select name="tipo" class="input-selector" required="">
                <option selected value="0">Usuario </option>
                <option value="1" name="1">Administrador</option>
                <option value="2" name="2">Egresado</option>
              </select>
            </div>

            <!-- RECUPERAR CONTRASEÑA -->


          </div>

          <div class="displey-flex">
           <!-- INGRESAR -->
           <input class="ingresar btn" type="submit" value="Ingresar">
          </div>

        </form>
      </div>
    </div>
  </body>

</html>
