<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Student Management System'}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/student-manage.css')}}">
</head>
<body>

    <div class="wrapper">
        <div class="main-panel">
            @include('layouts.nav')
            @include('layouts.sidebar')

            <div class="content">
                @yield('content')
            </div>

        </div>





    <script:src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
