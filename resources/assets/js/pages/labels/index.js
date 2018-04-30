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
        allLabels: [], 
        showLabels: []
    },
    methods: {
        LinkToLabel: function(name) {
            window.location = '/labels/id-here'
        }
    },
    computed: {
        filterRegex: function() {
            return new RegExp(this.filter + '*', 'i')
        },
        filteredLabels: function() {
            if (this.filter.length > 0) {
                var a = []
                this.allLabels.forEach(entity => {
                    if (entity.name.match(this.filterRegex)) a.push(entity)
                })
                return a
            }else {
                return this.allLabels
            }
        }
    },
    mounted: function() {
        this.$http.get('/api/labels/list/summary').then(response => {
            this.allLabels = response.body;
        }, response => {
        });
    }
})