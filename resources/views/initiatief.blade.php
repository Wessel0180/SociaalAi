
@extends("main")

@section("title", "inatiatiefnemers")

@section("content")


    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
Over Techniek College Rotterdam
</span>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Techtoniek College Rotterdam
            </h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Zorgt voor betrokkenheid van mbo-studenten en praktische AI-toepassingen
            </p>
        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/Techniek_college_Rotterdam_logo.png') }}"
                 alt="AI concept illustration"
                 class="w-full h-auto shadow-md object-cover">
        </div>
    </section>


    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">

        <div class="flex-1">
            <img src="{{ asset('/images/Hoogeschool_Rotterdam.png') }}"
                 alt="AI concept illustration"
                 class="w-full h-auto shadow-md object-cover">
        </div>

        <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Over Hoogeschool Rotterdam
        </span>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
               hoogedschool Rotterdam
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
    </section>

    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
over Gemeente Rotterdam
</span>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                gemeente Rotterdam
            </h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                initiatiefnemer binnen het programma Digitale Inclusie. Met het actieplan Digitale Inclusie wil de gemeente Rotterdammers digitaalvaardig(er) maken. Het actieplan heeft als doel dat alle inwoners veilig, vaardig en volwaardig kunnen deelnemen aan de digitale samenleving. 
            </p>
        </div>

        <div class="flex-1">
            <img src="{{ asset('/images/Gemeente_rotterdam.png') }}"
                 alt="AI concept illustration"
                 class="w-full h-auto shadow-md object-cover">
        </div>
    </section>


    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">

        <div class="flex-1">
            <img src="{{ asset('/images/Erasmus_uni.png') }}"
                 alt="AI concept illustration"
                 class="w-full h-auto shadow-md object-cover">
        </div>

        <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Over Erasmus Universiteit Rotterdam
        </span>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Erasmus Universiteit Rotterdam
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
    </section>



    <section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
Over Erasmus Data
</span>
            <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
                Erasmus Data
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
            <img src="{{ asset('/images/Erasmus_Data.png') }}"
                 alt="AI concept illustration"
                 class="w-full h-auto shadow-md object-cover">
        </div>
    </section>

@endsection
