@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm1></v-flex>
    <v-flex sm5>
        <div class="pa-4">
            <h2 class='title mb-2'>Manage Characteristics</h2>
            <v-text-field 
                label="Filter by Name"
                v-model='filter'
            ></v-text-field>
            <v-layout row>
                <v-flex xs12 v-if='!isEditing'>
                    <v-btn style='width: 100%' color='error' @click='isEditing=true'>Delete Characteristics</v-btn>
                </v-flex>
                <v-flex xs6 v-if='isEditing' class='px-1'>
                    <v-btn style='width: 100%' class='grey darken-1 white--text' text-color='white' v-on:click='isEditing=false'>Cancel</v-btn>
                </v-flex>
                <v-flex xs6 v-if='isEditing' class='px-1'>
                    <v-btn style='width: 100%' class='red white--text'>Delete Selected</v-btn>
                </v-flex>
        </div>
    </v-flex>
    <v-flex sm5>
        <div class="pa-4">
        <h2 class='title mb-2'>All Characteristics</h2>
            <v-editable-char v-for='char in showChars' 
                             :char='char' 
                             :is-editing='isEditing'>
            </v-editable-char>
        </div>
    </v-flex>
    <v-flex sm1></v-flex>    
</v-layout>

@endsection

@section('vue-inst')

<script src="/js/pages/characteristics/index.js"></script>

@endsection