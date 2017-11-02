
//require('./bootstrap');

import RootComponent from './root';
import Vue from 'vue';
import VueRouter from 'vue-router';
import VueMask from 'v-mask';
import { store } from './store';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);
Vue.use(BootstrapVue);
Vue.use(VueMask);

Vue.config.devtools = true;

// set up our global plugins and utilities
require('./app/boot');

// set up the router
import routes from './app/routes';

const router = new VueRouter({
    base: __dirname,
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 360 };
    },
});

// instantiate our application and mount it to the dom
/* eslint-disable no-new */

new Vue({
    render: h => h(RootComponent),
    store : store,
    el: '#app',
    router,
});
