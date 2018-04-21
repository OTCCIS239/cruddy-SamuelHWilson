@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Basic Info</h2>
            <v-avatar tile style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'>
                
                <v-btn absolute dark fab bottom right color='primary' class='mr-2 mb-4'><i class='fas fa-plus'></i></v-btn>
            </v-avatar>
            <v-text-field style='width:100%' label='Track Name' class='mt-2'></v-text-field>
            
            <h2 class='headline text-center mt-3'>Notable Characteristics</h2>
            <v-char-select :searchable-chars='chars'></v-char-select>          
        </div>
    </v-flex>
    <v-flex sm4>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Contributing Artists</h2>
            <v-generic-select :ent-name='"artist"' :searchable-entities='searchableArtists' class='mt-1'></v-generic-select>
            
            <h2 class='headline text-center mt-3'>Backing Vocalists</h2>
            <v-generic-select :ent-name='"vocalist"' :searchable-entities='searchableVocalists' class='mt-1'></v-generic-select>
        </div>
    </v-flex>
    <v-flex sm4>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Housing Collections</h2>
            <v-generic-select :ent-name='"collection"' :searchable-entities='searchableCollections' class='mt-1'></v-generic-select>
            
            <h2 class='headline text-center mt-3'>Publishing Labels</h2>            
            <v-generic-select :ent-name='"label"' :searchable-entities='searchableLabels' class='mt-1'></v-generic-select>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/tracks/create.js"></script>

@endsection