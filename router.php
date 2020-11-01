<?php
  session_start();
  header("Access-Control-Allow-Origin: *");
  $uri = explode("/",$_SERVER['REQUEST_URI']);
  require_once('php/db.php');
  require_once('php/classes/Page.php');
  require_once('php/classes/User.php');
  
  $specialRequests = array(
    "admin"=>array(
      "addPage"=>function(){return Page::addPage($_POST['html'],$_POST['css'],$_POST['js'],$_POST['name'], $_POST['title'],$_POST['branch']);},
      "getPagesJSON"=>function(){return Page::getPagesJSON();},
      "getPageByIdJSON"=>function(){return Page::getPageByIdJSON($_POST['pageId']);},
      "editPageById"=>function(){return Page::editPageById($_POST['pageId'],$_POST['name'],$_POST['title'],$_POST['html'],$_POST['css'],$_POST['js']);},
      "getBranchesJSON"=>function(){return Page::getBranchesJSON();},
      "addBranch"=>function(){return Page::addBranch($_POST['name'],$_POST['name_rus']);},
      ),
    "guest"=>array(
      "getPagesbyBranchIdJSON"=>function(){return Page::getPagesbyBranchIdJSON($_POST['branchId']);},
      "authUser"=>function(){return User::authUser($_POST['login'],$_POST['pass']);})
    );
  
  foreach($specialRequests["admin"] as $key => $handle){
    if($uri[1]==$key and $_SESSION['user_group']==1){
      exit($handle());
    }
  }
  foreach($specialRequests["guest"] as $key => $handle){
    if($uri[1]==$key){
      exit($handle());
    }
  }

  if($uri[1]==""){
    require_once("public/index.html");
  }else if($uri[1]=="cms" and $_SESSION['user_group']==1){
    require_once("my-cms/index.html");
  }else if($uri[1]=="auth"){
    require_once("public/auth.php");
  }
  else{
    $page = Page::getPageByName($uri);
    require_once("public/template.php");
  }
  
?>