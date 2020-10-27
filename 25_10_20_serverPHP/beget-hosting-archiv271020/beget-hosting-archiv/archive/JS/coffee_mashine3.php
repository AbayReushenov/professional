<!doctype html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Abay 21-09-20 </title>
  <style>
    @font-face {
      font-family: "PressStart";
      src: url("./fonts/PressStart2P-Regular.ttf");
      font-style: normal;
      font-weight: normal;
    }

    body {
      background: url(../JS/jpg/cofe.jpeg);
      background-size: cover;
      background-repeat: no-repeat;
      color: #fff
    }
      .container.rounded{
        background: rgb(139, 69, 19, .5);
      }
      .coffe-btn-group{
        width:90%;
        height:60px;
        background:#BC8F8F;
        border-radius: 30px 0 0 30px;
        font-size:2em;
        font-weight:600;
        color:Gold;
        font-family: 'Caveat', cursive;
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
      #display{
        width:100%;
        height:150px;
        background:navy;
        color:white;
        border: 5px groove DarkSlateGrey;
        font-family: "PressStart";
        font-size:0.8em;
      }
      #change_box{
        position:relative;
        width:95%;
        height:200px;
        border:4px solid #A52A2A	;
        background:#DB7093;
      }
      img[src$='rub.png']{
        width:60px;
        cursor:pointer;
        position:absolute;
        top:0;
        left:0;
      }
      img[src$='rub.png']:hover{
        filter: contrast(150%);
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
          <div class="row my-5">
            <div class="col-sm-6">
              <div id="display" class="p-3 text-center">
                <p id="displayInfo">Внесите деньги и закажите напиток</p>
                <p id="balance"></p>
              </div>
              <button type="button" class="btn btn-warning my-3" onclick="getChange(money.value)">Выдать сдачу</button>
            </div>
            <div class="col-sm-6 text-center">
              <input type="hidden" id="money">
              <img src="./jpg/bill_acc.png" id="bill_acc" alt="">
              <div id="change_box" class="mx-auto my-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <img src="./jpg/50rub.jpg" alt="" data-denomination="50">
      <img src="./jpg/100rub.jpg" alt="" data-denomination="100">
      <img src="./jpg/500rub.jpg" alt="" data-denomination="500">
    </div>
    <script>
      let money = document.getElementById("money");
      let display = document.getElementById("display");
      let bills = document.querySelectorAll("img[src$='rub.jpg']");
      let bill_acc = document.getElementById("bill_acc");
      let displayInfo = document.getElementById("displayInfo");
      let balance = document.getElementById("balance");
      let change_box = document.getElementById("change_box");
      for(let i=0; i<bills.length; i++){
        bills[i].onmousedown = function(event){
          let bill = bills[i];
          bill.style.position = "absolute";
          bill.style.zIndex=1;
          bill.style.transform = "rotate(90deg)";
          moveAt(event)
          
          function moveAt(e){
            bill.style.left = (e.clientX - bill.width/2) + "px";
            bill.style.top = (e.clientY - bill.height/2) + "px";
          }
          
          document.addEventListener("mousemove",moveAt);
          
          document.onmouseup = function(){
            document.removeEventListener("mousemove",moveAt);
            bill.style.zIndex=0;
            
            let bill_top = bill.getBoundingClientRect().top;
            let bill_right=bill.getBoundingClientRect().right;
            let bill_left= bill.getBoundingClientRect().left;
            
            let bill_acc_top = bill_acc.getBoundingClientRect().top;
            let bill_acc_right=bill_acc.getBoundingClientRect().right;
            let bill_acc_left= bill_acc.getBoundingClientRect().left;
            let bill_acc_bottom=bill_acc.getBoundingClientRect().bottom - (bill_acc.height/3)*2;
            
            if (bill_top>bill_acc_top && bill_right<bill_acc_right && bill_left>bill_acc_left && bill_top<bill_acc_bottom){
              bill.hidden = true;
              money.value = +money.value + +bill.dataset.denomination;
              balance.innerText = "Ваш баланс: "+money.value+"руб.";
            }
          }
          
          bill.ondragstart = function(){return false;}
        }
      }
      
      
      function getCoffee(coffeeName,cost){
        if (money.value >= cost){
          money.value -= cost;
          balance.innerText = "Ваш баланс: "+money.value+"руб.";
          displayInfo.innerText = `Кофе ${coffeeName} готов!`;
        }
        else
          displayInfo.innerText = "Нет денег - нет кофе!";
      }
      
function getChange(num){
        money.value = 0;
        balance.innerText = "Ваш баланс: "+0+"руб.";
        let coin = 0;
        let top = getRandom(0, change_box.offsetHeight-64);
        let left= getRandom(0, change_box.offsetWidth-64);
        if (num>=10) coin = 10;
        else if(num>=5) coin=5;
        else if(num>=2) coin=2;
        else if(num>=1) coin=1;
        
        if (coin>0){
          change_box.innerHTML += `<img src="./jpg/${coin}rub.png" style="top:${top}px; left:${left}px;">`;
          getChange(num-coin);
        }
      }

      function getRandom(min,max){
        return Math.random()*(max-min)+min;
      }
    </script>
</body>

</html>