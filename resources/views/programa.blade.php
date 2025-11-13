@extends("main")

@section("title", "programma")

@section("content")
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

        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/event1.jpg') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-full h-64 object-cover rounded-2xl shadow-md">
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


        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/event1.jpg') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-full h-64 object-cover rounded-2xl shadow-md">
        </div>
    </section>
@endsection


