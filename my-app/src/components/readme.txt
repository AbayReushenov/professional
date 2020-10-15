 fetch("http://hostingaba.beget.tech/getUserSpesialCode", {mode:'no-cors'})
or
 fetch("http://hostingaba.beget.tech/getUserSpesialCode")
+ in "router.php":
  -> header("Access-Control-Allow-Origin: *");

  -> else if($uri[1] == "getUserSpesialCode"){
         exit("Special user default");




Преобразование функционального компонента в классовый

Создаём ES6-класс с таким же именем, указываем React.Component в качестве родительского класса
Добавим в класс пустой метод render()
Перенесём тело функции в метод render()
Заменим props на this.props в теле render()
Удалим оставшееся пустое объявление функции
