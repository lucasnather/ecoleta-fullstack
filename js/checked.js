const containerCheckbox = document.querySelectorAll('.label__campos-checkbox__itens-coleta');
containerCheckbox.forEach(container => {
    container.addEventListener('click', () => {
        const checkbox = container.querySelector('.input-check');
        
        if(checkbox.checked) {
            container.classList.add('cor-fundo-check');
        } else {
            container.classList.remove('cor-fundo-check');
        }
    })
})

