<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="layout()"
      :class="{ 'dark': darkMode }">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO -->
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Laravel Application')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous"
        referrerpolicy="no-referrer"/>

    <!-- Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="font-inter bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">

<!-- ===== PAGE LOADER ===== -->
<div id="page-loader"
     class="fixed inset-0 z-50 flex items-center justify-center bg-white dark:bg-gray-900">
    <span class="animate-pulse text-lg font-semibold">Loading...</span>
</div>

<!-- ===== APP WRAPPER ===== -->
<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    @include('components.partials.sidebar')

    <!-- Content Area -->
    <div class="flex flex-col flex-1 overflow-hidden">

        <!-- Header -->
        @include('components.partials.header')

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
            {{ $slot }}
        </main>

        <!-- Footer -->
        @include('components.partials.footer')

    </div>
</div>

<!-- ===== SCRIPTS ===== -->

<!-- Alpine -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<!-- Charts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    function layout() {
        return {
            sidebarOpen: false,
            darkMode: localStorage.getItem('dark') === 'true',

            toggleDark() {
                this.darkMode = !this.darkMode
                localStorage.setItem('dark', this.darkMode)
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        gsap.to('#page-loader', {
            opacity: 0,
            duration: 0.4,
            onComplete: () => document.getElementById('page-loader')?.remove()
        })
    })
</script>

@stack('scripts')
</body>
</html>
