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
      <h2>metodo post</h2>
      <h6>Con el método HTTP POST también se codifica la información, pero ésta se envía a través del body del HTTP Request, por lo que no aparece en la URL.</h6>
      <h6><br>
      <ul>
        <li>El método POST no tiene límite de cantidad de información a enviar.</li><br>
        <li>La información proporcionada no es visible, por lo que se puede enviar información sensible.</li><br>
        <li>Se puede usar para enviar texto normal así como datos binarios (archivos, imágenes...).</li><br>
        <li>PHP proporciona el array asociativo $_POST para acceder a la información enviada.</li>
      </ul>
    </h6>
    <hr>
    <h2>Ejemplo de metodo post</h2><br>
      <form action="formpost.php" method="post">
          Nombres:&nbsp; <input type="text" name="nombre"required><br><br>
          Apellidos:&nbsp;<input type="text" name="apellido" value=""required><br><br>
          Identificación:&nbsp;<input type="number" name="identificacion" value=""required><br><br>
          Email:&nbsp; <input type="email" name="email"required><br><br>
          Sexo:<select class="" name="sex"required>
            <option value="">--Seleccione--</option>
            <option value="M">M</option>
            <option value="F">F</option>
          </select><br><br>
          Direccion:&nbsp;<input type="text" name="direccion" value=""required><br><br>
          <input class="btn btn-primary"type="submit" value="Enviar">
          </form>

    </div>


  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
