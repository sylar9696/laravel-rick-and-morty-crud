<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSS --}}
    <link rel="stylesheet" href=" {{ asset( 'css/app.css' ) }} ">
    <title>Document</title>
</head>
<body>

    @include('includes.header')

    @yield('content')

    {{-- Js bootstrap --}}
    <script src=" {{asset( 'js/app.js' )}} "></script>
    {{-- JS delete message --}}
    @yield('delete-message')
</body>
</html>
