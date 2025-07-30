<?php 
include 'conexion.php';
$con = conexion();

$repeticiones= $_POST['repeticiones'];
$series = $_POST['series'];
$tiempo_descanso = $_POST['tiempo_descanso'];

$sql = "INSERT INTO daño_muscular (id_daño, repeticiones, series, tiempo_descanso) VALUES ('', '$repeticiones', '$series', '$tiempo_descanso')" ;
$query = mysqli_query( $con, $sql);

if($query){
header("location: tabladaño.php"); 

}

?>