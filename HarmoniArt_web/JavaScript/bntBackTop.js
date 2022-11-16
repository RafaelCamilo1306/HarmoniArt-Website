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
