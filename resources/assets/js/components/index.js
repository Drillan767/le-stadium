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
            data: null,
            opacity: '',
        };
    }

    componentDidMount() {
        let self = this;
        $.get(window.location.origin + '/data', function(data) {
            self.setState({data: data})
        });

        let supportPageOffset = window.pageXOffset !== undefined,
            isCSS1Compat = ((document.compatMode || "") === "CSS1Compat"),
            range = 200,
            height = this.heightRef.clientHeight;

        window.addEventListener('scroll', function() {
            let scrollTop = supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop,
                offset = height / 1.1,
                calc = 1 - (scrollTop - offset + range) / range,
                result = '';

            if (calc > '1') {
                result = 0;
            } else if ( calc < '0' ) {
                result = 1;
            }
            else {
                result = calc;
            }

            self.setState({opacity: result});
        });
    }

    render() {
        const { data, opacity } = this.state;
        return (
            <React.Fragment>
                <Header opacity={opacity}/>
                <Landing image={data && data.landing_image} forwardRef={elem => (this.heightRef = elem)} />
                <Gmaps gmapskey={data && data.g_map_key} />
                <Footer />
            </React.Fragment>
        );
    }
}
