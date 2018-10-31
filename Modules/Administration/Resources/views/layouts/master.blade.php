<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

        <title>@yield('title', 'Warning: Title page missing')</title>
    </head>
    <body>
        @include('administration::partials._navbar') <!-- TODO: Refactoring of administration Module -->
        @include('administration::partials._message')
        @yield('content')
    </body>
</html>
