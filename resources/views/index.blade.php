@extends("main")

@section("title", "SociaalAI Lab")

@section("content")

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

    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
        <span class="inline-block bg-[#00811F] text-white text-sm font-medium px-4 py-1 mb-4">
            Evenement
        </span>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                SociaalAI Inspiratiedag
            </h2>
            <p class="text-gray-700 mb-2"><strong>📅 Wanneer:</strong> 25 november 2025</p>
            <p class="text-gray-700 mb-2"><strong>🕒 Hoelaat:</strong> 12:30 - 19:00</p>
            <p class="text-gray-700 mb-2"><strong>📍 Waar:</strong> Rotterdam - Hillevliet 90</p>
            <p class="text-gray-700 mb-6"><strong>🎯 Wat:</strong> Een dag vol workshops en lezingen over de rol van AI in de samenleving. Iedereen is welkom!</p>

            <a href="/programa" class="inline-block bg-[#00811F] text-white font-medium px-6 py-2 rounded-full hover:bg-green-700 transition">
                Meer info
            </a>
        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/Event_AI_foto.jpg') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-full h-64 object-cover shadow-md">
        </div>
    </section>
{{--Test--}}

@endsection



