import React from 'react';
import Picture from './picture';

export default class Gallery extends React.Component {

    render() {
        const { images } = this.props;
        return (
            <div id="gallery">
                {
                    images !== null &&
                    images.map(function(pic, i) {
                        return <Picture key={i} img={pic.path} width={i % 3 === 0 ? 12 : 6} />
                    })
                }
            </div>
        )
    }
}