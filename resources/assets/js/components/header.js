import React from 'react';

export default class Header extends React.Component {

    render() {
        return (
            <div className="navbar-fixed">
                <nav className="z-depth-0" key={"nav"}>
                    <div className="nav-wrapper">
                        <div className="row">
                            <div className="col s12">
                                <a href="https://codepen.io/collection/nbBqgY" target="_blank" className="brand-logo">Materialize<span className="hide-on-small-only">&nbsp;Framework</span></a>
                                <a href="#" data-target="mobile-demo" className="sidenav-trigger"><i className="material-icons">menu</i></a>
                                <ul className="right hide-on-med-and-down">
                                    <li><a href="https://github.com/dogfalo/materialize/" target="_blank">Github</a></li>
                                    <li><a href="https://twitter.com/MaterializeCSS" target="_blank">Twitter</a></li>
                                    <li><a href="http://next.materializecss.com/getting-started.html" target="_blank">Docs</a></li>
                                    <li><a href="tel:15558675309" className="waves-effect waves-light btn btn-large light-green darken-2">(555) 867-5309</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <ul className="sidenav" id="mobile-demo" key={"ul"}>
                    <li><a href="https://github.com/dogfalo/materialize/" target="_blank">Github</a></li>
                    <li><a href="https://twitter.com/MaterializeCSS" target="_blank">Twitter</a></li>
                    <li><a href="http://next.materializecss.com/getting-started.html" target="_blank">Docs</a></li>
                </ul>
            </div>
        )
    }
}