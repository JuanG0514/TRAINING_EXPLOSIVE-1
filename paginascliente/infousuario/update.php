<?php
include 'conexion.php';
$con = conexion();

$id=$_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="styles.css">
    <title>Editar</title>
</head>
<style>
   body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f2f5;
}

.usuarios-from {
    background-color: #ffffff;
    padding: 15px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 320px; 
    width: 100%;
}

.usuarios-from form {
    display: flex;
    flex-direction: column;
}

.usuarios-from input[type="text"],
.usuarios-from input[type="number"],
.usuarios-from input[type="email"],
.usuarios-from input[type="tel"],
.usuarios-from input[type="datetime-local"],
.usuarios-from input[type="password"] {
    padding: 7px; 
    margin-bottom: 8px; 
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 13px; 
}

.usuarios-from input[type="submit"] {
    padding: 8px;
    background-color: red;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.usuarios-from input[type="submit"]:hover {
    background-color: firebrick;
}

.usuarios-from input::placeholder {
    color: #a9a9a9;
    font-size: 14px; 
}
</style>
<body>
    <div class="usuarios-from">
        <form action="editar_usuario.php" method="POST">
    <input type="hidden" name="id"  value="<?= $row['id']?>">
    <input type="number" name="id_usuario" value="<?= $row['id_usuario']?>">
    <input type="text" name="tipo_documento" placeholder="Tipo de documento" value="<?= $row['tipo_documento']?>">
    <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
    <input type="text" name="apellido" placeholder="Apellido" value="<?= $row['apellido']?>">
    <input type="number" name="edad" placeholder="Edad" value="<?= $row['edad']?>">
    <input type="email" name="correo_electronico" placeholder="Correo electronico" value="<?= $row['correo_electronico']?>">
    <input type="tel" name="telefono" placeholder="Teléfono" value="<?= $row['telefono']?>">
    <input type="text" name="direccion" placeholder="Dirección" value="<?= $row['direccion']?>">
    <input type="text" name="peso" placeholder="Peso (kg)" value="<?= $row['peso']?>">
    <input type="text" name="talla" placeholder="Talla (cm)" value="<?= $row['talla']?>">
    <input type="text" name="enfermedades" placeholder="Enfermedades" value="<?= $row['enfermedades']?>">
    <input type="datetime-local" name="fecha_de_inicio" placeholder="Fecha de inicio" value="<?= $row['fecha_de_inicio']?>">
    <input type="password" name="contraseña" placeholder="Contraseña" value="<?= $row['contraseña']?>">

    <input type="submit" name="Registrar" value="Registrar">

        </form>
    </div>
</body> 
</html>