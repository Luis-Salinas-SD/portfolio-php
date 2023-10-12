<?php
//Validación de la sesion
session_start();
if (isset($_SESSION['correoSession']) != true) {
    header('location:views/login.php');
}
?>
<?php
include_once("./config/conexion.php");
?>
<?php

//* SELECT * FROM
/* $objConexion = new Conexion();
$sql = "SELECT * FROM proyectos";
$resultado = $objConexion->consultar($sql); */

?>

<!DOCTYPE html>
<html lang="es">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portafolio Web</title>
<link rel="shortcut icon" href="#" type="image/x-icon">
<!-- CDN Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- CSS cerolineal -->
<link rel="stylesheet" href="assets/style.css">
<!-- SweetAlert -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
<!-- CDN sweetAlert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
</head>

<body class="bg-dark">




    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid d-">
            <a class="navbar-brand text-white" href="#">
                <img src="assets/img/logo-nav.png" alt="cerolineal-logotipo" width="80">
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="text-white nav-link active mx-4" aria-current="page" href="index.php">Inicio</a>
                    <a class="text-white nav-link mx-4" href="views/portafolio.php">Portafolio</a>
                    <a class="btn btn-danger mx-4" href="views/close.php">Salir</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <h2 class="text-white">!Bienvenidos a la pagina principal!</h2>

        <div class="row d-flex justify-content-around p-3">
            <?php foreach ($resultado as $element) { ?>
                <div class="card col-5 m-2 fs-4">
                    <img src="./images/<?php echo $element['imagen'] ?>" alt="" srcset="" width="100">
                    <span class="text-primary">
                        <?php echo $element['id'] ?>
                    </span>
                    <span class="text-primary">
                        <?php echo $element['proyecto'] ?>
                    </span>
                    <span class="text-primary">
                        <?php echo $element['titular'] ?>
                    </span>

                </div>
            <?php } ?>

        </div>


    </div>

    <!-- CDN JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="assets/index.js"></script>

</body>

</html>