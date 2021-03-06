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
        allCollections: [], 
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
    },
    mounted: function() {
        this.$http.get('/api/collections/list/summary').then(response => {
            this.allCollections = response.body;
        }, response => {
        });
    }
})