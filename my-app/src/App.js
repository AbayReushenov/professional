import React from 'react';
import {BrowserRouter, Route} from "react-router-dom";
import Menu from './components/Menu';
import Profile from './components/Profile';
import Settings from './components/Settings';
import Users from'./components/Users'

  function App() {
    return (
      <div className="container-fluid">
        <BrowserRouter>
          <div className="row">
            <div className="col-3">
              <Menu/>
            </div>
            <div className="col-9">
              <Route exact path="/profile" render={() => {
                return <Profile/>
              }}/>
              <Route path="/user" render={() => {
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
