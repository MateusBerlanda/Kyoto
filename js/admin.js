// MODAL ADICIONAR PRODUTO
const modal = document.getElementById('modal-add');
const btnAbrirModal = document.getElementById('btn-novo-produto');
const btnFecharModal = document.getElementById('fechar-modal');

btnAbrirModal.addEventListener('click', () => {
    modal.classList.add('aberto');
});

btnFecharModal.addEventListener('click', () => {
    modal.classList.remove('aberto');
});

// MODAL EDITAR PRODUTO
const modaleditar = document.getElementById('modal-editar');
const btnAbrirModaleditar = document.getElementById('btn-editar');
const btnFecharModaleditar = document.getElementById('fechar-modal-editar');

btnAbrirModaleditar.addEventListener('click', () => {
    modaleditar.classList.add('aberto');
});

btnFecharModaleditar.addEventListener('click', () => {
    modaleditar .classList.remove('aberto');
});