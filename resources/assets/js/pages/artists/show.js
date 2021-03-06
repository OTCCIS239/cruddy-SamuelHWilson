import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify);

Vue.component(
    'v-main-nav',
    require('../../components/MainNav.vue')
)

Vue.component(
    'v-generics-summary',
    require('../../components/generics/GenericsSummary.vue')
)
Vue.component(
    'v-entity-select-dialog',
    require('../../components/generics/GenericSelectDialog.vue')
)
Vue.component(
    'v-tracks-summary',
    require('../../components/tracks/TracksSummary.vue')
)

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        showAddArtist: false,
        showAddLabel: false,
        releaseDate: '',
        signedLabels: [
            { name: 'Bitbird Radio', miscCount: 4, path: '#' },
        ],
        producedTracks: [
            { name: 'zZz', artists: [ {name:'Droeloe'} ], vocalists: [ ], chars: ['Unique Sampling', 'Thoughtful Progression'] }
        ],
        featuredTracks: [

        ]
    },
    methods: {
        AddArtist: function(name) {
            console.log(name)
        },
        Test: function() {
            console.log('ran')
        }
    }
})