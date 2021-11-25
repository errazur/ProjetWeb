<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stars of Football</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <style>
        [x-cloak] {
            display: none;
        }

    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-violet">
    <div class="flex flex-col min-h-screen">
        @include('layouts.navigation')

        <div class="flex flex-1">

            <!-- Side Bar -->
            <aside
                class="invisible hidden md:flex md:visible flex-col relative bg-violet-pastel m-4 py-1 px-2 box-border w-28 rounded-md">
                <nav class="space-y-7">
                    {{-- Home : --}}
                    <x-responsive-nav-link href="{{ route('Accueil') }}" :active="request()->routeIs('Accueil')"><img
                            src=" {{ URL::asset('/images/home.svg') }}" alt="Home"
                            class="img-responsive" />
                    </x-responsive-nav-link>

                    {{-- Notifications : --}}
                    <x-responsive-nav-link href="{{ route('notification') }}"
                        :active="request()->routeIs('notification')"><img
                            src="{{ URL::asset('/images/notification.svg') }}" alt="Notification"
                            class="img-responsive w-24" /></x-responsive-nav-link>

                    {{-- Ligue : --}}
                    <x-responsive-nav-link href="{{ route('ligue') }}" :active="request()->routeIs('ligue')"><img
                            src="{{ URL::asset('/images/Ligue.svg') }}" alt="Ligue"
                            class="img-responsive w-24" />
                    </x-responsive-nav-link>

                    {{-- Effectifs : --}}
                    <x-responsive-nav-link href="{{ route('effectif') }}" :active="request()->routeIs('effectif')">
                        <img src="{{ URL::asset('/images/effectif.svg') }}" alt="Effectifs"
                            class="img-responsive w-24" />
                    </x-responsive-nav-link>

                    {{-- Tactiques : --}}
                    <x-responsive-nav-link href="{{ route('tactique') }}" :active="request()->routeIs('tactique')">
                        <img src="{{ URL::asset('/images/tactics.svg') }}" alt="Tactiques"
                            class="img-responsive w-24" />
                    </x-responsive-nav-link>

                    {{-- Entrainements : --}}
                    <x-responsive-nav-link href="{{ route('entrainement') }}"
                        :active="request()->routeIs('entrainement')"><img
                            src="{{ URL::asset('/images/training.png') }}" alt="Entrainements"
                            class="img-responsive w-24" /></x-responsive-nav-link>

                    {{-- Stades : --}}
                    <x-responsive-nav-link href="{{ route('structure') }}" :active="request()->routeIs('structure')">
                        <img src="{{ URL::asset('/images/stadium.svg') }}" alt="Stade"
                            class="img-responsive w-24" />
                    </x-responsive-nav-link>

                    {{-- Transfers : --}}
                    <x-responsive-nav-link href="{{ route('transfert') }}" :active="request()->routeIs('transfert')">
                        <img src="{{ URL::asset('/images/transfere.svg') }}" alt="Transfère"
                            class="img-responsive w-24" />
                    </x-responsive-nav-link>

                    {{-- Finances : --}}
                    <x-responsive-nav-link href="{{ route('finance') }}" :active="request()->routeIs('finance')"><img
                            src="{{ URL::asset('/images/finance.svg') }}" alt="Finance"
                            class="img-responsive w-24" /></x-responsive-nav-link>

                    {{-- Centre des jeunes : --}}
                    <x-responsive-nav-link href="{{ route('jeune') }}" :active="request()->routeIs('jeune')"><img
                            src="{{ URL::asset('/images/jeune.svg') }}" alt="Centre des jeunes"
                            class="img-responsive w-24" /></x-responsive-nav-link>

                </nav>
            </aside>

            <!-- Page Content -->
            <div class="flex flex-1 flex-col bg-violet-pastel py-6 px-4 sm:px-6 lg:px-8 m-4 rounded-md">
                @yield('content')
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js" defer></script>

</body>

</html>
