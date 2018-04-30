<template>
    <div>
        <v-select
            :items="selectItems"
            v-on:change='AddTrack'
            :label='"Add a Track"'
            autocomplete
            :id='"artistSelect"' 
        ></v-select> <!-- id is a workaround. TODO: Not this. -->
        <v-tracks-summary :size='size' 
                          :tracks='selectedTracks'
                          :actionIcon='"trash"'
                          :actionEvent='"remove-track"'
                          v-on:remove-track='RemoveTrack'>
        </v-tracks-summary>
        <!-- <v-btn><i class='fas fa-plus fa-lg mr-2'></i>Add Track</v-btn>         -->
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                selectedIDs: []
            }
        },
        props: {
            searchableTracks: {
                type: Array,
                default: function() {
                    return []
                }
            },
            size: {
                type: String,
                default: '220px'
            },
            changeEvent: {
                type: String,
                default: ''
            }
        },
        computed: {
            selectItems: function(){
                var items = []
                this.searchableTracks.forEach(function(track) {
                    if (!this.selectedIDs.includes(track.id)) {
                        items.push({'text': track.name, 'value': track.id})
                    }
                }, this)
                return items
            },
            selectedTracks: function() {
                return this.searchableTracks.filter(function(track) {
                    return this.selectedIDs.includes(track.id)
                }, this)
            }
        },
        methods: {
            AddTrack: function(id) {
                this.selectedIDs.push(id)
                this.$emit(this.changeEvent, this.selectedIDs)
                this.ClearValue()
            },
            RemoveTrack(id) {
                this.selectedIDs.splice(this.selectedIDs.indexOf(id), 1);
                this.$emit(this.changeEvent, this.selectedIDs);                
                this.ClearValue()
            },
            ClearValue: function() { //Workaround. TODO: Not this.
                this.$nextTick(function() {
                    document.getElementById('artistSelect').value = null 
                })
            }
        }
    }
</script>