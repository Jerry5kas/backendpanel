<footer class="bg-white dark:bg-gray-800 border-t dark:border-gray-700">

    <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between gap-4">

        <!-- Left -->
        <div class="text-sm text-gray-500 dark:text-gray-400">
            © {{ date('Y') }}
            <span class="font-medium text-gray-700 dark:text-gray-200">
                {{ config('app.name') }}
            </span>.
            All rights reserved.
        </div>

        <!-- Center (Optional Links) -->
        <div class="flex items-center gap-4 text-sm">
            <a href="#"
               class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                Privacy Policy
            </a>
            <a href="#"
               class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                Terms
            </a>
            <a href="#"
               class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                Support
            </a>
        </div>

        <!-- Right (Social Icons) -->
        <div class="flex items-center gap-3 text-lg">
            <a href="#" class="text-gray-400 hover:text-blue-600">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-sky-500">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-pink-600">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </div>

</footer>
