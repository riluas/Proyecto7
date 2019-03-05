<?php
$conexion = new mysqli("localhost", "root", "", "juegosbd");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT * FROM usuario");
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/algo.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="registro.php">Registro</a>
      <a href="listadoUsuarios.php">Usuarios</a>
    </div>


    <!-- Inputs de registro-->
    <br>
      <h3>Registro</h3>
      <div class="reg">
        <form class="" action="listadoUsuarios.php" method="post" onsubmit="return comprobar();">
          Nombre:
          <input type="text" name="nombre" value="" id="nombre" required>
          <br><br>
          Apellidos:
          <input type="text" name="apellidos" value="" id="apellidos" required>
          <br><br>
          Edad:
          <input type="text" name="edad" value="" id="edad" required>
          <br><br>
          Curso:
          <input type="text" name="curso" value="" id="curso" required>
          <br><br>
          Puntuacion:
          <input type="text" name="puntuacion" value="" id="puntuacion" required>
          <br>
          <input type="submit" name="" value="Enviar"></input>
        </form>
      </div>
  </body>
</html>
