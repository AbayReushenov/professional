<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dz3 css position Reushenov</title>
    <style>
        .red {
            position: absolute;
            top: 200px;
            left: 200px;
            width: 100px;
            height: 100px;
            border: 2px solid red;
        }

        .blue {
            position: relative;
            left: 150px;
            width: 100px;
            height: 100px;
            border: 2px solid blue;
        }

        .green {
            position: relative;
            left: 150px;
            right: 0px;
            width: 100px;
            height: 100px;
            border: 2px solid green;
        }

        .red2 {
            position: absolute;
            top: 400px;
            left: 0px;
            width: 100px;
            height: 100px;
            border: 2px solid red;
        }

        .blue2 {
            position: relative;
            top: 150px;
            left: 150px;
            width: 100px;
            height: 100px;
            border: 2px solid blue;
        }

        .green2 {
            position: relative;
            top: 150px;
            left: 150px;
            width: 100px;
            height: 100px;
            border: 2px solid green;
        }

        .green3 {
            position: relative;
            top: 900px;
            left: 0px;
            width: 600px;
            height: 400px;
            border: 2px solid green;
        }

        .red3 {
            position: relative;
            top: 100px;
            left: 100px;
            width: 100px;
            height: 100px;
            border: 2px solid red;
        }

        .dot1 {
            position: relative;
            top: 1200px;
            height: 400px;
            width: 400px;
            background-color: rgb(89, 223, 115);
            border-radius: 50%;
            display: inline-block;
        }

        .dot2 {
            position: relative;
            top: 75px;
            left: 75px;
            height: 75px;
            width: 75px;
            background-color: white;
            border-radius: 50%;
            display: inline-block;
        }

        .dot3 {
            position: relative;
            top: 75px;
            left: 175px;
            height: 75px;
            width: 75px;
            background-color: white;
            border-radius: 50%;
            display: inline-block;
        }

        .dot4 {
            position: relative;
            top: 110px;
            left: 10px;
            height: 60px;
            width: 60px;
            background-color: white;
            display: inline-block;
        }

        .dot5 {
            position: relative;
            top: 100px;
            right: 45px;
            height: 15px;
            width: 150px;
            background-color: white;
            display: inline-block;
        }

        .green31 {
            position: relative;
            top: 1400px;
            left: 0px;
            width: 600px;
            height: 400px;
            background-color: rgb(89, 223, 115);
            display: inline-block;
        }

        .red31 {
            position: relative;
            top: 50px;
            left: 50px;
            width: 100px;
            height: 100px;
            background-color: white;
            display: inline-block;
        }

        .red32 {
            position: relative;
            top: 250px;
            left: 350px;
            width: 100px;
            height: 100px;
            background-color: white;
            display: inline-block;
        }

        .red4 {
            position: absolute;
            top: 900px;
            left: 0px;
            width: 100px;
            height: 100px;
            border: 2px solid red;
        }

        .blue4 {
            position: relative;
            top: 60px;
            left: 60px;
            width: 100px;
            height: 100px;
            border: 2px solid blue;
        }

        .green4 {
            position: relative;
            top: 60px;
            left: 60px;
            width: 100px;
            height: 100px;
            border: 2px solid green;
        }

        .red5 {
            position: absolute;
            top: 2300px;
            left: 0px;
            width: 100px;
            height: 100px;
            background-color: rgb(250, 160, 160);
            display: inline-block;
        }

        .blue5 {
            position: relative;
            top: 60px;
            left: 60px;
            width: 100px;
            height: 100px;
            background-color: rgb(52, 145, 196);
            display: inline-block;
        }

        .green5 {
            position: relative;
            top: 60px;
            left: 60px;
            width: 100px;
            height: 100px;
            background-color: rgb(71, 220, 143);
            display: inline-block;
        }

        .blank {
            position: absolute;
            top: 2800px;
            width: 1px;
            height: 1px;
        }
    </style>
</head>

<body>
    <div class="red">
        <div class="blue">
            <div class="green"></div>
        </div>
        <div class="red2">
            <div class="blue2">
                <div class="green2"></div>
            </div>
        </div>
        <div class="green3">
            <div class="red3"></div>
        </div>
        <div class="dot1">
            <div class="dot2"></div>
            <div class="dot3"></div>
            <div class="dot4">
                <div class="dot5"></div>
            </div>
            <div class="red4">
                <div class="blue4">
                    <div class="green4"></div>
                </div>
            </div>
            <div class="green31">
                <div class="red31"></div>
                <div class="red32"></div>
            </div>
            <div class="red5">
                <div class="blue5">
                    <div class="green5"></div>
                </div>
            </div>
            <div class="blank"></div>
        </div>
    </div>
</body>

</html>