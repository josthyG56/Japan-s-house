<?php
// Datos para iniciar la sesión
$server = "localhost";
$user = "id20740299_joshua";
$password = "2002Nito*";
$bd = "id20740299_registro";

// Crear la conexión
$conn = new mysqli($server, $user, $password, $bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
