import React from 'react';

export default class Header extends React.Component {

    render() {
        const { opacity } = this.props;
        return (
            <nav className="z-depth-0 transparent" style={{opacity: opacity}}>
                <div className="nav-wrapper">
                    <a href="#" className="brand-logo">Logo</a>
                    <ul id="nav-mobile" className="right">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">JavaScript</a></li>
                    </ul>
                </div>
            </nav>
        )
    }
}