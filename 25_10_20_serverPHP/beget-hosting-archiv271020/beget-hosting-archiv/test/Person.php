<?php
header('Content-Type: text/html; charset=utf-8');
class Person{
  private $name;
  private $age;
  private $weight;
  private $money;
  function __construct($name,$age,$weight,$money){
    $this->name = $name;
    $this->age = $age;
    $this->weight = $weight;
    $this->money = $money;
  }
	public function getName(){return $this->name;}
	public function getAge(){return $this->age;}
	public function getWeight(){return $this->weight;}
	public function getMoney(){return $this->money;}
	public function getInfo(){
	  return "
	    Имя: ".$this->getName()." <br>
	    Возраст: ".$this->getAge()." <br>
	    Вес: ".$this->getWeight()."<br>
	    Денежные средства: ".$this->getMoney();
	}
}

$person = new Person("Иван",45,76,500000);
echo $person->getInfo();
?>