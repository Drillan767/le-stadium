import React from 'react';


export default class Footer extends React.Component {

    onSubmit(e) {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "POST",
            url: "/contact",
            data: $("#contact").serialize(), // serializes the form's elements.
            success: function(data)
            {
                console.log(data); // show response from the php script.
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    }

    render() {
        return (
            <footer className="footer row" id="contact">
                <div className="container">
                    <div className="row footer-container">
                        <div className="col-xs-12 col-sm-8">
                            <h5>Contact</h5>
                            <form id="contact">
                                <div className="form-group">
                                    <input type="email" className="form-control" name="contact_email" placeholder="Email" />
                                </div>
                                <div className="form-group">
                                    <input type="email" className="form-control" name="contact_objet" placeholder="Objet" />
                                </div>
                                <div className="form-group">
                                    <textarea className="form-control" rows="3" placeholder="Message..." />
                                </div>

                                <input type="hidden" name="contact_hp" />

                                <button type="submit" className="btn btn-primary" onClick={this.onSubmit.bind(this)}>Envoyer</button>
                            </form>
                        </div>
                        <div className="col-xs-12 col-sm-4 col-md-4">
                            <h5>Quick links</h5>
                            <ul className="list-unstyled quick-links">
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Présentation</a></li>
                                <li><a href="#">Gallerie</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        )
    }
}

