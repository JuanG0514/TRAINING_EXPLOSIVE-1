<?php
function conexion(){
  $servidor = 'containers-us-west-123.railway.app';  // cambia esto por el host que te da Railway
  $usuario = 'root';
  $contraseña = 'LuisaHerrera';
  $bd = 'training_explosive'; // o el nombre real de tu base de datos
  $puerto = 1234;  // reemplázalo por el puerto correcto

  // Crear conexión con puerto incluido
  $conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd, $puerto);

  if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
  }

  return $conexion;
}
?>
