<!DOCTYPE html>
<html>
<head>
    <title>Baleen - @yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

</head>
<body>
    <div class="blue-horizon"></div>
    @include('layouts.navbar')

    <div class="container master-container">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
