<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $data['title'] }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        {{-- Bootstrap Icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        {{-- Icon css.hh --}}
        <link href="https://css.gg/css?=|facebook|twitter|youtube|instagram" rel="stylesheet">

        <!-- MyCSS -->
        <link rel="stylesheet" href="asset/css/style.css">

    
    </head>
    <body>

        @include('layouts.navbar')

            <div class="container-fluid section" id="home">
                @yield('section')
            </div>

            <div class="container-fluid section-2" id="cloud-hosting">
                @yield('section-2')
            </div>

            <div class="container section-3" id="services">
                @yield('section-3')
            </div>

            <div class="container-fluid section-4" id="solution">
                @yield('section-4')
            </div>
            
            <div class="container-fluid section-5">
                @yield('section-5')
            </div>
            
            <div class="container-fluid section-6">
                @yield('section-6')
            </div>
            
            <div class="conatiner-fluid section-7">
                @yield('section-7')
            </div>

            <div class="conatiner-fluid section-8">
                @yield('section-8')
            </div>
        
        @include('layouts.popup-chat')

        @include('layouts.footer')


        
        {{-- Script --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        {{-- mtScript --}}
        <script src="asset/js/script.js"></script>
    </body>

</html>
