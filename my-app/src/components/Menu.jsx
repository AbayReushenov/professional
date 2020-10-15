import React from 'react';
import { NavLink } from "react-router-dom";

const Menu =()=> {
    return (
        <ul style={{listStyleType: 'none'}}>
            <li><NavLink className="nav-link" to="/profile">Профиль</NavLink></li>
            <li><NavLink className="nav-link" to="/settings">Настройки</NavLink></li>
            <li><NavLink className="nav-link" to="/users">Список пользователей</NavLink></li>
        </ul>
    )
}

export default Menu;
