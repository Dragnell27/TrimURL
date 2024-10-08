<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TrimURL</title>
</head>

<body>
    @include('components.header')

    <div class="mt-5">
        @yield('main')
    </div>

    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>
