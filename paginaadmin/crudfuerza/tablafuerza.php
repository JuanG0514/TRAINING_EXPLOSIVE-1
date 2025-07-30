<?php
require "conexion.php";
$con = conexion();
$sql = "SELECT * FROM fuerza";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FUERZA</title>
<style>
    /*CSS tabla */
body{
    background-image: url(../../imagenes/fondoregistro.jpeg);
    margin: 0;
}
table {
    width: 60%;
    border-collapse: collapse;
    margin: 5px auto;
    font-family: Arial, sans-serif;
}

table th, table td {
    border: 3px solid red; 
    padding: 2px;
    text-align: center;
}

table th {
    background-color: beige;
    font-weight: bold;
}

table tr:hover {
    background-color: #ddd;
}

table th, table td {
    padding: 3.5px;
}
 h2 {
    text-align: center;
    margin-bottom: 20px;
}
.contenedor-header .logo{
  width: 80px;
  height: auto;
  border-radius: 50%;
  margin-right: 50px;
}
.contenedor-header {
  width: 100%;
  position: fixed;;
  border-bottom: 1px solid red;
  background-color:red;
  z-index: 99;
  padding: 0 20px;

}
.contenedor-header header {
max-width: 1100px;
margin: auto;
display: flex;
align-items: center;
padding: 17px 0;
color: white;
justify-content: space-between;
}
h1 {
  font-family: serif;
  color: white;
  text-shadow:2px 2px 4px black;
}
.nav-responsive {
  font-size: 25px;
  }
  a{
  color: black;
}
a:hover {
  color: dimgray;
}
.contenedor-header header nav a {
  display: inline-block;
  text-decoration: none;
  color: white;
  padding: 5px;
  text-transform: uppercase;
}
.contenedor-header header nav a:hover {
  color: black;
}
@media (max-width: 768px) {
    .contenedor-header {
        padding: 0 10px;
    }
    .contenedor-header header {
        flex-direction: column;
        align-items: center;
    }
    h1 {
        font-size: 25px; 
    }
    .contenedor-header header nav a {
        font-size: 18px;
        padding: 10px;
    }
    .contenedor-header header .redes a {
        font-size: 25px;
    }
    h2{
        margin-top: 40%;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 20px; 
    }
    .contenedor-header {
        padding: 0 5px;
    }
    h2{
        margin-top: 30%;
    }
}
</style>
</head>
<body>
    <div class="contenedor-header">
        <header>
          <img src="../../imagenes/logo.jpeg" alt="Logo" class="logo">
          <h1>ENTRENADOR</h1>
    <div class="nav-responsive" id="icono-nav">
        <a href="../paginaadmin.php"><i class="fas fa-arrow-left"></i></a>
    </div>
    </div>
      </header> 
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <div>
        <h2>¡ACTUALIZA EL MÉTODO DE FUERZA! </h2>
        <table>
            <thead>
                <tr>
                    <th>Repeticiones</th>
                    <th>Series</th>
                    <th>Tiempo De Descanso (min)</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['repeticiones'] ?> </th>
                        <th> <?= $row['series'] ?> </th>
                        <th> <?= $row['tiempo_descanso'] ?> </th>

                    
                        <th><a href="deletefuerza.php?id_fuerza=<?= $row['id_fuerza'] ?>"><i class="fa-solid fa-trash-can"></i></a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>