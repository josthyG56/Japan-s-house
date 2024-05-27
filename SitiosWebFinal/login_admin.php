<?php
// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    $servername = "localhost";
    $username = "id20740299_joshua";
    $password = "2002Nito*";
    $dbname = "id20740299_registro";
    $conexion = mysqli_connect($servername, $username, $password, $dbname) or die("Problemas con la conexión");

    // Obtener las credenciales del formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Buscar el usuario en la base de datos
    $consulta = "SELECT * FROM usuario WHERE nombre = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    // Si se encontró un usuario
    if ($fila = mysqli_fetch_assoc($resultado)) {
        // Obtener el tipo de cuenta del usuario
        $tipo_usuario = $fila['tipoCuenta'];

        // Verificar si el usuario es un administrador
        if ($tipo_usuario == 'admin') {
            // Iniciar sesión y redireccionar al menú de administrador
            $_SESSION['tipo_usuario'] = 'admin';
            header('Location: menu_admin.html');
            exit();
        } else {
            // Si el usuario no es un administrador, mostrar mensaje de error
            echo "<p class='error-message'>Acceso denegado. Esta página es solo para administradores.</p>";
        }
    } else {
        // Si no se encontró un usuario, mostrar mensaje de error
        echo "<p class='error-message'>Usuario y/o contraseña incorrectos.</p>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
