<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Drop box and change color</title>
    <style>
        div {
            position: absolute;
            width: 100px;
            height: 100px;
            border: 2px solid black;
        }

        #red {
            background: red;
        }

        #green {
            top: 150px;
            background: green;
        }

        #blue {
            top: 300px;
            background: blue;
        }

        #yellow {
            top: 450px;
            background: yellow;

        }

        #noname {
            left: 500px;
            width: 400px;
            height: 400px;
            background: rgba(177, 170, 138, 0.7);
        }
    </style>
</head>

<body>
    <div id="red" class="dropme"></div>
    <div id="green" class="dropme"></div>
    <div id="blue" class="dropme"></div>
    <div id="yellow" class="dropme"></div>
    <div id="noname"></div>
    <script>
        let noname = document.getElementById("noname");
        let box = document.querySelectorAll(".dropme");

        for (let i = 0; i < box.length; i++) {
            box[i].onmousedown = function (event) {
                box[i].style.top = event.clientY - 50 + "px";
                box[i].style.left = event.clientX - 50 + "px";

                function moveAt(event) {
                    box[i].style.top = event.clientY - 50 + "px";
                    box[i].style.left = event.clientX - 50 + "px";
                }

                document.addEventListener("mousemove", moveAt);

                document.onmouseup = function () {
                    let x = window.getComputedStyle(box[i]).left;
                    let xx = Number(x.replace("px", ""));
                    let y = window.getComputedStyle(box[i]).top;
                    let yy = Number(y.replace("px", ""))
                    console.log(xx, yy);
                    if (xx >= 500 && xx <= 800 && yy >= 0 && yy <= 300) {
                        noname.style.background = getComputedStyle(box[i]).backgroundColor;
                    }
                    document.removeEventListener("mousemove", moveAt);
                }

                box[i].ondragstart = function () {
                    return false;
                }
            }
        }
    </script>

</body>

</html>