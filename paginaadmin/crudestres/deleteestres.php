<?php

include 'conexion.php';
$con = conexion();

$id_estres=$_GET["id_estres"];

$sql= "DELETE FROM estres_metabolico WHERE id_estres='$id_estres'";
$query = mysqli_query($con, $sql);

if($query){
    header("location: tablaestres.php");
}else{

}
?>