import React from 'react';

export default class Dish extends React.Component {
    render() {
        const { dishes } = this.props;
        return (
            dishes !== null &&
            <div>
                <h4>Plats</h4>
                {
                    dishes.map(function (dish, i) {
                        return (
                            <div key={i}>
                                <h6>{dish.name}</h6>
                                <p>{dish.price}</p>
                            </div>
                        )
                    })
                }
            </div>
        )
    }
}