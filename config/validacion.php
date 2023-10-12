<?php
//sessiones
session_start();

$showmsm = true;

//Validación para saber si el usuario que se va a loguear existe
if ($_POST) {
    $usuario = $_POST['correo'];
    $password = $_POST['contra'];

    //Validacion del usuario
    if ($usuario == 'correo@mail.com' && $password == '123456') {
        //Generar varibales de session
        $_SESSION['correoSession'] = true;
        //Redireccion a la pagina correspondiente
        header('location:../index.php');
    } else {
        header('location:../views/login.php?message='.$showmsm);
    }
}
