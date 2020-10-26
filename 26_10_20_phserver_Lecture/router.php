<?php
  session_start();
  header("Access-Control-Allow-Origin: *");
  $uri = explode("/",$_SERVER['REQUEST_URI']);
  require_once('php/db.php');
  require_once('php/classes/Page.php');
  if($uri[1] == "addPage"){
    exit(Page::addPage($_POST['html'],$_POST['css'],$_POST['js'],$_POST['name'], $_POST['title']));
  }else if($uri[1]=="getPagesJSON"){
    exit(Page::getPagesJSON());
  }else if($uri[1]=="getPageByIdJSON"){
    exit(Page::getPageByIdJSON($_POST['pageId']));
  }else if($uri[1]=="editPageById"){
    exit(Page::editPageById($_POST['pageId'],$_POST['name'],$_POST['title'],$_POST['html'],$_POST['css'],$_POST['js']));
  }else{
    $page = Page::getPageByName($uri[1]);
    require_once("public/template.php");
  }
  

?>