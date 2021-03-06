
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!--Funetes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="stylesheet" href="../CSS/styles.css">

    <!--Favicon-->
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
    <!--Header-->
    <header class="header">
        <!--Barra-->
        <div class="barra">
            <a class="logo" href="index.html">
                <!--Texto-->
                <h1 class="logo__nombre no-margin centrar-texto">Dise??o y Desarrollo<span class="logo__bold">web</span></h1>
            </a>

            <!--Navegacion-->
            <nav class="navegacion">
                <a href="../TEMPLATES/index.html" class="nav-en">Inicio</a>
                <a href="../TEMPLATES/AcercaDe.html" class="nav-en">Acerca De</a>
                <a href="../TEMPLATES/Contacto.html" class="nav-en">Contacto</a>
                <a href="../TEMPLATES/nuestro_trabajo.html" class="nav-en">Nuestro Trabajo</a>
                <a href="Perfil.php" class="nav-en">Perfil</a>
            </nav>
        </div> <!--Cierre Barra-->
       
    </header>

    <main class="contenedor entrada">

        <div class="perfil-grid">
            <aside>
                <div class="perfil-imagen">

                </div>
            </aside>
            
            <div class="info">
                <?php

                include '../PHP/config.php';
                //Conexi??n con base de datos
                $con = connectdb();
                $consulta = "SELECT Nombre, Apellido_paterno, Apellido_materno, Correo, Nombre_usuario FROM usuario";

                //consulta de usuarios
                $r = mysqli_query($con, $consulta);
                $row = mysqli_fetch_array($r);
                ?>
                <table>
                    <thead>
                        <h2>Mi Perfil</h2>
                    <thead>
                    <tbody>
                        <tr>
                            <td><strong>Nombre: </strong></td>
                            <td><p><?php echo $row['Nombre'] ?></p></td>
                        </tr>
                        <tr>
                            <td><strong>Apellido Paterno: </strong></td>
                            <td><p><?php echo $row['Apellido_paterno'] ?></p></td>
                        </tr>
                        <tr>
                            <td><strong>Apellido Materno: </strong></td>
                            <td><p><?php echo $row['Apellido_materno'] ?></p></td>
                        </tr>
                        <tr>
                            <td><strong>Correo: </strong></td>
                            <td><p><?php echo $row['Correo'] ?></p></td>
                        </tr>
                        <tr>
                            <td><strong>Nombre de Usuario:</strong></td>
                            <td><p><?php echo $row['Nombre_usuario'] ?></p></td>
                        </tr>
                    </tbody>
                </table>
            </div> <!--Cierre info-->
        </div> <!--Cierre grid-->
        <a href="actualizar.php?id=<?php echo $row['Nombre_usuario']?>" class="boton btn-per1">Editar perfil</a>
        <a href="delete.php?id=<?php echo $row['Nombre_usuario']?>" class="boton btn-per2">Eliminar perfil</a>
        <?php mysqli_close($con); ?>
    </main>

    <footer class="footer">
        <div class="contenedor barra">
            <a class="logo" href="index.html">
                <h1 class="logo__nombre no-margin centrar-texto">Dise??o y Desarrollo<span class="logo__bold">web</span></h1>
            </a>

            <p class="no-margin centrar-texto">
                ??Todos los derechos reservados 2022
            </p>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/JS/funciones.js" type="text/javascript"></script>
    
</body>
</html>