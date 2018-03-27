import React from 'react';
import '@fancyapps/fancybox/dist/jquery.fancybox.min';

export default class Picture extends React.Component {
    render() {
        const { img } = this.props;
        return (
            img && <p>{img}</p>
        )
    }
}