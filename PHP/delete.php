<?php

include 'config.php';
$con = connectdb();

$usuario = $_GET['id'];

$sql = "DELETE FROM usuario WHERE Nombre_usuario = '$usuario' ";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: ../TEMPLATES/Acceso.php");
}