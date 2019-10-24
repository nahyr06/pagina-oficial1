

<?php
$destino= "enviosprepagados@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["email"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];

$contenido= "Nombre: " . $nombre . "\nemail: " . $correo . "\nTeléfono: " .$telefono . "\nMensaje: " . $mensaje;

mail($destino, "Contacto", $contenido);





?>

 <!DOCTYPE html>
<html lang="es">

<head>
    <title>Contacto</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="desciption" content="envios.viajes.guias.electronicas">
    <meta name="distribution" content="global">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="images/" href="favicon.ico">

    <!-- Cargando fuentes-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'db276b6aca63923d799114ec0f39c90ea8033216';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

    <!-- Carga de archivos css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="paginas-internas">
    <section class="bienvenidos">

        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="images/logo.svg" alt="Logo del sitio">
                </a>

                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="ubicaciones.html">ubicaciones</a></li>
                        <li class="active"><a href="contacto.html">Contacto</a></li>
                        <li><a href="facturacion.html">Facturacion</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4 wow bounceIn">Contacto</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Estamos listos para ayudarte</p>

            </div>

        </div>

    </section>
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.html">Inicio</a> » Contacto

                </div>
            </div>
        </div>
    </section>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Gracias!</h4>
  Un asesor se pondra en contacto en breve.
</div>
<!-- ______________________________________________ cuerpo____________________________________________________________!-->

  



<!-- _________________________________________________footer_________________________________________________________!-->

    <footer class="piedepagina py-1" role="contentinfo">
        <div class="container">
            <p>2018 © www.enviosprepagados.com Todos los derechos reservados</p>
            <ul class="redes-sociales">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- ______________________________________________Carga de archivos  JS__________________________________________ -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>




<!-- ______________________________________________________________mensaje alerta____________________________________________________________________________!-->
<Script language=JavaScript>
function right(e) {
if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2)){
alert("Bloqueado");
return false;
}
else if (navigator.appName == 'Microsoft Internet Explorer' &&
(event.button == 2 || event.button == 3)) {
alert("Bloqueado");
return false;
}
return true;
}
document.onmousedown=right;
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=right;
</script>
<!-- __________________________________________________________________________________________________________________________________________________________!-->

</body>

</html>
