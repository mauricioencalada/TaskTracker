<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .active {
            font-weight: bold;
            box-shadow: 0 0 10px rgba(12, 9, 9, 0.5);
            border-radius: 5px;
            padding: 5px;
            background-color: #f1e53b;
        }

        .bg-yellow {
            background-color: rgb(255, 221, 31) !important;
            /* !important asegura que la regla prevalezca */
        }
       
    </style>

</head>

<body>
    @include('layouts.parts.header')
    @yield('content')
    @include('layouts.parts.footer')


</body>

</html>
