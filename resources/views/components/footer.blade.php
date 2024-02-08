<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-left">
            <p class="text-sm">&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
        <div class="text-right">
            <a href="#" class="text-gray-400 hover:text-white mx-2">Privacy Policy</a>
            <a href="#" class="text-gray-400 hover:text-white mx-2">Terms of Service</a>
            <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white mx-2">Contact Us</a>
        </div>
    </div>
</footer>