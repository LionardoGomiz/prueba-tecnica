<?php

include ('../config/conexion.php');

if (isset($_POST["insertar"])) {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $nombretienda = $_POST['nombretienda'];
    $paisid = $_POST['paisid'];
    $direccion = $_POST['direccion'];


    $sql =  "INSERT INTO usuarios(nombre, correo, telefono, nombretienda, paisid, direccion)
     VALUES ('$nombre', '$correo', $telefono, '$nombretienda', $paisid, '$direccion')  ";

     $resultado = mysqli_query($conexion, $sql);
    if($resultado === true) {
      header("Location: ../index.php");
    }else{
      echo "Datos no insertados";
    }

 }
?>
