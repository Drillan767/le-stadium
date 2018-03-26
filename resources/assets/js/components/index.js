import React from 'react';
import Header from './header';
import Landing from './landing';
import About from './about';
import Gmaps from './g_maps';
import Footer from './footer';
import $ from 'jquery';

export default class Stadium extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            data: null,
        };
    }

    componentDidMount() {
        let self = this;
        $.get(window.location.origin + '/data', function(data) {
            self.setState({data: data})
        });
    }

    render() {
        const { data } = this.state;
        return (
            data && data.length > 0 ?
            <React.Fragment>
                <Header />
                <Landing image={data && data.landing_image} logo={data && data.logo} />
                <About image={data && data.background_description} description={data && data.description}/>
                <Gmaps gmapskey={data && data.g_map_key} />
                <Footer />
            </React.Fragment>
            :
            <React.Fragment>
                <Header />
                <h1>Veuillez <a href={window.location.origin + "/register"}>créer un compte</a></h1>
            </React.Fragment>
        );
    }
}
