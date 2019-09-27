require('./bootstrap');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

Vue.component(
    'follow-component',
    require('./components/FollowComponent.vue').default
);

const app = new Vue({
    el: '#app'
});
