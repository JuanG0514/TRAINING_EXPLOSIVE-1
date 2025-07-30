<?php

include 'conexion.php';
$con = conexion();

$id_fuerza=$_GET["id_fuerza"];

$sql= "DELETE FROM fuerza WHERE id_fuerza='$id_fuerza'";
$query = mysqli_query($con, $sql);

if($query){
    header("location: tablafuerza.php");
}else{

}
?>