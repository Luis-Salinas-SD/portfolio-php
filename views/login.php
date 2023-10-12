<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!-- CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CSS cerolineal -->
    <link rel="stylesheet" href="../assets/style.css">
    <!-- CDN sweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <!-- SweetAlert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <section class="login">
        <form class="form shadow mb-5 bg-body col-9 col-sm-7 col-md-8 col-lg-3" action="../config/validacion.php" method="post">
            <div class="text-center p-4">
                <img src="https://cerolineal.com.mx/assets/img/logo-cero.png" alt="cerolineal-logotipo" width="180px">
            </div>
            <div class="mb-4">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" name="correo" require>
            </div>
            <div class="mb-4">
                <label for="contra" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contra" require>
            </div>
            <dib class="mb-3">
                <div class="invalid-feedback">
                    Datos incorrectos
                </div>
            </dib>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </section>

    <!-- Footer -->
    <?php include('../templates/footer.php') ?>

    <?php
    if (isset($_GET['message'])) {
        echo "<script>msmFailed()</script>";
    }
    ?>