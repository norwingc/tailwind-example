<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
<div class="container mx-auto mt-9">
    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4 grid-rows-2">
        <div class="bg-green-300 col-span-2 col-start-2">1</div>
        <div class="bg-green-400 col-start-1 row-span-2">2</div>
        <div class="bg-green-500">3</div>
        <div class="bg-green-600">4</div>
        <div class="bg-green-700">5</div>
        <div class="bg-green-800">6</div>
    </div>
</div>

<div class="container mx-auto mt-9">
    <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
        <div class="bg-blue-100">1</div>
        <div class="bg-blue-200">2</div>
        <div class="bg-blue-300">3</div>
        <div class="bg-blue-400">4</div>
        <div class="bg-blue-500">5</div>
        <div class="bg-blue-600">6</div>
        <div class="bg-blue-700">7</div>
        <div class="bg-blue-800">8</div>
        <div class="bg-blue-900">9</div>
    </div>
</div>

<div class="container mx-auto mt-9 font-sans">
    <h1 class="text-3xl font-bold">Hola</h1>
    <p class="-ml-4">The evil landlubber oppressively hails the whale.</p>
    <ul>
        <li>Pol, luna!</li>
        <li>Pol, luna!</li>
        <li>Pol, luna!</li>
    </ul>
</div>


</body>
</html>
