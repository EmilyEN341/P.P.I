/*Função contador*/
let contador = document.getElementById("contador");
let valor = 0;

let p1 = document.getElementById("p1");
let p2 = document.getElementById("p2");


function contar(){
    contador.innerHTML = valor.toString();
    valor ++;
}