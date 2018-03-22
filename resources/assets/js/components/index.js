import React from "react";
import Header from './header';
import Landing from "./landing";
import Gmaps from './g_maps';
import Footer from './footer';
import $ from 'jquery';

export default class Stadium extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            json: null,
            height: ""
        };
    }

    componentDidMount() {
        console.log(this.Landing.clientHeight);
        this.setState({json: 'AIzaSyA5NDe1-4En7DrhR0uUQDIHV7x6vUt3lCw'})
    }

    render() {
        const { json } = this.state;
        return (
            json !== null &&
                <React.Fragment>
                    <Header />,
                    <Landing ref={elem => (this.Landing = elem)} />,
                    <Gmaps gmapskey={json.g_map_key} />
                    <Footer />
                </React.Fragment>
        );
    }
}
