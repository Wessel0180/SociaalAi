
@extends("main")

@section("title", "Informatie SociaalAI Lab")

@section("content")
      <section class="flex flex-col md:flex-row items-center  gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
            <h1 class="font-bold text-2xl">De Maatschappelijke Code voor Verantwoorde AI</h1>
            <p class="text-1xl md:text-1xl  mb-4 text-gray-900">
            Het Sociaal AI Lab werkt volgens de <strong>Rotterdamse Maatschappelijke Code voor Verantwoorde AI.</strong> 
            Deze afgesproken regels zorgen ervoor dat technologie in onze stad eerlijk, veilig en mensgericht blijft.
            Het is een document dat we blijven aanvullen, terwijl we samen leren en inzichten opdoen in het lab. 
            Het vormt een kader voor alle projecten en activiteiten. 
            </p>
            <p>Het ontwerpen en gebruiken van AI-toepassingen moet aan onze zes kernwaarden voldoen:</p>
        </section>
<section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
    <div class="flex flex-1 justify-center items-center text-[#00811F]">
        <i class="fa-solid fa-1 text-9xl"></i>
    </div>
    <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Menselijke waardigheid
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
        Ondersteunt mensen - vervangt ze niet.
        </h2>
    </div>
</section>

<section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
    <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Gelijkheid en inclusie
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
            Bevordert gelijkheid en toegankelijkheid zonder groepen uit te sluiten of ongelijkheid te vergroten.
        </h2>
    </div>
     <div class="flex flex-1 justify-center items-center text-[#00811F]">
            <i class="fa-solid fa-2 text-9xl"></i>
        </div>
</section>

<section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
    <div class="flex flex-1 justify-center items-center text-[#00811F]">
        <i class="fa-solid fa-3 text-9xl"></i>
    </div>
    <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Transparantie
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
        Maakt transparant hoe het werkt - zodat iedereen weet hoe en waarom AI wordt ingezet.
        </h2>
    </div>
</section>

<section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
    <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Privacy en gegevensbescherming
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
            Beschermt privacy en gegevens door zorgvuldig om te gaan met persoonlijke informatie. 
        </h2>
    </div>
    <div class="flex flex-1 justify-center items-center text-[#00811F]">
        <i class="fa-solid fa-4 text-9xl"></i>
    </div>
</section>

<section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
    <div class="flex flex-1 justify-center items-center text-[#00811F]">
        <i class="fa-solid fa-5 text-9xl"></i>
    </div>
    <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Veiligheid en betrouwbaarheid
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
        Werkt veilig en betrouwbaar en doet wat we verwachten, zonder onnodige risico's.
        </h2>
    </div>
</section>

<section class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
    <div class="flex-1">
        <span class="inline-block bg-green-100 text-green-800 text-sm font-medium px-4 py-1 mb-4">
            Verantwoording
        </span>
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-900">
            Houdt mensen verantwoordelijk - beslissingen blijven altijd in menselijke handen, niet bij de technologie.
        </h2>
    </div>
    <div class="flex flex-1 justify-center items-center text-[#00811F]">
            <i class="fa-solid fa-6 text-9xl"></i>
        </div>
</section>
<div class="flex flex-col md:flex-row items-center gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
 <img src="{{ asset('/images/Code_of_Conduct.jpg') }}"
                 alt="Code of Conduct"
                 class=" w-auto h-auto">
                 
</div>
@endsection
