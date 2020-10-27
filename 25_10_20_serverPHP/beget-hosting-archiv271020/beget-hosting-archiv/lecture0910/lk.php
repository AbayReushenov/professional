  <style>
      .edit-btn{
        color:blue;
        cursor:pointer;
      }
      .edit-btn:hover{
        color:navy;
      }
      .save-btn{
        color:green;
        cursor:pointer;
      }
      .save-btn:hover{
        color:lime;
      }
      .cancel-btn{
        color:maroon;
        cursor:pointer;
      }
      .cancel-btn:hover{
        color:red;
      }
    </style>
    <div class="row">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Профиль</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Настройки</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Пользователи</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row">
              <div class="col-sm-2"><img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" width="100%" alt=""></div>
              <div class="col-sm-10">
                <h1 id="userNameAndLastname"></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, quibusdam, pariatur, labore, dolorem eligendi totam accusamus libero magni unde id aliquam praesentium quo laudantium. Culpa, libero, veniam dolorum consequuntur quas nulla eum atque assumenda praesentium ullam numquam debitis possimus eaque rem amet. Sint, adipisci atque nostrum.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <p>
              Имя: <span id="userName"></span> 
              <span class="edit-btn">[изменить]</span> 
              <span class="save-btn" hidden data-item="name">[сохранить]</span>
              <span class="cancel-btn" hidden>[отменить]</span>
            </p>
            <p>
              Фамилия: <span id="userLastname"></span>
              <span class="edit-btn">[изменить]</span>
              <span class="save-btn" hidden data-item="lastname">[сохранить]</span>
              <span class="cancel-btn" hidden>[отменить]</span>
            </p>
            <p>Email: <span id="userEmail"></span></p>
            <p>ID: <span id="userId"></span></p>
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Имя Фамилия</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody id="userList">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      fetch("getUser")
      .then(response => response.json())
      .then(user=>{
        userNameAndLastname.innerText = `${user.name} ${user.lastname}`;
        userName.innerText = user.name;
        userLastname.innerText = user.lastname;
        userEmail.innerText = user.email;
        userId.innerText = user.id;
      });
      
      fetch("getUsers")
      .then(response => response.json())
      .then(users=>users.forEach(user=>{
        userList.insertAdjacentHTML("beforeend",
                `<tr>
                  <th scope="row">${user.id}</th>
                  <td>${user.name} ${user.lastname}</td>
                  <td>${user.email}</td>
                </tr>`);
      }));
    
      let editBtns = document.querySelectorAll('.edit-btn');
      let saveBtns = document.querySelectorAll('.save-btn');
      let cancelBtns=document.querySelectorAll('.cancel-btn');
      for(let i=0; i<editBtns.length; i++){
        let value = editBtns[i].previousElementSibling.innerText;
        editBtns[i].addEventListener("click",()=>{
          editBtns[i].previousElementSibling.innerHTML = `<input value="${value}">`;
          editBtns[i].hidden = true;
          saveBtns[i].hidden = false;
          cancelBtns[i].hidden = false;
        });
        saveBtns[i].addEventListener("click",()=>{
          value = editBtns[i].previousElementSibling.getElementsByTagName("input")[0].value;
          let formData = new FormData();
          let item = saveBtns[i].dataset.item;
          formData.append("item",item);
          formData.append("value",value);
          fetch("php/lk_obr.php",{
            method: "POST",
            body: formData
          });
          editBtns[i].previousElementSibling.innerText = value;
          editBtns[i].hidden = false;
          saveBtns[i].hidden = true;
          cancelBtns[i].hidden = true;
        });
        cancelBtns[i].addEventListener("click",()=>{
          editBtns[i].previousElementSibling.innerText = value;
          editBtns[i].hidden = false;
          saveBtns[i].hidden = true;
          cancelBtns[i].hidden = true;
        });
      }
    </script>