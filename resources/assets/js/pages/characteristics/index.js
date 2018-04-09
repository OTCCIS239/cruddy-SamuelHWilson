import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.use(Vuetify);

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
    require('../../components/EditableChar.vue')
);

const app = new Vue({
    el: '#main',
    data: {
        drawer: false,
        filter: '',
        isEditing: false,
        testData: [
            {name:'Stunning Vocals'},
            {name:'Thoughtful Composition'},
            {name:'Unique Sampling'},
            {name:'Tasteful Vocal-Sampling'},
            {name:'Guitar'},
            {name:'Purposeful Progression'},
            {name:'Piano'},
            {name:'Unique Sound'},
            {name:'Hype'},
            {name:'Chill'},
            {name:'Engaging Lyrics'}
        ]
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
    }
});
