@extends('layouts.dashboard.crud')

@section('content')
<!-- Dialog -->
<v-entity-select-dialog :show='showAddArtist' 
                        :ent-name='"artist"'
                        :all-entities='searchableArtists' 
                        :count-string='"curated tracks."'  
                        v-on:add-artist='showAddArtist = false' 
                        v-on:close-artist-dialog='showAddArtist = false'>
</v-entity-select-dialog>
<v-entity-select-dialog :show='showAddVocalist' 
                        :ent-name='"vocalist"'
                        :all-entities='searchableArtists' 
                        :count-string='"curated tracks."'  
                        v-on:add-artist='showAddVocalist = false' 
                        v-on:close-artist-dialog='showAddVocalist = false'>
</v-entity-select-dialog>
<v-entity-select-dialog :show='showAddCollection' 
                        :ent-name='"collection"'
                        :all-entities='searchableCollections' 
                        :count-string='"included tracks."'  
                        v-on:add-artist='showAddCollection = false' 
                        v-on:close-artist-dialog='showAddCollection = false'>
</v-entity-select-dialog>
<v-entity-select-dialog :show='showAddLabel' 
                        :ent-name='"label"'
                        :all-entities='searchableLabels' 
                        :count-string='"curated tracks."'  
                        v-on:add-artist='showAddLabel = false' 
                        v-on:close-artist-dialog='showAddLabel = false'>
</v-entity-select-dialog>

<v-layout row>
    <v-flex sm4>
        <div class="pa-2">
            <h2 class='headline text-center mt-3'>Basic Info</h2>
            <v-avatar style='position:relative;' :size='256' class='grey darken-1 d-block mx-auto mt-2'>
                
                <v-btn absolute dark fab bottom right color='primary' class='mr-2 mb-4'><i class='fas fa-plus'></i></v-btn>
            </v-avatar>
            <v-text-field style='width:100%' label='Label Name' class='mt-2'></v-text-field>
            <h3 class='subheading text-center mt-3'>Signed Artists</h3>
        </div>
    </v-flex>
    <v-flex sm4>
        <div class="pa-2 pl-5">
            <v-generics-summary :ent-name='"artist"' show-new class='mt-1' v-on:request-add-artist='showAddArtist = true'></v-generics-summary>
            <v-generics-summary :ent-name='"vocalist"' show-new class='mt-1' v-on:request-add-artist='showAddVocalist = true'></v-generics-summary>
            <v-generics-summary :ent-name='"collection"' show-new class='mt-1' v-on:request-add-artist='showAddCollection = true'></v-generics-summary>
            <v-generics-summary :ent-name='"label"' show-new class='mt-1' v-on:request-add-artist='showAddLabel = true'></v-generics-summary>
        </div>
    </v-flex>
    <v-flex sm4>
    </v-flex>
</v-layout>
@endsection

@section('vue-inst')

<script src="/js/pages/labels/create.js"></script>

@endsection