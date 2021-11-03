
@extends('layouts.app')



@section('content')

    <div class="m-4">

        <x-label>
            Liste de l'effectif du club :
        </x-label>

        <div class="m-4 bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <ul class="py-2">
                @foreach($clubuser->joueurs as $joueurs)
                    <li class="bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5 m-3">
                        <a class="flex flex-row place-items-stretch justify-around hover:shadow-md" href="{{route('joueur', $joueurs)}}">

                            <div>
                               {{$joueurs->nom}}   {{$joueurs->prenom}}
                            </div>


                            <div>
                                {{$joueurs->age}}
                            </div>
                            <div>
                                {{$joueurs->poste}}
                            </div>
                            <div>
                                {{$joueurs->forme}}
                            </div>
                            <div>
                                {{$joueurs->energie}}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

@endsection
