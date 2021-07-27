<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/icon.css')}}">
</head>
<header>
    @include('partials.backoffice.header')
</header>

<body>
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>