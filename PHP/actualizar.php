<?php

include 'config.php';
$con = connectdb();

$id = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE Nombre_usuario = '$id' ";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/acceso.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/IMG/favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/IMG/favicon.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/IMG/favicon.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/IMG/favicon.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/IMG/favicon.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/IMG/favicon.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/IMG/favicon.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/IMG/favicon.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/IMG/favicon.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/IMG/favicon.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/IMG/favicon.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/IMG/favicon.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/IMG/favicon.ico/favicon-16x16.png">
    <link rel="manifest" href="/IMG/favicon.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/IMG/favicon.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <header class="header">
        <div class="barra">
            <a class="logo" href="#">
                <h1 class="logo__nombre no-margin centrar-texto">Diseño y Desarrollo<span class="logo__bold">web</span></h1>
            </a>

            <nav class="navegacion">
            </nav>
        </div>
    </header>

    <div id="Crear_cuenta">
        <form action="update.php" method="POST">
            <h4>Actualizar cuenta</h4>
            <label for="Nombre">Nombre:</label><br>
            <input type="text" name="Nombre" value="<?php echo $row['Nombre']?>"><br>
            <label for="Apellido Paterno">Apellido Paterno:</label><br>
            <input type="text" name="Apellido_paterno" value="<?php echo $row['Apellido_paterno']?>"><br>
            <label for="Apellido Materno">Apellido Materno:</label><br>
            <input type="text" name="Apellido_materno" value="<?php echo $row['Apellido_materno']?>"><br>
            <label for="Correo">Correo:</label><br>
            <input type="email" name="Correo" value="<?php echo $row['Correo']?>"><br>
            <label for="Telefono">Telefono:</label><br>
            <input type="number" name="Telefono" value="<?php echo $row['Telefono']?>"><br>
            <label for="Contraseña">Contraseña:</label><br>
            <input type="password" name="Contraseña" value="<?php echo $row['Contraseña']?>"><br>
            <a><button class="boton" name="Boton" type="submit" value="Actualizar">Actualizar</button><br></a>
        </form>
    </div>

    <footer class="footer ft">
        <div class="contenedor barra">
            <a class="logo" href="#">
                <h1 class="logo__nombre no-margin centrar-texto">Diseño y Desarrollo<span class="logo__bold">web</span></h1>
            </a>

            <p class="no-margin centrar-texto">
                ©Todos los derechos reservados 2022
            </p>
        </div>
    </footer>

    <script src="../JS/funciones.js"></script>
</body>
</html>