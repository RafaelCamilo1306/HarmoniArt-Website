rm2.style.display="none";
rm3.style.display="none";
rm4.style.display="none";
rm5.style.display="none";
rm6.style.display="none";
rm7.style.display="none";
function showInput(){
    let select = document.getElementById("quant");
    let optionValue = select.options[select.selectedIndex];
    let value = optionValue.value;
    let rm2= document.getElementById("rm2");
    let rm3= document.getElementById("rm3");
    let rm4= document.getElementById("rm4");
    let rm5= document.getElementById("rm5");
    let rm6= document.getElementById("rm6");
    let rm7= document.getElementById("rm7");

    if(value=="1"){
        rm2.style.display="none";
        rm3.style.display="none";
        rm4.style.display="none";
        rm5.style.display="none";
        rm6.style.display="none";
        rm7.style.display="none";
    }else if(value=="2"){
        rm2.style.display="flex";
        rm3.style.display="none";
        rm4.style.display="none";
        rm5.style.display="none";
        rm6.style.display="none";
        rm7.style.display="none";
    }else if (value=="3"){
        rm2.style.display="flex";
        rm3.style.display="flex";
        rm4.style.display="none";
        rm5.style.display="none";
        rm6.style.display="none";
        rm7.style.display="none";
    }else if (value=="4"){
        rm2.style.display="flex";
        rm3.style.display="flex";
        rm4.style.display="flex";
        rm5.style.display="none";
        rm6.style.display="none";
        rm7.style.display="none";
    }else if (value=="5"){
        rm2.style.display="flex";
        rm3.style.display="flex";
        rm4.style.display="flex";
        rm5.style.display="flex";
        rm6.style.display="none";
        rm7.style.display="none";
    }else if (value=="6"){
        rm2.style.display="flex";
        rm3.style.display="flex";
        rm4.style.display="flex";
        rm5.style.display="flex";
        rm6.style.display="flex";
        rm7.style.display="none";
    }else if (value=="7"){
        rm2.style.display="flex";
        rm3.style.display="flex";
        rm4.style.display="flex";
        rm5.style.display="flex";
        rm6.style.display="flex";
        rm7.style.display="flex";
    }
}