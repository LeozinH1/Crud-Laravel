<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <title>CRUD - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url("assets/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{url("assets/css/bootstrap-grid.min.css")}}">
        <script src="{{url("assets/js/jquery-3.5.1.min.js")}}"></script>
        <script src="{{url("assets/js/bootstrap.min.js")}}"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>