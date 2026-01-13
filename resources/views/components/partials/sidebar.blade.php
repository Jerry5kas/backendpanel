<aside
    class="fixed lg:static inset-y-0 left-0 z-40 w-64
           bg-white dark:bg-gray-800 border-r
           transform transition-transform duration-300
           lg:translate-x-0"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

    <!-- Logo -->
    <div class="px-6 py-4 text-xl font-bold border-b dark:border-gray-700 flex items-center gap-2">
        <i class="fas fa-layer-group text-blue-600"></i>
        <span>Admin Panel</span>
    </div>

    <!-- Navigation -->
    <nav class="p-4 space-y-1 text-sm">

        <!-- Dashboard -->
        <a href="{{ route('dashboard') ?? '#' }}"
           class="flex items-center gap-3 px-4 py-2 rounded-lg
           {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-700 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}">
            <i class="fas fa-home w-5"></i>
            Dashboard
        </a>

        <!-- Users -->
        <a href="{{ route('dashboard') ?? '#' }}"
           class="flex items-center gap-3 px-4 py-2 rounded-lg
           {{ request()->is('users*') ? 'bg-blue-100 text-blue-700 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}">
            <i class="fas fa-users w-5"></i>
            Users
        </a>

        <!-- Divider -->
        <div class="pt-4 pb-2 text-xs text-gray-400 uppercase tracking-wider">
            Management
        </div>

        <!-- Products Menu -->
        <div x-data="{ open: false }">
            <button
                @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">

                <span class="flex items-center gap-3">
                    <i class="fas fa-box w-5"></i>
                    Products
                </span>

                <i class="fas fa-chevron-down text-xs transition-transform"
                   :class="open ? 'rotate-180' : ''"></i>
            </button>

            <div x-show="open" x-collapse class="ml-8 mt-1 space-y-1">
                <a href="#"
                   class="block px-4 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                    All Products
                </a>
                <a href="#"
                   class="block px-4 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700">
                    Add Product
                </a>
            </div>
        </div>

        <!-- Orders -->
        <a href="#"
           class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
            <i class="fas fa-shopping-cart w-5"></i>
            Orders
        </a>

        <!-- Settings -->
        <a href="#"
           class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
            <i class="fas fa-cog w-5"></i>
            Settings
        </a>

    </nav>

    <!-- Footer -->
    <div class="absolute bottom-0 w-full p-4 border-t dark:border-gray-700 text-xs text-gray-400">
        © {{ date('Y') }} Admin Panel
    </div>

</aside>

<!-- Mobile Overlay -->
<div
    x-show="sidebarOpen"
    x-transition.opacity
    @click="sidebarOpen = false"
    class="fixed inset-0 bg-black/50 z-30 lg:hidden">
</div>
