function actualizeLabelColor(labelId) {
    for (let i = 1; i <= 5; i++) {
        let label = document.getElementById("label" + i);
        label.style.background = "transparent";
        label.style.borderColor = "#FFF";

    }
    let selectedLabel = document.getElementById("label" + labelId);
    selectedLabel.style.background = "#FF9D02";
    selectedLabel.style.borderColor = "#FF9D02";

    let s1 = document.getElementById("s1")
    if (labelId == "1") {
        s1.style.marginLeft = "0";
    } else if (labelId == "2") {
        s1.style.marginLeft = "-20%";
    } else if (labelId == "3") {
        s1.style.marginLeft = "-40%";
    } else if (labelId == "4") {
        s1.style.marginLeft = "-60%";
    } else {
        s1.style.marginLeft = "-80%";
    }
}
let defaultLabel = document.querySelector("#label1");
defaultLabel.style.background = "#FF9D02";
defaultLabel.style.borderColor = "#FF9D02";


/*active-botão do menu burguer*/

const burguer = document.querySelector(".mobile-menu");
const navmenu = document.querySelector(".sections");

burguer.addEventListener("click", () => {

    burguer.classList.toggle('active')
    navmenu.classList.toggle('active')
});

let subscribe = document.querySelector('#bntSubs');

// evento de click para ativar a função;
subscribe.addEventListener('click', () => iniciaModal('modalSubscribe'));

function iniciaModal(modalID) {
    const modal = document.getElementById(modalID);
    if (modal == document.getElementById(modalID)) {
        // condição parar verificar se na varivel contem algum elemento
        modal.classList.add('mostrar');
        modal.addEventListener('click', (e) => {
            if (e.target.id == modalID || e.target.className == 'fechar') {
                // condição para verificar se o usuário clicou o no espaço em volta do modal ou no botão de fechar caso retorne 'true' o modal fechará
                modal.classList.remove('mostrar');
            }
        });
    } else {
        alert("erro interno, para contato acesse nossas redes sociais ou nosso whats");
    }
}




// botão back to top ------------------------

const botao = document.querySelector(".bnt-backTop");
const ico = document.querySelector("#span-btnTop")
window.addEventListener("scroll", () => {
    if (window.scrollY == 0) {
        botao.classList.remove("active");
    } else if (window.scrollY < 4700) {
        botao.style.background = "var(--corPrimariaMedium)";
        ico.style.color = "var(--corPrimariaDark100)"
        botao.classList.add("active");
        botao.addEventListener("click", () => {
            window.scrollTo(0, 0);
        })
    } else {
        botao.style.background = "var( --corPrimariaDark100)";
        ico.style.color = "var(--corPrimariaMedium)";
    }
});


