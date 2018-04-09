<template>
    <v-navigation-drawer v-model='drawer' app>
        <v-toolbar flat>
            <v-toolbar-title>Dashboard</v-toolbar-title>
        </v-toolbar>
        <v-list subheader>
            <!-- Header -->
            <v-subheader>Data Management</v-subheader>

            <!-- Standard Crud links. Pulled from array in app.js -->
            <v-list-group v-for="res in navResources" :key='res.name' v-model='res.active' >
                <v-list-tile slot="activator" avatar>
                    <v-avatar>
                            <i class="fas fa-lg" v-bind:class="'fa-' + res.faIcon" ></i> 
                    </v-avatar>
                    <v-list-tile-content>
                        <v-list-tile-title>Manage {{ res.name }}s</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-bind:href="res.route">
                    <v-list-tile-content>
                        <v-list-tile-title>Browse all {{ res.name }}s</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-bind:href="res.route + '/create'">
                    <v-list-tile-content>
                        <v-list-tile-title>Create a {{ res.name }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list-group>

            <!-- Single page Crud links -->
            <v-list-tile avatar href="/characteristics">
                <v-avatar>
                    <i class="fas fa-lg fa-sticky-note"></i> 
                </v-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>Manage Characteristics</v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    export default {
        props: ['drawer'],
        data: function() {
            return {
                navResources: [
                    {name:'Track', faIcon:'headphones', route:"/tracks", active:false},
                    {name:'Collection', faIcon:'dot-circle', route:"/collections", active:false},
                    {name:'Artist', faIcon:'microphone', route:"/artists", active:false},
                    {name:'Label', faIcon:'volume-up', route:"/labels", active:false}
                ]
            }
        }
    }
</script>