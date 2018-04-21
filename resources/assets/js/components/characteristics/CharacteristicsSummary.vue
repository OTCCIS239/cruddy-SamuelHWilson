<template>
    <div>
        <v-chip v-for='char in chars' @click='$emit(actionEvent, char.id)' :key='char.id' class='primary white--text'>{{ char.name }} <i v-if='actionIcon!=""' class='fas black--text ml-2' :class='"fa-" + actionIcon'></i></v-chip>
        <v-chip v-if='chars.length==0' class='grey lighten-2 white--text'>None Yet</v-chip>
    </div>
</template>

<script>
    export default {
        props: {
            chars: { // { name: String, id: int }
                type: Array,
                default: []
            },
            actionIcon: {
                type: String,
                default: ''
            },
            actionEvent: {
                type: String,
                default: ''
            }
        }
    }
</script>