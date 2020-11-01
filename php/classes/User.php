<?php

class User{
  static function authUser($login, $pass){
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param('s',$login);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $row = $result->fetch_assoc();
    if($pass == $row['pass']){
      $_SESSION['id']=$row['id'];
      $_SESSION['user_group'] = $row['user_group'];
      return json_encode(["response"=>"ok"]);
    }
  }
}
?>