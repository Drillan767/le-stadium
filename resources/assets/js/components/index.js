import React from 'react';
import $ from 'jquery';
import 'materialize-css/dist/js/materialize.min';
import Header from './header';
import Landing from './landing';
import Maps from './g_maps';
import Footer from './footer';

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
            <div>
                <Header />
                <Landing />
                <Maps gmapskey={data.g_map_key} />
                <Footer />
            </div>
        )
    }
}