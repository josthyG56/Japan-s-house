<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión y si es un administrador
if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] !== 'admin') {
    // Si el usuario no ha iniciado sesión como administrador, redirige al inicio de sesión del administrador
    header('Location: panel_administrador.php');
    exit();
}

// Conectar a la base de datos
$servername = "localhost";
$username = "id20740299_joshua";
$password = "2002Nito*";
$dbname = "id20740299_registro";
$conexion = mysqli_connect($servername, $username, $password, $dbname) or die("Problemas con la conexión");

// Consulta para obtener todos los registros de la tabla
$sql = "SELECT * FROM registro";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="css/estilos_index.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <!-- Agrega más enlaces del menú si es necesario -->
            </ul>
        </nav>
    </header>

    <section class="main-content">
        <h1>Panel de Administrador</h1>
        
        <!-- Tabla de registros -->
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Ciudad</th>
                <th>Correo</th>
                <th>Comentarios</th>
                <th>Teléfono</th>
                <th>Camisa</th>
                <th>Transporte</th>
                <th>Talla</th>
            </tr>
            <?php
            if (mysqli_num_rows($resultado) > 0) {
                // Mostrar los registros en la tabla
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID'] . "</td>";
                    echo "<td>" . $fila['Nombre'] . "</td>";
                    echo "<td>" . $fila['Apellidos'] . "</td>";
                    echo "<td>" . $fila['Edad'] . "</td>";
                    echo "<td>" . $fila['Sexo'] . "</td>";
                    echo "<td>" . $fila['Ciudad'] . "</td>";
                    echo "<td>" . $fila['Correo'] . "</td>";
                    echo "<td>" . $fila['Comentarios'] . "</td>";
                    echo "<td>" . $fila['Telefono'] . "</td>";
                    echo "<td>" . $fila['Camisa'] . "</td>";
                    echo "<td>" . $fila['Transporte'] . "</td>";
                    echo "<td>" . $fila['Talla'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No se encontraron registros.</td></tr>";
            }
            ?>
        </table>
    </section>
</body>
</html>

<?php
// Cierra la conexión
mysqli_close($conexion);
?>
