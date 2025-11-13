
@extends("main")

@section("title", "Informatie SociaalAI Lab")

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
        <img src="{{ asset('/images/aifoto.jpg') }}"
             alt="AI concept illustration"
             class="w-full h-auto shadow-md object-cover">
    </div>

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


</section>
@endsection
