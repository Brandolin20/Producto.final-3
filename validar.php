<?php
include('con_db.php');
$email=$_POST['email'];
$clave=$_POST['clave'];
session_start();
$_SESSION['email']=$email;

$consul="SELECT*FROM usuarios where email='$email' and clave='$clave'";
$resul=mysqli_query($conex,$consul);

$filas= mysqli_num_rows($resul);

if($filas){
  
    header("location:inicio.html");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resul);
mysqli_close($conex);
