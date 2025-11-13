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
            <a href="{{ url('/informatie') }}" class="text-gray-700 hover:text-[#00811F] transition">Informatie</a>
            <a href="{{ url('/programa') }}" class="text-gray-700 hover:text-[#00811F] transition">Programma</a>
            <a href="{{ url('/hoogtenpunten') }}" class="text-gray-700 hover:text-[#00811F] transition">Hoogtepunten</a>
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
    <div class="flex justify-between items-center space-x-4 mb-8">
        <img alt="" src="{{ asset('/images/Techniek_college_Rotterdam_logo.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Hoogeschool_Rotterdam.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Gemeente_rotterdam.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Erasmus_uni.png') }}" class="h-16">
        <img alt="" src="{{ asset('/images/Erasmus_Data.png') }}" class="h-16">
    </div>

    <div class="max-w-3xl mx-auto text-center px-6">
        <div class="bg-pink-100 w-14 h-14 flex items-center justify-center rounded-full mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#cc0033]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 4h16c1.1 0 2 .9 2 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2zm16 2l-8 5-8-5"/>
            </svg>
        </div>

        <h2 class="text-2xl md:text-3xl font-bold text-black mb-2">Neem Contact Op</h2>
        <p class="text-gray-600 mb-4">Heb je vragen of wil je meer weten over het Sociaal AI Lab? Stuur ons een e-mail.</p>
        <a href="mailto:info@sociaalailab.nl" class="text-black font-medium hover:underline">info@sociaalailab.nl</a>
        <p class="text-gray-400 text-sm mt-8">© {{ date('Y') }} SociaalAI</p>
    </div>
</footer>
</body>
</html>
