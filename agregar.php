<?php

require_once("database.php");
require_once("funciones.php");

    // Llamamos a la funcion funcions.php
     if(isset($_POST["submit"])){
        insertar();

    }
?>

<!DOCTYPE html>

<html>
<head>
  <title>CRUD de eyter</title>
</head>

<body>
  <h2>CRUD create-read-update-delete</h2>

  <a href="agregar.php">Registrar</a>
  <a href="listar.php">Listar</a>
  <a href="editar.php">Editar</a>
  <a href="eliminar.php">Eliminar</a>
  <br><br> 

  
<form action="" method="POST">
    <input type=" text" name="usuario" placeholder="usuario">

    <br>

    <input type="text" name="password" placeholder="password">
    <br>
    <input type="submit" name="submit">
    


</form>

</body>

</html>
