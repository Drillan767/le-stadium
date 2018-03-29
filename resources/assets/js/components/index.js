import React from 'react';
import Header from './header';
import Landing from './landing';
import Menu from './menu';
import About from './about';
import Gallery from './gallery';
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
            data &&
            <React.Fragment>
                <Header />
                <main role="main">
                    <Landing image={data.landing_image} logo={data.logo} />
                    <Menu
                        today_dish={data.today_special}
                        today_price={data.today_price}
                        menu={data.dishes}
                    />
                    <About image={data.background_description} description={data.description}/>
                    <Gallery images={data.pictures}/>
                    <Gmaps gmapskey={data.g_map_key} />
                    <Footer />
                </main>

            </React.Fragment>
        );
    }
}
