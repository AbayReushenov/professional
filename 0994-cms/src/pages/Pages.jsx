import React from "react";
import {NavLink} from "react-router-dom";
import {host} from '../config';

const Tr = (props)=>{
    return <tr>
        <th scope="row">{props.index}</th>
        <td>{props.title}</td>
        <td>{props.name}</td>
        <td><NavLink to={"editPage/"+props.pageId}><i className="far fa-edit"></i> [редактировать]</NavLink></td>
    </tr>
}

export class Pages extends React.Component{
    constructor() {
        super();
        this.state = {
            pages: []
        }
    }
    componentDidMount() {
        fetch(host + "getPagesJSON")
            .then(response=>response.json())
            .then(pages=>{
                this.setState({
                    pages: pages.map((page,index)=>{
                        return <Tr key={index} pageId={page.id} index={index+1} name={page.name} title={page.title} />
                    })
                })

            })
    }

    render() {
        return <div>
            <table className="table table-striped">
                <thead>
                <tr>
                    <th scope="col"><i className="fas fa-list-ol"></i></th>
                    <th scope="col"><i className="fas fa-book-reader"></i> Заголовок</th>
                    <th scope="col"><i className="far fa-file-alt"></i> Адрес</th>
                    <th scope="col"><i className="fas fa-tools"></i> Управление</th>
                </tr>
                </thead>
                <tbody>
                {this.state.pages}
                </tbody>
            </table>

            <NavLink className="btn btn-primary" to="addPage"><i className="fas fa-plus-square"></i>  Добавить страницу</NavLink>
        </div>
    }
}
