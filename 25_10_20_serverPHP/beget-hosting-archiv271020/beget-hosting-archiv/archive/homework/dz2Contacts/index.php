<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/750282b7c8.js" crossorigin="anonymous"></script>
    <title>Contacts</title>
  </head>
  <body>
    <!-- Начало навигационной панели -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Веб-программирование 0994</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Конец навигационной панели -->
    
    <div class="container-fluid"></div>
      <h1 class="text-center">Связаться с нами</h1> 
      <div class="row">
        <div class="col-4">
          <i class="fas fa-home fa-2x"></i>
          <h5>Адрес:</h5>
          <p>г. Москва ул. Академика Скрябина д.9 к.2 стр.4</p>
          <i class="fas fa-phone fa-2x"></i>
          <h5>Телефон:</h5>
          <p>+7-495-620-48-29</p>
          <i class="fas fa-calendar fa-2x"></i>
          <h5>Время работы:</h5>
          <p>
            Пн. – Чт.: с 8:30 до 17:15<br>
            Пт.: с 8:30 до 16:00
          </p>
        </div>
        <div class="col-8">
        <form>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Имя">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Фамилия">
          </div>
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Мы с удовольствием ответим на Ваше обращение</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Укажите здесь тему обращения">
          </div>
          <div class="form-group">
            <textarea type="text-area" class="form-control" id="formGroupExampleInput2" placeholder="Место для вашего обращения"></textarea>
          </div>
          
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Телефон">
            </div>
            <div class="col">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Согласие на обработку персональной информации 
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
          
        </div>
      </div>
    </div>  
    
    <hr>
      <!--     яндекс карта -->
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad6bcbc93675fe989888897cd735fb4920112e4bd1a1411afa6f98b1de02080a4&amp;width=100%25&amp;height=547&amp;lang=ru_RU&amp;scroll=true"></script>
      <!-- конец яндекс карты -->


    <footer class="container-fluid text-center text-box">
      <p>&copy; 2020 веб-программирование группа 0994. Реушенов Абай.</p>
    </footer>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>