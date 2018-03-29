import React from 'react';
import '@fancyapps/fancybox/dist/jquery.fancybox.min';

export default class Picture extends React.Component {
    render() {
        const { img, width } = this.props;
        return (
            img &&
            <a data-fancybox="gallery" href={img}>
                <img src={img} className={"gallery-image col-md-" + width }/>
            </a>
        )
    }
}