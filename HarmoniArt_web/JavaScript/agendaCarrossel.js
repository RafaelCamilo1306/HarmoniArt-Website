var margin= document.querySelector(".grade");
let next= document.getElementById("avancar");
let back = document.getElementById("voltar");
var cont = 0;

const disabledButtons = {
    back: false,
    next: false
}

actualizeOpacity(0);

function carrossel(){
    if(margin.style.marginLeft==""){
        back.style.opacity=0;
    }else{
        back.style.opacity=1;
    }
}

function actualizeOpacity(nextValue) {
    disabledButtons.back = false;
    disabledButtons.next = false;
    back.style.opacity = 1;
    next.style.opacity = 1;

    if(nextValue == 6) {
        next.style.opacity = 0;
        disabledButtons.next = true;
    }
    if(nextValue == 0) {
        back.style.opacity = 0;
        disabledButtons.back = true;
    }
}

function changePage(page) {
    if(page < 0) page = 7 + page;
    margin.style.marginLeft = '-'+(page % 7)+'00%';
    return page % 7;
}

next.addEventListener('click', () => {
    if(disabledButtons.next) return;
    actualizeOpacity(cont + 1);
    cont = changePage(cont + 1);
});

back.addEventListener('click', () => {
    if(disabledButtons.back) return;
    actualizeOpacity(cont - 1);
    cont = changePage(cont - 1);
})