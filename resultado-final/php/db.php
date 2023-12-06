<?php
$conexion = mysqli_connect("localhost", "root", "", "validacion");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>