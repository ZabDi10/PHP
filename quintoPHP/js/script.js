window.addEventListener("load", () => {
    document.querySelector('.formu').addEventListener('submit', validarFormulario);

});
function validarFormulario(e){
    e.preventDefault();
    // alert("validando.....");
    let nombre= document.querySelector("#nombre");
    let email= document.querySelector('#email');
    console.log(data);
    if (!nombre.value){
        nombre.style.backgroundColor='pink';
        return;
    }
    if(!email.value){
        email.style.backgroundColor='pink';
        return;
    }

    // data.forEach(item, ()=>{
    //     if (!item.value){
    //             item.style.backgroundColor='pink';
    //
    //     }return;
    // });


    this.submit();
}