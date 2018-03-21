import React from 'react';

export default class Footer extends React.Component {
    render() {
        return (
            <footer className="page-footer">
                <div className="container">
                    <div className="row">
                        <div className="col l6 s12">
                            <h5 className="white-text">Contact</h5>
                            <div className="input-field col s6">
                                <input placeholder="Placeholder" id="first_name" type="text" className="validate" />
                                    <label for="first_name">First Name</label>
                            </div>
                        </div>
                        <div className="col l4 offset-l2 s12">
                            <h5 className="white-text">Links</h5>
                            <ul>
                                <li><a className="grey-text text-lighten-3" href="#!">Accueil</a></li>
                                <li><a className="grey-text text-lighten-3" href="#!">Link 2</a></li>
                                <li><a className="grey-text text-lighten-3" href="#!">Link 3</a></li>
                                <li><a className="grey-text text-lighten-3" href="#!">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div className="footer-copyright">
                    <div className="container">
                        © 2014 Copyright Text
                        <a className="grey-text text-lighten-4 right" href="#!">More Links</a>
                    </div>
                </div>
            </footer>
        )
    }
}

