function copiarContenido(){
    let texto = document.getElementById('cuadro_texto').value;
    console.log("LA contrsela a copiar es"+texto)
    navigator.clipboard.writeText(texto)

}