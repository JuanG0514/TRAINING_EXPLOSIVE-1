<?php
session_start();
include 'conexion.php';
$con = conexion();
$correo_electronico=$_POST['correo_electronico']; 
$_SESSION ['correo_electronico']= $_REQUEST['correo_electronico'];
$contraseña=$_POST['contraseña']; 
$_SESSION ['contraseña']= $_REQUEST['contraseña'];

$acceso = "SELECT * FROM usuarios WHERE correo_electronico='$correo_electronico'";
$acceso1 = mysqli_query($con, $acceso);

if ($row = mysqli_fetch_array($acceso1)) {

    if ($row['contraseña'] == $contraseña) {
        $_SESSION['id_usuario']= $row ['id'];
        $_SESSION['login']= true;
        if ($row['tipo_de_usuario'] == "administrador") {
            header("location:../paginaadmin/paginaadmin.php");
            exit();
        }
        if ($row['tipo_de_usuario'] == "cliente") {
            header("location:../paginascliente/metodo.php");
            exit();
        }
}
}
?>