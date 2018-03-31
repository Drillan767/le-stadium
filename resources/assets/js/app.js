import React from 'react';
import ReactDOM from 'react-dom';
import Stadium from './components'
import 'popper.js';
import 'bootstrap/dist/js/bootstrap.min';

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
});

ReactDOM.render(
  <Stadium />,
  document.getElementById('index')
);