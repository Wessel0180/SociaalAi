
@extends("main")

@section("title", "hoogtenpunten")

@section("content")
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-6">

        <!-- Kolom 1 -->
        <div class="space-y-6">

            <div class="bg-white shadow-lg p-6 rounded-xl min-h-[420px] max-w-sm mx-auto">
                <h3 class="text-xl font-semibold mb-4">AI-vaardigheidstrainingen</h3>
                <p>
                    Workshops voor inwoners, jongeren en professionals over wat AI is en hoe je het verantwoord kunt gebruiken.
                    Deze sessies vergroten digitale vaardigheden. Hoe werkt het precies? Hoe kan AI jou helpen?
                    Waar moet je aan denken als je het gebruikt?
                </p>

                <div class="mt-6"></div>

                <h3 class="text-xl font-semibold mb-4">Ontrafel de AI-Machine</h3>
                <p>
                    Een theatrale en interactieve sessie voor de jeugd, waarin deelnemers kunnen ontdekken hoe kunstmatige
                    intelligentie werkt, leert en beslissingen neemt.
                </p>
            </div>

        </div>

        <!-- Kolom 2 -->
        <div class="space-y-6">

            <div class="bg-white shadow-lg p-6 rounded-xl min-h-[420px] max-w-sm mx-auto">
                <h3 class="text-xl font-semibold mb-4">Samen toekomstbeelden creëren met behulp van AI</h3>
                <p>
                    Een interactieve sessie die mensen inzicht geeft in generatieve AI, en waarin samen creatieve scenario’s
                    gemaakt worden voor een rechtvaardige en inclusieve AI-toekomst.
                </p>
                <div class="mt-6"></div>
                <h3 class="text-xl font-semibold mb-4">Test je AI-kennis</h3>
                <p>
                    Ontdek hoeveel jij al weet over AI en verdien een badge als beloning voor het maken van onze AI-test.
                </p>
            </div>

        </div>

        <!-- Kolom 3 -->
        <div class="space-y-6">

            <div class="bg-white shadow-lg p-6 rounded-xl min-h-[420px] max-w-sm mx-auto">
                <h3 class="text-xl font-semibold mb-4">AI in het basisonderwijs</h3>
                <p>
                    Leuke lessen waarin basisschoolleerlingen op een speelse manier kennismaken met kunstmatige intelligentie.
                    Ze worden gestimuleerd om nieuwsgierig te zijn, creatief te denken en digitale vaardigheden te ontwikkelen.
                </p>
                <div class="mt-6"></div>
                <h3 class="text-xl font-semibold mb-4">Feministische AI</h3>
                <p>
                    Vind patronen en verrassingen in AI door middel van een interactief spel waarin kritische reflectie en
                    creatief denken centraal staan.
                </p>
            </div>

        </div>

    </div>

@endsection
