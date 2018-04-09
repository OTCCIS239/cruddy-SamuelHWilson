@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Basic Info</h2> <!-- ==Basic Info== -->
            <v-avatar style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'>
                <img src="../../img/droeloe.jpg">
            </v-avatar>
            <h3 class='title text-xs-center mt-2'>Droeloe</h3>
            
            <h3 class='subheading mt-3'>Bio</h3>
            <p class='m-2'>A long bio would go here, but I don't have one yet. Isn't that sad. I'm just typing words now to fill space on the page. Sigh, this is irritating work.</p>

            <h3 class='subheading text-center mt-3'>Signed Labels</h3><!-- ==Publishing Labels== -->
            <v-generics-summary :ent-name='"label"' :entities='signedLabels' class='mt-2' v-on:request-add-label='showAddLabel = true'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm8>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Tracks Produced</h2>   
            <v-tracks-summary :size='"220px"' :tracks='producedTracks' class='mt-2'></v-tracks-summary>
        </div>
        <div v-if='featuredTracks.length > 0' class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Tracks as Featured Artist</h2>   
            <v-tracks-summary :size='"220px"' :tracks='featuredTracks' class='mt-2'></v-tracks-summary>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/artists/show.js"></script>

@endsection