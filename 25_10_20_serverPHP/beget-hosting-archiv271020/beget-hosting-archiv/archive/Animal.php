<?php
header('Content-Type: text/html; charset=utf-8');
abstract class Animal{
  private $nickname;
  private $type;
  private $age;
  function __construct($nickname,$type,$age){
    $this->nickname = $nickname;
    $this->type = $type;
    $this->age = $age;
  }
  function getNickname(){return $this->nickname;}
  function getType(){return $this->type;}
  function getAge(){return $this->age;}
}

class Horse extends Animal{
    private $color;
    function __construct($nickname,$type,$age,$color){
        parent::__construct($nickname,$type,$age);
        $this->color = $color;
    }
    function run(){
        echo $this->getNickname().":  Игого, я поскакал(а)" . "<br>";
    }
}

class Pegasus extends Horse{
    private $wings;
    function __construct($nickname,$type,$age,$color,$wings){
        parent::__construct($nickname,$type,$age,$color);
        $this->color = $color;
    }
    function fly(){
        echo $this->getNickname().":  Игого, я полетел(а)" . "<br>" ;
    }
}

$horse = new Horse("Победитель","Лошадь",6, "Серый");
$pegasus = new Pegasus("Сказка","Мифический пегас",100, "Белый", "Сказочные");

$horse->run();
$pegasus->fly();
?>
