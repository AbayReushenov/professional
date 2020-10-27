<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" id="v-pills-profil-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Профиль</a>
      <a class="nav-link" id="v-pills-settin-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Настройки</a>
      <a class="nav-link" id="v-pills-friend-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Друзья</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="row">
          <div class="col-sm-2"><img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" width="100%;" alt=""></div>
          <div class="col-sm-10">
            <h1 id="userNameAndLastname"></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, quibusdam, pariatur, labore, dolorem eligendi totam accusamus libero magni unde id aliquam praesentium quo laudantium. Culpa, libero, veniam dolorum consequuntur quas nulla eum atque assumenda praesentium ullam numquam debitis possimus eaque rem amet. Sint, adipisci atque nostrum.</p>
          </div>
        </div>
      </div>
      <div class="container jumbotron tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="row">
          <p class="col-12 btn-group" role="group" aria-label="Basic example">
            Имя: <span id="userName"></span>
            <span class="edit-btn btn btn-secondary btn-info col-sm-1 my-1" style="display: block;">изменить</span> 
            <span class="save-btn btn btn-secondary btn-success col-sm-1 my-1" style="display: none;" data-item="name">сохранить</span>
            <span class="cancel-btn btn btn-secondary btn-danger col-sm-1 my-1" style="display: none;">отменить</span>
          </p>
          <p class="col-12 btn-group" role="group" aria-label="Basic example">
            Фамилия: <span id="userLastname"></span>
            <span class="edit-btn btn btn-secondary btn-info col-sm-1 my-1"style="display: block;">изменить</span> 
            <span class="save-btn btn btn-secondary btn-success col-sm-1 my-1" style="display: none;" data-item="lastname">сохранить</span>
            <span class="cancel-btn btn btn-secondary btn-danger col-sm-1 my-1" style="display: none;">отменить</span>
          </p>
          <p class="col-12">Email: <span id="userEmail"></span></p>
          <p class="col-12">ID: <span id="userId"></span></p>
        </div>
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
  let profile = document.getElementById("v-pills-profil-tab"),
      settings = document.getElementById("v-pills-settin-tab"),
      friends =  document.getElementById("v-pills-friend-tab");
  let endPathname = location.pathname.split('/')[2];
      
  profile.addEventListener("click", ()=> history.pushState({page: 1}, "Profile", "profile"));
  settings.addEventListener("click", ()=> history.pushState({page: 2}, "Settings", "settings"));
  friends.addEventListener("click", ()=> history.pushState({page: 3}, "Friends", "friends"));
  
  if (endPathname == "profile"){
    $('#v-pills-home').tab('show');
    profile.classList.add("active");
  }else if (endPathname == "settings"){
    $('#v-pills-profile').tab('show');
    settings.classList.add("active");
  }else if (endPathname == "friends"){
    $('#v-pills-messages').tab('show');
    friends.classList.add("active");
  }
    
  fetch("/getUser")
  .then(response => response.json())
  .then(user=>{
    userNameAndLastname.innerText = `${user.name} ${user.lastname}`;
    userName.innerText = user.name;
    userLastname.innerText = user.lastname;
    userEmail.innerText = user.email;
    userId.innerText = user.id;
  });
  
  fetch("/getUsers")
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
    let cancelBtns = document.querySelectorAll('.cancel-btn');
    for (let i = 0; i < editBtns.length; i++) {
      editBtns[i].addEventListener("click", () => {
          let value = editBtns[i].previousElementSibling.textContent
          editBtns[i].previousElementSibling.innerHTML = `<input value="${value}">`;
          toggle1(i);
        
          saveBtns[i].addEventListener("click", () => {
              value = editBtns[i].parentElement.firstElementChild.firstElementChild.value;
              //--
              let formData = new FormData();
              let item = saveBtns[i].dataset.item;
              formData.append("item", item);
              formData.append("value", value);
              fetch("/changeUserData", {
                method: "POST",
                body: formData
              })
              .then(response=>respons.text());
              //--
              editBtns[i].previousElementSibling.innerHTML = value;
              toggle0(i);
          });
          
          cancelBtns[i].addEventListener("click", () => {
              editBtns[i].previousElementSibling.innerHTML = `${value}`;
              toggle0(i);
          });
    });
  }
  
  function toggle1(i) {
    editBtns[i].style ="display: none;";
    saveBtns[i].style="display: block;";
    cancelBtns[i].style="display: block;";
  }
  
  function toggle0(i) {
    editBtns[i].style ="display: block;";
    saveBtns[i].style="display: none;";
    cancelBtns[i].style="display: none;";
  }
</script>