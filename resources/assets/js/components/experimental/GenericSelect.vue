<template>
    <div>
        <v-select
            :items="selectItems"
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
        data: function() {
            return {
                selectItems: []
            }
        },
        computed: {
            capEntName: function() {
                return this.entName.substring(0, 1).toUpperCase() + this.entName.substring(1)
            }
        },
        watch: {
            searchableEntities: function() {
                var names = []
                this.searchableEntities.forEach(function(entity) {
                    names.push({ 'text': entity.name, 'value': entity.id, 'disabled': false})   
                });
                this.selectItems = names
            },
        },
        methods: {
            AddEntity: function(id) {
                this.addedEntities.push(this.searchableEntities.find(function(entity) {
                    return entity.id == id
                }))
                this.selectItems.find(function(item) {
                    return item.id == id
                }).disabled = true
            }
        }
    }
</script>