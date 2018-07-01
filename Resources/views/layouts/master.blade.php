<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            h1, h2, h3, h4, h5, h6, p {
                margin: 0;
                padding: 0;
            }

            .flex-center {
                display: flex;
                justify-content: center;
            }

            .container {
                width: 100%;
                max-width: 800px;
            }
        </style>

        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body class="flex-center">
        <div id="app" class="container">
            @yield('content')
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>