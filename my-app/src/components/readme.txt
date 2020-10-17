 fetch("http://hostingaba.beget.tech/getUserSpesialCode", {mode:'no-cors'})
or
 fetch("http://hostingaba.beget.tech/getUserSpesialCode")
+ in "router.php":
  -> header("Access-Control-Allow-Origin: *");

  -> else if($uri[1] == "getUserSpesialCode"){
         exit("Special user default");




Преобразование функционального компонента в классовый

Создаём ES6-класс с таким же именем, указываем React.Component в качестве родительского класса
Добавим в класс пустой метод render()
Перенесём тело функции в метод render()
Заменим props на this.props в теле render()
Удалим оставшееся пустое объявление функции


17/10/2020
Добавляем в router.php

$_SESSION['id'] = 12; //временное условие

<?php
  session_start();
  header("Access-Control-Allow-Origin: *");
  $uri = explode("/",$_SERVER['REQUEST_URI']);
  require_once("php/db.php");
  require_once("php/classes/User.php");
  $_SESSION['id'] = 12; //временное условие
  if ($uri[1] == "reg"){
     $content = file_get_contents("reg.php");
  }else if($uri[1]=="auth"){
    $content = file_get_contents("auth.php");
  }else if($uri[1]=='users'){
    $user = User::getUser($_SESSION["id"]);
    $content = file_get_contents("lk/lk.php");
  }else if($uri[1] == "addUser"){
    exit(User::addUser($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['pass']));
  }else if($uri[1] == "authUser"){
    exit(User::authUser($_POST['email'],$_POST['pass']));
  }else if($uri[1]=="getUser"){
    exit(User::getUser($_SESSION['id']));
  }else if($uri[1]=="getUsers"){
    exit(User::getUsers());
  }else if($uri[1] == "changeUserData"){
    exit(User::changeUserData($_SESSION['id'], $_POST['item'], $_POST['value']));
  }else if($uri[1] == "getUserSpesialCode"){
    exit("Special user default");
  }else{
    $content = "Page not found";
  }


  require_once("template.php");
?>


при наборе http://hostingaba.beget.tech/getUser
на экране :
{"id":12,"name":"Ingairasd","lastname":"Huakjhde","email":"12345@mail.com","pass":"$2y$10$tF\/vGjg4E7aQwWr1gL1qf.sReTDow974yO5JtYgwPCZVb3x9ywxWu"}
Отработаем запрос в React -> Profile.jsx
//---------------------------------------------------
    componentDidMount() {
        fetch("http://hostingaba.beget.tech/getUser")
            .then(response=>response.json())
            .then(user=>{
                this.setState({
                    userName: user.name + ' ' + user.lastname
                })
            });
    }
//---------------------------------------------------

Users.jxs

added:
    componentDidMount(){
            fetch("http://hostingaba.beget.tech/getUsers")
                .then(response=>response.json())
                .then(users=> console.log(users)
                    /*{
                    this.setState({
                        userName: users.name + ' ' + users.lastname
                    }*/)
                }

router.php:
there are: =>   }else if($uri[1]=="getUsers"){
                  exit(User::getUsers());
Users.php: =>      static function getUsers(){
                     global $mysqli;
                     $result = $mysqli->query("SELECT `name`, `lastname`, `email`, `id` FROM `users` WHERE 1");
                     $data = $result->fetch_all( MYSQLI_ASSOC );
                     return json_encode( $data );

                   }
 console.log =>
                0: {name: "Ingairasd", lastname: "Huakjhde", email: "12345@mail.com", id: "12"}
                1: {name: "John", lastname: "Doll", email: "doll@net.net", id: "26"}
                2: {name: "Nadekza", lastname: "Noalqo67", email: "nodcrator@aol.com", id: "27"}
                3: {name: "Super", lastname: "Hero", email: "hero@iciom.us", id: "28"}
                4: {name: "Иван", lastname: "Иванов", email: "ivanov@mail.com", id: "29"}
                5: {name: "John", lastname: "Ivanov", email: "ivanov99@mail.com", id: "30"}
                6: {name: "12345", lastname: "67890", email: "321@mail.com", id: "31"}
                7: {name: "Faust", lastname: "Got", email: "number@one.net", id: "33"}
                length: 8


//--------------------Вообщем то  работает и  без вывода в отдельную кампоненту -----
    componentDidMount() {
        fetch("http://hostingaba.beget.tech/getUsers")
            .then(response => response.json())
            .then(users => {
                let rowsOfTable;
                rowsOfTable = users.map((user, index) => {
                    return  <tr>
                                <th scope="row">{index + 1}</th>
                                <td>{user.name} {user.lastname}</td>
                                <td>{user.email}</td>
                                <th scope="row">{user.id}</th>
                            </tr>
                })
                this.setState({
                    users: rowsOfTable
                })
            })

    }
//----------------------------------------
