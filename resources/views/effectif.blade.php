
@extends('layouts.app')



@section('content')

    <div class="m-4">

        <div class="flex justify-center">
            Liste de l'effectif du club :
        </div>

        <div class="m-4 container">
            <ul>
                @foreach($ClubUser->joueurs as $joueurs)
                    <li>
                        <div class="flex flex-row place-items-stretch justify-around">
                            <div>
                                {{$joueurs->nom}}
                            </div>
                            <div>
                                {{$joueurs->prenom}}
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
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum eum expedita earum. Hic inventore, eligendi in consequatur dignissimos sequi. Esse sit placeat molestias velit! Officia ea necessitatibus aperiam sapiente.
    </div>

@endsection
