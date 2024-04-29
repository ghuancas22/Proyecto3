<?php 
// Conexión a la base de datos MySQL
$mysqli = new mysqli("mysql", "admin", "admin123", "HotelMoro");

// Verificar la conexión
if ($mysqli->connect_error) {
  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
  color:#1f0469
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #1f0469;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: #1f0469;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    margin: 0 auto; /* Centrar el div */
    width: 75%;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row::after {
    content: "";
    display: table;
    clear: both;
}
h2 h1 {
    text-align: center;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
.bbdd {
    display: inline-block;
    margin: 10px;
    background-color: whitesmoke;
    border: 1px solid #1f0469;
    padding-block: 5px;
    padding-right: 5px;
    padding-left: 5px;
}
</style>
<script>
// Función para cargar el contenido PHP en el div leftcolumn
function cargarContenido(url) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("leftcolumn").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
</script>
</head>
<body>
<!-- CABECERA -->
<div class="header">
    <h1>Hotel Moro</h1>
    <p>Somos lo mejor para ti</p>
</div>

<!-- CONEXION CON ARCHIVOS INTERIORES -->
<div class="topnav">
    <a href="index.php">Inicio</a>
    <a href="#" onclick="cargarContenido('estandar.php')">Estándar</a>
    <a href="#" onclick="cargarContenido('familiar.php')">Familiar</a>
    <a href="#" onclick="cargarContenido('suite.php')">Suite</a>
    <a href="#" onclick="cargarContenido('personal.php')">Iniciar sesion</a>
</div>
<div class="row">
    <div class="card">
        <div id="leftcolumn" class="leftcolumn">
            <div class="card">
            <h1>Indice</h1>
                <p>¡Bienvenido al Hotel Moro!<br>
                <p>Sumérgete en una experiencia única de hospitalidad y sofisticación en el corazón de Barcelona. En el Hotel Moro, nuestra pasión es hacer que cada momento de tu estadía sea inolvidable, fusionando elegancia, comodidad y calidez para crear un ambiente acogedor que te haga sentir como en casa desde el momento en que cruzas nuestras puertas.
                <p>Con una ubicación privilegiada en el vibrante centro de Barcelona, ​​nuestro hotel es el punto de partida perfecto para explorar esta cautivadora ciudad. Ya sea que estés aquí por negocios o por placer, nuestro equipo dedicado está aquí para atender cada una de tus necesidades, desde recomendaciones locales hasta servicios personalizados, garantizando que tu estancia sea excepcional en todos los sentidos.
                <p>Descubre un oasis de tranquilidad en nuestras lujosas habitaciones y suites, diseñadas con un toque contemporáneo y equipadas con todas las comodidades modernas que necesitas para disfrutar al máximo de tu descanso. Desde impresionantes vistas de la ciudad hasta exquisitos detalles en cada rincón, cada espacio ha sido cuidadosamente diseñado para brindarte una experiencia de alojamiento incomparable.
                <p>En el Hotel Moro, la excelencia culinaria es una prioridad. Deléitate con una exquisita selección de platos gourmet en nuestro restaurante, donde la cocina mediterránea se fusiona con ingredientes frescos y sabores innovadores para crear una experiencia gastronómica inolvidable.
                <p>Además, nuestras instalaciones de primer nivel incluyen un centro de bienestar donde puedes relajarte y rejuvenecer cuerpo y mente después de un día de exploración, así como espacios versátiles para eventos y reuniones que pueden adaptarse a tus necesidades específicas.
                <p>Descubre el encanto incomparable de Barcelona desde la comodidad y la elegancia del Hotel Moro. ¡Te esperamos con los brazos abiertos para que vivas una experiencia verdaderamente inolvidable!</p>
                <img style="text-align: center" src="/img/hotelmoro.jpg" alt="hotelmoro" class="image">
            </div>
        </div>
    </div>
</div>
</body>
</html>
