import React from "react";
// Страница добавления ветки (каталога)
export class AddBranch extends React.Component {
    constructor() {
        super();
        this.handleInputChange = this.handleInputChange.bind(this);
        this.handleSave = this.handleSave.bind(this);
        this.state = {
            name: "",
            name_rus: ""
        }
    }

    handleSave(){
        let formData = new FormData();
        formData.append('name', this.state.name);
        formData.append('name_rus', this.state.name_rus);
        fetch("http://test.hostingaba.beget.tech/addBranch",{
            method: 'POST',
            body: formData
        })
            .then(response=>response.json())
            .then(result=>console.log(result))
    }

    componentDidMount() {
        console.log("Вызвана функция componentDidMount")
    }

    handleInputChange(event){
        const target = event.target;
        const value = target.value;
        const name = target.name;
        this.setState({
            [name]: value
        })
    }

    render() {
        return<div>
            <h1>Создать ветку</h1>
            <nav>
                <div className="nav nav-tabs" id="nav-tab" role="tablist">
                    <a className="nav-link" id="nav-extraHTML-tab" data-toggle="tab" href="#nav-extraHTML" role="tab"
                       aria-controls="nav-extraHTML" aria-selected="false">Параметры</a>
                    <button onClick={this.handleSave} className="btn btn-outline-success ml-auto">[сохранить]</button>
                </div>
            </nav>
            <div className="tab-content" id="nav-tabContent">
                <div className="tab-pane fade" id="nav-extraHTML" role="tabpanel" aria-labelledby="nav-extraHTML-tab">
                    <div className="col-10 mx-auto my-3">
                        <div className="mb-3">
                            <input name="name" onChange={this.handleInputChange} type="text" className="form-control" placeholder="Name "/>
                        </div>
                        <div className="mb-3">
                            <input name="name_rus" onChange={this.handleInputChange} type="text" className="form-control" placeholder="Наименование"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    }
}
