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
            $('<script async src="https://maps.googleapis.com/maps/api/js?key='+ data.g_map_key +'" ></script>').appendTo('head');
        });

    }

    render() {
        const { data } = this.state;
        return (
            data !== null &&
                <Gmaps
                    isMarkerShown
                    googleMapURL="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuy9KEifq9EcRJz0TUVFvvZ4"
                    loadingElement={<div style={{ height: `100%` }} />}
                    containerElement={<div style={{ height: `400px` }} />}
                    mapElement={<div style={{ height: `100%` }} />}
                />
        )
    }
}