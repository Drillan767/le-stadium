import React from 'react';

export default class Today extends React.Component {
    render() {
        const { dish, price } =this.props;
        return (
            <React.Fragment>
                <h4>Menu du jour</h4>
                <ul className="leaders">
                    {
                        (dish && price) &&
                        <li>
                            <span>{dish}</span>
                            <span>{price} €</span>
                        </li>
                    }
                </ul>
            </React.Fragment>

        )
    }
}