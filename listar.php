<?php require_once("database.php");  ?>
<?php require_once("funciones.php");  ?>



<!DOCTYPE html>

<html>
<head>
  <title>Listando la tabla usarios </title>
</head>

<body>
  <h2>LISTABDO LA TABLA USUARIOS DE LA DB</h2>
  <a href="agregar.php">Registrar</a>
  <a href="listar.php">Listar</a>
  <a href="editar.php">Editar</a>
  <a href="eliminar.php">Eliminar</a>
  <br><br>
  
  <?php
      listar();
  ?>

</body>

</html>