var margin= document.querySelector(".grade");
let next= document.getElementById("avancar");
let back = document.getElementById("voltar");
var cont=1;
function zeraCont(){
    if(cont<=0){
        cont=1;
    }else if(cont>6){
        cont=6;
    }
}
function carrossel(){

    if(margin.style.marginLeft==""){
        back.style.opacity=0;
    }else{
        back.style.opacity=1;
    }
}

next.addEventListener('click', () => {
    if(cont==6){
        margin.style.marginLeft = '-'+[cont]+'00%'; 
        next.style.opacity=0;
    }else{
        back.style.opacity=1;
        margin.style.marginLeft = '-'+[cont]+'00%'; 
    }
    cont++
    console.log(cont);  
});

back.addEventListener('click', () => {
    console.log(cont);
    cont=cont-2;
    if(cont<=1){
            back.style.opacity=0;
            margin.style.marginLeft = '-'+[cont]+'00%'; 
    }else{
        next.style.opacity=1;
        margin.style.marginLeft = '-'+[cont]+'00%'; 
    }
    cont++
})