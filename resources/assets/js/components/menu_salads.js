import React from 'react';

export default class Salad extends React.Component {
    render() {
        const { salads } = this.props;
        return (
            salads !== null &&
            <React.Fragment>
                <h4>Salades</h4>
                <ul className="leaders" >
                    {
                        salads.map(function (salad, i) {
                            return (
                                <li key={i}>
                                    <span>{salad.name}</span>
                                    <span>{salad.price} €</span>
                                </li>
                            )
                        })
                    }
                </ul>
            </React.Fragment>
        )
    }
}