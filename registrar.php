<?php
include('con_db.php');

if (isset($_POST['registrar'])){
    if (strlen($_POST['nombres']) >= 1 &&
    strlen($_POST['apellidos']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['clave']) >= 1){
    $nombres = trim($_POST['nombres']);
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['email']);
    $clave = trim($_POST['clave']);
    $consulta = "INSERT INTO usuarios(nombres, apellidos, email, clave) VALUES ('$nombres','$apellidos','$email','$clave')";   
    $resul =   mysqli_query($conex,$consulta);

    }
}
?>