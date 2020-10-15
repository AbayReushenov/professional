import React, {Component} from 'react';

export default class Settings extends Component{
    render(){
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
}

