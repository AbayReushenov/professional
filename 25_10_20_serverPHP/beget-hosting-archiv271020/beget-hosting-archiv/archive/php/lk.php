<?php session_start(); ?>
<!doctype html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    body {
      background: rgb(89, 83, 83);
    }

    div {
      background: honeydew;
      border: indianred 3 px solid;
      border-radius: 15px;
    }

    h1 {
      color: white;
      text-align: center;
    }

    .edit-btn {
      color: blue;
      cursor: pointer;
    }

    .edit-btn:hover {
      color: navy;
    }

    .save-btn {
      color: green;
      cursor: pointer;
    }

    .save-btn:hover {
      color: lime;
    }

    .cancel-btn {
      color: maroon;
      cursor: pointer;
    }

    .cancel-btn:hover {
      color: red;
    }

    .hide {
      display: none;
    }
  </style>
  <title>Личный кабинет</title>
</head>

<body>
  <h1>Личный кабинет</h1>
  <div class="container my-5">
    <br>
    <p>
      Имя: <span><?= $_SESSION['name'] ?></span>
      <span class="edit-btn">[изменить]</span>
      <span class="save-btn hide" data-item="name">[сохранить]</span>
      <span class="cancel-btn hide">[отменить]</span>
    </p>
    <br>
    <p>
      Фамилия: <span><?= $_SESSION['lastname'] ?></span>
      <span class="edit-btn">[изменить]</span>
      <span class="save-btn hide" data-item="lastname">[сохранить]</span>
      <span class="cancel-btn hide">[отменить]</span>
    </p>
    <br>
    <p>Email: <?= $_SESSION['email'] ?></p>
    <br>
    <p>ID: <?= $_SESSION['id'] ?></p>
    <br>
  </div>
  <script>
    let editBtns = document.querySelectorAll('.edit-btn');
    let saveBtns = document.querySelectorAll('.save-btn');
    let cancelBtns = document.querySelectorAll('.cancel-btn');
    for (let i = 0; i < editBtns.length; i++) {
      editBtns[i].addEventListener("click", () => {
        let value = editBtns[i].previousElementSibling.textContent
        editBtns[i].previousElementSibling.innerHTML = `<input value="${value}">`;
        editBtns[i].classList.add("hide");
        saveBtns[i].classList.remove("hide");
        cancelBtns[i].classList.remove("hide");

        saveBtns[i].addEventListener("click", () => {
          value = editBtns[i].parentElement.firstElementChild.firstElementChild.value;
          //--
          let formData = new FormData();
          let item = saveBtns[i].dataset.item;
          console.log(item, value)
          formData.append("item", item);
          formData.append("value", value);
          fetch("php/lk_obr.php", {
            method: "POST",
            body: formData
          });
          //--
          editBtns[i].previousElementSibling.innerHTML = value;
          toggle(i);
        })
        cancelBtns[i].addEventListener("click", () => {
          editBtns[i].previousElementSibling.innerHTML = `${value}`;
          toggle(i);
        })
      })
    }

    function toggle(i) {
      editBtns[i].classList.remove("hide");
      saveBtns[i].classList.add("hide");
      cancelBtns[i].classList.add("hide");
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