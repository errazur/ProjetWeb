@extends('layouts.app')

@section('content')

    <div class=" flex flex-1 bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5 flex-col">

        <div class=" bg-gray-900 shadow-lg rounded-md py-2">
            <div class="m-4">
                <div class="block font-medium text-gray-400 text-3xl pl-10 mb-4">
                    {{ $joueur->nom }} {{ $joueur->prenom }}
                </div>

                <div class="flex flex-row justify-around">
                    <div class=" block font-medium text-gray-600 text-2xl">
                        Âge : {{ $joueur->age }} ans
                    </div>

                    <div class=" block font-medium text-gray-600 text-2xl">
                        Poste : {{ $joueur->poste }}
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class=" block font-medium text-gray-600 text-2xl">
                        Nom de l'equipe : {{ $clubuser->nom }}
                    </div>
                </div>
            </div>
        </div>

        <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <div class="m-4 block font-medium text-gray-700 text-2xl">
                Statistique de Gardien :
            </div>
            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Plongeon : {{ $joueur->plongeon }}
                </div>
            </div>

            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Réflexe : {{ $joueur->reflexe }}
                </div>
            </div>
        </div>

        <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <div class="m-4 block font-medium text-gray-700 text-2xl">
                Statistique d'attaque :
            </div>
            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Vitesse : {{ $joueur->vitesse }}
                </div>
            </div>

            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Dribble : {{ $joueur->dribble }}
                </div>
            </div>

            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Tir : {{ $joueur->tir }}
                </div>
            </div>
        </div>

        <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <div class="m-4 block font-medium text-gray-700 text-2xl">
                Statistique de vista :
            </div>
            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Passe : {{ $joueur->passe }}
                </div>
            </div>
        </div>

        <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <div class="m-4 block font-medium text-gray-700 text-2xl">
                Statistique physique :
            </div>
            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Défense : {{ $joueur->defense }}
                </div>
            </div>

            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Force : {{ $joueur->physique }}
                </div>
            </div>

            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Forme : {{ $joueur->forme }}
                </div>
            </div>

            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    Energie : {{ $joueur->energie }}
                </div>
            </div>
        </div>

        @if($clubuser->id == $joueur->club_id)
        <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <div class="m-4 block font-medium text-gray-700 text-2xl">
                mettre sur le marcher :
            </div>
            <div class="ml-8 mb-4">
                <div class=" block font-medium text-gray-700 text-2xl">
                    <form action="{{route('joueur.vente', $joueur)}}" method="POST">
                        @csrf
                        <x-label for="prix_joueur" :value="__('Prix du joueur :')" />
                        <x-input id="prix_joueur" class="block mt-1 w-full" type="text" name="prix" :value="old('prix')"
                            required />

                        <x-button class="ml-4">
                            {{ __('Mettre') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
        @endif

    </div>



@endsection
