@extends('layouts.dashboard.crud')

@section('content')
<!-- Dialog -->
<v-entity-select-dialog :show='showAddArtist' 
                        :ent-name='"artist"' 
                        :count-string='"curated tracks."' 
                        :all-entities='testData' 
                        v-on:add-artist='showAddArtist = false' 
                        v-on:close-artist-dialog='showAddArtist = false'>
</v-entity-select-dialog>

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='title text-center mt-3'>Basic Info</h2>
            <v-avatar style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'>
                
                <v-btn absolute dark fab bottom right color='primary' class='mr-2 mb-4'><i class='fas fa-plus'></i></v-btn>
            </v-avatar>
            <v-text-field style='width:100%' label='Label Name' class='mt-2'></v-text-field>
            <h2 class='title text-center mt-3'>Signed Artists</h2>
            
            <v-generics-summary :ent-name='"artist"' :entities='testData' show-new class='mt-2' v-on:request-add-artist='showAddArtist = true'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm8>
        <div class="pa-2 pl-5">
            <h2 class='title text-center mt-3'>Published Tracks</h2>   
            <v-tracks-summary :tracks='testTracks' :size='"220px"' show-new class='mt-2'></v-tracks-summary>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/labels/create.js"></script>

@endsection