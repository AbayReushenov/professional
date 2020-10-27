<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Reushenov Plane</title>
    <style>
      body{
        background:url(https://realtyleadership.com/wp-content/uploads/2018/07/maxresdefault-1.jpg);
        background-size:cover;
      }
      img{
        position:absolute;
        width:150px;
        transform: scaleX(-1);
      }
      #cargo{
        top:150px;
        left:300px;
        width:60px;
      }
    </style>
  </head>
  <body>
    
    <img src="https://pngimg.com/uploads/plane/plane_PNG5235.png" alt="">
    <img src="https://media.lpgenerator.ru/images/117600/bablo_3091AqU.png" hidden id="cargo">
    <script>
      let planeX = 0;
      let planeY = 0;
      let cargoX = 0;
      let cargoY = 150;
      let flag = true;
      let cargo = document.getElementById('cargo');
      let plane = document.querySelector('img');
      function movePlane(){
        plane.style.left = planeX+"px";
        cargo.style.top = cargoY+"px";
        flag?planeX++:planeX--;
        if (window.innerWidth-150<planeX){
          plane.style.transform = "scaleX(1)";
          flag = false;
        }else if(planeX<1){
          plane.style.transform = "scaleX(-1)";
          flag = true;
        }else if (planeX>100 && planeX<200){
          plane.style.transform = `rotate(30deg) scaleX(${flag?-1:1})`;
          plane.style.top = (flag?planeY++:planeY--)+"px";
        }else if (planeX>200 && planeX<300 || planeX<100 || planeX>400){
          plane.style.transform = `rotate(0deg) scaleX(${flag?-1:1})`;
        }else if (planeX>300 && planeX<400){
          plane.style.top = (flag?planeY--:planeY++)+"px";
          plane.style.transform = `rotate(-30deg) scaleX(${flag?-1:1})`;
        }
        if (planeX>300 && cargoY < window.innerHeight-300) {
            cargo.hidden = false;
            cargoY++;
             }           
        } 

    let timerId = setInterval(movePlane,10);

    </script>
  </body>
</html>