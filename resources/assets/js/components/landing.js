import React from "react";

export default class Landing extends React.Component {
    render() {
        const { image, logo } = this.props;
        return (
            <div id="accueil" style={{backgroundImage: `url(${image}`}}>
                <img src={logo} className="logo" alt="logo"/>
            </div>
        )
    }
}