var margin= document.querySelector(".grade");
let next= document.getElementById("avancar");
let back = document.getElementById("voltar");
var cont=0;
    
function carrossel(){

    if(margin.style.marginLeft==""){
        back.style.opacity=0;
    }
}

next.addEventListener('click', ()=>{
    if(margin.style.marginLeft==""){
        margin.style.marginLeft=="-100%";
    }else if(margin.style.marginLeft=="-100%"){
        margin.style.marginLeft=="-200%";
    }else if(margin.style.marginLeft=="-200%"){
        margin.style.marginLeft=="-300%";
    }else if(margin.style.marginLeft=="-300%"){
        margin.style.marginLeft=="-400%";
    }else if(margin.style.marginLeft=="-400%"){
        margin.style.marginLeft=="-500%";
    }else if(margin.style.marginLeft=="-500%"){
        margin.style.marginLeft=="-600%";
        next.style.opacity=0;
    }
    
})