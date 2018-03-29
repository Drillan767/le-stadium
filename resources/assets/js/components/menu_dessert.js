import React from 'react';

export default class Dessert extends React.Component {
    render() {
        const { desserts } = this.props;
        return (
            desserts !== null &&
            <React.Fragment>
                <h4>Desserts</h4>
                <ul className="leaders">
                    {
                        desserts.map(function (dessert, i) {
                            return (
                                <li key={i}>
                                    <span>{dessert.name}</span>
                                    <span>{dessert.price}</span>
                                </li>
                            )
                        })
                    }
                </ul>

            </React.Fragment>
        )
    }
}