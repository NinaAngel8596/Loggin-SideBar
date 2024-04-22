<?php
include("conecction.php");

if(isset($_POST['btnRegister'])){
    $user = trim($_POST['name']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $direction = trim($_POST['direction']);
    $phone = trim($_POST['phone']);

    $consulta = "INSERT INTO login (usuario, contraseia, email, direccion, telefono) 
                 VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conex, $consulta);

    if (!$stmt) {
        die("Error al preparar la consulta: " . mysqli_error($conex));
    }

    mysqli_stmt_bind_param($stmt, "sssss", $user, $password, $email, $direction, $phone);

    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        echo "<p class='success-message'>Registro exitoso.</p>";
    } else {
        echo "<p class='error-message'>Error al registrar el usuario: " . mysqli_error($conex) . "</p>";
    }

    mysqli_stmt_close($stmt);
}
?>

