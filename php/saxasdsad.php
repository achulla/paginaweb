<?php
error_reporting(0);
$conexion = mysqli_connect('localhost','id20611498_prueba_utp','9d57yRg&Ho6]T2kD','id20611498_prueba')
or die(mysql_error($mysqli));


insertar($conexion);

function insertar($conexion){
    $nombre     = $_POST['nombre'];
    $apellido   = $_POST['apellido'];
    $email      = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $consulta ="INSERT INTO formulario (nombre, apellido,email,contrseña) VALUES ('$nombre','$apellido','$email','$contraseña')";


    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}

