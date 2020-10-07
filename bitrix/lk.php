<?php
$title = "Личный кабинет";
$style = "
.lk {
  background: brown;
  border: indianred 3 px solid;
  border-radius: 15px;
  font-size: 2vw;
  padding: .2em;
  text-align: left;
}

.lkinner {
   background: salmon;
}

.lk >h1 {
  color: white;
  text-align: center;
}

.myButton {
    box-shadow: 3px 4px 0px 0px #899599;
    background: linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
    background-color: #ededed;
    border-radius: 15px;
    border: 1px solid #d6bcd6;
    display: inline-block;
    cursor: pointer;
    color: black;
    font-family: Arial;
    font-size: 17px;
    padding: 7px 25px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #e1e2ed;
}

.myButton:hover {
    background: linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
    background-color: #bab1ba;
}

.myButton:active {
    position: relative;
    top: 1px;
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
}"
;
require_once("header.php");
session_start();
?>
  <div class="lk container-flex">
    <h1>Личный кабинет</h1>
    <div class="container-flex my-5 lkinner">
      <br>
      <p>
        Имя    :<span><?= $_SESSION['name'] ?></span>
        <button class="myButton edit-btn">изменить</button>
        <button class="myButton save-btn hide" data-item="name">сохранить</button>
        <button class="myButton cancel-btn hide">отменить</button>
      </p>
      <br>
      <p>
        Фамилия :<span><?= $_SESSION['lastname'] ?></span>
        <button class="myButton edit-btn">изменить</button>
        <button class="myButton save-btn hide" data-item="lastname">сохранить</button>
        <button class="myButton cancel-btn hide">отменить</button>
      </p>
      <br>
      <p>Email: <?= $_SESSION['email'] ?></p>
      <br>
      <p>ID: <?= $_SESSION['id'] ?></p>
      <br>
    </div>     
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
<?php require_once("footer.php") ?>
  