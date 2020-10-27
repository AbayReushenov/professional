<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <style>
        body {
            background: #58181c;
        }

        div {
            font-size: 2vw;
            padding: .2em;
            text-align: center;
        }

        h1 {
            color: sandybrown
        }

        .myForm {
            display: grid;
            grid-template-columns: [labels] auto [controls] 1fr;
            grid-auto-flow: row;
            grid-gap: .8em;
            background: salmon;
            padding: 1.2em;
            text-align: left;
        }

        .myForm>label {
            grid-column: labels;
            grid-row: auto;
        }

        .myForm>input,
        .myForm>textarea {
            grid-column: controls;
            grid-row: auto;
        }

        .myForm>button {
            grid-column: span 2;
        }

        .myButton {
            box-shadow: 3px 4px 0px 0px #899599;
            background: linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
            background-color: #ededed;
            border-radius: 15px;
            border: 1px solid #d6bcd6;
            display: inline-block;
            cursor: pointer;
            color: black;
            font-family: Arial;
            font-size: 17px;
            padding: 7px 25px;
            text-decoration: none;
            text-shadow: 0px 1px 0px #e1e2ed;
        }

        .myButton:hover {
            background: linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
            background-color: #bab1ba;
        }

        .myButton:active {
            position: relative;
            top: 1px;
        }
    </style>
</head>

<body>
    <div>
        <h1>Форма регистрации</h1>
        <form onsubmit="sendForm(this); return false;" class="myForm">
            <label for="name">Имя</label>
            <input name="name" type="text" id="name" placeholder="Введите имя" required>
            <label for="lastname">Фамилия</label>
            <input name="lastname" type="text" id="lastname" placeholder="Введите фамилию" required>
            <label for="email">Email </label>
            <input name="email" type="email" id="email" placeholder='Введите "email"' required>
            <spam id="info" style="color:red;"></spam>
            <label for="password1">Пароль</label>
            <input name="pass" type="password" class="form-control" id="password1" placeholder="Введите пароль"
                required>
            <button type='submit' class="myButton">Зарегистрироваться</button>
        </form>
    </div>
    <script>
        async function sendForm(form) {
            info.innerHTML = '';
            let formData = new FormData(form);
            let response = await fetch("php/reg_obr.php", {
                method: "POST",
                body: formData
            });
            let result = await response.text();
            if (result == "success") {
                location.href = "auth.php";
            } else if (result == "exist") {
                info.innerText = `Такой пользователь уже есть!`;
            } else {
                console.log("Неизвестная ошибка");
            }
        }
    </script>
</body>

</html>