<div class="jumbotron">
<form onsubmit="sendForm(this); return false;">
  <h1>Авторизация на сайте</h1>
  <div class="form-group">
    <input name="email" type="email" class="form-control" placeholder="Логин" requared>
  </div>
  <div class="form-group">
    <input name="pass" type="password" class="form-control" placeholder="Пароль" requared>
    <p id="info" style="color:red"></p>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form> 
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
      location.href = "/users";
    else
      info.innerHTML = `Логин или пароль ввдён неверно!`;
  }
</script>