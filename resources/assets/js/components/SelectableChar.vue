<template>
    <div class='d-inline-block'>
        <v-chip v-if='!isEditing' color="primary" text-color="white">{{this.char.name}}</v-chip>
        <v-chip v-if='isEditing'  
                @click='SmartSelect'
                :color='color'
                text-color="white">
            {{this.char.name}} 
            <div v-show='!isSelected'><i class='fas fa-lg ml-2 fa-times-circle' ></i></div>
            <div  v-show='isSelected'><i class='fas fa-lg ml-2 fa-undo-alt'></i></div>
        </v-chip>
    </div>
</template>

<script>
    export default {
        props: {
            isEditing: {
                type: Boolean,
                default: false
            },
            isSelected: {
                type: Boolean,
                default: false
            },
            char: {
                type: Object
            }
        },
        data: function() {
            return {
                
            }
        },
        methods: {
            SmartSelect: function(event) {
                if (!this.isSelected) {
                    this.isSelected = true;
                    this.$emit('target-char', this.char.name)
                } else {
                    this.isSelected = false;
                    this.$emit('undo-target-char', this.char.name)
                }
            },
            testName: function(regex) {
                return this.char.name.test(regex)
            }
        },
        computed: {
            color: function() {
                return this.isSelected ? 'red' : 'grey darken-1'
            },
            icon: function() {
                return this.isSelected ? 'undo-alt' : 'times-circle' 
            }
        },
        watch: {
            isEditing: function() {
                if (this.isEditing == false) {
                    this.isSelected = false
                }
            }
        }
    }
</script>