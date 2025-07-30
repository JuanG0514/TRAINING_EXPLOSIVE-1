<?php
function conexion() {
  $servidor = 'mysql.railway.internal'; 
  $usuario = 'root';                    
  $contraseña = 'qSrqCfQScgSiMoMroHxKvimCxJNpIMAP'; 
  $bd = 'railway';                     
  $puerto = 3306;                      

  $conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd, $puerto);

  if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
  }

  return $conexion;
}
?>
