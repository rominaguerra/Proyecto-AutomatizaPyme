<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CORREO = $_POST['correo'];
    $PASSWORD = $_POST['password'];

    $consulta = "SELECT * FROM validacion WHERE correo = '$CORREO' AND password = '$PASSWORD'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        header("Location: iniciosesion.html");
        exit();
    } else {
        include("index.html");
        echo "<h1>ERROR DE AUTENTICACIÓN</h1>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
} else {
    echo "Acceso denegado.";
}
?>
