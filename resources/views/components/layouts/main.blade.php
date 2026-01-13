<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{ darkMode: localStorage.getItem('dark') === 'true' }"
      x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
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
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-..."
        crossorigin="anonymous"
        referrerpolicy="no-referrer"/>


    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Extra Head -->
    @stack('styles')
</head>

<body class="font-inter bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">

<!-- Page Loader -->
<div id="page-loader"
     class="fixed inset-0 z-50 flex items-center justify-center bg-white dark:bg-gray-900">
    <span class="animate-pulse text-xl font-semibold">Loading...</span>
</div>

<!-- Sidebar -->


<!-- Main Content -->
<main class="min-h-screen">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-gray-100 dark:bg-gray-800 mt-10">
    @includeIf('components.partials.footer')
</footer>

<!-- Alpine JS -->
<script
    defer
    src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js">
</script>

<!-- GSAP -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-..."
    crossorigin="anonymous"
    referrerpolicy="no-referrer">
</script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- Global Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.to('#page-loader', {
            opacity: 0,
            duration: 0.5,
            onComplete: () => {
                document.getElementById('page-loader').remove();
            }
        });
    });
</script>

@stack('scripts')
</body>
</html>
