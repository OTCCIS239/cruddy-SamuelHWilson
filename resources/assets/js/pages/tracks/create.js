import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify);

Vue.component(
    'v-main-nav',
    require('../../components/MainNav.vue')
)

Vue.component(
    'v-generic-select',
    require('../../components/experimental/GenericSelect.vue')
)
Vue.component(
    'v-generics-summary',
    require('../../components/experimental/GenericsSummary.vue')
)
Vue.component(
    'v-tracks-summary',
    require('../../components/tracks/TracksSummary.vue')
)
Vue.component(
    'v-char-summary',
    require('../../components/characteristics/CharacteristicsSummary.vue')
)
Vue.component(
    'v-char-select',
    require('../../components/characteristics/CharacteristicSelect.vue')
)

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        searchableArtists: [
            { name: 'Droeloe', miscCount: 5, path: '#', id:'0' },
            { name: 'Illenium', miscCount: 3, path: '#', id:'1' }
        ],
        searchableVocalists: [
            { name: 'EDEN', miscCount: 2, id: '2' },
            { name: 'Laura Brehm', miscCount: 3, id: '3' }
        ],
        searchableCollections: [
            { name: 'Awake', miscCount: 2, id: '0'},
            { name: 'A Moment in Time', miscCount: 1, id: '1'}
        ],
        searchableLabels: [
            { name: 'Bitbird Radio', miscCount: 4, id:'0' },
            { name: 'Seeking Blue', miscCount: 2, id:'1'  },
            { name: 'Kasaya', miscCount: 2, id:'2' }
        ],
        chars: [
            { name: 'Stunning Vocals', id: 0 },
            { name: 'Thoughtful Progression', id: 1 },
            { name: 'Piano', id: 2 },
            { name: 'Powerful Mood', id: 3 },
            { name: 'Compelling Drop', id: 4 }
        ]
    },
    methods: {
        
    }
})