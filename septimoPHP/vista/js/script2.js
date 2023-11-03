

window.addEventListener("load",()=>{
    validadVacio();
})
function validadVacio(){

    let form = document.querySelectorAll(".login");
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


