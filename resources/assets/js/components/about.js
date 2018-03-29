import React from 'react';
import '@fancyapps/fancybox/dist/jquery.fancybox.min';

export default class About extends React.Component {
    render() {
        const { image, description } = this.props;
        return (
            <div id="presentation">
                <div className="row">
                    <div className="col-sm-12 main-title">
                        <h1 className="main-title offset-md-1">Présentation</h1>
                    </div>
                </div>

                <div className="row">
                    <div className="col-md-4 offset-md-2">
                        <a data-fancybox="gallery" href={image}>
                            <img src={image} className="landing-image"/>
                        </a>
                    </div>

                    <div className="col-md-4 about-text" dangerouslySetInnerHTML={{ __html: description}} />
                </div>
            </div>
        )
    }
}