<?php

include 'config.php';
$con = connectdb();

$nombre = $_POST['Nombre'];
$apellido_pa = $_POST['Apellido_paterno'];
$apellido_ma = $_POST['Apellido_materno'];
$correo = $_POST['Correo'];
$usuario = $_POST['Nombre_usuario'];
$telefono = $_POST['Telefono'];
$contra = $_POST['Contraseña'];

$sql = "UPDATE usuario SET  Nombre = '$nombre', Apellido_paterno = '$apellido_pa', Apellido_materno = '$apellido_ma', Correo = '$correo', Telefono = '$telefono', Contraseña = '$contra' WHERE Nombre_usuario = '$usuario' ";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: Perfil.php");
}


