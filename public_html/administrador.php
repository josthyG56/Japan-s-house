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

// Aquí puedes agregar operaciones adicionales si es necesario

// Cerrar la conexión a la base de datos
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Panel de Administrador</title>
    <link rel="stylesheet" href="css/estilos_index.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(css/img/paseo-de-noche.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-form .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        h1 {
            margin-top: 0;
            color: #fff;
            text-align: center;
        }
    </style>

</head>

<body>

    <section class="section">
        <h1>Tour Across Japan's Lands</h1>
        <nav class="header__nav">
            <img align="left" src="css/img/logoTipo/logo_japonsHouse-SinFondo.png" alt="Logo" class="footer__logo">
            <ul class="header__nav-list">
                <li class="header__nav-item"><a href="index.html">Inicio</a></li>
                <li class="header__nav-item"><a href="index.html#historia">Historia</a></li>
                <li class="header__nav-item"><a href="gastronomia.html"> Gastronomia</a></li>
                <li class="header__nav-item"><a href="JaponServicios.html">Lugares turístico</a></li>
                <li class="header__nav-item"><a href="JaponLeyendas.html"> Folklore japones </a></li>
                <li class="header__nav-item"><a href="practica30.html">Registro</a></li>
                <li class="header__nav-item"><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
        <div class="container">
            <h2 class="header__title">Inicio de Sesión - Panel de Administrador</h2>

            <form action="login_admin.php" method="post" class="login-form">
                <div class="form-group">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="contraseña" class="form-label">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" class="form-input" required>
                </div>

                <button type="submit" class="btn-submit">Iniciar Sesión</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <img align="left" src="./css/img/logoTipo/logo_japonsHouse-SinFondo.png" alt="Logo" class="footer__logo">
        <div class="footer__social">
            <div class="footer__icons">
                <a href="https://www.facebook.com/" class="footer__icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com" class="footer__icon"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com" class="footer__icon"><i class="fab fa-youtube"></i></a>
                <a href="https://twitter.com" class="footer__icon"><i class="fab fa-twitter"></i></a>
            </div>
            <span class="footer__copyright">© 2024 Japan's House Tour. Todos los derechos reservados.</span>
        </div>
    </footer>

</body>

</html>