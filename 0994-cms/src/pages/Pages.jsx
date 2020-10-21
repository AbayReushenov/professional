import React, {Component} from "react";
import {NavLink} from "react-router-dom";

export default class Pages extends Component{
    constructor() {
        super();
    }
    render() {
        return<>
            <NavLink className="btn btn-primary" to="addPage">Добавить страницу</NavLink>
            </>

    }
}
