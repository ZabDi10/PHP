let div = document.getElementById("numeros");
for (let i=0; i<=1000; i+=2){
    div.innerHTML += "<p> i = " + i + "</p>";
}
let div2= document.getElementById("numeros2");
for (let i=1000; i>=0; i--){
    div2.innerHTML += "<p> i = " + i + "</p>";

}