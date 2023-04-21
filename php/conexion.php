<?php
$host="localhost";
$usuario="id20611498_prueba_utp";
$pass="eternalsmileKUN123@";
$nomdb="id20611498_prueba";


$conexion=new  mysqli($host,$usuario,$pass,$nomdb);

if ($conexion) {
    echo "conectado";
    
}else {
    echo "mala conexcion";
}
?>