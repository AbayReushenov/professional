<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>17_09_2020</title>
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
      let block = document.getElementById("image");
      block.onmousedown = function(event) {
        block.style.top = event.clientY-128+"px";
        block.style.left= event.clientX-128+"px";
        
        function moveAt(event){
            block.style.top = event.clientY-128+"px";
            block.style.left= event.clientX-128+"px";
        }
        
        document.addEventListener("mousemove",moveAt);
        
        document.onmouseup = function(){
          document.removeEventListener("mousemove",moveAt);
        }
        
        block.ondragstart = function(){return false;}
      }
    </script>
  </body>
</html>