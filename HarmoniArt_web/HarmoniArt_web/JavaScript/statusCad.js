function statusOnload() {
    let statusPg = document.querySelector('#statusPg');
    let payment = document.querySelector('#botaoPg');
    let statusMt = document.querySelector('#statusMt');
    let matricula = document.querySelector('#botaoMt');
    if (payment.checked) {
        statusPg.textContent = "Pago";
        statusPg.style.color = "var(--corAuxiliarSucess)"
    }

    if (matricula.checked) {
        statusMt.textContent = "Ativo";
        statusMt.style.color = "var(--corAuxiliarSucess)"
    }

}

function pagSituation() {

    let status = document.querySelector('#statusPg');
    if (status.textContent === "Pendente") {
        status.textContent = "Pago";
        status.style.color = "var(--corAuxiliarSucess)"
        
    } else {
        status.textContent = "Pendente";
        status.style.color = "var(--corAuxiliarDangerous)"
        
    }
}
function matSituation() {

    let status = document.querySelector('#statusMt');
    console.log(status.textContent);
    if (status.textContent === "Inativo") {
        status.textContent = "Ativo";
        status.style.color = "var(--corAuxiliarSucess)"
    } else {
        status.textContent = "Inativo";
        status.style.color = "var(--corAuxiliarDangerous)"
    }
}