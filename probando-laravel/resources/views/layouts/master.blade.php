<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
        Master header
    @show

    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        Master FOOTER
    @show
</body>
</html>
