@extends('layouts.dashboard.crud')

@section('content')
<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Basic Info</h2> <!-- ==Basic Info== -->
            <v-avatar style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2' tile>
                <img src='../../img/awake.jpg'>
            </v-avatar>
            <h3 class='title text-xs-center mt-2'>Awake</h3>

            <h3 class='subheading text-center mt-3'>Contributing Artists</h3><!-- ==Album Artists== -->
            <v-generics-summary :ent-name='"artist"' :entities='contributingArtists' class='mt-1'></v-generics-summary>
        
            <h3 class='subheading text-center mt-3'>Publishing Labels</h3><!-- ==Publishing Labels== -->
            <v-generics-summary :ent-name='"label"' :entities='publishingLabels' class='mt-1'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm8>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Included Tracks</h2>   
            <v-tracks-summary :size='"220px"' :tracks='includedTracks' class='mt-2'></v-tracks-summary>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/collections/show.js"></script>

@endsection