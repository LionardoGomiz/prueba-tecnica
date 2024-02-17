
<!DOCTYPE html>



<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/inicio.css">

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

  <body>



    <div class="card mb-3 d-flex justify-content-end" id="miElemento">
        <div class="card-body d-flex justify-content-center">
          <form action="cr/registro.php" method="post">

                <div class="mb-3">
                  <label for="" class="form-label">Nombre del Usuario</label>
                  <input type="text" name="nombre" class="form-control" >
                </div>
                <div class="mb-3">
                  <label for=""  class="form-label"> Correo electrónico del usuario</label>
                  <input type="email" name="correo" class="form-control" >
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Telefono</label>
                  <input  type="number" name="telefono" class="form-control" >
                </div>
                <div class="mb-3">
                  <label for="" class="form-label"> Nombre de la Tienda</label>
                  <input type="text" name="nombretienda" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="" >Pais</label>
                          <select class="form-control" name="paisid">
                            <option selected>Seleccionar Pais</option>

                            <?php
                            include ("config/conexion.php");
                            $sql = $conexion->query("SELECT * FROM paises ORDER BY `nombre` ASC");
                              while ($resultado = $sql->fetch_assoc()) {
                                    echo '<option value="'.$resultado['id'].'">'.$resultado['nombre'].'</option>';
                                  }
                            ?>
                          </select>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label"> Direccion de la Tienda</label>
                  <input type="text" name="direccion" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary d-flex justify-content-center" name="insertar" >Guardar</button>
              </form>
        </div>
      </div>


<footer class="w-100 p-4">
    &copy; Copyright 2024 <br>
      Desarrollado por Lionardo Gomiz
</footer>




          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
