<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.1/css/bulma.css">
        <style>
            html,body{
                background-color: hsl(0, 0%, 93%);
            }
            .field-error {
                margin-bottom: 12px;
                border: 1px solid #AF0C0C;
                box-shadow: 0 2px 4px -2px #7f0909;
            }
        </style>
    </head>
    <body>
        <div class="section">
            <div class="content">
                <div class="container" id="root">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
