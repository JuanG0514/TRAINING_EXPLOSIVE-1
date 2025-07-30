<?php 
include 'conexion.php';
$con = conexion();
if (isset($_POST['Registrar'])){
$id = $_POST['id'];
$id_usuario = $_POST['id_usuario'];
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

$sql = "UPDATE usuarios SET  id_usuario='$id_usuario', tipo_documento='$tipo_documento', nombre='$nombre', 
apellido='$apellido', edad='$edad', correo_electronico='$correo_electronico', telefono='$telefono', direccion='$direccion', peso='$peso', 
talla='$talla', enfermedades='$enfermedades', fecha_de_inicio='$fecha_de_inicio', contraseña='$contraseña' WHERE id='$id'";
$query = mysqli_query( $con, $sql); 

if($query){
header("location: tabla.php?id=$id"); 
} else {
    echo "Error al actualizar el usuario: " . mysqli_error($con);
}
}

?>