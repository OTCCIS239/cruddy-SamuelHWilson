@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Basic Info</h2>
            <v-avatar style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'>
                <img src='../../img/bitbird.jpg'>
            </v-avatar>
            <h3 class='title text-xs-center mt-2'>@{{name}}</h3>

            <h3 class='subheading text-center mt-3'>Signed Artists</h3>
            
            <v-generics-summary :ent-name='"artist"' :entities='signedArtists' class='mt-1' v-on:request-add-artist='showAddArtist = true'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm8>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Published Tracks</h2>   
            <v-tracks-summary :tracks='publishedTracks' :size='"220px"' class='mt-2'></v-tracks-summary>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script>
    mainID = {{$id}}
</script>

<script src="/js/pages/labels/show.js"></script>

@endsection