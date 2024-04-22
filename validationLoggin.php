<?php
include("conecction.php");

if(isset($_POST['btnEnviar'])){
    // Capturando los valores del formulario HTML
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Preparando la consulta con marcadores de posición
    $consulta = "SELECT * FROM login WHERE usuario = ? AND contrasenia = ?";
    
    // Preparando la declaración
    $stmt = mysqli_prepare($conex, $consulta);
    //manejor de error
    if (!$stmt) {
        die("Error al preparar la consulta: " . mysqli_error($conex));
    }
    
    // Enlazando los parámetros
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    
    // Ejecutando la consulta
    $resultado = mysqli_stmt_execute($stmt);
    
    // Obteniendo el resultado
    mysqli_stmt_store_result($stmt);
    $num_rows = mysqli_stmt_num_rows($stmt);
    
    if($num_rows > 0){
        header("Location: index.html");
        exit;
    } else {
        ?>
        <h1>erro de crendeciales</h1>
        <?php
    }
    mysqli_stmt_close($stmt);
} 
?>

