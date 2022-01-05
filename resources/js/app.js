require('./bootstrap');
import router from './route';
import VueRouter from "vue-router";
import Index from './Index';
import axios from 'axios';


window.Vue = require('vue').default;
Vue.use(VueRouter);
Vue.prototype.$http = axios;

const app = new Vue({
    el: '#app',
    router,
    components: {
        "index": Index
    }
});
