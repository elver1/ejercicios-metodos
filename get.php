<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>Metodo get</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h2>Metodo get</h2>
      <h6>El método GET envía la información codificada del usuario en el header del HTTP request, directamente en la URL. La página web y la información codificada se separan por un interrogante?:</h6>
      <h6>
        <ul>
          <li>El método GET envía la información en la propia URL, estando limitada a 2000 caracteres.</li><br>
          <li>La información es visible por lo que con este método nunca se envía información sensible</li><br>
          <li>No se pueden enviar datos binarios (archivos, imágenes...).</li><br>
          <li>En PHP los datos se administran con el array asociativo $_GET.</li>
        </ul>
      </h6>
        <hr>
        <h2>Ejemplo de metodo get</h2><br>
    <form action="formget.php" method="get">
      Nombres:&nbsp; <input type="text" name="nombre" required><br><br>
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
