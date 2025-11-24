
@extends("main")

@section("title","Event")

@section("content")


    <section class="max-w-3xl mx-auto mt-10 bg-white shadow-lg p-8 space-y-6">

        <h2 class="text-3xl font-bold text-[#00811F]">
            Opening Sociaal AI Lab & Symposium Verantwoord AI-gebruik
        </h2>

        <div class="flex flex-row gap-5 text-gray-700 space-y-2 ">
            <i class="fa-regular fa-calendar text-[#00811F] ml-[2px]  text-2xl"></i>
            <p class="text-gray-700"><strong> Wanneer:</strong> 25 november 2025</p>
        </div>
        <div class="flex flex-row gap-5 text-gray-700 space-y-2">
            <i class="fa-regular fa-clock text-[#00811F] text-2xl"></i>
            <p class="text-gray-700"><strong>Hoelaat:</strong> 12:30 - 19:00</p>
        </div>
        <div class="flex flex-row gap-5 text-gray-700 space-y-2">
            <i class="fa-solid fa-location-dot text-[#00811F] ml-1 text-2xl"></i>
            <p class="text-gray-700 ml-1 "><strong>Waar:</strong> Rotterdam - Hillevliet 90</p>

        </div>
            <p>
                Aanmelden kan via:
                <a href="aanmelder.nl" class="text-[#00811F] underline hover:text-[#006f19]">aanmelder.nl</a>
            </p>

        <div class="text-gray-700 space-y-4">
            <p>
                Tijdens dit feestelijke evenement openen we officieel de deuren van het Sociaal AI Lab.
                Met een speech van wethouder <strong>Faouzi Achbar</strong>, lezing, panelgesprek,
                rondetafelsessies en workshops over AI en sociale vraagstukken.
            </p>
        </div>

    </section>

    <div class="flex justify-center my-10">
        <div class="bg-white p-6  gap 10 shadow-lg max-w-xl w-full text-center">
            <h1 class=" text-[#00811F] text-2xl font-semibold">Waarom deelnemen</h1>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <div class="space-y-6">
{{--kolom1--}}
            <div class="bg-white shadow-lg p-6 min-h-[150px] max-w-sm mx-auto">
                <p>
                    Zelf ervaren hoe AI werkt in de praktijk en hoe het kan worden ingezet bij sociale uitdagingen.
                </p>
            </div>
        </div>
{{--kolom2--}}
            <div class="space-y-6">

                <div class="bg-white shadow-lg p-6 min-h-[150px] max-w-sm mx-auto">

                    <p>
                    In contact komen met gelijkgestemde Rotterdammers, zoals professionals die actief zijn in het sociaal domein, onderzoekers en ontwerpers.
                    </p>
                </div>
            </div>
{{--kolom3--}}
                <div class="space-y-6">

                    <div class="bg-white shadow-lg p-6 min-h-[150px] max-w-sm mx-auto">
                        <h3 class="text-xl font-semibold "></h3>
                        <p>
                        Meedoen aan workshops en demo’s, zoals Digiderius, de AI Lab-kar en AI-prototypes van studenten
                        </p>

                    </div>
                </div>




@endsection
