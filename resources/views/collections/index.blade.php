@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm2>
    </v-flex>
    <v-flex sm4>
        <h2 class='headline text-center mt-3'>Collections</h2>
        <v-generics-summary :ent-name='"collection"' :entities='filteredCollections' :trigger-event='"collection-clicked"' v-on:collection-clicked='LinkToCollection' class='mt-2'></v-generics-summary>
    </v-flex>
    <v-flex sm4>
        <h2 class='headline text-center mt-3'>Filter Collections</h2>
        <v-text-field style='width:75%' v-model='filter' collection='Filter by Name' class='mt-2' label='Filter by Name'></v-text-field>
    </v-flex>
    <v-flex sm2>
    </v-flex>
</v-layout>

@endsection

@section('vue-inst')

<script src="/js/pages/collections/index.js"></script>

@endsection