<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>abay 14-09-2020</title>
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
      if(operator == "+"){
        result = a + b;
      }else if(operator == "-"){
        result = a - b;
      }else if(operator == "/"){
        result = a / b;
      }else if(operator == "*"){
        result = a * b;
      }
      
      console.log(result);
    }
    

   /*   function f(x){
        return x**2;
      }
    
      function g(x){
        x = x**2;
      }
    
      console.log(f(5)); // 25
      console.log(g(5)); // undefined*/
    
    
    
    
/* let cars = ["BMW","AUDI","KIA","VAZ","ZAZ"];

for (let i=0; i<4; i++){
  console.log(cars[i]);
}


let scores = [4,5,3,3,4,5];
let sum = 0;
for(let i=0; i<scores.length; i++){
  sum = sum + scores[i];
}
console.log(sum/scores.length); */
/*
      let arr = [4,5,6,9,23,56,4,8];
      let max = arr[4];
      for (let i=1; i<arr.length; i++){
        if (max<arr[i]){
          max = arr[i];
        }
      }
      
      console.log(max);   */
     // Ищем максимальный нечетный элемент
    // Ищем максимальный нечетный элемент
/*     let arr = [48,-5001,6,-9001,-23001,56,4,8];
let max = -Infinity;
for (let i=0; i<arr.length; i++){
  if (max<arr[i]  &&  arr[i]%2 != 0){
    max = arr[i];
  }
}

console.log(max); */
    </script>
  </body>
</html>