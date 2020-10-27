<?php
header('Content-Type: text/html; charset=utf-8');

/*<!--// Логика выполнения верных действий на
// основании метода запроса-->*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    process_form();
} else {
    show_form();
}
// сделать что-нибудь, когда форма передана на обработку
function process_form() {
print "Hello, ". $_POST['my_name'];
}
// отобразить форму
function show_form() {
print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="my_name">
<br />
<input type="submit" value="Say Hello">
</form>
_HTML_;
}
?>