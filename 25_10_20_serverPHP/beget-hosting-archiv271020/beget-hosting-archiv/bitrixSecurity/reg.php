<div class="jumbotron">
  <form onsubmit="sendForm(this); return false;">
    <h1>Регистрация на сайте</h1>
      <div class="form-group">
      <input name="name" type="text" class="form-control" placeholder="Имя" requared>
    </div>
      <div class="form-group">
      <input name="lastname" type="text" class="form-control"  placeholder="Фамилия" requared>
    </div>
    <div class="form-group">
      <input name="email" type="email" class="form-control" placeholder="E-mail" requared>
      <p id="info" style="color:red;"></p>
    </div>
    <div class="form-group">
      <input name="pass" type="password" class="form-control" placeholder="Пароль" requared>
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрировать</button>
  </form> 
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
      alert("Зарегистрирован");
      //location.href="auth.php";
    }else if(result=="exist"){
      info.innerText = `Такой пользователь уже есть!`;
    }else{
      alert("Неизвестная ошибка");
    }
  }
</script>