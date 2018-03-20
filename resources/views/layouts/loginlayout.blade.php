<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        @include('includes.head')
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.slim.min.js') }}"></script>   
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>   
        <script type="text/javascript" src="{{ URL::asset('js/all.js') }}"></script>   
        <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>   
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
        <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
        @yield('pagespecificstyles')
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('includes.navbar')
        <main>
        @yield('content')
        </main>
    </body>
</html>