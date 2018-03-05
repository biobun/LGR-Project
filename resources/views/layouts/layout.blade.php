<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        @include('includes.head')
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> --}}
        <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    </head>
    <body>
        @include('includes.navbar')
        <main>
        @yield('content')
        </main>
    </body>
</html>