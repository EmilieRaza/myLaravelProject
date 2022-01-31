<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body style="background-image:url('https://images.pexels.com/photos/7578201/pexels-photo-7578201.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'); background-size:cover;background-repeat:no-repeat;">
        @yield("content") {{-- @yield => Comme les {% block %} en symfony --}}
    </body>
</html>
