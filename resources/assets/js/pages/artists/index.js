import Vue from 'vue'

import Vuetify from 'vuetify'
Vue.use(Vuetify);

import VueResource from 'vue-resource'
Vue.use(VueResource);

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
        allArtists: [], 
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
    },
    mounted: function() {
        this.$http.get('/api/artists/list/summary').then(response => {
            this.allArtists = response.body;
        }, response => {
        });
    }
})