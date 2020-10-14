import React from 'react';
import {BrowserRouter, NavLink, Route} from "react-router-dom";

const Menu =()=> {
  return (
    <ul style={{listStyleType: 'none'}}>
      <li><NavLink className="nav-link" to="/profile">Профиль</NavLink></li>
      <li><NavLink className="nav-link" to="/settings">Настройки</NavLink></li>
      <li><NavLink className="nav-link" to="/users">Список пользователей</NavLink></li>
    </ul>
  )
}

  const Profile = () => {
    return (
      <div className="row">
        <div className="col-2">
          <img width="100%" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt=""/>
        </div>
        <div className="col-10">
          <h1>Иван Иванов</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolorum ducimus eos eveniet incidunt
            iste libero omnis quo? Amet commodi dicta eum harum illo laborum quae quos reiciendis repellendus ut!</p>
        </div>
      </div>
    )
  }

const Settings = () => {
  return (
    <div className="row">
      <div className="col-12">
        <div className="card w-75">
          <div className="card-body">
            <h5 className="card-title">Имя</h5>
            <p className="card-text">Иван</p>
            <a href="#" className="btn btn-primary">Изменить</a>
          </div>
        </div>

        <div className="card w-75">
          <div className="card-body">
            <h5 className="card-title">Фамилия</h5>
            <p className="card-text">Иванов</p>
            <a href="#" className="btn btn-primary">Изменить</a>
          </div>
        </div>

        <div className="card w-75">
          <div className="card-body">
            <h5 className="card-title">E-mail</h5>
            <p className="card-text">ivanov@mail.com</p>
          </div>
        </div>

        <div className="card w-75">
          <div className="card-body">
            <h5 className="card-title">ID</h5>
            <p className="card-text">1</p>
          </div>
        </div>

      </div>
    </div>
  )
}

const Users = () => {
  return (
    <table className="table">
      <caption>Список пользователей</caption>
      <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">E-mail</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Иван</td>
        <td>Иванов</td>
        <td>ivan.ivanov@mail.com</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Анна</td>
        <td>Ахматова</td>
        <td>anna.achmatova@mail.ru</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>mark.otto@mdo.com</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>jacob.thorton@fat.net</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Larry</td>
        <td>Bird</td>
        <td>larry.bird@twitter.com</td>
      </tr>
      </tbody>
    </table>
  )
}

  function App() {
    return (
      <div className="container-fluid">
        <BrowserRouter>
          <div className="row">
            <div className="col-3">
              <Menu/>
            </div>
            <div className="col-9">
              <Route path="/profile" render={() => {
                return <Profile/>
              }}/>
              <Route path="/settings" render={() => {
                return <h1><Settings/></h1>
              }}/>
              <Route path="/users" render={() => {
                return <Users />
              }}/>
            </div>
          </div>
        </BrowserRouter>
      </div>
    )
  }

export default App;
