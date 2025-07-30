<?php
require "conexion.php";
session_start();
$con = conexion();
$id = $_GET['id'];
$sql = "SELECT * FROM estres_metabolico";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ESTRÉS_METABÓLICO</title>
<style>
    body {
 margin: 0;
 padding: 0;
 background-size: cover;
 background-position: center;
 text-align: center;
 background-image: url(../imagenes/fondoregistro.jpeg);
}
.contenedor-header .logo{
  width: 80px;
  height: auto;
  border-radius: 50%;
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
justify-content:space-around;
align-items: center;
padding: 17px 0;
color: white;
}
h1 {
  font-family: serif;
  color: white;
  text-shadow:2px 2px 4px black;
}
.inicio .info h2 {
  font-size: 2rem;
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
.contenedor-header header .redes a{
  text-decoration: non0e;
  color: white;
  display: inline-block;
  padding: 5px 8px;
  font-size: 25px;
}
.contenedor-header header .redes a:hover {
  color: black;
}
.nav-responsive {
  font-size: 25px;
}
    /*CSS tabla */
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
.boton-tren-superior {
  background-color: red; 
  color: white;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 9cap;
  transition: transform 0.2s ease-out;
}

.boton-tren-superior:hover {
  background-color:firebrick;
  color: white; 
  transform: scale(1.1);
}
a{
  color: white;
}
a:hover {
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
}

@media (max-width: 480px) {
    h1 {
        font-size: 20px; 
    }
    .contenedor-header {
        padding: 0 5px;
    }
}
</style>
</head>
<body>
<div class="contenedor-header">
        <header>
          <img src="../imagenes/logo.jpeg" alt="Logo" class="logo">
          <h1>TRAINING_EXPLOSIVE</h1>
       <div class="redes">
        <a href="https://www.facebook.com/steven.gutierrezrodriguez.7?mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://wa.me/573217734709"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/team_training_explosive?igsh=MWtoeGU2Y2NlM2xuaA=="><i class="fa-brands fa-instagram"></i></a>
      </div>
      <div class="nav-responsive" id="icono-nav">
        <a href="metodo.php"><i class="fas fa-arrow-left"></i></a>
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
    <div>
        <h2>HOY ENTRENARÁS DE LA SIGUIENTE MANERA: </h2>
        <table>
            <thead>
                <tr>
                    <th>Repeticiones</th>
                    <th>Series</th>
                    <th>Tiempo de descanso (min)</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th> <?= $row['repeticiones'] ?> </th>
                        <th> <?= $row['series'] ?> </th>
                        <th> <?= $row['tiempo_descanso'] ?> </th>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <br>
    <center>
    <a href="menu.php?id=<?php echo $id; ?>"><button class="boton-tren-superior">ENTENDIDO</button></a>  <br><br>
    </center>
</body>
</html>