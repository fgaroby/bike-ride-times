import Vue from 'vue';
import MyMap from './components/MyMap.vue';

require('./bootstrap');
require('leaflet/dist/leaflet.js');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: {
        MyMap,
    }
  });
