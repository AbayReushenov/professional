<?php
$title = "Группа 0994, Реушенов Абай";
$style = ".bg-black-brick{
background: url('img/backphone.jpg');
}
.text-box{
  background: rgba(0,0,0,.5);
  border:2px solid white;
  box-shadow:0 5px 10px white;
}";
require_once("header.php");
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Конец карусели -->
    
    <div class="container text-center py-5">
      <h1 class="mb-3">Это иконки из FontAwesome</h1>
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-university fa-10x"></i>
          <p class="h2">Университет</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-terminal fa-10x"></i>
          <p class="h2">Консоль терминала</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-puzzle-piece fa-10x"></i>
          <p class="h2">Пазл</p>
        </div>
      </div>
    </div>
    
    <div class="container-fluid bg-black-brick py-5">
      <div class="col-sm-5 text-white mx-auto text-box p-3">
        <h3 class="text-center">Lorem ipsum.</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, porro, quis possimus totam illo reiciendis perferendis facilis distinctio vero nihil eos consectetur facere minus nisi dicta non ducimus mollitia laudantium aspernatur a quo nemo cum ut impedit amet tenetur maxime!
        </p>
      </div>
    </div>
    
    <div class="container">
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
    </div>
    
    <hr>
      <!--     яндекс карта -->
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad6bcbc93675fe989888897cd735fb4920112e4bd1a1411afa6f98b1de02080a4&amp;width=100%25&amp;height=547&amp;lang=ru_RU&amp;scroll=true"></script>
      <!-- конец яндекс карты -->
<?php require_once("footer.php") ?>