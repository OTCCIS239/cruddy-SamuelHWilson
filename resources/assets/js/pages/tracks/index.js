
import Vue from 'vue'

import Vuetify from 'vuetify'
Vue.use(Vuetify);

import VueResource from 'vue-resource'
Vue.use(VueResource);

Vue.component(
    'v-main-nav',
    require('../../components/MainNav.vue')
);
Vue.component(
    'v-tracks-summary',
    require('../../components/tracks/TracksSummary.vue')
);

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        nameFilter: '',
        tracks: []
    },
    mounted: function() {
        this.$http.get('/api/tracks/list/').then(response => {
            this.tracks = response.body;
        }, response => {
        });
    }
});
