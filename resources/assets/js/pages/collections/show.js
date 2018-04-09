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
        contributingArtists: [
            { name: 'Illenium', miscCount: 3, path: '#' }
        ],
        publishingLabels: [
            { name: 'Seeking Blue', miscCount: 2, path: '#' },
            { name: 'Kasaya', miscCount: 2, path: '#' }
        ],
        includedTracks: [
            { name: 'Fractures', artists: [ {name:'Illenium'} ], vocalists: [ {name:'Nevve'} ], chars: ['Guitar', 'Stunning Vocals'] }
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