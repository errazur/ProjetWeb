<div class="m-2 text-gray-400">

    <div class="">

        <div class="bg-gray-900 shadow-lg rounded-md py-2">
            <div class="block font-medium text-gray-400 text-3xl pl-10 m-4">
                Liste de l'effectif du club :
            </div>
        </div>

        <div class="m-4 bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
            <ul class="py-2">
                @foreach ($joueurs as $joueur)
                    <li class="bg-gray-200 shadow-lg text-black rounded-md ring-1 ring-black ring-opacity-5 m-3">
                        <a class="flex flex-row place-items-stretch justify-around hover:shadow-md"
                            href="{{ route('joueur', $joueur) }}">

                            <div>
                                {{ $joueur->nom }} {{ $joueur->prenom }}
                            </div>
                            <div>
                                {{ $joueur->age }}
                            </div>
                            <div>
                                {{ $joueur->poste }}
                            </div>
                            <div>
                                {{ $joueur->forme }}
                            </div>
                            <div>
                                {{ $joueur->energie }}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

</div>
