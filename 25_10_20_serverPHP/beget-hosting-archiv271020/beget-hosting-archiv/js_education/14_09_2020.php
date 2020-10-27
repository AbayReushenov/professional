<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>14_09_2020</title>
    <style>
      div{
        margin:10px;
      }
    </style>
  </head>
  <body>
    <div>
      <input type="text" id="num1">
    </div>
    <div>
      <input type="text" id="num2">
    </div>
    <button onclick="calc('+')">+</button>
    <button onclick="calc('-')">-</button>
    <button onclick="calc('/')">/</button>
    <button onclick="calc('*')">*</button>
    
    
    <script>
    let num1 = document.getElementById('num1');
    let num2 = document.getElementById('num2');
    
    function calc(operator){
      let a = +num1.value;
      let b = +num2.value;
      if(operator == "+")
        result = a + b;
      else if(operator == "-")
        result = a - b;
      else if(operator == "/")
        result = a / b;
      else if(operator == "*")
        result = a * b;
      
      
      console.log(result);
    }
    
    /*// Ищем максимальный нечетный элемент
      let arr = [48,-5001,6,-9001,-23001,56,4,8];
      let max = -Infinity;
      for (let i=0; i<arr.length; i++){
        if (max<arr[i]  &&  arr[i]%2 != 0){
          max = arr[i];
        }
      }
      
      console.log(max);*/
    
    
    
      /*let scores = [4,5,3,3,4,5];
      let sum = 0;
      for(let i=0; i<scores.length; i++){
        sum = sum + scores[i];
      }
      console.log(sum/scores.length);*/
    </script>
  </body>
</html>