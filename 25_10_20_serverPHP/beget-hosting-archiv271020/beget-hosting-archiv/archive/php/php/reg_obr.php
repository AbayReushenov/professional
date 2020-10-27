<?php
  header('Content-type: text/html; charset=utf-8');
  $mysqli = mysqli_connect("localhost", "hostingaba_1", "345Wa110", "hostingaba_1");
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $email = mb_strtolower(trim($_POST['email']));
  $pass = trim($_POST['pass']);
  $pass = password_hash($pass, PASSWORD_DEFAULT);
  $result = $mysqli->query("SELECT * FROM 'users' WHERE 'email'='$email'");
  if ($result->num_rows){
    echo "exist";
  }else{
    $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
  echo "success";
  }
?>