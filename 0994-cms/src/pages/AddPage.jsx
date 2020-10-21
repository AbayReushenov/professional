import React, {Component} from "react";
import AceEditor from "react-ace";
import "ace-builds/src-noconflict/mode-html";
import "ace-builds/src-noconflict/mode-css";
import "ace-builds/src-noconflict/mode-javascript";
import "ace-builds/src-noconflict/theme-vibrant_ink";
import "ace-builds/src-noconflict/ext-emmet";
import "emmet-core";

export default class AddPage extends Component {
    constructor() {
        super();
    }
    handleSave(){
        console.log("It's OK!")
    }
    render() {
        return (
            <>
                <nav>
                    <div className="nav nav-tabs" id="nav-tab" role="tablist">
                        <a className="nav-link active" id="nav-html-tab" data-toggle="tab" href="#nav-html" role="tab"
                           aria-controls="nav-html" aria-selected="true">HTML</a>
                        <a className="nav-link" id="nav-css-tab" data-toggle="tab" href="#nav-css" role="tab"
                           aria-controls="nav-css" aria-selected="false">CSS</a>
                        <a className="nav-link" id="nav-javascript-tab" data-toggle="tab" href="#nav-javascript" role="tab"
                           aria-controls="nav-javascript" aria-selected="false">JavaScript</a>
                        <button onClick={this.handleSave} className="btn btn-success ml-auto">Cохранить</button>
                    </div>
                </nav>
                <div className="tab-content" id="nav-tabContent">
                    <div className="tab-pane fade show active" id="nav-html" role="tabpanel"
                         aria-labelledby="nav-html-tab">
                        <AceEditor
                            mode="html"
                            theme="vibrant_ink"
                            fontSize="18px"
                            width="100%"
                            setOptions={{
                                enableEmmet:true
                            }}
                        />
                    </div>
                    <div className="tab-pane fade" id="nav-css" role="tabpanel" aria-labelledby="nav-css-tab">
                        <AceEditor
                            mode="css"
                            theme="vibrant_ink"
                            fontSize="18px"
                            width="100%"
                            setOptions={{
                                enableEmmet:true
                            }}
                        />
                    </div>
                    <div className="tab-pane fade" id="nav-javascript" role="tabpanel" aria-labelledby="nav-javascript-tab">
                        <AceEditor
                            mode="javascript"
                            theme="vibrant_ink"
                            fontSize="18px"
                            width="100%"
                            setOptions={{
                                enableEmmet:true
                            }}
                        />
                    </div>
                </div>
            </>
        )
    }
}


