let cuadrado = document.querySelector("#casilla");


if (document.getElementById("casilla")!=null){

    cuadrado.addEventListener("change", habilitar);
}else{

    validadVacio();
}
window.addEventListener("beforeunload", (e) =>{
    cuadrado.checked = false;
    console.log("Se clicko");
})

let formulario = document.querySelectorAll("#formulario");





function habilitar() {

    let botonEnviar = document.querySelector('.boton');
    if (cuadrado.checked){
        botonEnviar.removeAttribute("disabled")
        botonEnviar.style.cursor = "pointer";
        validadVacio();
    }else{
        botonEnviar.setAttribute("disabled", "disabled");
        botonEnviar.style.cursor = "not-allowed";
    }
}

function validadVacio(){
    let form = document.querySelectorAll(".formulario");
    Array.from(form).forEach(form =>{
        form.addEventListener("submit", event =>{
            if (!form.checkValidity()){
                event.preventDefault();
                event.stopPropagation();
            }
        })
    })
}

// let marcada = document.getElementById("casilla");
// marcada.addEventListener("change", ()=>{
//     let elem = document.getElementById("enviar");
//     if (marcada.checked){
//         elem.removeAttribute("disabled");
//     }else{
//         elem.setAttribute("disabled", "disabled");
//     }
// })


