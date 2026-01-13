<header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="text-2xl font-bold flex items-center gap-2">
            <i class="fas fa-leaf text-green-600"></i>
            <span>{{ config('app.name') }}</span>
        </a>

        <!-- Nav -->
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
            <a href="#home" class="hover:text-green-600">Home</a>
            <a href="#about" class="hover:text-green-600">About</a>
            <a href="#contact" class="hover:text-green-600">Contact</a>
        </nav>

        <!-- Auth -->
        <div class="flex items-center gap-4 text-sm">
            <a href=""
               class="hover:text-green-600">
                Sign In
            </a>
            <a href=""
               class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                Sign Up
            </a>
        </div>

    </div>
</header>
