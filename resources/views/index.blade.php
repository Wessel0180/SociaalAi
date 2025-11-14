@extends("main")

@section("title", "SociaalAI Lab")

@section("content")

    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Welkom bij het Sociaal AI Lab Rotterdam – denk, doe en leer mee.</h2>
                <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">Samen maken we technologie sociaal.</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                In Rotterdam willen we dat iedereen mee kan doen in de digitale samenleving. Daarom is er nu het Sociaal AI Lab Rotterdam: een open plek in de stad waar bewoners, onderzoekers, ontwerpers en beleidsmakers samenwerken aan eerlijke, begrijpelijke en toegankelijke technologie.
            </p>
            <p class="text-gray-700 leading-relaxed mb-6">
                Rotterdammers ontdekken hier in gesprekken, bijeenkomsten, leer- en doe-activiteiten wat AI betekent voor hun dagelijks leven en denken mee over wat technologie wél of niet moet doen. 
            </p>
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



