<?php


                //  FUNCION LOGIN

                function login(){
                    global $conectar;
                    $usuario=$_POST["usuario"];
                    $password=$_POST["password"];
                    $sql="select usuario, password from usuarios where usuario='$usuario' and password='$password'";

                    $resultado=mysqli_query($conectar, $sql);

                    if(!$resultado){
                        die("Fallo en la ejecucion". mysqli_error($conectar));

                    }
                    $fila=mysqli_fetch_assoc($resultado);
                    if(is_array($fila) and count($fila)>0){
                        header("Location:listar.php");
                        exit();

                    }else{
                        echo"<br>Credenciales invalidas ";
                    }
                }

                             // ----FUNCION INSERTAR---
function insertar(){

    global $conectar;

    $usuario=$_POST["usuario"];
    $password=$_POST["password"];

    if(empty($usuario) and empty($password)){
        die("rellena los campos");
    }

  

    // Insertadno datos en la DB
    $sql="insert into usuarios(id_usuario, usuario, password) values (null, '$usuario','$password' )";

    $resultado= mysqli_query($conectar, $sql);

    if(!$resultado){
        echo"No se pudo insertar";

    }else{
        echo"<br>Se ha insertado ".mysqli_affected_rows($conectar)." registros";
    }
}


                        // ----FUNCION LISTAR----

function listar(){

    global $conectar;

    $sql="select * from usuarios";

    $resultado = mysqli_query($conectar, $sql);

    if(!$resultado){

        die("Fallo al internatr obtener los registros");

    }

    
// con fetch_assoc  obteneemos una fila
    while( $fila=mysqli_fetch_assoc($resultado)){
    
        echo $fila["usuario"];
        echo"<br>";
        echo $fila["password"];
        echo"<br><hr>";
    
    }

    

}




                      //---- FUNCION LISTAR ID_USUARIOS ----

function listarId_usuarios(){

    global $conectar;

    $sql="select id_usuario from usuarios";

    $resultado= mysqli_query($conectar, $sql);

    if(!$resultado){
        die("Fallo al obtener los registros".mysqli_error($conectar));

    }

    while($fila= mysqli_fetch_assoc($resultado)){

        $id= $fila["id_usuario"];

        echo"<option value = '$id'>$id </option>" ;


    }




}


            //    FUNCION EDITAR_USUARIO

            function editar_usuario($id_usuario){
 global $conectar;

 $usuario=$_POST["usuario"];
 $password=$_POST["password"];
 $id=$_POST['id_usuario'];

 if( empty($usuario) and empty($password)){
    die("Campos vacios");

 }


 $sql= "update usuarios set usuario='$usuario',  password='$password' where id_usuario=$id";

 $resultado= mysqli_query($conectar, $sql);

 if(!$resultado){
    die("Fallo al intentar modificar los registros".mysqli_error($conectar));

 } else{
    echo"<br>Se ha editado ".mysqli_affected_rows($conectar)." registros";
 }



            }


            // FUNCION ELIMINR

            function del_user($id_usuario){

                global $conectar;

                $id=$_POST["id_usuario"];

                $sql= "delete from usuarios where id_usuario=$id";

                $resultado=mysqli_query($conectar, $sql);

                if(!$resultado){
                    die("Fallo al intentar eliminar registro".mysqli_error($conectar));

                }else{
                    echo"Se ha eliminado ".mysqli_affected_rows($conectar). " registros";

                }


            }

            // pra inserta cuerpo html shift+!