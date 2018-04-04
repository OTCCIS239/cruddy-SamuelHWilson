<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="main">
            <v-app>
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