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
    $userId = $_POST['userId']=="undefined"?$_SESSION['id']:$_POST['userId'];
    exit(User::getUser($userId));
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