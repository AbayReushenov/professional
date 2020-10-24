import React, {createRef, Component } from "react";
import AceEditor from "react-ace";
import "ace-builds/src-noconflict/mode-html";
import "ace-builds/src-noconflict/mode-css";
import "ace-builds/src-noconflict/mode-javascript";
import "ace-builds/src-noconflict/theme-vibrant_ink";
import "emmet-core";
import "ace-builds/src-noconflict/ext-emmet";

export class EditPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            name: '',
            html: '',
            css: '',
            title: '',
            js: '',
            id:0
        };
        this.htmlEditor = createRef();
        this.cssEditor = createRef();
        this.jsEditor = createRef();
        this.handleSave = this.handleSave.bind(this);
        this.handleInputChange = this.handleInputChange.bind(this);
        this.onChange = this.onChange.bind(this);
    }

    componentDidMount() {
        let formData = new FormData();
        const uri = window.location.pathname.split("/");
        const pageId = uri[uri.length-1];
        formData.append('id', pageId);
        fetch("http://test.hostingaba.beget.tech/getPage", {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data=>{
                this.setState({
                    name: data['name'],
                    html: data['html'],
                    title: data['title'],
                    css: data['css'],
                    js: data['js'],
                    id: data['id']
                })
            })
    }

    handleSave(event) {
        let formData = new FormData();
        formData.append('id', this.state.id);
        formData.append('name', this.state.name);
        formData.append('title', this.state.title);
        formData.append('html', this.htmlEditor.current.editor.getValue());
        formData.append('css', this.cssEditor.current.editor.getValue());
        formData.append('js', this.jsEditor.current.editor.getValue());
        fetch("http://test.hostingaba.beget.tech/editPage", {
            method: 'POST',
            body: formData
              })
            .then(response => console.log(response));
        event.preventDefault();
    }
    handleInputChange(event) {
        const target = event.target;
        const value = target.value;
        const name = target.name;
        this.setState({
            [name]: value
        })
    }
    onChange(event){
        this.setState({
            js: event.target.value
        })
    }

    render() {
        return <div>
            <nav>
                <div className="nav nav-tabs" id="nav-tab" role="tablist">
                    <a className="nav-link active" id="nav-html-tab" data-toggle="tab" href="#nav-html" role="tab"
                       aria-controls="nav-html" aria-selected="true">HTML</a>
                    <a className="nav-link" id="nav-css-tab" data-toggle="tab" href="#nav-css" role="tab"
                       aria-controls="nav-css" aria-selected="false">CSS</a>
                    <a className="nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab"
                       aria-controls="nav-js" aria-selected="false">JS</a>
                    <a className="nav-link" id="nav-extraHTML-tab" data-toggle="tab" href="#nav-extraHTML" role="tab"
                       aria-controls="nav-extraHTML" aria-selected="false">Параметры</a>
                    <button onClick={this.handleSave} className="btn btn-outline-info ml-auto">сохранить</button>
                </div>
            </nav>
            <div className="tab-content" id="nav-tabContent">
                <div className="tab-pane fade show active" id="nav-html" role="tabpanel" aria-labelledby="nav-html-tab">
                    <AceEditor
                        mode="html"
                        width="100%"
                        theme="vibrant_ink"
                        setOptions={{
                            fontSize:18,
                            enableEmmet:true
                        }}
                        ref={this.htmlEditor}
                        defaultValue={this.state.html}
                        value={this.state.html}
                    />
                </div>
                <div className="tab-pane fade" id="nav-css" role="tabpanel" aria-labelledby="nav-css-tab">
                    <AceEditor
                        mode="css"
                        width="100%"
                        theme="vibrant_ink"
                        setOptions={{
                            fontSize:18,
                            enableEmmet:true
                        }}
                        defaultValue={this.state.css}
                        value={this.state.css}
                        ref={this.cssEditor}
                    />
                </div>
                <div className="tab-pane fade" id="nav-js" role="tabpanel" aria-labelledby="nav-js-tab">
                    <AceEditor
                        mode="javascript"
                        width="100%"
                        theme="vibrant_ink"
                        setOptions={{
                            fontSize:18,
                            enableEmmet:true
                        }}
                        defaultValue={this.state.js}
                        value={this.state.js}
                        ref={this.jsEditor}
                        name="UNIQUE_ID_OF_DIV"
                        editorProps={{ $blockScrolling: true }}
                        enableBasicAutocompletion={true}
                        enableLiveAutocompletion={true}
                        enableSnippets={true}
                    />
                </div>
                <div className="tab-pane fade" id="nav-extraHTML" role="tabpanel" aria-labelledby="nav-extraHTML-tab">
                    <div className="col-10 mx-auto my-3">
                        <div className="mb-3">
                            <input name="name" onChange={this.handleInputChange} type="text" className="form-control" value={this.state.name} placeholder="URI страницы"/>
                        </div>
                        <div className="mb-3">
                            <input name="title" onChange={this.handleInputChange} type="text" className="form-control" value={this.state.title} placeholder="Заголовок страницы"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    }
}
