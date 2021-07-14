<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        
    </head>
    <body>
        <div class="container">
            <h1>{{ $title }}</h1>
            <div class="cards">
                @foreach ($movies as $movie)
                    <div class="card">
                        <h2>{{ $movie -> title }}</h2>
                        <h3>{{ $movie -> original_title }}</h3>
                        <h4>{{ $movie -> nationality }}</h4>
                        <div class="date-vote">
                            <div class="date">
                                <h4>data</h4>
                                <h5>{{ $movie -> date }}</h5>
                            </div>
                            <div class="vote">
                                <h4>vote</h4>
                                <h5>{{ $movie -> vote }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
