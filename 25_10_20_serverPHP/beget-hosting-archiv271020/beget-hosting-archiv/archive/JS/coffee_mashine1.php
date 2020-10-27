<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Reushenov Кофемашина</title>
    <style>
        body {
            background: url(./jpg/cofe.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff
        }

        .container{
        background: rgb(139, 69, 19, .5);
      }
      .coffe-btn-group{
        width:90%;
        height:60px;
        background:#BC8F8F;
        border-radius: 30px 0 0 30px;
        font-size:2em;
        font-weight:600;
        color:white;
      }
      .coffee-btn{
        width:60px;
        height:60px;
        background:Brown;
        cursor:pointer;
        border:2px solid #AF5A5A;
        box-shadow: 1px 1px 5px black;
      }
      .coffee-btn:hover{
        background:#800000;
      }
      .coffee-btn:active{
        background:red;
        box-shadow: inset 0 0 10px black;
      }
    </style>
  </head>
  <body>
    <div class="container my-5 rounded">
      <div class="row">
        <div class="col-sm-6">
          <div class="row coffe-btn-group mt-5 mb-3 mx-2">
            <div class="rounded-circle coffee-btn mr-3" onclick="getCoffee('Латте',42)"></div><span>Латте - 42</span>
          </div>
          <div class="row coffe-btn-group my-3 mx-2">
            <div class="rounded-circle coffee-btn mr-3" onclick="getCoffee('Американо',47)"></div><span>Американо - 47</span>
          </div>
          <div class="row coffe-btn-group my-3 mx-2">
            <div class="rounded-circle coffee-btn mr-3" onclick="getCoffee('Эспрессо',61)"></div><span>Эспрессо - 61</span>
          </div>
          <div class="row coffe-btn-group my-3 mx-2">
            <div class="rounded-circle coffee-btn mr-3" onclick="getCoffee('Капучино',58)"></div><span>Капучино - 58</span>
          </div>
          <div class="row coffe-btn-group mt-3 mb-5 mx-2">
            <div class="rounded-circle coffee-btn mr-3" onclick="getCoffee('Лунго',44)"></div><span>Лунго - 44</span>
          </div>
        </div>
        <div class="col-sm-6">
          <input type="text" id="money">
        </div>
      </div>
    </div>

    <script>
        let money = document.getElementById("money");

        function getCoffee(coffeeName, cost) {
            if (money.value >= cost)
                console.log("Кофе " + coffeeName + " готов!");
            else
                console.log("Нет денег - нет кофе!")
        }

        function getChangeCicle(coin) {
            while (coin >= 1) {
                if (coin >= 10) {
                    console.log(10);
                    coin = coin - 10;
                    continue;
                } else if (coin >= 5) {
                    console.log(5);
                    coin = coin - 5;
                    continue;
                } else if (coin >= 2) {
                    console.log(2);
                    coin = coin - 2;
                    continue;
                } else {
                    console.log(1);
                    coin--;
                    continue;
                }
            }
        }
        getChangeCicle(68)

        function getChange(num) {
            let coin = 0;
            if (num >= 10) coin = 10;
            else if (num >= 5) coin = 5;
            else if (num >= 2) coin = 2;
            else if (num >= 1) coin = 1;

            if (coin > 0) {
                console.log(coin);
                getChange(num - coin);
            }
        }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>