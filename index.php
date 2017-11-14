<?php require 'header.php';?>

  <link href="dist/lity.css" rel="stylesheet"/>
  <script src="dist/lity.js"></script>
  <script>
      $(function() {
          $('a.land').each(function() {
              var el = $(this), href = el.attr('href');

              if (href.length > 97) {
                  href = href.substr(0, 97) + '...';
              }

              el.text(href);
          })
      });
  </script>

  <div class="container-fluid">
    <div class="row">
      <div class="video-landing">
        <video muted id="preview-youtube" autoplay="" loop="">
    		  <source src="video/preview.mp4" type="video/mp4">
              Su navegador no soporta la etiqueta de vídeo.
    		</video>
        <a href="https://www.youtube.com/watch?v=YnuRJKYxous" data-lity><img id="play-video" class="play_button_landing" src="img/play.png"></a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row separador-logo">
      <img class="centrar-img efirsa-home" src="img/logo-normal.png">
    </div>
  </div>



<div class="container">
  <div class="row seccion-productos">
    <div class="padding-home">
      <h2 class="titulos-secciones">Productos</h2>
      <p class="texto-verde enlaces-verdes"><a target="_blank" class="texto-verde enlaces-verdes" href="archivos/efirsa_catalogo.pdf">Ver catálogo <img class="flecha-enlace" src="img/flecha-verde.png"></a></p>
    </div>
    <!--<img class="img-full" src="img/cintillo-catalogo.jpg">-->
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
      <li><a href="#"><img src="data1/images/slider1x.png" alt="Slider" title="slider-1" id="wows1_0"/></a></li>
      <li><img src="data1/images/slider2x.png" alt="slider-2" title="slider-2" id="wows1_1"/></li>
      <li><img src="data1/images/slider3x.png" alt="slider-3" title="slider-3" id="wows1_2"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
      <a href="#" title="slider-1"><span>1</span></a>
      <a href="#" title="slider-2"><span>2</span></a>
      <a href="#" title="slider-3"><span>3</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://efirsa.mx"></a> by Efirsa</div>
    <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>

    <?php /* ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="img/slider-1.png" alt="Efirsa Web Slider" style="width:100%;">
          <!--<div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
          </div>-->
        </div>

        <div class="item">
          <img src="img/slider-2.png" alt="Efirsa Web Slider" style="width:100%;">
          <!--<div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>-->
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php */ ?>
  </div>
</div>

  <div class="container">

    <div class="row seccion-servicios">
      <div class="padding-home">
        <h2 class="texto-centro titulos-secciones">Servicios</h2>
      </div>
    </div>
    <div class="row contenedor-servicios-gris">
      <div class="col-xs-12 col-sm-6 sin-padding">
        <img class="img-full" src="img/servicios-1.png">
        <div class="contenedor-servicios visible-xs">
          <h2 class="p-a">Mantenimiento _</h2>
          <p class="parrafos p-a">EFIRSA ayuda a mantener sus equipos en excelente estado ya que realiza de manera mensual ó bimestral el servicio de Mantenimiento Preventivo y Correctivo de Elevadores y Escalera Eléctricas. Programa y controla las actividades de mantenimiento por los 365 días del año...</p>
          <p class="leer-mas-p p-a texto-derecha"><a class="texto-verde enlaces-verdes" href="#">Leer más</a></p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 sin-padding">
        <img class="img-full" src="img/servicios-2.png">
        <div class="contenedor-servicios visible-xs">
          <h2 class="p-a">Modernización _</h2>
          <p class="parrafos p-a">Realizamos la modernización de tus elevadores o escaleras eléctricas, aprovechando tu equipo y materiales lo mayor posible, todo tiene un ciclo de vida, incluso con el mejor cuidado un elevador que lleva miles de kilómetros, haciendo cientos de viajes durante varias décadas...</p>
          <p class="leer-mas-p p-a texto-derecha"><a class="texto-verde enlaces-verdes" href="#">Leer más</a></p>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container gris-mantenimiento">
      <div class="col-xs-12 col-sm-6 sin-padding">
        <div class="contenedor-servicios hidden-xs">
          <h2>Mantenimiento _</h2>
          <p class="parrafos">EFIRSA ayuda a mantener sus equipos en excelente estado ya que realiza de manera mensual ó bimestral el servicio de Mantenimiento Preventivo y Correctivo de Elevadores y Escalera Eléctricas. Programa y controla las actividades de mantenimiento por los 365 días del año...</p>
          <p class="leer-mas-p texto-derecha"><a class="texto-verde enlaces-verdes" href="#">Leer más</a></p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 sin-padding">
        <div class="contenedor-servicios hidden-xs">
          <h2>Modernización _</h2>
          <p class="parrafos">Realizamos la modernización de tus elevadores o escaleras eléctricas, aprovechando tu equipo y materiales lo mayor posible, todo tiene un ciclo de vida, incluso con el mejor cuidado un elevador que lleva miles de kilómetros, haciendo cientos de viajes durante varias décadas...</p>
          <p class="leer-mas-p texto-derecha"><a class="texto-verde enlaces-verdes" href="#">Leer más</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row seccion-pasos-cotizacion">
      <div class="padding-home">
        <p class="texto-centro"><a class="texto-verde enlaces-verdes" href="cotizaciones.php">Pasos a seguir para una cotización <img class="flecha-enlace" src="img/flecha-verde.png"></a></p>
      </div>
    </div>
  </div>
<?php require 'footer.php';?>
