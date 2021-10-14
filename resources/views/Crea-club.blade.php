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
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-violet">
            <div>
                <img class="img-responsive h-16" src="{{ URL::asset('/images/logo.png') }}" alt="Logo">
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-violet-pastel shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('Creation') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="Nom_du_club" :value="__('Nom du club')" />

                        <x-input id="Nom_du_club" class="block mt-1 w-full" type="text" name="nom" :value="old('Nom')"
                            required />
                    </div>

                    <!-- Initiale Club -->
                    <div class="mt-4">
                        <x-label for="Initiale" :value="__('Initiale')" />

                        <x-input id="initiale" class="block mt-1 w-full" type="text" name="initial" :value="old('initial')"
                            required />
                    </div>

                    <!-- Nom du Stade  -->
                    <div class="mt-4">
                        <x-label for="nom_stade" :value="__('Nom du Stade')" />

                        <x-input id="nom_stade" class="block mt-1 w-full" type="text" name="nom_stade"
                            :value="old('nom_stade')" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Créer') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</body>

</html>


