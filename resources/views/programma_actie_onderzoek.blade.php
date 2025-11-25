
@extends("main")

@section("title", "hoogtenpunten")

@section("content")

    <div class="mobile flex  items-center justify-center mt-10">
         <div class="bg-white p-6  shadow-lg max-w-xl mt-6 w-full border-r text-center">
            <a href="{{ url('/programma/kennis') }}"><h1 class="text-2xl hover:text-[#00811F] font-semibold">Kennis & Vaardigheden</h1></a>
        </div>
        <div class="bg-white p-6 max-w-xl mt-6 w-full text-center border-r border-gray-500">
            <a href="{{ url('/programma/actie') }}"><h1 class="text-2xl text-[#00811F] font-semibold">Actie, Onderzoek & Ontwerp</h1></a>
        </div>
         <div class="bg-white p-6  max-w-xl mt-6 w-full text-center">
            <a href="{{ url('/programma/faciliteit') }}"><h1 class="text-2xl hover:text-[#00811F] font-semibold">Faciliteiten</h1></a>
        </div>
    </div>
             
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-6">
        <!-- Kolom 1 -->
        <div class="flex flex-col justify-between space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Digiderius – de digitale Erasmus</h3>
                <p class="">
                Digiderius is een “digitaal mens” waarmee deelnemers kunnen praten over onderwerpen als onderwijs, cultuur en technologie. Ontdek zelf hoe jij deze digitale gesprekspartner ervaart. Dit helpt ons te begrijpen wat Rotterdammers nodig hebben om met deze “chatbots” prettig om te kunnen gaan.</p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/actie_onderzoek_ontwerp/Wat_doen_we_ Digiderius.jpeg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
            
            <div class="flex flex-col justify-between relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Samen AI-toepassingen ontwerpen</h3>
                <p class="">
                    Samen met bewoners ontwerpen we AI-oplossingen voor sociale vraagstukken, bijvoorbeeld rond armoede, zorg of veiligheid. Rotterdammers zetten tijdens deze activiteiten hun behoeftes aan eerlijke technologie en praktische oplossingen om in de praktijk
                </p>
                <div class="">
                <img src="{{ asset('/images/wat_doen_we/actie_onderzoek_ontwerp/Wat_doen_we_Samen_AI_toepassingen_ontwerpen.jpeg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>

        <div class="flex flex-col justify-between relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Inclusieve zorg en AI</h3>
                <p class="">
                    Met Rotterdamse vrouwen en non-binaire personen van kleur bespreken we uitsluiting en vooroordelen in de zorg. Samen vertalen we hun ervaringen naar principes voor eerlijke en inclusieve AI. Deze inzichten delen we met onderzoekers, beleidsmakers en organisaties om ze in praktijk te brengen.
                </p>
                <div class="">
                <img src="{{ asset('/images/wat_doen_we/actie_onderzoek_ontwerp/Wat_doen_we_ Inclusieve_AI_in_de_Zorg.JPG') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>

             <!-- Kolom 2 -->
            <div class="flex flex-col justify-between space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Ondersteuning aan bewoners verbeteren met AI?</h3>
                <p class="">
                We onderzoeken samen hoe AI kan helpen om Rotterdammers met weinig digitale ervaring beter te ondersteunen. In de sessies werken we met vrijwilligers van het Trefpunt, zodat zij bewoners nog beter kunnen helpen. 
                </p>
                <div class="">
                <img src="{{ asset('/images/wat_doen_we/actie_onderzoek_ontwerp/Wat_doen_we_Ondersteuning_aan_bewoners_verbeteren_ met_AI.jpg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
            
            <div class="flex flex-col justify-between relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Verantwoorde AI binnen organisaties (ELSA-aanpak)</h3>
                <p class="">
                  We willen begrijpen of AI goed, rechtvaardig en maatschappelijk verantwoord is, vooral als we het inzetten in publieke diensten. Daarom organiseren we workshops met mensen uit overheid, bedrijfsleven, samenleving en de natuur, zodat we vanuit gedeelde waarden kunnen bepalen welke technologie we gebruiken en hoe. 
                <div class="">
                <img src="{{ asset('/images/wat_doen_we/actie_onderzoek_ontwerp/Wat_doen_we_Verantwoorde_AI_binnen _Organizaties_(ELSA-aanpak).png') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>

        <div class="flex flex-col justify-between relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Studenten en bewoners verkennen de sociale invloed van AI</h3>
                <p class="">
                    Samen met bewoners uit de omgeving van de Hillevliet, onderzoeken studenten wat AI betekent voor de wijk. Dit vertalen ze gezamenlijk (co-creatie) naar een creatief eindresultaat, zoals een muurschildering, publicatie of interviewreeks.</p>
                <div class="">
                <img src="{{ asset('/images/wat_doen_we/actie_onderzoek_ontwerp/Wat_doen_we_ Studenten_en_bewoners_verkennen_de_sociale_invloed_van_AI.jpg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-auto h-64 object-cover">
                </div>
            </div>
            
            <div class="flex flex-col justify-between relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Wijkbots – in te zetten voor een betrokken stad? </h3>
                <p class="">
                  We kijken hoe slimme, zelfstandige machines in de toekomst kunnen helpen in onze openbare ruimtes. Denk aan bots die buurtinformatie verzamelen, bewoners ondersteunen of lokale diensten ondersteunen. We onderzoeken hoe deze technologie kan bijdragen aan een stad die beter luistert naar haar inwoners.<div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/actie_onderzoek_ontwerp/Wat_doen_we_wijkbots.jpg') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
@endsection

<style>
@media (max-width: 1024px) {
  .mobile{
    flex-direction: column;
  }
  .mobile-col{
    flex-direction: column;
  }
}
</style>