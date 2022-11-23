function iniciaDel(modalID) {
    const modal = document.getElementById(modalID);
    if (modal.id=='delete') {
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
