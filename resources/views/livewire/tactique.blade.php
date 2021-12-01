<div class="flex flex-1 flex-row bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

    <div class="flex flex-1 flex-col shadow-lg rounded-md m-2">

        <div class="flex flex-1 bg-center bg-terrain w-full bg-contain bg-no-repeat">
            <div class="grid grid-cols-4 gap-4 w-full">

                <div class="z-1">1</div>
                <div class="z-1">2</div>
                <div class="z-1">3</div>
                <div class="z-1">4</div>
                <div class="z-1">5</div>
                <div class="z-1">6</div>
                <div class="z-1">7</div>
                <div class="z-1">8</div>
                <div class="z-1">9</div>
                <div class="z-1">10</div>
                <div class="z-1">11</div>


            </div>

        </div>

        <div class="flex flex-1">

        </div>

    </div>

    <div class="bg-gray-900 shadow-lg rounded-md m-2 flex flex-1">
        <div class="container">
            <div class="font-medium text-gray-200 text-2xl m-4">
                Liste de l'effectif du club :
            </div>
            <div class="flex flex-1 justify-center">
                <table class="table table-auto border-separate border m-2 text-gray-400">
                    <thead>
                        <tr class="">
                            <th scope="col">!</th>
                            <th scope="col">#</th>
                            <th scope="col">Nom du joueurs</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Endurance</th>
                            <th scope="col">Forme</th>
                        </tr>
                    </thead>
                    <tbody wire:sortable="updateJoueurOrder">
                        @foreach ($joueurs as $joueur)
                            <tr wire:sortable.item="{{ $joueur->id }}" wire:key="joueur-{{ $joueur->id }}"
                                wire:sortable.handle style="width: 10px; cursor: move;" class="hover:shadow-md">

                                <th scope="row">{{$poste[$loop->iteration]}}</th>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a class="hover:underline" href="{{ route('joueur', $joueur) }}">
                                        {{ $joueur->nom }} {{ $joueur->prenom }}
                                    </a></td>
                                <td>{{ $joueur->poste }}</td>
                                <td>{{ $joueur->energie }}</td>
                                <td>{{ $joueur->forme }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
