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
	    Меня зовут: ".$this->name."<br>
	    Мою маму зовут: ".$this->mother->name."<br>
	    Моего папу зовут: ".$this->getFather()->getName();
	}
}
/* Тут создать 2 бубшки и 2 дедушки  */
$oleg = new Person("Олег","Петров",41);
$olga = new Person("Ольга","Петрова",41);
$igor = new Person("Игорь","Петров",12,null,$oleg);
echo $igor->getInfo();
?>