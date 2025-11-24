
@extends("main")

@section("title", "hoogtenpunten")

@section("content")

    <div class="flex justify-center mt-10">
         <div class="bg-white p-6  shadow-lg max-w-xl mt-6 w-full border-r text-center">
            <a href="{{ url('/programma/kennis') }}"><h1 class="text-2xl text-[#00811F] font-semibold">Kennis & Vaardigheden</h1></a>
        </div>
        <div class="bg-white p-6 max-w-xl mt-6 w-full text-center border-r border-gray-500">
            <a href="{{ url('/programma/actie') }}"><h1 class="text-2xl hover:text-[#00811F] font-semibold">Actie, Onderzoek & Ontwerp</h1></a>
        </div>
         <div class="bg-white p-6  max-w-xl mt-6 w-full text-center">
            <a href="{{ url('/programma/faciliteit') }}"><h1 class="text-2xl hover:text-[#00811F] font-semibold">Faciliteiten</h1></a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-6">

        <!-- Kolom 1 -->
        <div class="space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4"> AI-vaardigheidstrainingen</h3>
                <p class="h-32">
                Workshops voor inwoners, jongeren en professionals over wat AI is en hoe je het verantwoord kunt gebruiken. Deze sessies zijn vergroten digitale vaardigheden. Hoe werkt het precies? Hoe kan AI jou helpen? Waar moet je aan denken als je het gebruikt?
                </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/kennis_vaardigheden/Wat_doen_we_ AI-vaardigheidstrainingen.jpg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
            
            <div class="relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Ontrafel de AI-Machine</h3>
                <p class="h-32">
                    Een theatrale en interactieve sessie voor de jeugd, waarin deelnemers kunnen ontdekken hoe kunstmatige
                    intelligentie werkt, leert en beslissingen neemt.
                </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/kennis_vaardigheden/Wat_doen_we_ Ontrafel_de _AI_Machine.jpeg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>

        <div class="relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Samen toekomstbeelden creëren met AI</h3>
                <p class="h-32">
                    Een interactieve sessie die mensen inzicht geeft in generatieve AI, en waarin samen creatieve scenario’s
                    gemaakt worden voor een rechtvaardige en inclusieve AI-toekomst..
                </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/kennis_vaardigheden/Wat_doen_we_ Samen_toekomstbeelden_creëren_met_behulp_van_AI.jpeg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>

             <!-- Kolom 2 -->
            <div class="space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Test je AI-kennis</h3>
                <p class="h-32">
               Ontdek hoeveel jij al weet over AI en verdien een badge als beloning voor het maken van onze AI-test. </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/kennis_vaardigheden/Wat_doen_we_ Test_je_AI_kennis.jpg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
            
            <div class="relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">AI in het basisonderwijs </h3>
                <p class="h-32">
                    Leuke lessen waarin basisschoolleerlingen op een speelse manier kennismaken met kunstmatige intelligentie. Ze worden geprikkeld om nieuwsgierig te zijn, creatief te denken en tegelijkertijd te oefenen met digitale vaardigheden.
                </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/kennis_vaardigheden/Basisschool.jpg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>

        <div class="relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Echt of Nep?</h3>
                <p class="h-32">
                   Weet jij nog wat echt is en wat nep? Door de snelle opkomst van generatieve AI wordt het steeds moeilijker om te zien wat door AI is gemaakt en wat door mensen. In deze workshop serie gaan we aan de slag met wat dat betekent voor ons nieuws, ons onderwijs en voor de democratie.</p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/kennis_vaardigheden/Wat_doen_we_ Echt_of_Nep.png') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
            
            <div class="relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Feministische AI – vind patronen en verrassingen in AI door middel van een interactief spel </h3>
                <p class="h-32 m-0">
                    Ontdek spelenderwijs hoe generatieve AI werkt, welke vooroordelen erin kunnen zitten en hoe je technologie eerlijker kunt maken door aandacht voor macht‐ en ongelijkheid.
                </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/kennis_vaardigheden/Wat_doen_we_ Feministische_AI.jpg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
@endsection
