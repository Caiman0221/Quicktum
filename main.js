const paragraph = document.getElementById('paragraph');
const button_1 = document.getElementById('button_1');
const button_2 = document.getElementById('button_2');

let hidden = true; // состояние параграфа
let isOn1 = false; // состояние кнопки 1

// обработчик состояния параграфа
const setVisible = () => {
    hidden = !hidden;
    paragraph.hidden = hidden;
}

// обработчик для кнопки 1
button_1.addEventListener('click', () => {
    isOn1 = !isOn1; // меняем состояние кнопки 1
    isOn1 ? button_1.classList.add('clicked') : button_1.classList.remove('clicked'); // показываем, что она нажата или отжата
    hidden ? button_1.innerText = 'Показать?' : button_1.innerText = 'Скрыть?';
})

// обработчик для кнопки 2
button_2.addEventListener('click', () => {
    if (!isOn1) return;
    
    setVisible(); // показывает параграфф
    button_1.click(); // "отжимаем" кнопку

    hidden ? button_2.innerText = 'Точно показать?' : button_2.innerText = 'Точно скрыть?'
})