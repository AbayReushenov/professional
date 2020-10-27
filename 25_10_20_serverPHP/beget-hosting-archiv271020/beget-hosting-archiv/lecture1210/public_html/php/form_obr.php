<?php
  $tel = $_POST["phone"];
  $msg = $_POST["msg"];
  $isSend = mail("vladlen@vozhzhaev.ru","ТЕМА ПИСЬМА","TEL: $tel \n Massage: $msg");
  if ($isSend){
    echo "success";
  }else{
    echo "error";
  }
?>