<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('css/app.css') }}">
        <title>Molisana Pasta</title>
    </head>

    <body>
       {{-- HEADER INCLUDES --}}
       @include('partials.header')

        {{-- MAIN SPECIFICO PER OGNI PAGINA --}}
        @yield('content')

       {{-- FOOTER INCLUDES --}}
       @include('partials.footer')




        <script src="{{asset('js/app.js')}}"></script>
    </body>

</html>