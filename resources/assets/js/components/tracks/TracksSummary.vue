<template>
    <div>
        <div>
            <v-card
                v-for='track in tracks'
                :key='track.name'
                :style='{ width: size }'
                class='d-inline-block mr-3 mb-3'>
                <v-card-media
                    class="white--text"
                    :height='size'
                    src="https://via.placeholder.com/200x200">
                    <v-container fill-height fluid>
                        <v-layout fill-height>
                            <v-flex xs12 align-end flexbox>
                                <div style='background-color:rgba(0,0,0,0.4)' class='pa-1'><span>{{ OneLiner(track) }}</span></div>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-card-media>
                <v-card-title class='py-1'>
                    <v-chip class='d-block mx-auto' color='primary white--text'>{{ track.chars[0] }}</v-chip>
                </v-card-title>
                <v-card-title class='pb-1 pt-0'>
                    <v-chip class='d-block mx-auto' color='primary white--text'>{{ track.chars[1] }}</v-chip>
                </v-card-title>
            </v-card>
        </div>

        <!-- Option to add new track. Only shows when specified. -->
        <v-btn v-if='showNew'><i class='fas fa-plus fa-lg mr-2'></i>Add Track</v-btn>
    </div>
</template>

<script>
    export default {
        props: {
            tracks: {
                type: Array,
                default: function() {
                    return []
                }
            },
            size: {
                type: String,
                default: '220px'
            },
            showNew: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            
        },
        methods: {
            OneLiner: function(track) {
                var s = ''
                s += track.artists[0].name
                for (var i = 1; i < track.artists.length; i++) {
                    s += ' x ' + track.artists[i].name
                }
                s += ' - '
                s += track.name
                if (track.vocalists.length > 0) {
                    s+= ' (ft. '
                    s += track.vocalists[0].name
                    for (var i = 1; i < track.vocalists.length; i++) {
                        s += ', ' + track.vocalists[i].name
                    }
                    s += ')'
                }

                return s
            }
        }
    }
</script>