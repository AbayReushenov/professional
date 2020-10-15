import React, {Component} from 'react';

export default class Users extends Component {
    render() {
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
}

