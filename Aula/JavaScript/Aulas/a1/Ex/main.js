console.log(window.document);

/*
Função contador
let contador = document.getElementById("contador");
let valor = 0;

let p1 = document.getElementById("p1");
let p2 = document.getElementById("p2");


function contar(){
    contador.innerHTML = valor.toString();
    valor ++;
}

Função nome 
function f1(){
    p1.innerHTML = "bla";
}

function f2(){
    p2.innerHTML = "ble";
}

function nome() {
    let nome = prompt("Qual é o seu nome?");
    console.log(nome);
    p1.innerHTML = nome;
    
}
*/


let a = document.getElementById("inputA");
let b = document.getElementById("inputB");

let result = document.getElementById("soma");

function somar(){
    result.innerHTML = Number(a.value) + Number(b.value);
}