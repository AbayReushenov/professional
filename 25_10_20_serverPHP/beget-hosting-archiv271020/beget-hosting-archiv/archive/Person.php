<?
/* В нашей вселенной, здоровье не может быть более 100ед. */
header('Content-Type: text/html; charset=utf-8');
class Person{
  private $name;
  private $lastname;
  private $age;
  private $mother;
  private $father;
  function __construct($name,$lastname,$age,$mother=null,$father=null){
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }
	public function getName(){return $this->name;}
	public function getLastname(){return $this->lastname;}
	public function getAge(){return $this->age;}
	public function getMother(){return $this->mother;}
	public function getFather(){return $this->father;}
	public function getInfo(){
	  return "
	    Меня зовут: ".$this->name." ".$this->lastname."<br>
	    Мою маму зовут: ".$this->mother->name." ".$this->mother->lastname."<br>
	    Моего папу зовут: ".$this->getFather()->getName()." ".$this->getFather()->getLastname()."<br>
	    Моего дедушку со стороны папы зовут: ".$this->getFather()->getFather()->getName()." ".$this->getFather()->getFather()->getLastname()."<br>
	    Моего дедушку со стороны мамы зовут: ".$this->getMother()->getFather()->getName()." ".$this->getMother()->getFather()->getLastname()."<br>
	    Мою бабушку со стороны папы зовут: ".$this->getFather()->getMother()->getName()." ".$this->getFather()->getMother()->getLastname()."<br>
	    Мою бабушку со стороны мамы зовут: ".$this->getMother()->getMother()->getName()." ".$this->getMother()->getMother()->getLastname();
	}
}
/* Тут создать 2 бубшки и 2 дедушки  */
$egor = new Person("Егор","Петров",76);
$elena = new Person("Елена","Петрова",73);
$margarita = new Person("Маргарита","Лаврова",77);
$grigoriy = new Person("Григорий","Лавров",74);
$oleg = new Person("Олег","Петров",41, $elena, $egor);
$olga = new Person("Ольга","Петрова",41, $margarita, $grigoriy);
$igor = new Person("Игорь","Петров",12,$olga,$oleg);

echo $igor->getInfo();
?>