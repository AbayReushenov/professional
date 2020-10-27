    <div class="container pt-5">
      <h1 class="text-center">Регистрация на сайте</h1>
      <div class="col-sm-6 mx-auto my-5">
        <form onsubmit="sendForm(this); return false;">
          <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="Имя">
          </div>
          <div class="form-group">
            <input name="lastname" type="text" class="form-control" placeholder="Фамилия">
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Email">
            <p id="info" style="color:red;"></p>
          </div>
          <div class="form-group">
            <input name="pass" type="password" class="form-control" placeholder="Пароль">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
          </div>
        </form>
      </div>
    </div>
    <script>
      async function sendForm(form){
        let formData = new FormData(form);
        let response = await fetch("addUser",{
          method: "POST",
          body: formData
        });
        let result = await response.text();
        if(result == "success"){
          console.log("Зарегистрирован");
          //location.href="auth.php";
        }else if(result=="exist"){
          info.innerText = `Такой пользователь уже есть!`;
        }else{
          console.log("Неизвестная ошибка");
        }
      }
    </script>