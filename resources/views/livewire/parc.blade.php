<div class="flex flex-1 flex-col m-4 bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">

    <div class=" bg-gray-900 shadow-lg rounded-md py-2">
        <div class="m-4">
            <div class="block font-medium text-gray-400 text-3xl pl-10 mb-4">
                {{$clubuser->nom}}'s parc
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
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Nom du stade : {{$clubuser->nom_stade}}
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Niveau de la structure : <span class="font-medium text-violet text-2xl">{{$stade->niveau}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Nombre de place disponible : <span class="font-medium text-violet text-2xl">{{$stade->place_dispo}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Prix des places : <span class="font-medium text-violet text-2xl">{{$stade->prix_place}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Prix de l'amélioration du bâtiment : <span class="font-medium text-violet text-2xl">{{$stade->prix_amelioriation}}M</span>
        </div>
        <button class="inline-flex ml-96 mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" wire:click="upgraderStade">
            start
        </button>
    </div>
    <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <div class="bg-gray-400 rounded-md ring-1 ring-black ring-opacity-5 py-1 mb-4">
            <div class="m-2 block font-medium text-gray-800 text-2xl">
                Centre d'entrainement
            </div>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Niveau de la structure : <span class="font-medium text-violet text-2xl">{{$centre_entrainement->niveau}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Bonus de forme : <span class="font-medium text-violet text-2xl">{{$centre_entrainement->bonus_forme}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Endurance de réduction : <span class="font-medium text-violet text-2xl">{{$centre_entrainement->endurance_gagne}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Prix de l'amélioration du bâtiment : <span class="font-medium text-violet text-2xl">{{$centre_entrainement->prix_amelioriation}}M</span>
        </div>
        <button class="inline-flex ml-96 mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            start
        </button>
    </div>
    <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <div class="bg-gray-400 rounded-md ring-1 ring-black ring-opacity-5 py-1 mb-4">
            <div class="m-2 block font-medium text-gray-800 text-2xl">
                Centre de formation des jeunes
            </div>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Niveau de la structure : <span class="font-medium text-violet text-2xl">{{$centre_jeune->niveau}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Place disponible dans le centre : <span class="font-medium text-violet text-2xl">{{$centre_jeune->place_dispo}}</span>
        </div>
        <div class="block font-medium text-gray-700 text-2xl m-2">
            Prix de l'amélioration du bâtiment : <span class="font-medium text-violet text-2xl">{{$centre_jeune->prix_amelioriation}}M</span>
        </div>
        <button class="inline-flex ml-96 mb-4 mt-2 items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            start
        </button>
    </div>
</div>

