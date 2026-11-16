const modal = document.getElementById('modal-add');
const btnAbrirModal = document.getElementById('btn-novo-produto');
const btnFecharModal = document.getElementById('fechar-modal');

btnAbrirModal.addEventListener('click', () => {
    modal.classList.add('aberto');
});

btnFecharModal.addEventListener('click', () => {
    modal.classList.remove('aberto');
});

const modaleditar = document.getElementById('modal-editar');
const btnAbrirModaleditar = document.getElementById('btn-editar-produto');
const btnFecharModaleditar = document.getElementById('fechar-modal-editar');

btnAbrirModaleditar.addEventListener('click', () => {
    modaleditar.classList.add('aberto');
});

btnFecharModaleditar.addEventListener('click', () => {
    modaleditar .classList.remove('aberto');
});