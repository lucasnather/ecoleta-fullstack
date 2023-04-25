const botaoAbrirModal = document.querySelector('#abrir-modal');
const botaoFecharModal = document.querySelector('#fechar-modal');
const modal = document.querySelector('#modal');

const abrirModal = () => {
    modal.showModal();
}

const fecharModal = () => {
    modal.close();
}

botaoAbrirModal.addEventListener('click', abrirModal);
botaoFecharModal.addEventListener('click', fecharModal);