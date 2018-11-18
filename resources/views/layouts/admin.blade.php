<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}" type="text/css" charset="utf-8">
    <script charset="utf-8" src="{{ url('js/app.js') }}" defer="defer"></script>
    @yield('head')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @yield('foot')
</body>
</html>
