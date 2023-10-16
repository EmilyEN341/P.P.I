let a = document.getElementById("input1");
let b = document.getElementById("input2");

let result = document.getElementById("result");

function pares(){
    let valorA = Number(a.value);
    let valorB = Number(b.value);

    for (let i = valorA; i<valorB; i++){
        if (i%2 == 0){
            result.innerHTML += " " + i;
        }
    }
}