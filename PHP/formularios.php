<?php

include "../PHP/config.php";
$con = connectdb();


if (isset($_POST["Boton"])){
    $nombre = $_POST["Nombre"];
    $apellido_pa = $_POST["Apepa"];
    $apellido_ma = $_POST["Apema"];
    $usuario = $_POST["Usuario"];
    $correo = $_POST["Correo"];
    $contra = $_POST["Contrasena"];
    $telefono = $_POST["Telefono"];

    //echo "Nombre: ".$nombre." Apellido: ".$apellido. " Usuario: ".$usuario.
    //" Direccion: ".$direccion. " Email: ".$correo.
    //" Contra: ".$contra. " Tipo: ".$tipo;


    $query_insert = "INSERT INTO usuario(Nombre, Apellido_paterno,Apellido_materno, Correo, Nombre_usuario, Telefono, Contraseña) VALUES ('$nombre', '$apellido_pa', '$apellido_ma','$correo','$usuario', '$telefono', MD5('$contra'))";
    //----CONSULTA
    $resultado = mysqli_query($con, $query_insert);
    if (!$resultado){
        echo("El usuario no se ha registrado");
    }




}

?>
