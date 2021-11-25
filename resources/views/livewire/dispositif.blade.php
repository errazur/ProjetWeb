<div class="m-2 text-gray-400">

    <ul drag-root class="overflow-hidden rounded shadow divide-y">

        @foreach ($joueurs as $joueur)
            <li drag-item="{{ $joueur->id }}" draggable="true"
                style="width: 10px; cursor: move;" class="flex flex-row hover:shadow-md p-4">
                {{ $loop->iteration }}
                <a class="hover:underline" href="{{ route('joueur', $joueur) }}">
                    {{ $joueur->nom }} {{ $joueur->prenom }}
                </a>
                {{ $joueur->poste }}
                {{ $joueur->energie }}
                {{ $joueur->forme }}
            </li>
        @endforeach
    </ul>

</div>
