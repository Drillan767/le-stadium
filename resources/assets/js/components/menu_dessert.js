import React from 'react';

export default class Dessert extends React.Component {
    render() {
        const { desserts } = this.props;
        return (
            desserts !== null &&
            <div>
                <h4>Desserts</h4>
                {
                    desserts.map(function (dessert, i) {
                        return (
                            <div key={i}>
                                <h6>{dessert.name}</h6>
                                <p>{dessert.price}</p>
                            </div>
                        )
                    })
                }
            </div>
        )
    }
}