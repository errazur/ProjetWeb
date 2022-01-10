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

                <div class="flex justify-between">

                    <span>
                        Stars of Football
                    </span>

                    <div class="flex justify-end">

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

                        @guest


                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="flex flex-col">

                                    <div class="flex">
                                        <!-- Email Address -->
                                        <div class="mr-1">
                                            <x-label for="email" :value="__('Email')" />

                                            <x-input id="email" class=" mt-1 w-full h-7" type="email" name="email"
                                                :value="old('email')" required autofocus />
                                        </div>

                                        <!-- Password -->
                                        <div class="">
                                            <x-label for="password" :value="__('Password')" />

                                            <x-input id="password" class="mt-1 w-full h-7" type="password" name="password"
                                                required autocomplete="current-password" />
                                        </div>

                                        <div class='flex items-center mt-5'>
                                            <x-button class="ml-3">
                                                {{ __('Log in') }}
                                            </x-button>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <!-- Remember Me -->
                                        <div class="flex items-center mr-5">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>

                                        <div class="flex items-center justify-end">

                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-8"
                                                href="{{ route('register') }}">
                                                {{ __('No account ?') }}
                                            </a>

                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endguest

                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="">
            <div id="présentation" class="flex flex-col items-center bg-violet-pastel m-10">
                <div id="carrouselle">
                    <img src="{{ URL::asset('/images/photo_de_couverture.jpg') }}" alt="photo de couverture"
                        class="img-responsive m-2 mt-6 flex-shrink-0 flex items-center">
                </div>
                <div class="flex-shrink-0 flex items-center mb-2">
                    Rejoignez pleins d’autres joueurs et monter votre club au sommet !
                </div>
                <div class="flex-shrink-0 flex items-center mb-6">
                    @auth

                        @if ($clubuser == null)
                            <a href="{{ route('Creation') }}" class="text-sm text-black bg-bleu-pastel shadow p-5">
                                JOUER
                            </a>
                        @endif
                        @if ($clubuser != null)
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
