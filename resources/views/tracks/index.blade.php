@extends('layouts.dashboard.crud')

@section('content')

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Filter Tracks</h2>
            <v-text-field style='width:100%' label='Filter by name' class='mt-2' v-model='nameFilter'></v-text-field>
        </div>    
    </v-flex>
    <v-flex sm8>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>All Tracks</h2>
            <v-tracks-summary :size='"220px"' 
                              :tracks='tracks' 
                              class='mt-2'
                              :name-filter='nameFilter'>
            </v-tracks-summary>
        </div>
    </v-flex>
@endsection

@section('vue-inst')

<script src="/js/pages/tracks/index.js"></script>

@endsection