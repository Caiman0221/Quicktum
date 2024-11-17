<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовая страница</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <article>
        <div class="content">
            <div class="text_container">
                <h2>javascript</h2>
                <p id="paragraph" hidden>
                    На странице есть абзац, кнопка 1 и кнопка 2. Напишите код, который по нажатию 
                    сначала на кнопку 1, а потом на кнопку 2 скрывает абзац, если он раскрыт, 
                    и раскрывает, если он скрыт.
                </p>
            </div>
            <div class="buttons_container">
                <button id="button_1" class="button">Показать?</button>
                <button id="button_2" class="button">Точно показать?</button>
            </div>
        </div>
    </article>
</body>
</html>
<script src="main.js"></script>
