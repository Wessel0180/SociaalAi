<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <meta name="description" content="SociaalAI helpt inwoners sterker te staan in een steeds digitalere wereld. We doen dit door Rotterdammers actief mee te laten denken, praten en beslissen over kunstmatige intelligentie.">

</head>

<body class="bg-gradient-to-br from-[#00811F] to-[#b9eb34]">

{{--banner--}}
<div class="relative w-full h-72 md:h-96 bg-cover bg-center shadow-lg"
     style="background-image:url('{{ asset('/images/banner-optim.jpg') }}');">

    <div class="absolute inset-0 flex items-center justify-start p-8">
        <img src="{{ asset('/images/Sociaal_AI_Logo_Wit.png') }}"
             alt="Sociaal AI Logo"
             class="h-62 md:h-78 object-contain ml-[15%]">
    </div>
</div>

<!-- Navigatie -->
<nav class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-center md:justify-between items-center">
        <div class="hidden md:flex space-x-8 font-medium">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-[#00811F] transition">Home</a>
            <a href="{{ url('/over') }}" class="text-gray-700 hover:text-[#00811F] transition">Over ons</a>
            <a href="{{ url('/informatie') }}" class="text-gray-700 hover:text-[#00811F] transition">Verantwoord AI</a>
            <a href="{{ url('/agenda') }}" class="text-gray-700 hover:text-[#00811F] transition">Agenda</a>
            <a href="{{ url('/programma') }}" class="text-gray-700 hover:text-[#00811F] transition">Programma</a>
            <a href="{{ url('/initiatief') }}" class="text-gray-700 hover:text-[#00811F] transition">Initiatiefnemers</a>
            <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-[#00811F] transition">Contact</a>
        </div>
    </div>
</nav>

<!-- Pagina content -->
<main>
    @yield('content')
</main>


<footer class="bg-white py-12 mt-16 shadow-inner">
    <div class="flex justify-evenly items-center space-x-4 mb-8">
        <img alt="" src="{{ asset('/images/Techniek_college_Rotterdam_logoOP.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Hoogeschool_Rotterdam.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Gemeente_rotterdamOP.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Erasmus_uniOP.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Erasmus_DataOP.png') }}" class="h-16">
    </div>
</footer>
</body>
</html>
