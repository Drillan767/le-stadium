import React from 'react';
import { withScriptjs, withGoogleMap, GoogleMap, Marker } from "react-google-maps"

const googleMaps = withScriptjs(withGoogleMap((props) =>
    <GoogleMap
        defaultZoom={8}
        defaultCenter={{ lat: -34.397, lng: 150.644 }}
    >
        {props.isMarkerShown && <Marker position={{ lat: -34.397, lng: 150.644 }} />}
    </GoogleMap>
));

export default googleMaps;

// <MyMapComponent isMarkerShown={false} />// Just only Map

// https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuy9KEifq9EcRJz0TUVFvvZ4&key=...

