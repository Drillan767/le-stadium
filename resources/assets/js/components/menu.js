import React from 'react';
import Today from './menu_today';
import Salad from './menu_salads';
import Dish from './menu_dish';
import Dessert from './menu_dessert';

export default class Menu extends React.Component {
    render() {

        const {today_dish, today_price, menu} = this.props;
        let salads = menu.filter(m => m.category === 'salade'),
            desserts = menu.filter(m => m.category === 'dessert'),
            dishes = menu.filter(m => m.category === 'plat');

        return (
            <div id="menu">
                <div className="row">
                    <div className="col-sm-12 main-title">
                        <h1 className="main-title offset-md-1">Menu</h1>
                    </div>
                </div>
                {
                    (today_dish && today_price) &&
                    <Today dish={today_dish} price={today_price} />
                }

                <div className="row">
                    <div className="col-md-5 offset-md-2">
                        {
                            dishes !== null &&
                            <Dish dishes={dishes} />

                        }

                        {
                            salads !== null &&
                            <Salad salads={salads} />
                        }
                    </div>
                    <div className="col-md-3">
                        {
                            dishes !== null &&
                            <Dessert desserts={desserts} />
                        }
                    </div>
                </div>
            </div>
        )
    }
}

// https://themeofthecrop.com/2014/07/31/achieve-complex-menu-layouts-food-drink-menu/