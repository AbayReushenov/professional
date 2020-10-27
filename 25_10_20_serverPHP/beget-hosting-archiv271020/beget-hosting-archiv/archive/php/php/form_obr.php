<?php
$tel = $_POST["phone"];
$msg = $_POST["msg"];
$isSend = mail("webdevelop301020@gmail.com", "Тема письма", "Телефон = $tel \n Message: $msg");
if ($isSend) {
  echo "success";
}else{
  echo "error";
}
?>