@extends('layouts.dashboard.crud')

@section('content')
<!-- Dialog -->
<v-entity-select-dialog :show='showAddLabel' 
                        :ent-name='"label"'
                        :all-entities='searchableLabels' 
                        :count-string='"published tracks."'  
                        v-on:add-label='showAddLabel = false' 
                        v-on:close-label-dialog='showAddLabel = false'>
</v-entity-select-dialog>

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Basic Info</h2> <!-- ==Basic Info== -->
            <v-avatar style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'>
                
                <v-btn absolute dark fab bottom right color='primary' class='mr-2 mb-4'><i class='fas fa-plus'></i></v-btn>
            </v-avatar>
            <v-text-field style='width:100%' label='Artist Name' class='mt-2'></v-text-field>
            
            <v-text-field style='width:100%' label='Artist Bio' class='mt-2' multi-line></v-text-field>

            <h3 class='subheading text-center mt-3'>Signed Labels</h3><!-- ==Publishing Labels== -->
            <v-generics-summary :ent-name='"label"' show-new class='mt-2' v-on:request-add-label='showAddLabel = true'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm8>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Tracks Produced</h2>   
            <v-tracks-summary :size='"220px"' show-new class='mt-2'></v-tracks-summary>
        </div>
        <div class="pa-2 pl-5">
            <h2 class='headline text-center mt-3'>Tracks as Featured Artist</h2>   
            <v-tracks-summary :size='"220px"' show-new class='mt-2'></v-tracks-summary>
        </div>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/artists/create.js"></script>

@endsection