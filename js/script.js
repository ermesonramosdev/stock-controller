const openModal = document.querySelector('#openModal');
const openAddModal = document.querySelectorAll('.confirm');

//Abrir o Modal
openModal.addEventListener('click', () => {
    const myModal = document.querySelector('#myModal');
    myModal.style.display = 'flex';

    const closeModal = document.querySelector('.close');
    //Fechar o modal
    closeModal.addEventListener('click', () => {
        myModal.style.display = 'none';
    });
});

openAddModal.forEach((buttonAdd) => {
    buttonAdd.addEventListener('click', () => {
        const myModalAdd = document.querySelector('#myModalAdd');
        myModalAdd.style.display = 'flex';

        const closeModalAdd = document.querySelector('#myModalAdd .modal-content .close');
        closeModalAdd.addEventListener('click', () => {
            myModalAdd.style.display = 'none';
        });
    });
});