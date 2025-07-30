<?php
include ('conexion.php');
$con = conexion();
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../imagenes/logo.jpeg" type="image/jpg">
    <title>REGÍSTRATE</title>
</head>
<style>
 html {
 scroll-behavior: smooth;
}
 body {
 margin: 0;
 padding: 0;
 background-size: cover;
 background-position: center;
 background-color: white;
 text-align: center;
 background-image: url(../imagenes/fotoprensa.jpeg);
}
/*BARRA*/
.contenedor-header .logo{
  width: 80px;
  height: auto;
  border-radius: 50%;
}
.contenedor-header {
  width: 100%;
  position: fixed;
  border-bottom: 1px solid red;
  background-color:red;
  z-index: 99;
  padding: 0 20px;
  top: 0;
position: absolute;

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
  text-decoration: none;
  color: white;
  display: inline-block;
  padding: 5px 8px;
  font-size: 25px;
}
.contenedor-header header .redes a:hover {
  color: black;
}
.nav-responsive{
  font-size: 25px;
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
    padding: auto;
    margin-bottom: 10px;
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
.nav-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.nav-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.nav-content a:hover {background-color: #ddd;}

.nav-responsive:hover .nav-content {display: block;}
@media (max-width: 768px) {
  .contenedor-header header {
    flex-direction: column;
    align-items: center;
  }
  .contenedor-header header h1 {
    font-size: 25px;
  }
  .contenedor-header header nav a {
    font-size: 18px;
    padding: 10px;
  }
  .contenedor-header header .redes a {
    font-size: 25px;
  }
  form {
    width: 90%;
    padding: 15px;
    margin-top: 150px;
  }
  form input, form select {
    padding: 10px;
    font-size: 0.9rem;
  }
  form input[type="submit"] {
    padding: 12px;
    font-size: 1rem;
  }
}

@media (max-width: 480px) {
  .contenedor-header {
    padding: 0 10px;
  }
  .contenedor-header header .redes a {
    font-size: 18px;
  }
  h1 {
    font-size: 20px; 
  }
  form {
    padding: 10px;
  }
}
</style>
<body>
<div class="contenedor-header">
        <header>
          <img src="../imagenes/logo.jpeg" alt="Logo" class="logo">
          <h1>TRAINING_EXPLOSIVE</h1>
          <nav id="nav">
            <a href="inicio.html">Inicio</a>
            </nav>
       <div class="redes">
        <a href="https://www.facebook.com/steven.gutierrezrodriguez.7?mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://wa.me/573217734709"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/team_training_explosive?igsh=MWtoeGU2Y2NlM2xuaA=="><i class="fa-brands fa-instagram"></i></a>
      </div>
        </div>
      </header> 
     </div>
          <br>
          <br><br><br><br><br><br>
    <div>
        <form action="../paginaadmin/crudregistro/insertar_usuario.php" method="POST">
        <h2>Regístrate </h2>

    <input type="number" name="id_usuario" placeholder="Cédula" required><br>
    <input type="hidden" name="tipo_de_usuario" value="cliente">
    <select name="tipo_documento" aria-placeholder="Tipo de documento">
      <option value="T.I">T.I</option>
      <option value="C.C">C.C</option> 
      <option value="C.E">C.E</option></select> <br>
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="text" name="apellido" placeholder="Apellido" required><br>
    <input type="number" name="edad" placeholder="Edad" required><br>
    <input type="email" name="correo_electronico" placeholder="Correo electronico" required><br>
    <input type="tel" name="telefono" placeholder="Teléfono" required><br>
    <input type="text" name="direccion" placeholder="Dirección" required><br>
    <input type="text" name="peso" placeholder="Peso (kg)" required><br>
    <input type="text" name="talla" placeholder="Talla (cm)" required><br>
    <input type="text" name="enfermedades" placeholder="Enfermedades" required><br>
    <input type="datetime-local" name="fecha_de_inicio" placeholder="Fecha de inicio" required><br>
    <input type="password" name="contraseña" placeholder="Contraseña" required><br>
    <br>
    <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>