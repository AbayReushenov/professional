<?php
header('Content-Type: text/html; charset=utf-8');
$customs = array(
    'Иванов'=>'18 april 1958',
    'Петров'=>'14 may 1977',
    'Сазонов'=>'11 june 1989',
    'Мишкин'=>'14 july 1977',
    'Пушкин'=>'28 january 1987',
    'Некрасов'=>'1 february 1945',
    'Федоров'=>'2 december 1970',
    'Ложкин'=>'8 july 1988',
    'Краснов'=>'1 august 1995',
    'Аверьянов'=>'2 june 1980',);

foreach($customs as $key2 => $value2 ) {
    print $key2 . " " . $value2 . " <br>";
}

$summer = ['june','july','august'];


foreach($summer as $value){
  foreach($customs as $key2 => $value2 ) {
    $position = strripos($value2, $value);
    if ($position == true) {
      unset($customs[$key2]);
    }
  }
}

echo "<br><br>";

foreach($customs as $key2 => $value2 ) {
    print $key2 . " " . $value2 . " <br>";
}
?>
