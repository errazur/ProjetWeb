<div class="flex flex-1 flex-col bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
    {{-- The best athlete wants his opponent at his best. --}}

    <div class=" bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <ul class="py-2">
            @foreach ($joueurs as $joueur)
                <li class="bg-gray-200 shadow-lg text-black rounded-md ring-1 ring-black ring-opacity-5 m-3">
                    <a class="flex flex-row place-items-stretch justify-around hover:shadow-md"
                        href="{{ route('joueur', $joueur) }}">

                        <div>
                            {{ $joueur->nom }}
                        </div>
                        <div>
                            {{ $joueur->age }}
                        </div>
                        <div>
                            {{ $joueur->poste }}
                        </div>
                        <div>
                            {{ $joueur->prix }}M
                        </div>
                        {{-- <div>
                            {{ $joueur->energie }}
                        </div> --}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
