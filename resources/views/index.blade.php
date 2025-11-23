@extends("main")

@section("title", "SociaalAI Lab")

@section("content")

    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg mt- p-8 max-w-6xl mx-auto my-12">
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
    <div class="flex justify-evenly w-full max-w-6xl mx-auto">
        <!-- Kolom 1 -->
        <div class="space-y-6">

            <div class="bg-white shadow-lg pt-0 pb-6 min-h-[220px] max-w-sm mx-auto mr-5">
                 <div class="flex flex-1 items-center justify-center">
            <img src="{{ asset('/images/Meedenken.png') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-auto h-32">
            </div>
                <h3 class="text-xl text-center font-semibold">Meedenken</h3>
                <p class="text-center p-4">
                Rotterdammers krijgen een stem bij het ontwikkelen en beoordelen van AI.
                </p>
            </div>
        </div>
         <!-- Kolom 2 -->
         <div class="space-y-6">
            <div class="bg-white shadow-lg  pt-0 pb-6 min-h-[220px] max-w-sm mx-auto mr-5">
                 <div class="flex flex-1 items-center justify-center">
            <img src="{{ asset('/images/Samen_leren.png') }}"
                 alt="SociaalAI Inspiratiedag"
                class="w-auto h-32">
            </div>
                <h3 class="text-xl text-center font-semibold">Samen leren</h3>
                <p class="text-center p-4">
                 We vergroten de kennis over kansen en risico's van AI
                </p>
            </div>
        </div>
        <!-- Kolom 3 -->
        <div class="space-y-6">
            <div class="bg-white shadow-lg  pt-0 pb-6 min-h-[220px] max-w-sm mx-auto mr-5">
                <div class="flex flex-1 items-center justify-center">
            <img src="{{ asset('/images/Meedoen.png') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-auto h-32">
            </div>
                <h3 class="text-xl text-center font-semibold">Meedoen</h3>
                <p class="text-center p-4">
                We ontwikkelen samen oplossingen die passen bij de waarden van de stad
                </p>
            </div>
        </div>
    </div>
        <section class="flex flex-col md:flex-row items-center  gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
            <p class="text-1xl md:text-1xl  mb-4 text-gray-900">
            We onderzoeken samen wat kunstmatige intelligentie (AI) betekent voor het dagelijks leven in Rotterdam, en hoe we AI zo kunnen gebruiken dat het bijdraagt aan <strong>gelijke kansen voor iedereen.</strong>
            Het lab hoort bij het gemeentelijke programma <strong>Digitale Inclusie,</strong> dat ervoor zorgt dat alle Rotterdammers veilig, vaardig en volwaardig kunnen meedoen in de digitale wereld.
            </p>
            <p class=" text-[#00811F] text-lg">Kunstmatige Intelligentie? Technologie is pas echt slim als ze óók sociaal is.</p>
        </section>

    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
        <span class="inline-block bg-[#00811F] text-white text-sm font-medium px-4 py-1 mb-4">
            Evenement
        </span>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Opening Sociaal AI Lab & Symposium Verantwoord AI-gebruik
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
            <img src="{{ asset('/images/event/Agenda_event_1.png') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-full object-cover shadow-md">
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
            <img src="{{ asset('/images/event/Agenda_event_2_Studenten_en_bewoners_verkennen_de_sociale_invloed_van_AI.jpg') }}"
                 alt="SociaalAI Inspiratiedag"
                 class="w-full h-64 object-cover shadow-md">
        </div>
    </section>
{{--Test--}}
        <div class="flex items-center justify-center">
            <i class="text-[#cc0033] fa-3x fa-regular fa-envelope-open"></i>
        </div>
    <!-- Titel -->
        <h2 class="text-center text-2xl md:text-xl font-bold text-white mb-2">Neem Contact Op</h2>

        <!-- Tekst -->
        <p class="text-center text-white-600 mb-4">
            Heb je vragen of wil je meer weten over het Sociaal AI Lab? Stuur ons een e-mail.
        </p>

        <!-- E-mailadres -->
        <a href="mailto:digitaleinclusie@rotterdam.nl " class="text-white font-medium hover:underline flex items-center justify-center gap-2">
            digitaleinclusie@rotterdam.nl 
        </a>

@endsection



