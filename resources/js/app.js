require('./bootstrap');

window.Vue = require('vue').default;
import router from './routes'
import store from './store'

Vue.component('dashboard-component', require('./pages/Dashboard.vue').default);

const app = new Vue({
    el: '#app',
    router: router,
    store
});
