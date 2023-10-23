let a = document.getElementById("input1");
let b = document.getElementById("input2");

let result = document.getElementById("result");

function calcular(){
    result.innerHTML = Number(a.value) + Number(b.value);
}