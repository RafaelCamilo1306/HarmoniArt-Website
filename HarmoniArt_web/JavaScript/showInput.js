function showInput(){
    let select = document.getElementById("quant");
    let optionValue = select.options[select.selectedIndex];
    let value = optionValue.value;
    let aluno2= document.getElementById("a2");
    let aluno3= document.getElementById("a3");

    if(value=="1"){
        aluno2.style.display="none";
        aluno3.style.display="none";
    }else if(value=="2"){
        aluno2.style.display="flex";
        aluno3.style.display="none";
    }else if (value=="3"){
        aluno2.style.display="flex";
        aluno3.style.display="flex";
    }
}