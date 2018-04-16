<template>
    <div>
        <v-dialog fullscreen
            transition="dialog-bottom-transition"
            scrollable>
            <v-card>
                <v-container>
                    <v-layout row>
                        <v-flex sm6>

                        </v-flex>
                        <v-flex sm6>

                        </v-flex>
                    </v-layout>
                </v-container>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    export default {
        props: {
            sourceEntities: {
                type: Array,
                default: function() {
                    return []
                }
            }
        },
        data: function() {
            return {
                selectedEntities: []
            }
        }
    }
</script>