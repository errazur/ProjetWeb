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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-violet">
    <div class="flex flex-col min-h-screen">
        @include('layouts.navigation')

        <div class="flex flex-1">

            <!-- Side Bar -->
            <aside class="flex flex-col bg-violet-pastel m-4 py-1 px-2 box-border justify-around w-36">

                    {{-- Home : --}}
                    <x-responsive-nav-link href="{{ route('Accueil')}}" alt="Home"><img src=" {{ URL::asset('/images/home.svg') }}" alt="Home"
                            class="img-responsive mb-2 w-full" /></x-nav-link>

                    {{-- Notifications : --}}
                    <x-responsive-nav-link href="{{ route('notification')}}" alt="Notifications"><img src="{{ URL::asset('/images/notification.svg') }}"
                            alt="Notification" class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Ligue : --}}
                    <x-responsive-nav-link href="{{ route('ligue')}}" alt="Ligue"><img src="{{ URL::asset('/images/Ligue.svg') }}" alt="Ligue"
                            class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Effectifs : --}}
                    <x-responsive-nav-link href="{{ route('effectif')}}" alt="Effectifs"><img src="{{ URL::asset('/images/effectif.svg') }}"
                            alt="Effectifs" class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Tactiques : --}}
                    <x-responsive-nav-link href="{{ route('tactique')}}" alt="Tactiques"><img src="{{ URL::asset('/images/tactics.svg') }}"
                            alt="Tactiques" class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Entrainements : --}}
                    <x-responsive-nav-link href="{{ route('entrainement')}}" alt="Entrainements"><img src="{{ URL::asset('/images/training.png') }}"
                            alt="Entrainements" class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Stades : --}}
                    <x-responsive-nav-link href="{{ route('structure')}}" alt="Stades"><img src="{{ URL::asset('/images/stadium.svg') }}" alt="Stade"
                            class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Transfers : --}}
                    <x-responsive-nav-link href="{{ route('transfere')}}" alt="Transfers"><img src="{{ URL::asset('/images/transfere.svg') }}"
                            alt="Transfère" class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Finances : --}}
                    <x-responsive-nav-link href="{{ route('finance')}}" alt="Finances"><img src="{{ URL::asset('/images/finance.svg') }}"
                            alt="Finance" class="img-responsive w-24 mb-2" /></x-nav-link>

                    {{-- Centre des jeunes : --}}
                    <x-responsive-nav-link href="{{ route('jeune')}}" alt="Centre des jeunes"><img src="{{ URL::asset('/images/jeune.svg') }}"
                            alt="Centre des jeunes" class="img-responsive w-24 mb-2" /></x-nav-link>

            </aside>
            <!-- Page Content -->
            <div class="flex flex-col bg-violet-pastel py-6 px-4 sm:px-6 lg:px-8 m-4">
                @yield('content')
            </div>
        </div>

    </div>
</body>

</html>
