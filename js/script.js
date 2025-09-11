const closeModal = document.querySelector('.close');
const openModal = document.querySelector('#openModal');
const myModal = document.querySelector('#myModal');

//Abrir o Modal
openModal.addEventListener('click', () => {
    myModal.style.display = 'flex';
});

//Fechar o modal
closeModal.addEventListener('click', () => {
    myModal.style.display = 'none';
});
