const openModal = document.querySelector('#openModal');
const openAddModal = document.querySelectorAll('.confirm');
const editProduct = document.querySelectorAll('.edit');

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

//Adicionar produto no modal
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

//Atualiza elementos no modal
editProduct.forEach((edit) => {
    edit.addEventListener('click', (event) => {
        const myModalUpdate = document.querySelector('#myModalUpdate');
        myModalUpdate.style.display = 'flex';

        const closeModalUpdate = document.querySelector('#myModalUpdate .modal-content .close');
        closeModalUpdate.addEventListener('click', () => {
            myModalUpdate.style.display = 'none';
        });

        //Pegar a linha que foi clicada.
        let tr = event.target.parentElement.parentElement.parentElement;
        const td = Array.from(tr.children);

        const inputsUpdateModal = document.querySelectorAll('#myModalUpdate .modal-content #formUpdate input');
        
        inputsUpdateModal.forEach(input => {
            console.log(input);
            td.forEach(element => {
                if(element.id == 'nameProduct' || element.id == 'priceProduct') {
                    input.value = element.textContent;
                } 
            });
        });
    });
});