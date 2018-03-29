import React from 'react';

export default class Gmaps extends React.Component {
    render() {
        const { gmapskey } = this.props;
        return (
            <div id="carte" className="row">
                <iframe
                    width="100%"
                    height="300px"
                    frameBorder="0"
                    src={"https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuy9KEifq9EcRJz0TUVFvvZ4&key=" + gmapskey }
                    allowFullScreen
                />
            </div>

        )
    }
}
