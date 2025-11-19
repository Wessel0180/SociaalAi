@extends("main")

@section("title", "contact")

@section("content")
    @if(session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

    <div class="min-h-screen flex flex-col items-center justify-center p-6">

        <form action="{{ route('contact.send') }}" method="post"
              class="bg-white p-8 shadow-lg w-full max-w-md space-y-6 rounded-lg">
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
                    class="w-full bg-blue-500 text-white font-medium px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">
                Verstuur
            </button>

        </form>
    </div>
@endsection
