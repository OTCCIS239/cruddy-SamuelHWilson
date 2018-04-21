<template>
    <div>
        <v-select
            :items="selectItems"
            v-on:change='AddChar'
            :label='"Add Characteristic"'
            autocomplete
            id='charSel' 
        ></v-select> <!-- id is a workaround. TODO: Not this. -->
        <v-char-summary :chars='selectedChars' :action-icon='"times"' :action-event='"remove-char"' v-on:remove-char='RemoveChar'></v-char-summary>
    </div>
</template>

<script>
    export default {
        props: {
            searchableChars: {
                type: Array,
                default: function() {
                    return []
                }
            }
        },
        data: function() {
            return {
                selectedIDs: []
            }
        },
        computed: {
            selectItems: function(){
                var items = []
                this.searchableChars.forEach(function(char) {
                    if (!this.selectedIDs.includes(char.id)) {
                        items.push({'text': char.name, 'value': char.id})
                    }
                }, this)
                return items
            },
            selectedChars: function() {
                return this.searchableChars.filter(function(char) {
                    return this.selectedIDs.includes(char.id)
                }, this)
            }
        },
        methods: {
            AddChar: function(id) {
                this.selectedIDs.push(id)
                this.ClearValue()
            },
            RemoveChar: function(id) { // TODO: Fix bug pushing name up into select, when char is removed, sometimes.
                this.selectedIDs.splice(this.selectedIDs.indexOf(id), 1);
                this.ClearValue()
            },
            ClearValue: function() { //Workaround. TODO: Not this.
                this.$nextTick(function() {
                    document.getElementById('charSel').value = null 
                })
            }
        }
    }
</script>