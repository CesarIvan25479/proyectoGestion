let formInicia = document.getElementById("FormSesion");
formInicia.addEventListener('submit',(e) =>{
    e.preventDefault();
    var datos = new FormData(formInicia);
    fetch('php/login.php',{
        method: "POST",
        body: datos
    })
    .then(res => res.json())
    .then(data => {
        if(data.estado == "iniciar"){
            window.location.href = "../../proyectoGestion/home/home.php";
        }else if(data.estado == "sinregistro"){
            document.getElementById("error").innerText = "Verifica tu usuario y/o Contraseña";
        }
    });
})
