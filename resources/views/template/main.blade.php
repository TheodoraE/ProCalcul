<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ProCalcul</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div>
            {{-- Header --}}
            <header>
                @include('partials.nav')
            </header>

            {{-- Content --}}
            @yield('content')

            {{-- Footer ? --}}

        </div>

        {{-- JavaScript --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>
