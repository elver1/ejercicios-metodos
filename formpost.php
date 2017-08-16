<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>Metodo post</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1>Bienvenido</h1>
      <?php
      $s=$_POST['sex'];
       ?>
      Nombres:    <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?><br>
      Apellidos:    <?php isset($_POST['apellido'])? print $_POST['apellido']: ""; ?><br>
      Identificación:    <?php isset($_POST['identificacion'])?print $_POST['identificacion']: ""; ?><br>
      Sexo:     <?php isset($_POST['sex'])?print $s: ""; ?><br>
      email:    <?php isset($_POST["email"]) ? print $_POST["email"] : ""; ?><br>
      Dirección:     <?php isset($_POST['direccion'])? print$_POST['direccion']: ""; ?>
    </div>


  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
