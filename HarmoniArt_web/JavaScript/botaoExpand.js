// função pra expandir e retrair o div perfil 

const expand_bnt = document.querySelector(".expand");
const perfil = document.querySelector(".divPerfil");
const imgPerfil = document.querySelector("#imgUser");
const bntContent = document.querySelector("#seta");
let count;

expand_bnt.addEventListener("click", () => {
    if (count == 1) {
        perfil.classList.remove("active");
        bntContent.textContent = "expand_more";
        expand_bnt.style.bottom="-12%";
        count = 0;
    } else {
        perfil.classList.add("active");
        bntContent.textContent = "expand_less";
        expand_bnt.style.bottom="-10%";
        count = 1;
    }
});