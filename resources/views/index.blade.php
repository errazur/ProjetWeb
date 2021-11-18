<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Stars of football</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-violet">
        <div class="min-h-screen">

            <!-- Page Heading -->
            <header class="bg-violet-pastel shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">



                    @auth
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">

                                <button
                                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>

                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    @endauth
                </div>
            </header>

            <!-- Page Content -->
            <main class="">
                <div id="présentation" class="flex flex-col items-center bg-violet-pastel m-10">
                    <div id="carrouselle">
                        <img src="{{URL::asset('/images/photo_de_couverture.jpg')}}" alt="photo de couverture" class="img-responsive m-2 mt-6 flex-shrink-0 flex items-center">
                    </div>
                    <div class="flex-shrink-0 flex items-center mb-2">
                        Rejoignez pleins d’autres joueurs et monter votre club au sommet !
                    </div>
                    <div class="flex-shrink-0 flex items-center mb-6">
                        @auth

                        @if($clubuser == null)
                        <a href="{{ route('Creation') }}" class="text-sm text-black bg-bleu-pastel shadow p-5">
                            JOUER
                        </a>
                        @endif
                        @if($clubuser != null)
                        <a href="{{ route('Accueil') }}" class="text-sm text-black bg-bleu-pastel shadow p-5">
                            JOUER
                        </a>
                        @endif
                        @endauth
                        @guest
                        <a href="/register" class="text-sm text-black bg-bleu-pastel shadow p-5">
                            JOUER
                        </a>
                        @endguest
                    </div>
                </div>
                <div id="fonctionnalité présenté">

                </div>
            </main>
        </div>
        <footer class="bg-violet-pastel">
                Stars of Football
            </footer>
    </body>
</html>
