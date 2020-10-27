<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Форма для отправки на сервер</title>
    <style>
      div{
        margin:10px;
      }
    </style>
  </head>
  <body>
    <form onsubmit="sendForm(this); return false;">
      <div>
        <input type="text" name="phone" placeholder="Номер телефона">
      </div>
      <div>
        <textarea name="msg" placeholder="Сообщение"></textarea>
      </div>
      <div>
        <input type="submit">
        </div>
    </form>
    <script>
      async function sendForm(form){
        let formData = new FormData(form);
        let response = await fetch("php/form_obr.php",{
          method: "POST",
          body: formData
        });
        let result = await response.text()
        if(result=="success"){
          alert("Письмо успешно отправлено.");
        }else{
          alert("ОШИБКА!");
        }
      }
    </script>
  </body>
</html>