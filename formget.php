<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>Ejemplo2 php Estructura condicionales.</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h1>Bienvenido</h1>
      <?php $s=$_GET['sex']; ?>
       Nombre:     <?php isset($_GET["nombre"]) ? print $_GET["nombre"] : ""; ?><br>
       Apellido:    <?php isset($_GET['apellido'])? print $_GET['apellido']:""; ?><br>
       Identificaión:    <?php isset($_GET['identificacion'])? print$_GET['identificacion']:""; ?><br>
       Sexo:     <?php isset($_GET['sex'])? print $s: ""; ?><br>
      email: <?php isset($_GET["email"]) ? print $_GET["email"] : ""; ?><br>
      Direccion:     <?php isset($_GET['direccion'])? print $_GET['direccion']: ""; ?>
  </form>
    </div>


  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
