<?php

$conectar= mysqli_connect("localhost:3306", "root", "root","blog");

if(!$conectar){
    die("Fallo en la conexion");

}else{
    echo"Conexion exitoss";
}