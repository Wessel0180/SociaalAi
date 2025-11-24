@extends("main")

@section("title", "contact")

@section("content")
    @if(session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

    <section class="flex flex-col md:flex-row items-center  gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
            <h1 class="font-bold text-2xl">Contact</h1>
            <p>Wil je meedoen, meedenken, meeleren of meer weten over activiteiten van het lab?</p>
            <p>Stuur ons een bericht en maak een afspraak om langs te komen, iedereen is welkom!</p>
            <a href="mailto:digitaleinclusie@rotterdam.nl">digitaleinclusie@rotterdam.nl</a>
            <img src="{{ asset('/images/Contact_foto.jpg') }}"
                 alt="Foto van locatie"
                 class="w-auto h-64">
        </div>
    </section>

    <section class="flex flex-col md:flex-row items-center  gap-10 bg-white shadow-lg p-8 max-w-6xl mx-auto my-12">
        <div class="flex-1">
            <h1 class="font-bold text-2xl">Sociaal AI Lab Rotterdam</h1>
            <div>
                Hillevliet 90<br />
                3074 KD Rotterdam<br />
                <a href="mailto:digitaleinclusie@rotterdam.nl">digitaleinclusie@rotterdam.nl</a>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4924.161289441116!2d4.5037668125406105!3d51.89599238212385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c433097cf8a783%3A0x6aabf347bcd316ef!2sHillevliet%2090%2C%203074%20KD%20Rotterdam!5e0!3m2!1sen!2snl!4v1763988130581!5m2!1sen!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br />
            <p>Wij zijn geopend op maandag, woensdag en vrijdag.</p>
        </div>
    </section>
        <?php /*
        <form action="{{ route('contact.send') }}" method="post"
              class="bg-white p-8 shadow-lg w-full max-w-md space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">Naam:</label>
                <input type="text" name="name" id="name" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">E-mail:</label>
                <input type="email" name="email" id="email" required
                       class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="phone" class="block text-gray-700 font-medium mb-1">Telefoonnummer (optioneel):</label>
                <input type="tel" name="phone" id="phone"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="message" class="block text-gray-700 font-medium mb-1">Bericht:</label>
                <textarea name="message" id="message" required
                          class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 h-32"></textarea>
            </div>

            <button type="submit"
                    class="w-full bg-[#00811F] text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">
                Verstuur
            </button>

        </form>
         */
        ?>
    </div>
@endsection
