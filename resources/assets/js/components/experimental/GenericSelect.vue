<template>
    <div>
        <v-select
            :items="selectItems"
            v-on:change='AddEntity'
            :label='"Add " + capEntName'
            autocomplete
            :id='entName' 
        ></v-select> <!-- id is a workaround. TODO: Not this. -->
        <v-generics-summary :ent-name='entName' 
                            :count-string='countString' 
                            :entities='selectedEntities' 
                            :action-btn-icon='"times-circle"' 
                            :action-btn-event='"remove-entity"'
                            v-on:remove-entity='RemoveEntity'>
        </v-generics-summary> 
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
                selectedIDs: [],
                selected: null
            }
        },
        computed: {
            capEntName: function() {
                return this.entName.substring(0, 1).toUpperCase() + this.entName.substring(1)
            },
            selectItems: function(){
                var items = []
                this.searchableEntities.forEach(function(entity) {
                    if (!this.selectedIDs.includes(entity.id)) {
                        items.push({'text': entity.name, 'value': entity.id})
                    }
                }, this)
                return items
            },
            selectedEntities: function() {
                return this.searchableEntities.filter(function(entity) {
                    return this.selectedIDs.includes(entity.id)
                }, this)
            }
        },
        methods: {
            AddEntity: function(id) {
                this.selectedIDs.push(id)
                console.log(this.entName)
                this.ClearValue()
            },
            RemoveEntity: function(id) { // TODO: Fix bug pushing name up into select, when entity is removed, sometimes.
                this.selectedIDs.splice(this.selectedIDs.indexOf(id), 1);
                this.ClearValue()
            },
            ClearValue: function() { //Workaround. TODO: Not this.
                this.$nextTick(function() {
                    document.getElementById(this.entName).value = null 
                })
            }
        }
    }
</script>