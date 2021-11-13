<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <style>
        [x-cloak] { display: none; }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-violet">
    <div class="flex flex-col min-h-screen">
        @include('livewire.navigation')

        <div class="flex flex-1">

            <!-- Side Bar -->
            <livewire:aside />
            <!-- Page Content -->
            <div class="flex flex-1 flex-col bg-violet-pastel py-6 px-4 sm:px-6 lg:px-8 m-4 rounded-md">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
