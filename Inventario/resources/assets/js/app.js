
require('./bootstrap');

window.Vue = require('vue');

import VSwitch from 'v-switch-case';

Vue.use(VSwitch);

Vue.component('layout', require('./components/Layout.vue'));

const app = new Vue({
    el: '#app'
});
