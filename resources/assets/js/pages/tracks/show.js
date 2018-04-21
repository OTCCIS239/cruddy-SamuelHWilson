import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify);

Vue.component(
    'v-main-nav',
    require('../../components/MainNav.vue')
)

Vue.component(
    'v-generics-summary',
    require('../../components/experimental/GenericsSummary.vue')
)
Vue.component(
    'v-char-summary',
    require('../../components/characteristics/CharacteristicsSummary.vue')
)
Vue.component(
    'v-char-summary',
    require('../../components/characteristics/CharacteristicsSummary.vue')
)

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        artists: [
            { name: 'Illenium', miscCount: 3, path: '#', id:'1' }
        ],
        vocalists: [
            { name: 'EDEN', miscCount: 2, id: '2' }
        ],
        collections: [
            { name: 'Awake', miscCount: 2, id: '0'}
        ],
        labels: [
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