<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <form method="post">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombres" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="email" name="email" placeholder="Ingrese su Correo">
    <input class="controls" type="password" name="clave" placeholder="Ingrese su Contraseña">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" name= "registrar" value="Registrar"> 
    <a href="inicio.html"><input class="botons" type="submit" value="Inicio"></a>
    <p><a href="index.html">¿Ya tengo Cuenta?</a></p>
    </form>
  </section>

    <?php
    include('registrar.php');
    ?>
</body>
</html>
