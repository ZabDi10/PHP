window.addEventListener("load", () => {
    document.querySelector('.formu').addEventListener('submit', validarFormulario);

});
function validarFormulario(e){
    e.preventDefault();
    // alert("validando.....");
    let data= document.querySelectorAll(".datos");
    let email= document.querySelector('#email');
    // if (!nombre.value){
    //     nombre.style.backgroundColor='pink';
    //     return;
    // }
    // if(!email.value){
    //     email.style.backgroundColor='pink';
    //     return;
    // }

    data.forEach(element => {
        if (!element.value){
            element.style.backgroundColor='pink';
            return;
        }

    });


    this.submit();
}