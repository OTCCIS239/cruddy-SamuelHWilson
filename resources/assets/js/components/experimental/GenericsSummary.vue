<!-- Made to summarize any entity with: 1) a name 2) a picture and 3) any countable quality.<template>
     This includes Artists, Vocalists (A subset of artist), Labels, and Albums -->
<template>
    <v-list two-line>
        <!-- Only shows up if array is empty. -->
        <div v-if='isEmpty'>
            <v-divider></v-divider>
            <v-list-tile avatar>
                <v-list-tile-avatar>
                    <i class='fas fa-ellipsis-h grey--text'></i>
                </v-list-tile-avatar>
                <v-list-tile-content class='grey--text'>
                    <v-list-tile-title>No {{ capEntName + 's' }} Here</v-list-tile-title>
                    <v-list-tile-sub-title>Not yet anyways.</v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
        </div>

        <!-- Shows all entities in array. -->
        <div v-for='entity in entities' :key='entity.name'>
            <v-divider></v-divider>
            <v-list-tile avatar @click='$emit(triggerEvent, entity.name)' >
                <v-list-tile-avatar>
                    <img src="https://via.placeholder.com/200x200">
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>{{ entity.name }}</v-list-tile-title>
                    <v-list-tile-sub-title><span class='text--primary'><span class='body-2' :class='GradeColor(entity.miscCount)'>{{ entity.miscCount }}</span> {{ countString }}</span></v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
        </div>

        <!-- Add new entity. Only shows up if specified. -->
        <div v-if='showNew'>
            <v-divider></v-divider>
            <v-list-tile avatar @click='$emit("request-add-" + entName)'>
                <v-list-tile-avatar>
                    <i class='fas fa-plus fa-lg'></i>
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>Add {{ capEntName }}</v-list-tile-title>
                    <v-list-tile-sub-title><span class='text--primary'>existing, or new</span></v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
        </div>
    </v-list>
</template>

<script>
    export default {
        props: {
            entities: {
                type: Array,
                default: function() {
                    return []
                }
            },
            showNew: {
                type: Boolean,
                default: false
            },
            triggerEvent: {
                type: String,
                default: 'nav-to-artist'
            },
            entName: {
                type: String,
                default: 'artist'
            },
            countString: {
                type: String,
                default: 'tracks curated.'
            }
        },
        methods: {
            GradeColor: function(count) {
                var color = 'brown--text darken-4'
                if (count > 1) color = 'grey--text darken-1'
                if (count > 3) color = 'amber--text accent-4'
                return color
            }
        },
        computed: {
            isEmpty: function() {
                return this.entities.length == 0
            },
            capEntName: function() {
                return this.entName.substring(0, 1).toUpperCase() + this.entName.substring(1)
            }
        }
    }
</script>