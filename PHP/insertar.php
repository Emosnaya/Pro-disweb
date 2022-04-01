<?php

include "../PHP/config.php";
$con = connectdb();

$nombre = $_POST['Nombre'];
$apellido_pa = $_POST['Apellido_paterno'];
$apellido_ma = $_POST['Apellido_materno'];
$correo = $_POST['Correo'];
$usuario = $_POST['Nombre_usuario'];
$telefono = $_POST['Telefono'];
$contra = $_POST['Contraseña'];


$query_insert = "INSERT INTO usuario VALUES ('$nombre', '$apellido_pa', '$apellido_ma','$correo','$usuario', '$telefono', MD5('$contra'))";
//----CONSULTA
$resultado = mysqli_query($con, $query_insert);

if($resultado){
    Header("Location: Perfil.php");
}

?>