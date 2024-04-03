<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <style>
        .active {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    @include('layouts.parts.header')
    @yield('content')
    @include('layouts.parts.footer')


</body>

</html>
