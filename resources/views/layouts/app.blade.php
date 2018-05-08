<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RKSport</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lightcase.css')}}">
    <script type="text/javascript" src="{{asset('js/lightcase.js')}}"></script>
</head>
<body>
    <div id="app">
        <header>
            @include('inc.navbar')
        </header>

        <main class="main container">
            <div class="row">
                <div class="col">
                    @include('inc.messages')
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/lightcase.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>