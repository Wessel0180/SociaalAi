@extends("main")

@section("title", "Initiatiefnemers")

@section("content")

     {{-- Gemeente Rotterdam --}}
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">
        <div class="flex-1">
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
            <img src="{{ asset('/images/Gemeente_Rotterdam.png') }}"
                 alt="Gemeente Rotterdam"
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
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Hogeschool Rotterdam
            </h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                De Hogeschool Rotterdam doet praktijkgericht onderzoek om kennis en innovaties te ontwikkelen met die direct toe te passen is in de praktijk.'
                Onder meer door mensen direct vanaf het begin te betrekken in het ontwerpproces van digitale toepassingen (co-design) en samen met Rotterdammers te experimenteren door prototypes te maken (civic prototyping).
        </div>
    </section>

       {{-- Techniek College Rotterdam --}}
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">
        <div class="flex-1">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Techniek College Rotterdam
            </h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Het Techniek College Rotterdam betrekt mbo-studenten actief bij het ontwikkelen van praktische AI-toepassingen.
                Met projecten, workshops en praktijkgericht onderzoek draagt het college bij aan een toekomst waarin technologie
                begrijpelijk en toegankelijk is voor iedereen.
            </p>
        </div>

        <div class="flex-1 flex items-center justify-center">
            <img src="{{ asset('/images/Techniek_College_Rotterdam_logo.png') }}"
                 alt="Techniek College Rotterdam"
                 class="w-auto object-cover p-8">
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
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Erasmus Universiteit Rotterdam
            </h2>

            <p class="text-gray-700 leading-relaxed mb-4">
                De Erasmus Universiteit onderzoekt hoe mensen en technologie beter kunnen samenwerken en wil via onder andere co-creatie bijdragen aan het verantwoord gebruik van AI met aandacht voor sociale en economische waarde. Het <strong>Erasmus Centre for Data Analytics (ECDA) </strong>is hierin de trekker en verbindt wetenschap, bedrijfsleven en overheid rond de gevolgen van data, kunstmatige intelligentie, en digitalisering. Het doel is om AI te stimuleren die waardevol is voor de samenleving.</p>
        </div>
    </section>
    
    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl min-h-[360px] mx-auto my-12">
    <ul class="list-disc pl-10 space-y-3 marker:text-gray-600 items-center">
            <h1>Vanaf het begin werken we hierin nauw samen met diverse sociale en technologie partners, waaronder:</h1>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Wijkwijs</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Netwerk Digitale Inclusie</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Bibliotheek</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Trefpunt Vreewijk</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">De Buurtouders010</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Equals</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Future Society Lab</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Parai</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Mascotte.ai</h2>
                </li>
                <li class="text-gray-700 leading-relaxed">
                    <h2 class="font-bold">Civic AI Lab Amsterdam</h2>
                </li>
                <p>Samen met deze partners werken we aan technologische oplossingen die bijdragen aan het dagelijks leven in Rotterdam. Wij geloven dat technologie pas echt slim is als het ook sociaal is.  </p>
                <p class="text-[#00811F]" >AI voor Rotterdammers door Rotterdammers.</p>
    </section>
@endsection
