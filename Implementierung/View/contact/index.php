<!DOCTYPE html>
<html>
  <head>
    <title>Maxxwell - Kontakt</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8"/>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>

  <script type="text/javascript" src="js/contact.js"></script>

  <!-- Mapbox API und Karte initialiesieren-->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
  <style>
    body { margin:0; padding:0; }
    #map {position: absolute; width: 48%; height: 50%; margin-top: 5%;}
  </style>
  </head>

  <body>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left text-element">Maxxwell Computers</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="text-element" href="../main/index.php">Start</a></li>
          <li><a class="text-element" href="../contact/index.php">Kontakt</a></li>
          <li><a class="text-element" href="../login/index.php">Login</a></li>
          <li><a class="text-element" href="../register/index.php">Registrieren</a></li>
        </ul>
      </div>
    </nav>

    <div class="wrapper">
      <div id="contact-container">
      <img id="login-logo" src="../img/logo/logo.png" alt="logo" width="150" height="150"></img>
      <div id="contact-left">
      <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.0/mapbox-gl-geocoder.min.js'></script>
      <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.0/mapbox-gl-geocoder.css' type='text/css' />


      <div id='map'></div>
        <script>
          mapboxgl.accessToken = 'pk.eyJ1IjoiaGFja2xiZXJuaGFyZCIsImEiOiJjanJrcHFrZngwMGIwNDltdWtxOWdvdXhyIn0.8Uqx2k6yHeXsilujpYQElg';
          const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/hacklbernhard/cjrkq0wgl3sgw2snm8gqinw2y',
            center: [15.693352, 48.397634],
            zoom: 17.0,
          });
          var marker = new mapboxgl.Marker()
          .setLngLat([15.692842,48.397434])
          .addTo(map);
          map.addControl(new MapboxGeocoder({
            accessToken: mapboxgl.accessToken
          }));
      </script>
    </div>
    <div id="contact-right">
      <h3>Kontakt</h3>
      <h4> Telefon </h4>
      <p> +43 677 61796033<p>
      <h4> Adresse </h4>
      <p> Donaugasse 8<p>
      <p> A-3494 Theiß</p>
    </div>
  </body>
</html>
