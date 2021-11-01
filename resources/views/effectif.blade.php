
@extends('layouts.app')



@section('content')

    <div class="m-4">

        <x-label>
            Liste de l'effectif du club :
        </x-label>

        <div class="m-4 bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <ul>
                @foreach($clubuser->joueurs as $joueurs)
                    <li class="mt-3">
                        <div class="flex flex-row place-items-stretch justify-around">

                            <a class="hover:underline" href="{{route('joueur', $joueurs)}}">{{$joueurs->nom}}   {{$joueurs->prenom}}</a>

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
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

@endsection
