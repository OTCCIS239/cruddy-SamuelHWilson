@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm2>
    </v-flex>
    <v-flex sm4>
        <h2 class='headline text-center mt-3'>Labels</h2>
        <v-generics-summary :ent-name='"label"' :entities='filteredLabels' :trigger-event='"label-clicked"' v-on:label-clicked='LinkToLabel' class='mt-2'></v-generics-summary>
    </v-flex>
    <v-flex sm4>
        <h2 class='headline text-center mt-3'>Filter Labels</h2>
        <v-text-field style='width:75%' v-model='filter' label='Filter by Name' class='mt-2'></v-text-field>
    </v-flex>
    <v-flex sm2>
    </v-flex>
</v-layout>

@endsection

@section('vue-inst')

<script src="/js/pages/labels/index.js"></script>

@endsection