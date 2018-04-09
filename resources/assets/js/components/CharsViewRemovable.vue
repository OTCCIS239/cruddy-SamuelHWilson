<template>
    <div>
        <v-editable-char v-for='char in chars' 
                         v-on:target-char='TargetChar'
                         :key='char.name' 
                         :char='char' 
                         :is-editing='isEditing'>
        </v-editable-char>
    </div>
</template>

<script>
    export default {
        props: {
            chars: {
                type: Array,
                default: []
            },
            filter: {
                type: String,
                default: ''
            },
            isEditing: {
                type: Boolean,
                default: false
            }
        },
        data: function() {
            return {
                toRemove:[]
            }
        },
        computed: {
            showChars: function() {
                if (this.filter != '') {
                    this.sp = []
                    this.chars.forEach(char => {
                        console.log(this.filterRegex)
                        console.log(/*test*/)
                        if (char.name.match(this.filterRegex)) {
                            this.sp.push(char);
                        }
                    })
                    return this.sp
                } else {
                    return this.chars
                }
            },
            filterRegex: function() {
                return new RegExp(this.filter + "*", 'i')
            }
        },
        methods: {
            TargetChar(name) {
                this.toRemove.push(name)
            },
            UndoTargetChar(name) {
                this.toRemove = ary.filter(e => e !== name)
            }
        },
        watch: {
            isEditing: function() {
                if (this.isEditing == false) {
                    this.toRemove = [];
                }
            }
        }
    }
</script>