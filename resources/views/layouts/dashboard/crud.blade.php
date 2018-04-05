<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="main">
            <v-app>
                <v-navigation-drawer v-model='drawer' app>
                    <v-toolbar flat>
                        <v-toolbar-title>Dashboard</v-toolbar-title>
                    </v-toolbar>
                    <v-list subheader>
                        <!-- Header -->
                        <v-subheader>Data Management</v-subheader>

                        <!-- Standard Crud links. Pulled from array in app.js -->
                        <v-list-group v-for="res in navResources" v-model='res.active' >
                            <v-list-tile slot="activator" avatar>
                                <v-avatar>
                                     <i class="fas fa-lg" v-bind:class="'fa-' + res.faIcon" ></i> 
                                </v-avatar>
                                <v-list-tile-content>
                                    <v-list-tile-title>Manage @{{ res.name }}s</v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>
                            <v-list-tile v-bind:href="res.route">
                                <v-list-tile-content>
                                    <v-list-tile-title>Browse all @{{ res.name }}s</v-list-tile-title>
                                </v-list-tile-content>
                            </v-list-tile>
                            <v-list-tile v-bind:href="res.route + '/create'">
                                <v-list-tile-content>
                                    <v-list-tile-title>Create a @{{ res.name }}</v-list-tile-title>
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
                <v-toolbar color="indigo" dark fixed app>
                    <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                    <v-toolbar-title>Good Music 2.0</v-toolbar-title>
                </v-toolbar>
                <v-content>
                    <div style="background-color:red"> @yield('content') </div>
                    <v-btn color="success">Test</v-btn>
                </v-content>
            </v-app>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>