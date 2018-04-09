@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='title text-center mt-3'>Basic Info</h2>
            <v-avatar style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'>
                <img src='../../img/bitbird.jpg'>
            </v-avatar>
            <h3 class='subheading text-xs-center mt-2'>Bitbird Radio</h3>

            <h2 class='title text-center mt-3'>Signed Artists</h2>
            
            <v-generics-summary :ent-name='"artist"' :entities='signedArtists' class='mt-2' v-on:request-add-artist='showAddArtist = true'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm8>
        <div class="pa-2 pl-5">
            <h2 class='title text-center mt-3'>Published Tracks</h2>   
            <v-tracks-summary :tracks='publishedTracks' :size='"220px"' class='mt-2'></v-tracks-summary>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/labels/show.js"></script>

@endsection