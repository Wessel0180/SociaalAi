
@extends("main")

@section("title", "hoogtenpunten")

@section("content")

      <div class="mobile flex flex-row flex-1 items-center justify-center mt-10">
         <div class="bg-white p-6 shadow-lg max-w-xl mt-6 w-full border-r text-center">
            <a href="{{ url('/programma/kennis') }}"><h1 class="text-2xl hover:text-[#00811F] font-semibold">Kennis & Vaardigheden</h1></a>
        </div>
        <div class="bg-white p-6 max-w-xl mt-6 w-full text-center border-r border-gray-500">
            <a href="{{ url('/programma/actie') }}"><h1 class="text-2xl hover:text-[#00811F]  font-semibold">Actie, Onderzoek & Ontwerp</h1></a>
        </div>
         <div class="bg-white p-6  max-w-xl mt-6 w-full text-center">
            <a href="{{ url('/programma/faciliteit') }}"><h1 class="text-2xl text-[#00811F] font-semibold">Faciliteiten</h1></a>
        </div>
    </div>

    <div class="mobile-col flex justify-evenly gap-8 p-6">
        <!-- Kolom 1 -->
        <div class="space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">Het Sociaal AI Lab is op Hillevliet en online te bezoeken.</h3>
                <p class="h-40">
                Het Lab biedt de plek én de technische ondersteuning voor alle activiteiten van het programma. Dat kan op locatie aan de Hillevliet, maar ook in een digitale omgeving. Het Lab is het kloppende hart van het programma.
                </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/faciliteiten/Wat_doen_we_Sociaal_AI Lab_Rotterdam.png') }}"
                    alt="SociaalAI Inspiratiedag"
                    class="w-full h-64 object-cover">
                </div>
            </div>
            
            <div class="relative space-y-6 space-x-6 bg-white p-6">
                <h3 class="text-xl font-semibold mb-4">De mobiele AI Labkar – een pop-uplocatie waar bewoners kunnen kennismaken met AI</h3>
                <p class="h-40">
                    Samen met bewoners ontwerpen we AI-oplossingen voor sociale vraagstukken, bijvoorbeeld rond armoede, zorg of veiligheid. Rotterdammers zetten tijdens deze activiteiten hun behoeftes aan eerlijke technologie en praktische oplossingen om in de praktijk
                </p>
                <div class="flex-1">
                <img src="{{ asset('/images/wat_doen_we/faciliteiten/Wat_doen_we_AI_Labkar.png') }}"
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