<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Panel de Administrador</title>
    <link rel="stylesheet" href="css/estilos_index.css">
</head>

<body>

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

</body>

</html>
