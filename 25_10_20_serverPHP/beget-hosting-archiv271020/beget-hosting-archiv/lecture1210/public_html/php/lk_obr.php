<?php
  session_start();
  $mysqli = new mysqli("localhost", "vladle43_edu0994", "Jp72ZFz%", "vladle43_edu0994");
  $value = $_POST['value'];
  $item  = $_POST['item']; // здесь лежит либо name либо lastname
  $userId = $_SESSION['id'];
  $mysqli->query("UPDATE `users` SET `$item`='$value' WHERE `id`='$userId'");
  $_SESSION[$item] = $value;
?>