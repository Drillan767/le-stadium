import React from 'react';

export default class Gmaps extends React.Component {
    componentDidMount() {
        let map = new window.google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.8688, lng: 151.2195},
            zoom: 13,
            mapTypeId: 'roadmap',
        })
    }

    render() {
        return (
            <div id='app'>
                <div id='map' />
            </div>
        );
    }
}

// https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuy9KEifq9EcRJz0TUVFvvZ4&key=...

