<header class="bg-white dark:bg-gray-800 border-b px-6 py-4 flex items-center justify-between">

    <!-- Left -->
    <div class="flex items-center gap-4">
        <button @click="sidebarOpen = !sidebarOpen"
                class="lg:hidden text-xl">
            <i class="fas fa-bars"></i>
        </button>

        <h1 class="text-xl font-semibold">@yield('page_title', 'Dashboard')</h1>
    </div>

    <!-- Right -->
    <div class="flex items-center gap-4">

        <!-- Dark Mode -->
        <button @click="toggleDark"
                class="p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
            <i class="fas" :class="darkMode ? 'fa-sun' : 'fa-moon'"></i>
        </button>

        <!-- Profile -->
        <div class="relative" x-data="{ open:false }">
            <button @click="open=!open"
                    class="flex items-center gap-2">
                <img src="https://ui-avatars.com/api/?name=Admin"
                     class="w-8 h-8 rounded-full">
                <span class="hidden sm:block">Admin</span>
            </button>

            <div x-show="open"
                 @click.outside="open=false"
                 class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 rounded shadow">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
            </div>
        </div>
    </div>
</header>
