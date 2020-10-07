<?php
  session_start();
  $mysqli = new mysqli("localhost", "hostingaba_1", "345Wa110", "hostingaba_1");
  $value = $_POST['value'];
  $item = $_POST['item']; 
  $userId =$_SESSION['id'];
  $mysqli->query("UPDATE `users` SET `$item`='$value' WHERE `id`='$userId'");
  $_SESSION[$item] = $value;
?>