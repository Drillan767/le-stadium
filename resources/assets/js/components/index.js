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
            data: null,
            scrollClass: ''
        }
    }

    componentDidMount() {
        let self = this;
        $.getJSON(window.location.origin + '/data', function(data) {
            self.setState({data: data});
        });


        window.addEventListener('scroll', function() {

            let range = 310,
                offset = window.scrollY / 1.1,
                calc = 1 - (window.scrollY - offset + range) / range;

            if(window.scrollY > 610) {
                self.setState({scrollClass: 'transparent'})
            } else {
                self.setState({scrollClass: ''})
            }
        });

    }

    render() {
        const { data, scrollClass } = this.state;
        return (
            data !== null &&
            [
                <Header key={"header"} scrollClass={scrollClass} />,
                <Landing key={"landing"}/>,
                <Maps key={"maps"} gmapskey={data.g_map_key} />,
                <Footer key={"footer"}/>
            ]
        )
    }
}