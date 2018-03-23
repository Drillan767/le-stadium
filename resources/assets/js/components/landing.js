import React from "react";

export default class Landing extends React.Component {
    render() {
        return [
            <header
                id="landing"
                className="white-text"
                key={"header"}
                ref={this.props.forwardRef}
            >
                <div className="container">
                    <h1>Opacity on scroll</h1>
                    <p>The header element fades away.</p>
                </div>
            </header>,

            <div id="nav-bg" key={"bg"} />
        ];
    }
}


// https://codepen.io/j_holtslander/pen/KQrWVy?page=1&