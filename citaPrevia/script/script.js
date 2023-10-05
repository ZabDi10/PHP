// Script del checkbox
// Script basico para un check, importante poner el id check en la checkbox y boton en la clase boton de cualquier boton del forms

let cuadrado = document.querySelector("#check");
let formulario = document.querySelectorAll("#formulario");

if (document.getElementById("check")!=null){
    // habilita al boton a enviar
    cuadrado.addEventListener("change", habilitar);
}else{
    // validadVacio();
}

window.addEventListener("beforeunload", (e) =>{
    cuadrado.checked = false;
    console.log("Se clicko");
})
// Funcion habilitar cambia estilo y quita disable
function habilitar() {

    let botonEnviar = document.querySelector('.boton');
    if (cuadrado.checked){
        botonEnviar.removeAttribute("disabled")
        botonEnviar.style.cursor = "pointer";
        // validadVacio();
    }else{
        botonEnviar.setAttribute("disabled", "disabled");
        botonEnviar.style.cursor = "not-allowed";
    }
}
// previene la propagacion de eventos si en los inputs no hay nada, poner la clase al form
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


