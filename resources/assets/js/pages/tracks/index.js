
import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify);

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
        tracks: [
            { name: 'Fractures', artists: [ {name:'Illenium'} ], vocalists: [ {name:'Nevve'} ], chars: ['Guitar', 'Stunning Vocals'], id: '0' },
            { name: 'zZz', artists: [ {name:'Droeloe'} ], vocalists: [], chars: ['Unique Sampling', 'Thoughtful Progression'], id: '1' }
        ]
    }
});
