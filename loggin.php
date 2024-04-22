<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2>Bienvenido</h2>
            <form id="loginform"action="validationLoggin.php" method="POST">
                <div class="user">
                    <img class="user-img" src="img/iphoneSlider.png" alt="User Image">
                    <p>Welcome back, <span class="bold">User</span></p>
                </div>

                <div class="user">
                    <input type="text" class="form-input" id="username" name="username" placeholder="Username" required>
                    <i class='bx bx-body'></i> <!-- Icono de usuario -->
                </div>

                <div class="password">
                    <input type="password"  class="form-input" id="password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt '></i> <!-- Icono de contraseña -->
                </div>
                
                <div id="mensajeError" style="display: none; color: white;">
                    Usuario o contraseña incorrectos.
                </div>


                <input type="submit"  name="btnEnviar" class="form-submit" value="Login">
            </form>
            
            <button class="btnRegistro" id="btnRegistrar" href="indexRegistro.php">Registrarme</button>
            
        </div>
    </div>
    <script src="scriptIndexRegistro.js"></script>
</body>
</html>
