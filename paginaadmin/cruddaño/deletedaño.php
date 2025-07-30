<?php

include 'conexion.php';
$con = conexion();

$id_daño=$_GET["id_daño"];

$sql= "DELETE FROM daño_muscular WHERE id_daño='$id_daño'";
$query = mysqli_query($con, $sql);

if($query){
    header("location: tabladaño.php");
}else{

}
?>