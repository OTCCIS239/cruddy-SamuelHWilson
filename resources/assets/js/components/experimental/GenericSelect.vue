<template>
    <div>
        <v-select
            :items="searchableNames"
            v-on:change='AddEntity'
            :label='"Add " + capEntName'
            autocomplete
        ></v-select>
        <p>test</p>
         <v-generics-summary :ent-name='entName' :count-string='countString' :entities='addedEntities' ></v-generics-summary> 
    </div>
</template>

<script>
    export default {
        props: {
            searchableEntities: {
                type: Array,
                default: function() {
                    return []
                }
            },
            addedEntities: {
                type: Array,
                default: function() {
                    return []
                }
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
        computed: {
            searchableNames: function() {
                var names = []
                this.searchableEntities.forEach(function(entity) {
                    names.push({ 'text': entity.name, 'value': entity.id})   
                });
                return names
            },
            capEntName: function() {
                return this.entName.substring(0, 1).toUpperCase() + this.entName.substring(1)
            }
        },
        methods: {
            AddEntity: function(id) {
                this.addedEntities.push(this.searchableEntities.find(function(entity) {
                    return entity.id = id
                }))
            }
        }
    }
</script>