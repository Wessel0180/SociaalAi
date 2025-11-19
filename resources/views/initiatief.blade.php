@extends("main")

@section("title", "Initiatiefnemers")

@section("content")

    {{-- Techniek College Rotterdam --}}
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">
        <div class="flex-1">
            <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
                Over Techniek College Rotterdam
            </span>

            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Techniek College Rotterdam
            </h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                Het Techniek College Rotterdam betrekt mbo-studenten actief bij het ontwikkelen van praktische AI-toepassingen.
                Met projecten, workshops en praktijkgericht onderzoek draagt het college bij aan een toekomst waarin technologie
                begrijpelijk en toegankelijk is voor iedereen.
            </p>
        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/Techniek_college_Rotterdam_logo.png') }}"
                 alt="Techniek College Rotterdam"
                 class="w-full h-auto object-contain">
        </div>
    </section>



    {{-- Hogeschool Rotterdam --}}
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">

        <div class="flex-1">
            <img src="{{ asset('/images/Hogeschool_Rotterdam.png') }}"
                 alt="Hogeschool Rotterdam"
                 class="w-full h-auto object-contain">
        </div>

        <div class="flex-1">
            <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
                Over Hogeschool Rotterdam
            </span>

            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Hogeschool Rotterdam
            </h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                De Hogeschool Rotterdam versterkt digitale vaardigheden van inwoners door onderwijs, onderzoek
                en praktijkgerichte projecten. Samen met partners wordt gewerkt aan AI-oplossingen die eerlijk,
                transparant en begrijpelijk zijn.
            </p>
        </div>
    </section>



    {{-- Gemeente Rotterdam --}}
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">
        <div class="flex-1">
            <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
                Over Gemeente Rotterdam
            </span>

            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Gemeente Rotterdam
            </h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                De gemeente Rotterdam is initiatiefnemer binnen het programma Digitale Inclusie.
                Met het actieplan zet de gemeente zich in om alle inwoners digitaal vaardiger te maken,
                zodat iedereen veilig en zelfstandig kan meedoen in de digitale samenleving.
            </p>
        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/Gemeente_rotterdam.png') }}"
                 alt="Gemeente Rotterdam"
                 class="w-full h-auto object-contain">
        </div>
    </section>



    {{-- Erasmus Universiteit Rotterdam --}}
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">

        <div class="flex-1">
            <img src="{{ asset('/images/Erasmus_uni.png')}}"
                 alt="Erasmus Universiteit Rotterdam"
                 class="w-full h-auto max-h-[250px] object-contain mx-auto">

        </div>

        <div class="flex-1">
            <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
                Over Erasmus Universiteit Rotterdam
            </span>

            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Erasmus Universiteit Rotterdam
            </h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                De Erasmus Universiteit levert wetenschappelijke kennis en onderzoek over technologie,
                data-ethiek en maatschappelijke impact. De universiteit draagt bij aan de ontwikkeling
                van toekomstbestendige en verantwoorde AI-oplossingen.
            </p>
        </div>
    </section>



    {{-- Erasmus Data --}}
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">

        <div class="flex-1">
            <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
                Over Erasmus Data
            </span>

            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Erasmus Data Collaboratory
            </h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                Erasmus Data ondersteunt organisaties en onderzoekers bij het verantwoord verzamelen en gebruiken
                van data. Door expertise te combineren met maatschappelijke inzichten levert het team een waardevolle
                bijdrage aan transparante en betrouwbare AI-projecten.
            </p>
        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/Erasmus_Data.png') }}"
                 alt="Erasmus Data"
                 class="w-full h-auto object-contain">
        </div>
    </section>

@endsection
