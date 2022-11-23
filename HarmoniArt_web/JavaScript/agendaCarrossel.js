var margin= document.querySelector(".grade");
let next= document.getElementById("avancar");
let back = document.getElementById("voltar");
var cont=1;
    
function carrossel(){

    if(margin.style.marginLeft==""){
        back.style.opacity=0;
    }else{
        back.style.opacity=1;
    }
}

next.addEventListener('click', () => {
    console.log(cont);
    if(cont==6){
        margin.style.marginLeft = '-'+[cont]+'00%'; 
        next.style.opacity=0;
    }else{
        back.style.opacity=1;
        margin.style.marginLeft = '-'+[cont]+'00%'; 
    }
    cont++
})