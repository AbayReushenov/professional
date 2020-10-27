<?php
header('Content-Type: text/html; charset=utf-8');
class Cat {
    public $age;
    public $weight;
    public $strength;

    function __construct() {
    }
    
    function fight($anotherCat) {
      
      if (!function_exists("criteriy")) {
            function criteriy($x1, $x2){
               if ($x1 >= $x2) {
               return 1;
               }
            }
      }
      
      $win = criteriy($this->age,$anotherCat->age) +
              criteriy($this->weight,$anotherCat->weight) +
              criteriy($this->strength,$anotherCat->strength);

      if ($win >= 2 ) { 
          return " Our cat win ! " ;
      } else {
          return " Our cat lose.";
      }
      
      
    }
}

$cat = new Cat();
$cat->age = 3;
$cat->weight = 5;
$cat->strength = 7;

$another = new Cat();
$another->age = 5;
$another->weight = 5;
$another->strength = 9;

echo $cat->fight($another);
echo '<br>';
echo $another->fight($cat);

?>