<template>
    <v-dialog v-model='show' max-width="500px" persistent>
        <v-card>
            <v-card-title class='title'>Pick an {{ capEntName }}</v-card-title>
            <v-card-text>
                <p>Type (at least) three letters of the {{ entName }}'s name to search.</p>
                <v-text-field 
                    label="Search by Name"
                    v-model='filter'
                ></v-text-field>
                <v-generics-summary :entities='filteredEntities' :count-string='countString' :ent-name='entName' :trigger-event='"add-entity"' v-on:add-entity='ChainAddEntity'></v-generics-summary>
            </v-card-text>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" flat @click.native="$emit('close-' + entName + '-dialog')">Close</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
    export default {
       props: {
            allEntities: {
                type: Array,
                default: function() {
                    return []
                }
            },
            show: {
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
        data: function() {
            return {
                filter: ''
            }
        },
        methods: {
            ChainAddEntity: function(name) {
                this.$emit('add-' + this.entName, name)
            }
        },
        computed: {
            filterRegex: function() {
                return new RegExp(this.filter + '*', 'i')
            },
            filteredEntities: function() {
                if (this.filter.length > 2) {
                    var a = []
                    this.allEntities.forEach(entity => {
                        if (entity.name.match(this.filterRegex)) a.push(entity)
                    })
                    return a
                }else {
                    return []
                }
            },
            capEntName: function() {
                return this.entName.substring(0, 1).toUpperCase() + this.entName.substring(1)
            }
        }
    }
</script>