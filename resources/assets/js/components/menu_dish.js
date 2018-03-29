import React from 'react';

export default class Dish extends React.Component {
    render() {
        const { dishes } = this.props;
        return (
            dishes !== null &&
            <React.Fragment>
                <h4>Plats</h4>
                <ul className="leaders">
                    {
                        dishes.map(function (dish, i) {
                            return (
                                <li key={i}>
                                    <span>{dish.name}</span>
                                    <span>{dish.price} €</span>
                                </li>
                            )
                        })
                    }
                </ul>
            </React.Fragment>
        )
    }
}