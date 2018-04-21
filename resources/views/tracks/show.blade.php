@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Basic Info</h2>
            <v-avatar tile style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'></v-avatar>
            <h3 class='title text-xs-center mt-2'>Leaving</h3>
            
            <h2 class='headline text-center mt-3'>Notable Characteristics</h2>
            <v-char-summary :chars='chars' class='mt-2'></v-char-summary>          
        </div>
    </v-flex>
    <v-flex sm4>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Contributing Artists</h2>
            <v-generics-summary :ent-name='"artist"' :entities='artists' class='mt-1'></v-generics-summary>
            
            <h2 class='headline text-center mt-3'>Backing Vocalists</h2>
            <v-generics-summary :ent-name='"vocalist"' :entities='vocalists' class='mt-1'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm4>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Housing Collections</h2>
            <v-generics-summary :ent-name='"collection"' :entities='collections' class='mt-1'></v-generics-summary>
            
            <h2 class='headline text-center mt-3'>Publishing Labels</h2>            
            <v-generics-summary :ent-name='"label"' :entities='labels' class='mt-1'></v-generics-summary>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/tracks/show.js"></script>

@endsection