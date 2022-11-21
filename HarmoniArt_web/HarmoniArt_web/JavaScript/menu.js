const burguer = document.querySelector(".mobile-menu");
const navmenu = document.querySelector(".sections");

burguer.addEventListener("click", () => {

    burguer.classList.toggle('active')
    navmenu.classList.toggle('active')
})