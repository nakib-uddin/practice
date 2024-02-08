<x-navbar></x-navbar>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Contact Page</title>
</head>

<body class="bg-green-100">

    <div class="container mx-auto  mt-8 mb-8">
        <div class="max-w-md  mx-auto bg-white p-8 rounded-md shadow-md">

            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>

            <!-- Contact Form -->
            <form action="#" method="post">

                <!-- Name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 p-2 w-full md:w-96 border border-gray-300 rounded-md">
                </div>

                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 p-2 w-full md:w-96 border border-gray-300 rounded-md">
                </div>

                <!-- Message Textarea -->
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="mt-1 p-2 w-full md:w-96 border border-gray-300 rounded-md"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="bg-blue-500 text-white p-2 rounded-md md:w-96 hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>

