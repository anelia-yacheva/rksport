<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>RKSport</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center welcome-box">
                        <h1>Добре дошли!</h1>
                        <h2>Моля, изберете език:</h2>
                        <ul class="list-group list-flags d-flex justify-content-around align-items-center flex-row">
                            <li class="list-item"><a href="/../bg"><img src="{{ asset('img/content/bg-flag.png') }}" alt="BG"></a></li>
                            <li class="list-item"><a href="/../en"><img src="{{ asset('img/content/gb-flag.png') }}" alt="EN"></a></li>
                            <li class="list-item"><a href="/../it"><img src="{{ asset('img/content/it-flag.png') }}" alt="IT"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>