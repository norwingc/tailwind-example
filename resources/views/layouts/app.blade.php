<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <title>Movie APP | {{ $title ?? ':)'  }}</title>

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
@yield('content')
</body>
</html>
