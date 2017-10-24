
require('./bootstrap');

import RootComponent from './root';
import Vue from 'vue';
import VueRouter from 'vue-router';
import { store } from './store';
import BootstrapVue from 'bootstrap-vue';

Vue.use(BootstrapVue);

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

// set up our global plugins and utilities
require('./app/boot');

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
