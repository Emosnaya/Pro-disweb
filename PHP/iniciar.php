<?php
require_once("./config.php");
session_start();

//si ya hay sesion iniciada redirigir
if(isset($_SESSION["Correo"])){
    header("location: ./../TEMPLATES/index.html");
}
elseif (isset($_POST["email"])) {
	$contra = $_POST["contra"];
	$email = $_POST["email"];
}
//Declarar los valores ingresados en el inicio de sesión
//redirigir a la página de inicio de sesión
else {
	header("location: ../templates/login.html");
}
//conexión con base de datos
$c = connectdb();
//comprueba que el email y la contraseña correspondan
$consulta = "SELECT Correo, Nombre_usuario, Contraseña FROM usuario WHERE Correo='$email' AND Contraseña='$contra';";


$r = mysqli_query($c, $consulta);
//Datos ingresados erroneamente
$contadorCoincidencias = 0;
while($row=mysqli_fetch_array($r))
{
	$usuario = $row["Nombre_usuario"];
	$id_usuario = $row["Correo"];
	$contraseña = $row["Contraseña"];
	$contadorCoincidencias ++;
}

mysqli_close($c);

//Datos correctos redirigir a la pagina de inicio
if($contadorCoincidencias === 1) {
	session_start();
	$_SESSION["Nombre_usuario"] = $usuario;
	$_SESSION["Correo"] = $id_usuario;
	header("location: ./../TEMPLATES/index.html");
} 
//redirigir a la pagina de inicio de sesión
else {	
	header("location: ./../TEMPLATES/Acceso.html");
}
?>