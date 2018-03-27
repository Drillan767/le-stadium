import React from 'react';

export default class Today extends React.Component {
    render() {
        const { dish, price } =this.props;
        return (
            (dish && price) &&
            <div>
                <h4>Menu du jour</h4>
                <h5>{dish} - {price} €</h5>
                <p>Sed at ex sed erat iaculis ultricies a non metus. Donec nulla magna, dictum ac nisl eget, pellentesque fermentum ante.</p>
            </div>

        )
    }
}