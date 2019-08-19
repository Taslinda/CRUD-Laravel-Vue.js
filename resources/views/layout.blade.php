<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}">
    <style>
        .title {
            text-align: :center;
            font-family: arial;
        }

        .thisMargin {
            margin-top: 50px;
            text-align: :center;
            margin-bottom: 17px;
        }

        .createMargin {
            margin-top: -250px;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{asset('js/app/.js')}}"></script>
</body>

</html>