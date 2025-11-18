<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <meta name="description" content="SociaalAI helpt inwoners sterker te staan in een steeds digitalere wereld. We doen dit door Rotterdammers actief mee te laten denken, praten en beslissen over kunstmatige intelligentie.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-[#00811F] to-[#b9eb34]">

{{--banner--}}
<div class="relative w-full h-72 md:h-96 bg-cover bg-center shadow-lg"
     style="background-image:url('{{ asset('/images/banner-optim.jpg') }}');">

    <div class="absolute inset-0 flex items-center justify-start p-8">
        <img src="{{ asset('/images/Sociaal_AI_Logo_Wit01.png') }}"
             alt="Sociaal AI Logo"
             class="h-62 md:h-78 object-contain ml-[15%]">
    </div>
</div>

<!-- Navigatie -->
<nav class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-center md:justify-between items-center">
        <div class="hidden md:flex space-x-8 font-medium">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-[#00811F]  transition"><i class="fa-solid fa-house"></i></a>
            <a href="{{ url('/over') }}" class="text-gray-700 hover:text-[#00811F] transition">Over ons</a>
            <a href="{{ url('/verantwoord_ai') }}" class="text-gray-700 hover:text-[#00811F] transition">Verantwoord AI</a>
            <a href="{{ url('/agenda') }}" class="text-gray-700 hover:text-[#00811F] transition">Agenda</a>
            <!-- Programma met dropdown -->
            <div class="relative" id="programma-dropdown">
                <!-- Toggle knop -->
                <button
                    id="programma-toggle"
                    aria-haspopup="true"
                    aria-expanded="false"
                    class="flex items-center gap-2 text-gray-700 hover:text-[#00811F] transition font-medium focus:outline-none"
                >
                    <span>Programma</span>
                    <!-- pijl die roteert bij open -->
                    <svg id="programma-caret" class="w-4 h-4 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown menu (verborgen standaard) -->
                <div
                    id="programma-menu"
                    class="hidden absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50 focus:outline-none"
                    role="menu"
                    aria-labelledby="programma-toggle"
                >
                    <!-- Elke link is role=menuitem voor a11y -->
                    <a href="{{ url('/programma/kennis') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Kennis vaardigheden</a>
                    <a href="{{ url('/programma/actie') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Actie, onderzoek en ontwerp</a>
                    <a href="{{ url('/programma/faciliteit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100" role="menuitem">Faciliteit van het Lab
                    </a>
                    <!-- voeg meer items toe naar behoefte -->
                </div>
            </div>

            <a href="{{ url('/initiatief') }}" class="text-gray-700 hover:text-[#00811F] transition">Initiatiefnemers</a>
            <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-[#00811F] transition">Contact</a>
        </div>
    </div>
</nav>

<!-- Pagina content -->
<main>
    @yield('content')
</main>

<footer class="bg-white py-12 mt-16 shadow-inner">
    <div class="flex justify-evenly items-center space-x-4 mb-8">

        <div class="w-32 h-20 flex items-center justify-center">
            <img alt="logo techniek collage Rotterdam" src="{{ asset('/images/Techniek_college_Rotterdam_logoOP.png') }}" class="max-w-full max-h-full object-contain">
        </div>

        <div class="w-32 h-20 flex items-center justify-center">
            <img alt="logo hogeschool Rotterdam" src="{{ asset('/images/Hogeschool_Rotterdam.png') }}" class="max-w-full max-h-full object-contain">
        </div>

        <div class="w-32 h-20 flex items-center justify-center">
            <img alt="logo gemeente Rotterdam " src="{{ asset('/images/Gemeente_rotterdam.png') }}" class="max-w-full max-h-full object-contain">
        </div>

        <div class="w-32 h-20 flex items-center justify-center">
            <img alt="erasmus universiteit" src="{{ asset('/images/Erasmus_uni.png') }}" class="max-w-full max-h-full object-contain">
        </div>

        <div class="w-32 h-20 flex items-center justify-center">
            <img alt="Erasmus Centre for Data Analytics" src="{{ asset('/images/Erasmus_DataOP.png') }}" class="max-w-full max-h-full object-contain">
        </div>

    </div>
</footer>

<script>
        (function() {
        const toggle = document.getElementById('programma-toggle');
        const menu = document.getElementById('programma-menu');
        const caret = document.getElementById('programma-caret');

        if (!toggle || !menu) return;

        function openMenu() {
        menu.classList.remove('hidden');
        toggle.setAttribute('aria-expanded', 'true');
        caret.classList.add('rotate-180');
        // focus eerste item voor keyboard users
        const first = menu.querySelector('[role="menuitem"]');
        if (first) first.focus();
    }

        function closeMenu() {
        menu.classList.add('hidden');
        toggle.setAttribute('aria-expanded', 'false');
        caret.classList.remove('rotate-180');
        toggle.focus();
    }

        function toggleMenu() {
        if (menu.classList.contains('hidden')) openMenu();
        else closeMenu();
    }

        // klik op de knop: toggle
        toggle.addEventListener('click', function(e){
        e.preventDefault();
        toggleMenu();
    });

        // keyboard op de knop: Enter of Space opent/toggle
        toggle.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggleMenu();
    } else if (e.key === 'ArrowDown') {
        e.preventDefault();
        if (menu.classList.contains('hidden')) openMenu();
    }
    });

        // sluit op escape
        document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
        if (!menu.classList.contains('hidden')) closeMenu();
    }
    });

        // klik buiten: sluit menu
        document.addEventListener('click', function(e) {
        const target = e.target;
        if (!menu.contains(target) && !toggle.contains(target)) {
        if (!menu.classList.contains('hidden')) closeMenu();
    }
    });

        // optioneel: sluit en navigeer op menuitem click (voor a tags standaard)
        const items = menu.querySelectorAll('[role="menuitem"]');
        items.forEach(item => {
        item.setAttribute('tabindex', '0'); // focusable
        item.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
        closeMenu();
    } else if (e.key === 'ArrowDown') {
        e.preventDefault();
        const next = item.nextElementSibling || menu.querySelector('[role="menuitem"]');
        if (next) next.focus();
    } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        const prev = item.previousElementSibling || menu.querySelector('[role="menuitem"]:last-child');
        if (prev) prev.focus();
    }
    });
    });
    })();
</script>

</body>
</html>
