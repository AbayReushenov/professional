<meta charset="UTF-8">
<?php
if (isset($_POST['arg_1']) && isset($_POST['arg_2'])) {
    foo($_POST['arg_1'],$_POST['arg_2']);
}

function foo($arg_1, $arg_2)
{
    if ($arg_1 && $arg_2 ) {
        $num = $arg_1 + $arg_2;
    print $num;
    }else {
        print <<<_HTML_
        let arg_1, arg2;
        <form method="post" action="$_SERVER[PHP_SELF]">
        Введите первое число: <input type="number" name="arg_1" />
        Введите второе число: <input type="number" name="arg_2" />
        <br>
        <button type="submit">Отправить данные</button>
        </form>
        _HTML_;
    }
};

?>