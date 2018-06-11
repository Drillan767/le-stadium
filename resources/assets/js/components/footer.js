import React from 'react';

export default class Footer extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            contact_email: '',
            contact_object: '',
            contact_name: '',
            contact_hp: '',
            contact_message: ''
        };

        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    onSubmit(e) {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "/contact",
            data: {
                'contact_email': this.state.contact_email,
                'contact_name': this.state.contact_name,
                'contact_hp': this.state.contact_hp,
                'contact_message': this.state.contact_message,
                'contact_object': this.state.contact_object,
            },
            success: function(data){
                if(data === 'Queued. Thank you.') {
                    $('form').prepend('<div class="alert alert-sucess alert-dismissible fade show" role="alert">\n' +
                        '  <strong>Message envoyé avec succès !</strong>\n' +
                        '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '    <span aria-hidden="true">&times;</span>\n' +
                        '  </button>\n' +
                        '</div>')
                        .find("input[type=text], input[type=email], textarea").val("");
                }
            }
        });

        e.preventDefault();
    }

    render() {
        const {contact_email, contact_hp, contact_message, contact_object, contact_name} = this.state;
        const { hours, address } = this.props;

        return (
            <footer className="footer row" id="contact">
                <div className="container">
                    <div className="row footer-container">
                        <div className="col-xs-12 col-sm-2 col-md-2 coordinates">
                            <p dangerouslySetInnerHTML={{__html: hours.replace(/(?:\r\n|\r|\n)/g, '<br />')}} />
                            <p dangerouslySetInnerHTML={{__html: address.replace(/(?:\r\n|\r|\n)/g, '<br />')}} />
                        </div>
                        <div className="col-xs-12 col-sm-8">
                            <h5>Contact</h5>
                            <form id="contact">
                                <div className="form-group">
                                    <input
                                        type="email"
                                        className="form-control"
                                        name="contact_email"
                                        autoComplete="off"
                                        placeholder="Email"
                                        value={contact_email}
                                        onChange={this.handleChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <input
                                        type="text"
                                        className="form-control"
                                        autoComplete="off"
                                        name="contact_name"
                                        placeholder="Nom, prénom"
                                        value={contact_name}
                                        onChange={this.handleChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <input
                                        type="text"
                                        autoComplete="off"
                                        className="form-control"
                                        name="contact_object"
                                        placeholder="Objet"
                                        value={contact_object}
                                        onChange={this.handleChange}
                                    />
                                </div>
                                <div className="form-group">
                                    <textarea
                                        className="form-control"
                                        rows="3"
                                        name="contact_message"
                                        placeholder="Message..."
                                        value={contact_message}
                                        onChange={this.handleChange}
                                        autoComplete="off"
                                    />
                                </div>

                                <input
                                    type="hidden"
                                    autoComplete="off"
                                    name="contact_hp"
                                    value={contact_hp}
                                    onChange={this.handleChange}
                                />

                                <button type="submit" className="btn" onClick={this.onSubmit.bind(this)}>Envoyer</button>
                            </form>
                        </div>
                        <div className="col-xs-12 col-sm-2 col-md-2">
                            <ul className="list-unstyled quicklinks">
                                <li><a href="#accueil">Accueil</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#presentation">Présentation</a></li>
                                <li><a href="#gallerie">Gallerie</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        )
    }
}

