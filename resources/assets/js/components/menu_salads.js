import React from 'react';

export default class Salad extends React.Component {
    render() {
        const { salads } = this.props;
        return (
            salads !== null &&
            <div>
                <h4>Salades</h4>
                {
                    salads.map(function (salad, i) {
                        return (
                            <div key={i}>
                                <h6>{salad.name}</h6>
                                <p>{salad.price}</p>
                            </div>
                        )
                    })
                }
            </div>
        )
    }
}