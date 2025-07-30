<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("location:../login/usuario.html");
    exit();
}
$id_usuario = $_SESSION['id_usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAINING_EXPLOSIVE</title>
    <link rel="icon" href="../imagenes/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
 text-align: center;
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
  .inicio {
  height: 100vh;
  background: linear-gradient(rgba(0,1,3,.5), rgba(0,0,0,.7)), url(../imagenes/fondopeso.jpeg);
  background-size: cover;
  background-position: center center;
  color: white;
  position: relative;
}
.inicio .contenido-seccion {
  max-width: 1100px;
  margin: auto;
}
.inicio .info {
  width: fit-content;
  margin: auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.inicio .info h2 {
  font-size: 2rem;
}
.inicio .info p {
  margin: 20px;
  color: white;
  font-size: 90px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.boton-fuerza {
  background-color: white; 
  color: black;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  border: none;
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
  border-radius: 9cap;
  transition: transform 0.2s ease-out;
}

.boton-fuerza:hover {
  background-color: rgb(236, 232, 232);
  color: black; 
  transform: scale(1.1);
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
<!--BARRA HTML-->
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
    </div>
      </header>
       <!--SECCION INICIO-->
   <section id="Inicio" class="inicio">
    <div class="contenido-seccion">
      <div class="info">
          <br><br><br><br><h2>¿QUÉ TIPO DE MÉTODO VAS A USAR?</h2>
          <a href="tablafuerza.php?id=<?php echo $id_usuario ?>"><button class="boton-fuerza">FUERZA</button></a><br><br>
          <a href="tablaestres.php?id=<?php echo $id_usuario ?>"><button class="boton-fuerza">ESTRÉS METABÓLICO</button><br><br></a> 
          <a href="tabladaño.php?id=<?php echo $id_usuario ?>"><button class="boton-fuerza">DAÑO MUSCULAR</button></a>
          <br><br><h2>OTROS TIPOS DE ENTRENAMIENTO</h2>
          <a href="funcional/funcional.html"><button class="boton-fuerza" >FUNCIONAL</button> <br><br></a>
          <a href="videosabdomen/videosabdomen.html"><button class="boton-fuerza" >ABDOMEN</button> <br></a>
    </div>
  </div>
  </section>
</body>
</html>
</body>
    
