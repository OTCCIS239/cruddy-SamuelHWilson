<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="main">
            <v-app>
                <v-main-nav :drawer='drawer'></v-main-nav>
                <v-toolbar color="indigo" dark fixed app>
                    <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
                    <v-toolbar-title>Good Music 2.0</v-toolbar-title>
                </v-toolbar>
                <v-content>
                    <v-container>
                        @yield('content')
                    </v-container>                        
                </v-content>
            </v-app>
        </div>

        @yield('vue-inst')
    </body>
</html>