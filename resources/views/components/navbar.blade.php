<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>

<body>
    <nav class="bg-amber-300 text-white p-4">
        <div class="container mx-auto flex items-center justify-between">

            <!-- Logo -->
            <a href="#" class="text-lg font-bold">Logo</a>

            <!-- Responsive Menu -->
            <div class="lg:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu Items -->
            <div class="hidden lg:flex space-x-4">
                <a href="{{ route('home') }}" class="hover:text-gray-400">Home</a>
                <a href="{{ route('about1') }}" class="hover:text-gray-400">About</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-400">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Responsive Menu Overlay -->
    <div id="menu-overlay"
        class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-50 hidden justify-center items-center">
        <div class="bg-white p-4 rounded-md">
            <div class="flex justify-end">
                <button id="close-menu" class="text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="mt-4">
                <a href="{{ route('home') }}" class="block py-2 text-gray-800 hover:bg-gray-200">Home</a>
                <a href="{{ route('about1') }}" class="block py-2 text-gray-800 hover:bg-gray-200">About</a>
                <a href="{{ route('contact') }}" class="block py-2 text-gray-800 hover:bg-gray-200">Contact</a>
            </div>
        </div>
    </div>

    <script>
        // Responsive menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const menuOverlay = document.getElementById('menu-overlay');
        const closeMenu = document.getElementById('close-menu');

        menuToggle.addEventListener('click', () => {
            menuOverlay.classList.toggle('hidden');
        });

        closeMenu.addEventListener('click', () => {
            menuOverlay.classList.add('hidden');
        });
    </script>
</body>

</html>
