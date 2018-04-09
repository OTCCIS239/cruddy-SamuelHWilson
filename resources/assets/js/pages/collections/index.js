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
        allCollections: [
            { name: 'Awake', miscCount: 2, path: '#' },
            { name: 'A Moment In Time', miscCount: 1, path: '#' }
        ], 
        showCollections: []
    },
    methods: {
        LinkToCollection: function(name) {
            window.location = '/collections/id-here'
        }
    },
    computed: {
        filterRegex: function() {
            return new RegExp(this.filter + '*', 'i')
        },
        filteredCollections: function() {
            if (this.filter.length > 0) {
                var a = []
                this.allCollections.forEach(entity => {
                    if (entity.name.match(this.filterRegex)) a.push(entity)
                })
                return a
            }else {
                return this.allCollections
            }
        }
    }
})