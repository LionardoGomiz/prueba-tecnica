<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="assets/css/index.css">-->
    <link rel="stylesheet" href="assets/css/inicio.css">
    <link rel="stylesheet" href="lib/splide-4.1.3/dist/css/splide.min.css">
    <script src="lib/splide-4.1.3/dist/js/splide.min.js"></script>
    <title>PRUEBA!!</title>
  </head>

  <header>
    <div id="menu">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#"></a>
        <a class="navbar-brand" href="#"></a>
              <img class="img-fluid" src="assets/imagenes/LOGO.png" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarTogglerDemo02">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" id="options" href="index.php">INFORMACIÓN GENERAL <span class="sr-only">(current)
            </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="options" href="form.php">CREA TU TIENDA</a>
          </li>

        </ul>

      </div>

    </nav>
          </div>

  </header>
  <div class="tittle">
        <h1 class="p-4">SLIDER DE IMÁGENES</h1>
  </div>
  <body>

    <section class="splide" id="volvo" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
  		<ul class="splide__list">
  			<li class="splide__slide">
            		<img class="img-fluid rounded mx-auto d-block" src="https://via.placeholder.com/1920x720" alt="Max-width 80%">
        </li>
  			<li class="splide__slide">
              	<img class="img-fluid rounded mx-auto d-block" src="https://via.placeholder.com/1920x720" alt="Max-width 80%">
        </li>
  			<li class="splide__slide">
            	<img class="img-fluid rounded mx-auto d-block" src="https://via.placeholder.com/1920x720" alt="Max-width 80%">
        </li>
  		</ul>
    </div>
  </section>

<div class="tittle">
      <h1 class="p-4">FOOTER</h1>
</div>

<footer class="w-100 p-4">
    &copy; Copyright 2024 <br>
      Desarrollado por Lionardo Gomiz
</footer>
</html>

<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide' );
    splide.mount();

  } );
</script>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
