{{--      [#00811F]rotterdamgroen}}--}}
{{--      #cc0033 hoogenschoolrood--}}
{{--      #b9eb340 rotterdamlichtgroen--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SociaalAI</title>
</head>
<body class="bg-gradient-to-br from-[#00811F] to-[#b9eb34]">


<div class="relative w-full h-72 md:h-96 bg-cover bg-center shadow-lg"
     style="background-image:url('{{ asset('/images/banner01.jpg') }}');">
    <div class="inset-0 flex flex-col justify-center items-center text-center p-4">
{{--        <h1 class="text-3xl md:text-5xl font-bold text-white my-4">SociaalAI</h1>--}}
{{--        <p class="text-lg md:text-xl text-white mb-6">--}}
{{--            Ontdek hoe kunstmatige intelligentie de maatschappij verandert--}}
{{--        </p>--}}
    </div>
</div>


<section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
    <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Over SociaalAI
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
            Voor een digitaal Rotterdam waar iedereen mee kan doen
        </h2>
        <p class="text-gray-700 leading-relaxed mb-4">
            SociaalAI helpt inwoners sterker te staan in een steeds digitalere wereld.
            We doen dit door Rotterdammers actief mee te laten denken, praten en beslissen over kunstmatige intelligentie.
        </p>
        <p class="text-gray-700 leading-relaxed mb-6">
            Het SociaalAI Lab is een open plek waar bewoners, onderzoekers, ontwerpers en beleidsmakers samenwerken.
            Samen maken we AI die eerlijk, duidelijk en voor iedereen bruikbaar is.
        </p>
    </div>

    <div class="flex-1">
        <img src="{{ asset('/images/aifoto.jpg') }}"
             alt="AI concept illustration"
             class="w-full h-auto shadow-md object-cover">
    </div>
</section>



<section class="flex flex-col md:flex-row items-center gap-10 bg-white  shadow-lg p-8 max-w-6xl mx-auto my-12">
    <!-- Linker deel: tekst -->
    <div class="flex-1">
        <span class="inline-block bg-[#00811F] text-white text-sm font-medium px-4 py-1  mb-4">
            Evenement
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
            SociaalAI Inspiratiedag
        </h2>
        <p class="text-gray-700 mb-2"><strong>📅 Wanneer:</strong> 25 november 2025</p>
        <p class="text-gray-700 mb-2"><strong>📅 Hoelaat:</strong> 12:30 - 19:00</p>
        <p class="text-gray-700 mb-2"><strong>📍 Waar:</strong> Rotterdam -Hillevliet 90</p>
        <p class="text-gray-700 mb-6"><strong>🎯 Wat:</strong> Een dag vol workshops en lezingen over de rol van AI in de samenleving. Iedereen is welkom!</p>

        <a href="/programa"
           class="inline-block bg-[#00811F] text-white font-medium px-6 py-2  hover:bg-rdm transition">
            Meer info
        </a>

    </div>

    <!-- Rechter deel: één vaste afbeelding -->
    <div class="flex-1">
        <img src="{{ asset('/images/Event_AI_foto.jpg') }}"
             alt="SociaalAI Inspiratiedag"
             class="w-full h-64 object-cover shadow-md">
    </div>
</section>


<!-- Footer met contactsectie -->
<footer class="bg-white py-12 mt-16 shadow-inner">


    <div class="flex justify-between items-center space-x-4 mb-8  ">
        <img src="{{ asset('/images/Techniek_college_Rotterdam_logo.png') }}" alt="Techniek College Rotterdam Logo" class="h-16">
        <img src="{{ asset('/images/Hogeschool_Rotterdam.png') }}" alt="Hoogeschool Rotterdam Logo" class="h-16">
        <img src="{{ asset('/images/Gemeente_rotterdam.png') }}" alt="Gemeente Rotterdam Logo" class="h-16">
        <img src="{{ asset('/images/Erasmus_uni.png') }}" alt="Erasmus Universiteit Logo" class="h-16">
        <img src="{{ asset('/images/Erasmus_Data.png') }}" alt="Erasmus Data Logo" class="h-16">
    </div>

    <div class="max-w-3xl mx-auto text-center px-6">
        <!-- Icoon -->
        <div class="bg-pink-100 w-14 h-14 flex items-center justify-center rounded-full mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#cc0033]" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 4h16c1.1 0 2 .9 2 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2zm16 2l-8 5-8-5"/>
            </svg>
        </div>

        <!-- Titel -->
        <h2 class="text-2xl md:text-3xl font-bold text-black mb-2">Neem Contact Op</h2>

        <!-- Tekst -->
        <p class="text-gray-600 mb-4">
            Heb je vragen of wil je meer weten over het Sociaal AI Lab? Stuur ons een e-mail.
        </p>

        <!-- E-mailadres -->
        <a href="mailto:info@sociaalailab.nl" class="text-black font-medium hover:underline flex items-center justify-center gap-2">
            info@sociaalailab.nl
        </a>

        <!-- Copyright -->
        <p class="text-gray-400 text-sm mt-8">© {{ date('Y') }} SociaalAI</p>
    </div>
</footer>

</body>
</html>
