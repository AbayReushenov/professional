<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box color to BigBox</title>
    <style>
        .fill {
            position: absolute;
            height: 100px;
            width: 100px;
            top: 5px;
            left: 5px;
            cursor: pointer;
        }

        .empty {
            background: salmon;
            position: absolute;
            top: 100px;
            left: 500px;
            width: 300px;
            height: 300px;
            margin: 10px;
            border: 3px salmon solid;

        }

        .hold {
            border: solid #ccc 4px;
        }

        .hovered {
            background: #f4f4f4;
            border-style: dashed;
        }

        .invisible {
            display: none;
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
    </style>
</head>

<body>

    <div id="red" class="fill" draggable="true"></div>
    <div id="green" class="fill" draggable="true"></div>
    <div id="blue" class="fill" draggable="true"></div>
    <div id="yellow" class="fill" draggable="true"></div>
    <div class="empty" draggable="true"></div>

    <script>
        const fills = document.querySelectorAll('.fill');
        const empt = document.querySelector('.empty');
        let color = [];
        let activeBoxflag = Boolean;

        // каждый маленький квадрат прослушивается на start и end
        for (box of fills) {
            box.addEventListener('dragstart', dragStart);
            box.addEventListener('dragend', dragEnd);
        }

        // большой квадрат встречает , ведет, отпускает и может получить
        empt.addEventListener('dragover', dragOver);
        empt.addEventListener('dragenter', dragEnter);
        empt.addEventListener('dragleave', dragLeave);
        empt.addEventListener('drop', dragDrop);

        // Drag  start

        function dragStart() {
            activeBoxflag = false;
            color.push(getComputedStyle(this).backgroundColor)
            console.log("start", color[0])
            this.className += ' hold';
            // чтобы наш квадрат исчез пропускаем его через setTimeout()
            setTimeout(() => (this.className = 'invisible'), 0);
        }

        function dragEnd() {
            color.pop();
            this.className = activeBoxflag ? 'invisible' : 'fill';
        }

        function dragOver(event) {
            event.preventDefault();
        }

        function dragEnter(newevent) {
            newevent.preventDefault();
            this.className += ' hovered';
        }

        function dragLeave() {
            this.className = 'empty'
        }

        function dragDrop() {
            activeBoxflag = true;
            this.style.background = color[0];
        }
    </script>
</body>

</html>