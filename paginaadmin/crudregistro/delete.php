<?php

include 'conexion.php';
$con = conexion();

$id=$_GET["id"];

$sql= "DELETE FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    header("location: tabla.php");
}else{

}
?>