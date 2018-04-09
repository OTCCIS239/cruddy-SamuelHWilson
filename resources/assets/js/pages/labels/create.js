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
        testData: [
            { name: 'Droeloe', miscCount: 5, path: '#' },
            { name: 'Illenium', miscCount: 3, path: '#' }
        ],
        testTracks: [
            { name: 'Lines of the Broken', artists: [ {name:'Droeloe'}, {name:'San Holo'} ], vocalists: [ {name:'_CUT'} ], chars: ['Thoughtful Progression', 'Hype'] },
            { name: 'Lines of the Broken', artists: [ {name:'Droeloe'}, {name:'San Holo'} ], vocalists: [ {name:'_CUT'} ], chars: ['Thoughtful Progression', 'Hype'] },
            { name: 'Lines of the Broken', artists: [ {name:'Droeloe'}, {name:'San Holo'} ], vocalists: [ {name:'_CUT'} ], chars: ['Thoughtful Progression', 'Hype'] },
            { name: 'Lines of the Broken', artists: [ {name:'Droeloe'}, {name:'San Holo'} ], vocalists: [ {name:'_CUT'} ], chars: ['Thoughtful Progression', 'Hype'] },
            { name: 'Lines of the Broken', artists: [ {name:'Droeloe'}, {name:'San Holo'} ], vocalists: [ {name:'_CUT'} ], chars: ['Thoughtful Progression', 'Hype'] },
            { name: 'Lines of the Broken', artists: [ {name:'Droeloe'}, {name:'San Holo'} ], vocalists: [ {name:'_CUT'} ], chars: ['Thoughtful Progression', 'Hype'] },
            { name: 'Lines of the Broken', artists: [ {name:'Droeloe'}, {name:'San Holo'} ], vocalists: [ {name:'_CUT'} ], chars: ['Thoughtful Progression', 'Hype'] }
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