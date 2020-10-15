import React, {Component} from "react";

export default class Profile extends Component {
    constructor() {
        super();
        this.state = {
            userName: "Empty"
        }
    }
    componentDidMount() {
        fetch("http://hostingaba.beget.tech/getUserSpesialCode")
            .then(response=>response.text())
            .then(info=>{
                this.setState({
                    userName: info
                })
            });
    }
    render() {
        console.log("ШАГ1 Компонента отрисовывается");
        return (
            <div className="row">
                <div className="col-2">
                    <img width="100%" src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt=""/>
                </div>
                <div className="col-10">
                    <h1>{this.state.userName}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt facilis maxime, porro praesentium qui quibusdam quod, ratione recusandae sapiente soluta vel. Aliquid fugit labore laudantium minima molestias repellat suscipit!</p>
                </div>

            </div>
        )
    }
}
