import React, {Component} from "react";

export default class Profile extends Component {
    constructor() {
        super();
        this.state = {
            userName: ""
        }
    }
    componentDidMount() {
        const formData = new FormData();
        let userId = window.location.pathname.split("/")[2];
        formData.append("userId",userId);
        fetch("http://hostingaba.beget.tech/getUser", {
            method: "POST",
            body: formData
        })
            .then(response=>response.json())
            .then(user=>{
                this.setState({
                    userName: user.name + ' ' + user.lastname
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
