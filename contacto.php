<?php require 'header.php';?>
  <div class="container-fluid">
    <div class="row header-contacto bg-attach">
      <h1 class="titulos-banner">Contacto _</h1>
    </div>
  </div>
  <div class="container">
    <div class="row div-contacto">
      <div class="opciones">
        <div class="txtOpciones">
          <p class="txtEmpresa">EMPRESA</p>
          <p class="txtProfesionista">PROFESIONISTA</p>
        </div>
        <div class="linesOpciones">
          <hr class="sliderEmpresa">
          <hr class="sliderProfesionista">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <form class="form-contacto" action="#">
          <div class="form-group">
            <label for="nombre">Nombre completo:</label>
            <input type="text" class="form-control campos-contacto" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input type="email" class="form-control campos-contacto" id="correo" name="correo">
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="form-control campos-contacto" id="telefono" name="telefono">
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control campos-contacto" rows="5" id="mensaje" style="overflow: hidden;"></textarea>
          </div>
          <button type="submit" class="btn btn-default boton-contacto">ENVIAR</button>
        </form>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6">
         <div id="map"></div>

         
         <script type="text/javascript">

           var map;
           var marker;

           function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 15,
                                    // set the zoom level manually
             zoomControl: true,
             scaleControl: false,
             scrollwheel: false,
             disableDoubleClickZoom: true,
               center: {lat: 20.632748, lng: -103.377254}
             });

             marker = new google.maps.Marker({
               map: map,
               draggable: true,
               animation: google.maps.Animation.DROP,
               scrollwheel: false,
               position: {lat: 20.632748, lng: -103.377254}
             });
             marker.addListener('click', toggleBounce);
           }

           function toggleBounce() {
             if (marker.getAnimation() !== null) {
               marker.setAnimation(null);
             } else {
               marker.setAnimation(google.maps.Animation.BOUNCE);
             }
           }

         </script>
         <script async defer
           src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDacDTJIvueZB9g-8matbFeGYyroNeNnxQ&callback=initMap">
         </script>
      </div>
    </div>
  </div>
<?php require 'footer.php';?>
