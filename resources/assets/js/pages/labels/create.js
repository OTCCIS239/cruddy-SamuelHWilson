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
    'v-generic-select',
    require('../../components/experimental/GenericSelect.vue')
)
Vue.component(
    'v-generics-summary',
    require('../../components/experimental/GenericsSummary.vue')
)
Vue.component(
    'v-entity-select-dialog',
    require('../../components/generics/GenericSelectDialog.vue')
)
Vue.component(
    'v-tracks-summary',
    require('../../components/tracks/TracksSummary.vue')
)
Vue.component(
    'v-tracks-select',
    require('../../components/tracks/TracksSelect.vue')
)

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        showAddArtist: false,
        searchableArtists: [], //Filled by AJAX
        searchableTracks: [], //Filled by AJAX
        selectedArtists: [], //Autofilled
        selectedTracks: [], //Autofilled
        name: ''
    },
    methods: {
        AddArtist: function(name) {
            console.log(name)
        },
        Test: function() {
            console.log('ran')
        },
        HandleChangedArtists: function(selectedArtists) {
            this.selectedArtists = selectedArtists.join('s');
        },
        HandleChangedTracks: function(selectedTracks) {
            this.selectedTracks = selectedTracks.join('s');
        },
        DBAddLabel: function(selectedTracks) {
            this.$http.post('/api/labels/store/', {'name': this.name, 'artists': this.selectedArtists, 'tracks': this.selectedTracks})
        }
    },
    mounted: function() {
        this.$http.get('/api/artists/list/summary').then(response => {
            this.searchableArtists = response.body;
        }, response => {
        });
        this.$http.get('/api/tracks/list/').then(response => {
            this.searchableTracks = response.body;
        }, response => {
        });
    }
})