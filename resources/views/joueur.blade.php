@extends('layouts.app')

@section('content')

<div class="m-4 flex flex-1 bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5 flex-col">

    <div class="m-4">
        <div class=" block font-medium text-gray-700 text-3xl">
           {{$joueur->nom}}    {{$joueur->prenom}}
        </div>
    </div>

    <div class="m-4">
        <div class=" block font-medium text-gray-700 text-2xl">
            {{$joueur->age}} ans
        </div>
    </div>

    <div class="m-4">
        <div class=" block font-medium text-gray-700 text-2xl">
            Poste : {{$joueur->poste}}
        </div>
    </div>


    <x-label>
        {{$joueur->plongeon}}
    </x-label>

    <x-label>
        {{$joueur->vitesse}}
    </x-label>

    <x-label>
        {{$joueur->dribble}}
    </x-label>

    <x-label>
        {{$joueur->tir}}
    </x-label>

    <x-label>
        {{$joueur->passe}}
    </x-label>

    <x-label>
        {{$joueur->defense}}
    </x-label>

    <x-label>
        {{$joueur->physique}}
    </x-label>

    <x-label>
        {{$joueur->forme}}
    </x-label>

    <x-label>
        {{$joueur->energie}}
    </x-label>

</div>



@endsection
