    <div class="container pt-5">
      <h1 class="text-center">Авторизация на сайте</h1>
      <div class="col-sm-6 mx-auto my-5">
        <form onsubmit="sendForm(this);return false;">
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input name="pass" type="password" class="form-control" placeholder="Пароль">
            <p id="info" style="color:red"></p>
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Войти">
          </div>
        </form>
      </div>
    </div>
    <script>
      async function sendForm(form){
        info.innerHTML = '';
        let response = await fetch("authUser",{
          method: "POST",
          body: new FormData(form)
        });
        let result = await response.text();
        if(result=="success")
          location.href = "lk.php";
        else
          info.innerHTML = `Логин или пароль ввдён неверно!`;
      }
    </script>