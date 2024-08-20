<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!--link for css styling-->
        <link rel="stylesheet" href="/css/main.css">

        <!--using sass-->
        @vite(['resources/scss/main.scss'])
        
    </head>
    <body>

      @yield('content')

      <footer>
        <p>Copyright 2020 Pizza House</p>
      </footer>
    </body>
</html>