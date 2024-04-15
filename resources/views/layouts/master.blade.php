<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('customcss')
    <style>
        .alert-danger{
            color:red;
        }
    </style>
</head>

<body>

@yield('content')

</body>
</html>
