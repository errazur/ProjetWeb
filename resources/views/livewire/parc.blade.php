<div class="flex flex-1 flex-col bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

    <div class=" bg-gray-900 shadow-lg rounded-md py-2">
        <div class="md:m-4 m-1">
            <div class="block font-medium text-gray-400 md:text-3xl text-2xl md:pl-10 mb-4 pl-5">
                {{$clubuser->nom}}'s parc
            </div>
        </div>

        <div class="md:m-4 m-1">
            <div class="block font-medium text-gray-400 text-1xl md:pl-10 mb-4 pl-6">
                @if ($clubuser->constructionOn == '1')
                    <span>fin de la construction dans : <livewire:construction-count :clubuser="$clubuser"/> </span>
                @endif
            </div>
        </div>
    </div>

    <livewire:flash />

    <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <div class="bg-gray-400 rounded-md ring-1 ring-black ring-opacity-5 py-1 mb-4">
            <div class="m-2 block font-medium text-gray-800 text-2xl">
                {{$clubuser->nom}} stadium
            </div>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Nom du stade : {{$clubuser->nom_stade}}
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Niveau de la structure : <span class="font-medium text-violet md:text-2xl text-1xl">{{$stade->niveau}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Nombre de place disponible : <span class="font-medium text-violet md:text-2xl text-1xl">{{$stade->place_dispo}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Prix des places : <span class="font-medium text-violet md:text-2xl text-1xl">{{$stade->prix_place}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Prix de l'amélioration du bâtiment : <span class="font-medium text-violet md:text-2xl text-1xl">{{$stade->prix_amelioriation}}M</span>
        </div>
        <button class="inline-flex md:ml-96 ml-24 mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" wire:click="upgraderStade">
            start
        </button>
    </div>
    <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <div class="bg-gray-400 rounded-md ring-1 ring-black ring-opacity-5 py-1 mb-4">
            <div class="m-2 block font-medium text-gray-800 text-2xl">
                Centre d'entrainement
            </div>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Niveau de la structure : <span class="font-medium text-violet md:text-2xl text-1xl">{{$centre_entrainement->niveau}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Bonus de forme : <span class="font-medium text-violet md:text-2xl text-1xl">{{$centre_entrainement->bonus_forme}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Endurance de réduction : <span class="font-medium text-violet md:text-2xl text-1xl">{{$centre_entrainement->endurance_gagne}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Prix de l'amélioration du bâtiment : <span class="font-medium text-violet md:text-2xl text-1xl">{{$centre_entrainement->prix_amelioriation}}M</span>
        </div>
        <button class="inline-flex md:ml-96 ml-24 mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" wire:click="upgraderEntrainement">
            start
        </button>
    </div>
    <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <div class="bg-gray-400 rounded-md ring-1 ring-black ring-opacity-5 py-1 mb-4">
            <div class="m-2 block font-medium text-gray-800 text-2xl">
                Centre de formation des jeunes
            </div>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xlm-2">
            Niveau de la structure : <span class="font-medium text-violet md:text-2xl text-1xl">{{$centre_jeune->niveau}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Place disponible dans le centre : <span class="font-medium text-violet md:text-2xl text-1xl">{{$centre_jeune->place_dispo}}</span>
        </div>
        <div class="block font-medium text-gray-700 md:text-2xl text-1xl m-2">
            Prix de l'amélioration du bâtiment : <span class="font-medium text-violet md:text-2xl text-1xl">{{$centre_jeune->prix_amelioriation}}M</span>
        </div>
        <button class="inline-flex md:ml-96 ml-24 mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" wire:click="upgraderJeune">
            start
        </button>
    </div>
</div>

