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
        <div class="min-h-screen">

            <!-- Page Heading -->
            <header class="bg-violet-pastel shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Connection rapide
                </div>
            </header>

            <!-- Page Content -->
            <main class="">
                <div id="présentation">
                    <div id="carrouselle">

                    </div>
                    <div class="flex-shrink-0 flex items-center">
                        @auth
                        <a href="{{ route('Creation') }}" class="text-sm text-black bg-bleu-pastel shadow p-5">
                            JOUER
                        </a>
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
