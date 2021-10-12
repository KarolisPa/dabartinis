<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('', 'Tvorūna') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css" rel="stylesheet" />

{{--        <link--}}
{{--            rel="stylesheet"--}}
{{--            href="https://unpkg.com/swiper@7/swiper-bundle.min.css"--}}
{{--        />--}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 bg-opacity-75 ">

            @include('layouts.navigation')
{{--            @include('components.carousel')--}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>
        @include('components.footer')
        @livewireScripts
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    @stack('scripts')
    </body>
</html>