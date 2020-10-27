
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Abay 17_09_2020</title>
    <style>
      #block{
        width:150px;
        height:150px;
        border:2px solid black;
        background:green;
        position:absolute;
      }
      img{
        position:absolute;
      }
    </style>
  </head>
  <body>
    <img src="https://pngicon.ru/file/uploads/vinni-pukh-v-png-256x256.png" id="image" alt="">
    <script>
      let money = document.getElementById("money");
      let display = document.getElementById("display");
      let bills = document.querySelectorAll("img[src$='rub.jpg']");
      for(let i=0; i<bills.length; i++){
        bills[i].
      }
      
      
      function getCoffee(coffeeName,cost){
        if (money.value >= cost)
          display.innerText = "Кофе "+coffeeName+" готов!";
        else
          display.innerText = "Нет денег - нет кофе!";
      }
      
      function getChange(num){
        let coin = 0;
        if (num>=10) coin = 10;
        else if(num>=5) coin=5;
        else if(num>=2) coin=2;
        else if(num>=1) coin=1;
        
        if (coin>0){
          console.log(coin);
          getChange(num-coin);
        }
      }
    </script>
  </body>
</html>