<?php

require_once("database.php");
require_once("funciones.php");
 
if (isset($_POST["submit"])){

    // login();
    login();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soy index</title>
</head>
<body>

<h1>Login de Uuarios</h1>

<form action="" method="POST">
    <input type=" text" name="usuario" placeholder="usuario">

    <br>

    <input type="text" name="password" placeholder="password">
    <br><br>
    <input type="submit" name="submit" value="enviar">
    


</form> 
    
</body>
</html>