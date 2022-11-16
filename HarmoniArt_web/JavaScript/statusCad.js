function statusOnload() {
    let statusPg = document.querySelector('#statusPg');
    let payment = document.querySelector('#botaoPg');
    let statusMt = document.querySelector('#statusMt');
    let matricula = document.querySelector('#botaoMt');
    if (payment.checked) {
        statusPg.textContent = "Pendente";
        statusPg.style.color = "var(--corAuxiliarDangerous)"
    }

    if (matricula.checked) {
        statusMt.textContent = "Pendente";
        statusMt.style.color = "var(--corAuxiliarDangerous)"
    }

}

function pagSituation() {

    let status = document.querySelector('#statusPg');
    console.log(status.textContent);
    if (status.textContent === "Pago") {
        status.textContent = "Pendente";
        status.style.color = "var(--corAuxiliarDangerous)"

    } else {
        status.textContent = "Pago";
        status.style.color = "var(--corAuxiliarSucess)"

    }
}
function matSituation() {

    let status = document.querySelector('#statusMt');
    console.log(status.textContent);
    if (status.textContent === "Ativo") {
        status.textContent = "Inativo";
        status.style.color = "var(--corAuxiliarDangerous)"
    } else {
        status.textContent = "Ativo";
        status.style.color = "var(--corAuxiliarSucess)"
    }
}