<div class="flex flex-1 flex-col bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
    {{-- The best athlete wants his opponent at his best. --}}



    <div class=" bg-white shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <livewire:flash />
        <ul class="py-2">
            @foreach ($joueurs as $joueur)
                <li class="bg-gray-200 shadow-lg text-black rounded-md ring-1 ring-black ring-opacity-5 m-3">

                    @error('')
                        <span class="bg-red-100 border-red-700 text-red-700">{{ $message }}</span>
                    @enderror

                    <form wire:submit.prevent="achat({{ $joueur }})">
                        <a class="flex flex-row place-items-stretch justify-around hover:shadow-md"
                            href="{{ route('transfert.joueur') }}">

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
                        </a>
                        <button
                            class="inline-flex md:ml-96 ml-24 mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                            type="submit">
                            Acheter
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</div>
