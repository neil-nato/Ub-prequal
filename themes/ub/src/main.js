import RootComponent from './root';
import Vue from 'vue';
import VueRouter from 'vue-router';
import { store } from './store';


//components import
import welcome from './components/welcome';
import info from './components/info.vue';
import contact from './components/contact.vue';
import compare from './components/compare.vue';
import loanCalculator from './components/loancalculator.vue';
import zeroPromo from './components/zeropromo.vue';
import promo from './components/promo.vue';
import faq from './components/faq.vue';

// set up our global plugins and utilities
require('./app/boot');

// common


//components

Vue.component('welcome', welcome );
Vue.component('info', info);
Vue.component('contact', contact );
Vue.component('compare', compare );
Vue.component('loan-calculator', loanCalculator );
Vue.component('zero-promo', zeroPromo );
Vue.component('promo', promo );
Vue.component('faq', faq );


// set up the router
import routes from './app/routes';

const router = new VueRouter({
    base: __dirname,
    mode: 'history',
    routes,
});

// instantiate our application and mount it to the dom
/* eslint-disable no-new */

new Vue({
    render: h => h(RootComponent),
    store : store,
    el: '#app',
    router,
});
