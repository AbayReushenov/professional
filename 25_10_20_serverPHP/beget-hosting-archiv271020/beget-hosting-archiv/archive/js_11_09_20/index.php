
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>11_09_2020</title>
  </head>
  <body>
    <script>
      let login = prompt("Введите логин: ");
      let pass = prompt("Введите пароль: ");
      
      if (login == "admin" && pass == "123"){
        console.log("Успешная авторизация Администратора!");
      }else if (login=="user" && pass=="321"){
         console.log("Успешная авторизация Пользователя!");
      }else{
        console.log("Вы ошиблись!");
      }
    
    
    
     /* let arg1 = +prompt("Первое число: ");  //2
      let arg2 = +prompt("Второе число: ");  //3
      
      console.log(arg1/arg2);
      console.log("Умножение: "+arg1*arg2);*/
      
      /*document.write("Hello world");
      alert("Hello world");
      console.log("Hello world");*/
       
      
    </script>
  </body>
</html>