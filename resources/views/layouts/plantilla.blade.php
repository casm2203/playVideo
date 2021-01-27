<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/1acfd43bde.js" crossorigin="anonymous"></script>
   
</head>

<body>
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
</body>

</html>