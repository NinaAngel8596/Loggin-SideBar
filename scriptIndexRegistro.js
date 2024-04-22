const btnRegistro = document.getElementById('btnRegistrar');

btnRegistro.addEventListener('click', function(event) {
    event.preventDefault();
    
    console.log("Redireccionando a regirstrar.php");
    window.location.href = "indexRegistro.php";
});





