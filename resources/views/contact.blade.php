
@extends("main")

@section("title", "contact")

@section("content")

    <div class="min-h-screen flex flex-col items-center justify-center p-6">
        <form class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md space-y-4">

            <h2 class="text-2xl font-semibold text-center mb-4">Contactformulier</h2>

            <input type="text" placeholder="Naam" class="border p-2 w-full rounded">

            <input type="email" placeholder="Emailadres" class="border p-2 w-full rounded">

            <input type="text" placeholder="Telefoonnummer (niet verplicht )" class="border p-2 w-full rounded">

            <textarea placeholder="Bericht" class="border p-2 w-full rounded h-32"></textarea>

            <button class="bg-green-600 text-white w-full py-2 rounded-lg">
                Versturen
            </button>

        </form>
    </div>

@endsection
