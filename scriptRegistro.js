



const btnRegresar = document.getElementById('btnRegresar');

btnRegresar.addEventListener('click', function(event) {
    event.preventDefault();
    console.log("Botón de regreso clickeado");
    console.log("Redireccionando a loggin.php");
    window.location.href = "loggin.php";
});
