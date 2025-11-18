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
           <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-calendar text-[#00811F] ml-[2px]  text-3xl"></i>
                    <p class="text-gray-700"><strong> Wanneer:</strong> 25 november 2025</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-clock text-[#00811F] text-3xl"></i> 
                    <p class="text-gray-700"><strong>Hoelaat:</strong> 12:30 - 19:00</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-location-dot text-[#00811F] ml-1 text-3xl"></i> 
                    <p class="text-gray-700 ml-1 "><strong>Waar:</strong> Rotterdam - Hillevliet 90</p>
                </div>
                <div class="flex mb-6 space-x-3">
                    <i class="fa-solid fa-bullseye text-[#00811F] text-3xl"></i>
                    <p class="text-gray-700 pb-3 "><strong> Wat:</strong> Een dag vol workshops en lezingen over de rol van AI in de samenleving. Iedereen is welkom!</p>
                </div>
            </div>
                <a href="/programa" class="inline-block bg-[#00811F] text-white font-medium px-6 py-2 rounded-full hover:bg-green-700 transition">
                    Meer info
                </a>
            </div>
               <div class="flex-1">
            <img src="{{ asset('/images/Event_AI_foto.jpg') }}"
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
                 Studenten en bewoners verkennen de sociale invloed van AI 
            </h2>
           <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-calendar text-[#00811F] ml-[2px]  text-3xl"></i>
                    <p class="text-gray-700"><strong> Wanneer:</strong> 1 november - 1 februari 2025</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fa-regular fa-clock text-[#00811F] text-3xl"></i> 
                    <p class="text-gray-700"><strong>Hoelaat:</strong> XX - XX</p>
                </div>
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-location-dot text-[#00811F] ml-1 text-3xl"></i> 
                    <p class="text-gray-700 ml-1 "><strong>Waar:</strong> Rotterdam - Hillevliet 90</p>
                </div>
                <div class="flex mb-6 space-x-3">
                    <i class="fa-solid fa-bullseye text-[#00811F] text-3xl"></i>
                    <p class="text-gray-700 pb-3 "><strong> Wat:</strong> Samen met bewoners uit de omgeving van de Hillevliet, onderzoeken studenten wat AI betekent voor de wijk. Ze vertalen dit gezamenlijk (co-creatie) naar een creatief eindresultaat, zoals een muurschildering, publicatie of interviewreeks.  </p>
                </div>
            </div>
                <a href="/programa" class="inline-block bg-[#00811F] text-white font-medium px-6 py-2 rounded-full hover:bg-green-700 transition">
                    Meer info
                </a>
            </div>

        <div class="flex-1">
            <img src="{{ asset('/images/Event_AI_foto.jpg') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-full h-64 object-cover rounded-2xl shadow-md">
        </div>
    </section>
@endsection


