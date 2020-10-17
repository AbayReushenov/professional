import React, {Component} from 'react';
import {NavLink} from "react-router-dom";

const Tr = (x) =>
    <tr>
        <th scope="row">{x.index}</th>
        <td><NavLink to={"user/" + x.id }>{x.name} {x.lastname}</NavLink></td>
        <td>{x.email}</td>
        <th scope="row">{x.id}</th>
    </tr>
;

export default class Users extends Component {
    constructor() {
        super();
        this.state = {
            users: []
        }
    }
    componentDidMount() {
        fetch("http://hostingaba.beget.tech/getUsers")
            .then(response => response.json())
            .then(users => {
                let rowsOfTable;
                rowsOfTable = users.map((user, index) => {
                    return  <Tr
                                name={user.name}
                                lastname={user.lastname}
                                index={index + 1}
                                email={user.email}
                                id={user.id}
                            />
                })
                this.setState({
                    users: rowsOfTable
                })
            })

    }

    render() {
        return (
            <table className="table">
                <caption>Список пользователей</caption>
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя  Фамилия</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">ID</th>
                </tr>
                </thead>
                <tbody>
                    {this.state.users}
                </tbody>
            </table>
        )
    }
}

