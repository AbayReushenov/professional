<?php
//Пример 7.9
// Логика выполнения верных действий на
// основании метода запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Если функция validate_form() возвратит ошибки,
// передать их функции show_form()
if($form_errors = validate_form()) {
show_form($form_errors);
} else {
process_form();
}
} else {
show_form();
}
// сделать что-нибудь, когда форма передана на обработку
function process_form() {
print "Your e-mail is ". $_POST['email'];
}
// отобразить форму
function show_form($errors = '') {
// Если переданы ошибки, вывести их на экран
if ($errors) {
print 'Please correct these errors: <ul><li>';
print implode ('</li><li>', $errors);
print ' </li></ul>';
}
print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your e-mail : <input type="text" name="email">
<br/>
<input type="submit" value="Hello, enter your e-mail:">
</form>
_HTML_;
}
// проверить данные из формы
function validate_form() {
// начать с пустого массива сообщений об ошибках
$errors = array();
// добавить сообщение об ошибке, если введено слишком
// короткое имя
if (strlen($_POST['email']) == 0) {
$errors[] = "You must enter an email address.";
}
// возвратить (возможно, пустой) массив сообщений об ошибках
return $errors;
}

?>