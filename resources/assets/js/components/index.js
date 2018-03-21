import React from 'react';
import $ from 'jquery';
import Gmaps from './g_maps';

export default class Stadium extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            data: null
        }
    }

    componentDidMount() {
        let self = this;
        $.getJSON(window.location.origin + '/data', function(data) {
            self.setState({data: data});
        });

    }

    render() {
        const { data } = this.state;
        return (
            data !== null &&
            <iframe
                width="100%"
                height="300px"
                frameBorder="0"
                // style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuy9KEifq9EcRJz0TUVFvvZ4&key=AIzaSyDZA_13YpCObAN73_Yf426lRZmVArddb9g"
                allowFullScreen
            />
        )
    }
}