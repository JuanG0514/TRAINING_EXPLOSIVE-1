<?php
function conexion(){
  $servidor='localhost';
  $usuario= 'root';
  $contraseña= '';
  $bd= 'training_explosive';
//Crear conexion//
  $conexion = mysqli_connect ($servidor,$usuario, $contraseña,$bd);
  mysqli_select_db($conexion,$bd);
  return $conexion;
}

?>