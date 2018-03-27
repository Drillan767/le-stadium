import React from 'react';

export default class Header extends React.Component {

    render() {
        return (
            <nav className="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
                <a href="/" className="navbar-brand">Le Stadium</a>
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
                    <span className="navbar-toggler-icon" />
                </button>
                <div className="navbar-collapse collapse justify-content-stretch" id="navbar7">
                    <ul className="navbar-nav ml-auto">
                        <li className="nav-item">
                            <a className="nav-link" href="#accueil">Accueil</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#platdujour">Plat du jour</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#menu">Menu</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#">Présentation</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#gallerie">Gallerie</a>
                        </li>

                        <li className="nav-item">
                            <a className="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        )
    }
}

/*


 */