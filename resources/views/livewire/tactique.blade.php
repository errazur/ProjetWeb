<div class="flex flex-1 flex-row bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

    <div class="flex flex-1 flex-col shadow-lg rounded-md m-2">

        <div class="flex flex-1 bg-center bg-terrain w-full bg-contain bg-no-repeat">
            <div class="grid grid-cols-6 gap-4 w-full m-3">

                @if($joueur11 != null)
                <div class="z-1 col-span-3">
                    <div class="flex justify-end">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur11->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-4 col-span-3">
                    <div class="flex justify-start">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur10->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-2 ">
                    <div class="flex justify-start ml-4">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur9->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-3">
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur8->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-4">
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur7->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-5">
                    <div class="flex justify-end mr-4">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur6->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-2">
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur5->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-3">
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur4->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-4">
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur3->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-start-5">
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur2->nom }}
                        </div>

                    </div>
                </div>
                <div class="z-1 col-span-full">
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center">
                            <img src="{{ URL::asset('images/person.svg') }}" alt="" class="img-responsive w-12">
                            {{ $joueur1->nom }}
                        </div>

                    </div>
                </div>
                @endif
            </div>

        </div>

        <div class="flex flex-1 bg-gray-900 rounded-md m-2">
            <div class="container">
                <div class="font-medium text-gray-200 text-2xl m-4">
                    La tactique de votre club : <span class="text-white">{{ $clubuser->tactique }}</span>
                </div>
            </div>

        </div>

    </div>

    <div class="bg-gray-900 shadow-lg rounded-md m-2 flex flex-1">
        <div class="container">
            <div class="font-medium text-gray-200 text-2xl m-4">
                Liste de l'effectif du club :
            </div>
            <div class="flex flex-1 justify-center">
                <table class="min-w-full divide-y divide-gray-200 m-2 text-gray-400">
                    <thead class="text-gray-200">
                        <tr class="">
                            <th class="py-3 uppercase tracking-wider" scope="col">!</th>
                            <th class="py-3 uppercase tracking-wider" scope="col">#</th>
                            <th class="py-3 uppercase tracking-wider" scope="col">Nom du joueurs</th>
                            <th class="py-3 uppercase tracking-wider" scope="col">Poste</th>
                            <th class="py-3 uppercase tracking-wider" scope="col">Endurance</th>
                            <th class="py-3 uppercase tracking-wider" scope="col">Forme</th>
                        </tr>
                    </thead>
                    <tbody wire:sortable="updateJoueurOrder">
                        @foreach ($joueurs as $joueur)
                            <tr wire:sortable.item="{{ $joueur->id }}" wire:key="joueur-{{ $joueur->id }}"
                                wire:sortable.handle style="width: 10px; cursor: move;" class="hover:shadow-md">

                                <th scope="row">{{ $poste[$loop->iteration] }}</th>
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
