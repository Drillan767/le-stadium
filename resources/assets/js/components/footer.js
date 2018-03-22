import React from 'react';
import $ from 'jquery';

export default class Footer extends React.Component {

    render() {
        return (
            <footer className="page-footer" id="contact">
                <div className="container">
                    <div className="row">
                        <div className="col l6 s12">
                            <h5 className="white-text">Contact</h5>
                            <div className="input-field col s8 offset-s2">
                                <input id="email" name="email" type="text" />
                                <label htmlFor="email">E-mail</label>
                            </div>
                            <div className="input-field col s8 offset-s2">
                                <input id="subject" name="subject" type="text" />
                                <label htmlFor="subject">Objet</label>
                            </div>
                            <div className="input-field col s8 offset-s2">
                                <textarea id="message" name="message" className="materialize-textarea" />
                                <label htmlFor="message">Textarea</label>
                            </div>
                        </div>
                        <div className="col l4 offset-l2 s12">
                            <h5 className="white-text">Links</h5>
                            <ul>
                                <li><a className="grey-text text-lighten-3" href="#home">Accueil</a></li>
                                <li><a className="grey-text text-lighten-3" href="#!">Link 2</a></li>
                                <li><a className="grey-text text-lighten-3" href="#!">Gallerie</a></li>
                                <li><a className="grey-text text-lighten-3" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div className="footer-copyright">
                    <div className="container">
                        © 2018 Le Stadium
                    </div>
                </div>
            </footer>
        )
    }
}

