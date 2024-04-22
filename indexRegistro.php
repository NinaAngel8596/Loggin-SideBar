<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/styleRegistro.css"> 
        <title>Registro</title>
    </head>
    <body>
        <div class="container">
            <div class="form-wraper">
                <?php
                include("conecction.php");

                
                if(isset($_POST['btnRegister'])){
                    $user = trim($_POST['name']);
                    $password = trim($_POST['password']);
                    $email = trim($_POST['email']);
                    $direction = trim($_POST['direction']);
                    $phone = trim($_POST['phone']);

                    $consulta = "INSERT INTO login (usuario, contrasenia, email, direccion, telefono) 
                                VALUES (?, ?, ?, ?, ?)";

                    $stmt = mysqli_prepare($conex, $consulta);

                    if (!$stmt) {
                        die("Error al preparar la consulta: " . mysqli_error($conex));
                    }

                    mysqli_stmt_bind_param($stmt, "sssss", $user, $password, $email, $direction, $phone);

                    $resultado = mysqli_stmt_execute($stmt);

                    // Mostrar mensaje de éxito o error
                    if ($resultado) {
                        echo "<p class='success-message' style='font-size:20px;color:white;text-align: center;'  >Registro hecho.</p>";
                    } else {
                        echo "<p class='error-message'>Error al registrar el usuario: " . mysqli_error($conex) . "</p>";
                    }

                    mysqli_stmt_close($stmt);
                }
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h2>Registrarme</h2>
                    <p>Inicia tu registro</p>
                    <div class="input-wraper">
                        <input type="text"  name="name" placeholder="Nombre">
                        <i class='bx bx-body'></i>
                    </div>

                    <div class="input-wraper">
                        <input type="email"  name="email" placeholder="Email">
                        <i class='bx bx-envelope'></i>
                    </div>

                    <div class="input-wraper">
                        <input type="text"  name="direction" placeholder="Direccion">
                        <i class='bx bx-home'></i>
                    </div>

                    <div class="input-wraper">
                        <input type="tel"  name="phone" placeholder="Telefono">
                        <i class='bx bx-phone'></i>
                    </div>

                    <div class="input-wraper">
                        <input type="password"  name="password" placeholder="Contrasenia">
                        <i class='bx bx-lock-alt '></i> 
                    </div>

                    <input class="btn" type="submit" name="btnRegister" value="Enviar">
                    <input class="btnRegresar" id="btnRegresar" value="Regresar">

                    

                </form>

            </div>
        </div>
        <script src="scriptRegistro.js"></script>
    </body>
    </html>