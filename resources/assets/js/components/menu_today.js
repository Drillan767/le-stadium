import React from 'react';

export default class Today extends React.Component {
    render() {
        const { dish, price } =this.props;
        return (
            <div className="row">
                <div className="col-md-8 offset-md-2">
                    <h4>Menu du jour</h4>
                    <ul className="leaders today">
                        {
                            (dish && price) &&
                            <li>
                                <span>{dish}</span>
                                <span>{price} €</span>
                            </li>
                        }
                    </ul>
                </div>

            </div>

        )
    }
}