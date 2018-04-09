@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm2>
    </v-flex>
    <v-flex sm4>
        <h2 class='headline text-center mt-3'>Artists</h2>
        <v-generics-summary :ent-name='"artist"' :entities='filteredArtists' :trigger-event='"artist-clicked"' v-on:artist-clicked='LinkToArtist' class='mt-2'></v-generics-summary>
    </v-flex>
    <v-flex sm4>
        <h2 class='headline text-center mt-3'>Filter Artists</h2>
        <v-text-field style='width:75%' v-model='filter' artist='Filter by Name' class='mt-2' label='Filter by Name'></v-text-field>
    </v-flex>
    <v-flex sm2>
    </v-flex>
</v-layout>

@endsection

@section('vue-inst')

<script src="/js/pages/artists/index.js"></script>

@endsection