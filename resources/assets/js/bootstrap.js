window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    window.moment = require('moment');
    require('moment/locale/es');
    moment.locale('es');
} catch (e) {}


