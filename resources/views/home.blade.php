<x-navbar></x-navbar>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-100">

    <div class="bg-blue-500 text-white py-10 md:py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl md:text-4xl font-bold mb-2 md:mb-4">Welcome to Our Website</h1>
            <p class="text-sm md:text-lg mb-4 md:mb-8">Explore our amazing services and products</p>
            <a href="#" class="bg-white text-blue-500 py-1 px-2 md:py-2 md:px-4 rounded-full inline-block">Get Started</a>
        </div>
    </div>

    <div class="text-center mx-auto text-2xl md:text-4xl font-bold mb-4">Online Course</div>

    <div class="bg-gray-100">

        <div class="container mx-auto mt-4 md:mt-8">
            <div class="flex flex-wrap -mx-4">

                <!-- Card 1 -->
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-8">
                    <div class="bg-white p-4 md:p-6 rounded-md shadow-md">
                        <h2 class="text-lg md:text-xl font-bold mb-2 md:mb-4 text-center">Laravel</h2>
                        <p class="text-sm md:text-base text-center">Content of Card 1 goes here.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-8">
                    <div class="bg-white p-4 md:p-6 rounded-md shadow-md">
                        <h2 class="text-lg md:text-xl font-bold mb-2 md:mb-4 text-center">Tailwind</h2>
                        <p class="text-sm md:text-base text-center">Content of Card 2 goes here.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-8">
                    <div class="bg-white p-4 md:p-6 rounded-md shadow-md">
                        <h2 class="text-lg md:text-xl font-bold mb-2 md:mb-4 text-center">JavaScript</h2>
                        <p class="text-sm md:text-base text-center">Content of Card 3 goes here.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <x-footer></x-footer>
</body>
</html>
