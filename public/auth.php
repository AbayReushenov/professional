<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <title>Авторизация</title>
  </head>
  <body>
    <div class="container my-5">
      <div class="col-5 mx-auto my-5">
        <form onsubmit="sendForm(this); return false;">
          <div class="mb-2">
            <input type="text" name="login" class="form-control" placeholder="login">
          </div>
          <div class="mb-2">
            <input type="password" name="pass" class="form-control" placeholder="pass">
          </div>
          <div class="mb-2">
            <input type="submit" class="form-control btn btn-primary">
          </div>
        </form>
      </div>
    </div>
    
    <script>
      function sendForm(form){
        let formData = new FormData(form);
        fetch("authUser",{
          method: "POST",
          body: formData
        }).then(response=>response.json())
          .then(result=>{
            if(result.response == "ok"){
              location.href = "cms";
            }else{
              alert("Логин или пароль неверные");
            }
          })
      }
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

  </body>
</html>