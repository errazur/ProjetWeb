<div class="container flex flex-1 md:flex-row flex-col bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

    <div class="flex flex-1 flex-col shadow-lg rounded-md mt-2 mb-2 md:m-2">

        <div class="flex flex-1 bg-center bg-terrain w-full bg-contain bg-no-repeat">
            <div class="grid grid-cols-6 gap-4 w-full m-3">

                @if ($joueur11 != null)

                    {{-- dispositif 4-4-2 --}}
                    @if ($clubuser->dispositif === '4-4-2')
                        <div class="z-1 col-span-3">
                            <div class="flex justify-end">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur11->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-4 col-span-3">
                            <div class="flex justify-start">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur10->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-1 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur9->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-3">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur8->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-4">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur7->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-5 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur6->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-1 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur5->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-3">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur4->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-4">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur3->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-5 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur2->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-span-full">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur1->nom }}
                                </div>

                            </div>
                        </div>
                    @endif

                    {{-- dispositif 4-3-3 --}}
                    @if ($clubuser->dispositif === '4-3-3')
                        <div class="z-1 col-start-1 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur11->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-3 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur10->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-5 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur9->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-1 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur8->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-3 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur7->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-5 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur6->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-1 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur5->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-3">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur4->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-4">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur3->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-5 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur2->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-span-full">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur1->nom }}
                                </div>

                            </div>
                        </div>
                    @endif

                    {{-- Dispositif 4-5-1 --}}
                    @if ($clubuser->dispositif === '4-5-1')
                        <div class="z-1 col-span-full">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur11->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-1 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur10->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-3 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur9->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-5 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur8->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-1 col-span-3">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur7->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-4 col-span-3">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur6->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-1 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur5->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-3">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur4->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-4">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur3->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-start-5 col-span-2">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur2->nom }}
                                </div>

                            </div>
                        </div>
                        <div class="z-1 col-span-full">
                            <div class="flex justify-center">
                                <div class="flex flex-col items-center">
                                    <img src="{{ URL::asset('images/person.svg') }}" alt=""
                                        class="img-responsive w-12">
                                    {{ $joueur1->nom }}
                                </div>

                            </div>
                        </div>
                    @endif

                @endif
            </div>

        </div>

        <div class="flex bg-gray-900 rounded-md m-2">
            <div class="container">
                <div class="font-medium text-gray-200 text-2xl m-4">
                    La tactique de votre club : <span class="text-white">{{ $clubuser->tactique }}</span>
                </div>
                <div class="flex flex-row justify-around">
                    <button
                        class="inline-flex mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        wire:click="offensif">
                        Offensif
                    </button>
                    <button
                        class="inline-flex mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        wire:click="defensif">
                        Défensif
                    </button>
                    <button
                        class="inline-flex mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        wire:click="equilibre">
                        Equilibré
                    </button>
                </div>
                <div class="font-medium text-gray-200 text-2xl m-4">
                    Le dispositif de votre club : <span class="text-white">{{ $clubuser->dispositif }}</span>
                </div>
                <div class="flex flex-row justify-around">
                    <button
                        class="inline-flex mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        wire:click="dispositif1">
                        4-4-2
                    </button>
                    <button
                        class="inline-flex mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        wire:click="dispositif2">
                        4-3-3
                    </button>
                    <button
                        class="inline-flex mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                        wire:click="dispositif3">
                        4-5-1
                    </button>
                </div>

            </div>
        </div>
    </div>

    @if ($clubuser->dispositif == '4-4-2')
        <div class="bg-gray-900 shadow-lg rounded-md m-2 flex flex-1">
            <div class="container">
                <div class="font-medium text-gray-200 text-2xl m-4">
                    Liste de l'effectif du club :
                </div>
                <div class="flex flex-1 justify-center">
                    <table class="min-w-full divide-y divide-gray-200 m-2 text-gray-400">
                        <thead class="text-gray-200">
                            <tr class="">
                                <th class="py-3 md:uppercase tracking-wider" scope="col">!</th>
                                <th class="py-3 md:uppercase tracking-wider" scope="col">#</th>
                                <th class="py-3 md:uppercase tracking-wider" scope="col">Nom du joueurs</th>
                                <th class="py-3 md:uppercase tracking-wider" scope="col">Poste</th>
                                <th class="py-3 md:uppercase tracking-wider" scope="col">Endurance</th>
                                <th class="py-3 md:uppercase tracking-wider invisible hidden md:visible md:table-cell" scope="col">Forme</th>
                            </tr>
                        </thead>
                        <tbody wire:sortable="updateJoueurOrder">
                            @foreach ($joueurs as $joueur)
                                <tr wire:sortable.item="{{ $joueur->id }}" wire:key="joueur-{{ $joueur->id }}"
                                    wire:sortable.handle style="width: 10px; cursor: move;" class="hover:shadow-md">

                                    <th scope="row">{{ $poste1[$loop->iteration] }}</th>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><a class="hover:underline" href="{{ route('joueur', $joueur) }}">
                                            {{ $joueur->nom }} {{ $joueur->prenom }}
                                        </a></td>
                                    <td>{{ $joueur->poste }}</td>
                                    <td>{{ $joueur->energie }}</td>
                                    <td class="invisible hidden md:visible md:table-cell">{{ $joueur->forme }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endif

    @if ($clubuser->dispositif == '4-3-3')
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
                                <th class="py-3 uppercase tracking-wider invisible hidden md:visible md:table-cell" scope="col">Forme</th>
                            </tr>
                        </thead>
                        <tbody wire:sortable="updateJoueurOrder">
                            @foreach ($joueurs as $joueur)
                                <tr wire:sortable.item="{{ $joueur->id }}" wire:key="joueur-{{ $joueur->id }}"
                                    wire:sortable.handle style="width: 10px; cursor: move;" class="hover:shadow-md">

                                    <th scope="row">{{ $poste2[$loop->iteration] }}</th>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><a class="hover:underline" href="{{ route('joueur', $joueur) }}">
                                            {{ $joueur->nom }} {{ $joueur->prenom }}
                                        </a></td>
                                    <td>{{ $joueur->poste }}</td>
                                    <td>{{ $joueur->energie }}</td>
                                    <td class="invisible hidden md:visible md:table-cell">{{ $joueur->forme }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endif

    @if ($clubuser->dispositif == '4-5-1')
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
                                <th class="py-3 uppercase tracking-wider invisible hidden md:visible md:table-cell" scope="col">Forme</th>
                            </tr>
                        </thead>
                        <tbody wire:sortable="updateJoueurOrder">
                            @foreach ($joueurs as $joueur)
                                <tr wire:sortable.item="{{ $joueur->id }}" wire:key="joueur-{{ $joueur->id }}"
                                    wire:sortable.handle style="width: 10px; cursor: move;" class="hover:shadow-md">

                                    <th scope="row">{{ $poste3[$loop->iteration] }}</th>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><a class="hover:underline" href="{{ route('joueur', $joueur) }}">
                                            {{ $joueur->nom }} {{ $joueur->prenom }}
                                        </a></td>
                                    <td>{{ $joueur->poste }}</td>
                                    <td>{{ $joueur->energie }}</td>
                                    <td class="invisible hidden md:visible md:table-cell">{{ $joueur->forme }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endif
