<?php
  session_start();
  header('Content-type: text/html; charset=utf-8');
  $mysqli = new mysqli("localhost", "hostingaba_1", "345Wa110", "hostingaba_1");
  $email = mb_strtolower(trim($_POST['email']));
  $pass = trim($_POST['pass']);
  $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
  $row = $result->fetch_assoc();
  if (password_verify($pass,$row['pass'])){
    $_SESSION["name"] = $row["name"];
    $_SESSION["lastname"] = $row["lastname"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["id"] = $row["id"];
    echo "success";
  }else{
    echo "error";
  }
?>