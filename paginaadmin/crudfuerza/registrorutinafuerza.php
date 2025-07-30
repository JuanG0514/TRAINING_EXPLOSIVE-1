<?php
include ('conexion.php');
$con = conexion();
$sql = "SELECT * FROM fuerza";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagenes/logo.jpeg" type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FUERZA</title>
</head>
<style>
 html {
 scroll-behavior: smooth;
}
 body {
 background-image:url(../../imagenes/fondopeso.jpeg)
 }
 body {
 margin: 0;
 padding: 0;
 background-size: cover;
 background-position: center;
 background-color: white;
 text-align: center;
}
    /*CSS formulario */
   form {
    max-width: 350px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
    border-color: #e60f23;
}

form h2 {
    text-align: center;
    margin-bottom: 20px;
}

form input, form select {
    width: calc(100% - 22px);
    padding: 15px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color:red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color:#e60f23;
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
    color: white;
}
a:hover{
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
    form{
        margin-top: 30%;
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
    <br><br><br><br><br><br><br><br><br><br>
    <div>
        <form action="insertarrutinafuerza.php" method="POST">
        <h2>Actualiza la rutina!</h2>

    <input type="text" name="repeticiones" placeholder="Repeticiones"><br>
    <input type="text" name="series" placeholder="Series"><br>
    <input type="text" name="tiempo_descanso" placeholder="Tiempo de descanso (min)"><br>
    <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>