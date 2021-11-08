@extends('layouts.app')

@section('content')

    <div class="flex flex-1 flex-col m-4 bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

        <div class="flex flex-row justify-around mt-4 mb-4">
            <button
                class="inline-flex items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                petit
            </button>
            <button
                class="inline-flex items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                moyen
            </button>
            <button
                class="inline-flex items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                difficile
            </button>
        </div>
        <div class="m-4">

            <ul class="flex flex-row justify-around">
                <li><input type="radio" name="plongeon" id="">Plongeon</li>
                <li><input type="radio" name="reflexe" id="">Réflexe</li>
                <li><input type="radio" name="vitesse" id="">Vitesse</li>
                <li><input type="radio" name="dribble" id="">Dribble</li>
                <li><input type="radio" name="tir" id="">Tir</li>
                <li><input type="radio" name="passe" id="">Passe</li>
                <li><input type="radio" name="defense" id="">Défense</li>
                <li><input type="radio" name="force" id="">Force</li>
            </ul>

        </div>
        <div class="m-4 bg-gray-300 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <ul class="py-2">
                @foreach ($clubuser->joueurs as $joueurs)
                    <li class="bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5 m-3">
                        <a class="flex flex-row place-items-stretch justify-around hover:shadow-md"
                            href="{{ route('joueur', $joueurs) }}">

                            <div>
                                {{ $joueurs->nom }} {{ $joueurs->prenom }}
                            </div>
                            <div>
                                {{ $joueurs->age }}
                            </div>
                            <div>
                                {{ $joueurs->poste }}
                            </div>
                            <div>
                                {{ $joueurs->forme }}
                            </div>
                            <div>
                                {{ $joueurs->energie }}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>



    </div>


@endsection
