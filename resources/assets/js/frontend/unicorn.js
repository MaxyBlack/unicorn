var Vue = require('vue');
Vue.use(require('vue-resource'));
Vue.use(require('vue-router'));
Vue.config.debug = true; // Comment this line for production

let Unicorn = window.Unicorn;

new Vue({
    el: '#unicorn',
    created: function() {

    },
    data: {
        Unicorn
    },
    components: require('./components') // You can just inline them, but I recommend putting them in their own file
});