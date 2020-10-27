<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизации</title>
    <style>
        body {
            background: #2a1215;
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
            background: #a61d24;
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
            top: 2px;
        }
    </style>
</head>

<body>
    <div>
        <h1>Форма авторизации</h1>
        <form class="myForm" onsubmit="sendForm(this); return false;">
            <label for="email">Логин </label>
            <input name="email" type="email" id="email" placeholder="Введите логин ">
            <span id="info" style="color:white"></span>
            <label for="password1">Пароль</label>
            <input name="pass" type="password" class="form-control" id="password1" placeholder="Введите пароль">
            <button type="submit" class="myButton">Отправить</button>
        </form>
    </div>

    <script>
        async function sendForm(form){
          info.innerHTML = '';
          let response = await fetch("php/auth_obr.php",{
            method: "POST",
            body: new FormData(form)
          });
          let result = await response.text();
          if(result=="success")
            location.href = "lk.php";
          else
            info.innerHTML = `Логин или пароль введён неверно!`;
        }
      </script>
</body>

</html>