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

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        filter: '',
        allArtists: [
            { name: 'Droeloe', miscCount: 5, path: '#' },
            { name: 'Illenium', miscCount: 3, path: '#' }
        ], 
        showArtists: []
    },
    methods: {
        LinkToArtist: function(name) {
            window.location = '/artists/id-here'
        }
    },
    computed: {
        filterRegex: function() {
            return new RegExp(this.filter + '*', 'i')
        },
        filteredArtists: function() {
            if (this.filter.length > 0) {
                var a = []
                this.allArtists.forEach(entity => {
                    if (entity.name.match(this.filterRegex)) a.push(entity)
                })
                return a
            }else {
                return this.allArtists
            }
        }
    }
})