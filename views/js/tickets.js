const btnMore = document.querySelector('.more');
const padre = document.querySelector('.inputs-group');

btnMore.addEventListener('click', () => {
    const select = document.createElement('select');
    const input = document.createElement('input');

    input.setAttribute('type', 'number');
    input.setAttribute('name', 'ticket');
    input.setAttribute('placeholder', '0');
    input.classList.add('rigth-input', 'cant');

    const option = document.createElement('option');
    option.value = 'Que onda';
    select.textContent = 'Que onda';
    padre.appendChild(select);
    padre.appendChild(input);
    select.appendChild(option);
});

