<template>
    <div>
        <v-chip v-for='char in chars' :key='char.id' class='primary white--text'>{{ char.name }}</v-chip>
    </div>
</template>

<script>
    export default {
        props: {
            chars: { // { name: String, id: int }
                type: Array,
                default: []
            }
        }
    }
</script>