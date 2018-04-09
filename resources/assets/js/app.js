
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component(
    'v-main-nav',
    require('./components/MainNav.vue')
);

const app = new Vue({
    el: '#main',
    data: {
        drawer: true,
        navResources: [
            {name:'Track', faIcon:'headphones', route:"/tracks", active:false},
            {name:'Collection', faIcon:'dot-circle', route:"/collections", active:false},
            {name:'Artist', faIcon:'microphone', route:"/artists", active:false},
            {name:'Label', faIcon:'volume-up', route:"/labels", active:false}
        ]
    }
});
