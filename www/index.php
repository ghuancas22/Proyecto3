<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box; /* Se establece el modelo de caja para todos los elementos */
}

body {
  font-family: Arial; /*Fuente del texto */
  padding: 10px;  /* Espacio interior del cuerpo */
  background: #f1f1f1; /* color de fondo */
}

/* Header/Blog Title */
.header {
  padding: 30px; /* Espacio interno */
  text-align: center; /* Alineación del texto */
  background: white; /* color de fondo */
}

.header h1 {
  font-size: 50px; /* Tamaño de la fuente del título */
  color:#1f0469 /* Color del texto */
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden; /* Gestion de desbordamiento */
  background-color: #1f0469; /* color de fondo */
}

/* Style the topnav links */
.topnav a {
  float: left; /* Alineación de los enlaces a la izquierda */
  display: block; /* Mostrar como bloque */
  color: #f2f2f2; /* Color del texto */
  text-align: center; /* Alineación del texto */
  padding: 14px 16px;
  text-decoration: none; /*Eliminamos el subrayado del enlace*/
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd; /* Color de fondo */
  color: #1f0469; /* Color del texto */
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    margin: 0 auto; /* Centrar el div */
    width: 75%; /* Ancho de la columna */
}

/* Fake image */
.fakeimg {
    background-color: #aaa; /* Color de fondo */
    width: 100%; /* Ancho de la imagen */
    padding: 20px; /* Espacio interno */
}

/* Add a card effect for articles */
.card {
    background-color: white; /* Color de fondo */
    padding: 20px; /* Espacio interno */
    margin-top: 20px; /* Margen superior */
}

/* Clear floats after the columns */
.row::after {
    content: ""; /* Contenido generado */
    display: table; /* Mostramos como tabla */
    clear: both; /* Limpiamos los flotantes */
}
h2 h1 {
    text-align: center;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;  /* Ancho del 100% */
    padding: 0;  /* Sin relleno */
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none; /* No flotar */
    width: 100%; /* Ancho del 100% */
  }
}
.bbdd {
    display: inline-block; /* Mostramos como bloque en línea */
    margin: 10px; /* Margen */
    background-color: whitesmoke;  /* Color de fondo */
    border: 1px solid #1f0469; /* Borde */
    padding-block: 5px; /* Espacio interno */
    padding-right: 5px; /* Espaciado hacia derecha */
    padding-left: 5px; /* Espaciado hacia izquierda */
}
</style>
<script>
// Función para cargar el contenido PHP en el div leftcolumn
function cargarContenido(url) { /*La funcion*/
  var xhttp = new XMLHttpRequest(); /* Se Crear objeto XMLHttpRequest*/
  xhttp.onreadystatechange = function() { 
    if (this.readyState == 4 && this.status == 200) {  /*Verificamos el estado y el status*/
      document.getElementById("leftcolumn").innerHTML = this.responseText;  /*Asignamos la respuesta al div leftcolumn*/
    }
  };
  xhttp.open("GET", url, true);  /*Se inicializa la solicitud*/
  xhttp.send(); /*Se envia la solicitud*/
}
</script>
</head>
<body>
<!-- CABECERA -->
<div class="header">
    <h1>El Indio</h1>
    <p>Somos lo mejor para ti</p>   <!-- Mensaje de bienvenida -->
</div>

<!-- CONEXION CON ARCHIVOS INTERIORES -->
<div class="topnav">
    <a href="index.php">Inicio</a>  <!-- Enlace a la página de inicio -->
    <a href="#" onclick="cargarContenido('estandar.php')">Estándar</a> <!-- Enlace para cargar contenido estándar -->
    <a href="#" onclick="cargarContenido('familiar.php')">Familiar</a> <!-- Enlace para cargar contenido familiar -->
    <a href="#" onclick="cargarContenido('suite.php')">Suite</a> <!-- Enlace para cargar contenido de suite -->
    <a href="#" onclick="cargarContenido('personal.php')">Iniciar sesión</a> <!-- Enlace para iniciar sesión -->
    <a href="#" onclick="cargarContenido('reservar.php')">Reservar</a> <!-- Enlace para cargar contenido de reserva -->
</div>
<div class="row">
    <div class="card">
        <div id="leftcolumn" class="leftcolumn">
            <div class="card">
            <h1>Indice</h1> <!-- Título -->
                <p>¡Bienvenido al El Indio!<br> <!-- Mensaje de bienvenida -->
                <!-- Otros párrafos con información sobre el hotel -->
                <p>Sumérgete en una experiencia única de hospitalidad y sofisticación en el corazón de Barcelona. En el El Indio, nuestra pasión es hacer que cada momento de tu estadía sea inolvidable, fusionando elegancia, comodidad y calidez para crear un ambiente acogedor que te haga sentir como en casa desde el momento en que cruzas nuestras puertas.
                <p>Con una ubicación privilegiada en el vibrante centro de Barcelona, ​​nuestro hotel es el punto de partida perfecto para explorar esta cautivadora ciudad. Ya sea que estés aquí por negocios o por placer, nuestro equipo dedicado está aquí para atender cada una de tus necesidades, desde recomendaciones locales hasta servicios personalizados, garantizando que tu estancia sea excepcional en todos los sentidos.
                <p>Descubre un oasis de tranquilidad en nuestras lujosas habitaciones y suites, diseñadas con un toque contemporáneo y equipadas con todas las comodidades modernas que necesitas para disfrutar al máximo de tu descanso. Desde impresionantes vistas de la ciudad hasta exquisitos detalles en cada rincón, cada espacio ha sido cuidadosamente diseñado para brindarte una experiencia de alojamiento incomparable.
                <p>En el El Indio, la excelencia culinaria es una prioridad. Deléitate con una exquisita selección de platos gourmet en nuestro restaurante, donde la cocina mediterránea se fusiona con ingredientes frescos y sabores innovadores para crear una experiencia gastronómica inolvidable.
                <p>Además, nuestras instalaciones de primer nivel incluyen un centro de bienestar donde puedes relajarte y rejuvenecer cuerpo y mente después de un día de exploración, así como espacios versátiles para eventos y reuniones que pueden adaptarse a tus necesidades específicas.
                <p>Descubre el encanto incomparable de Barcelona desde la comodidad y la elegancia del El Indio. ¡Te esperamos con los brazos abiertos para que vivas una experiencia verdaderamente inolvidable!</p>
                <img style="text-align: center" src="/img/elindio.jpg" alt="elindio" class="image">  <!-- Imagen del hotel -->
            </div>
        </div>
    </div>
</div>
</body>
</html>
