import React from "react";

export default class Landing extends React.Component {
    render() {
        const { image, logo } = this.props;
        return (
            <div id="accueil" style={{backgroundImage: `url(${image}`}} className="row">
                <h1 className="logo">LE STADIUM</h1>
            </div>
        )
    }
}