<?php 
include 'conexion.php';
$con = conexion();

$id_usuario = $_POST['id_usuario'];
$tipo_de_usuario = $_POST['tipo_de_usuario'];
$tipo_documento= $_POST['tipo_documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$peso = $_POST['peso'];
$talla = $_POST['talla'];
$enfermedades = $_POST['enfermedades'];
$fecha_de_inicio = $_POST['fecha_de_inicio'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO usuarios VALUES ('','$id_usuario', '$tipo_de_usuario', '$tipo_documento', '$nombre', '$apellido', '$edad', '$correo_electronico', '$telefono', '$direccion', '$peso', '$talla', '$enfermedades', '$fecha_de_inicio', '$contraseña')";
$query = mysqli_query( $con, $sql);

if($query){
header("location:../../login/usuario.html"); 

}

?>