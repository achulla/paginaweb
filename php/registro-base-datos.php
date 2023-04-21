<?php
include("conexion.php");


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

// Insertamos los datos en la base de datos
$sql = "INSERT INTO formulario (nombre, apellido, email, contraseña) VALUES ('$nombre', '$apellido', '$email', '$contraseña')";

if ($conexion->query($sql) === TRUE) {
    echo "<script>alert(' exitoso'); window.location='/principal.html'</script>";

    
} else {
    echo "<script>alert(' fallido');window.history.go(-1);</script>";
}
$conexion->close();

?>