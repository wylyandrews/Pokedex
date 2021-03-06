<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>View Pokemon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                height: 80%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table {
                overflow: scroll;
            }
        </style>
    </head>
    <body>
    <ul class="nav navbar-nav pull-right">
      <li class="{{ Request::is('/') ? 'active' : '' }}">
         <a href="{{ url('/') }}">Home</a>
     </li>
      <li class="{{ Request::is('login') ? 'active' : '' }}">
         <a href="{{ url('/login') }}">Login</a>
     </li>
      <li class="{{ Request::is('pokemon') ? 'active' : '' }}">
         <a href="{{ url('/pokemon') }}">Pokemon</a>
      </li>
      <li class="{{ Request::is('json') ? 'active' : '' }}">
         <a href="{{ url('/json') }}">JSON</a>
      </li>
    </ul> 
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    JSON
                </div>
                <p style="width:80%; margin:10%; text-align: left;">
                <?php
                    $pokemonEntries = DB::select('select * FROM pokemon ');
                    echo json_encode($pokemonEntries);
                ?>
                </p>
            </div>
        </div>
    </body>
</html>
