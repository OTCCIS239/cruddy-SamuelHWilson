import Vue from 'vue'

import Vuetify from 'vuetify'
Vue.use(Vuetify);

import VueResource from 'vue-resource'
Vue.use(VueResource);

Vue.component(
    'v-main-nav',
    require('../../components/MainNav.vue')
);

Vue.component(
    'v-removable-chars',
    require('../../components/CharsViewRemovable.vue')
);
Vue.component(
    'v-editable-char',
    require('../../components/SelectableChar.vue')
);

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        filter: '',
        isEditing: false,
        testData: []
    },
    computed: {
        showChars: function() {
            if (this.filter != '') {
                var sp = []
                this.testData.forEach(char => {
                    if (char.name.match(this.filterRegex)) {
                        sp.push(char);
                    }
                })
                return sp
            } else {
                return this.testData
            }
        },
        filterRegex: function() {
            return new RegExp(this.filter + "*", 'i')
        }
    },
    mounted: function() {
        this.$http.get('/api/characteristics/list/all').then(response => {
            this.testData = response.body;
        }, response => {
        });
    }
});
