<div class="flex flex-1 flex-col bg-gray-200 shadow-lg rounded-md ring-1 ring-black ring-opacity-5 pb-4">

    <div class=" bg-gray-900 shadow-lg rounded-md py-2">
        <div class="m-4">
            <div class="block font-medium text-gray-400 text-3xl pl-10 mb-4">
                Entrainements
            </div>
        </div>
    </div>


    <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
        <div class="m-4 block font-medium text-gray-700 text-2xl">
            Entrainements rapide :
        </div>

        <div class="flex flex-row justify-around mt-4 mb-4 ">
            <button
                class="inline-flex items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                petit
            </button>
            <button
                class="inline-flex items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                moyen
            </button>
            <button
                class="inline-flex items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                difficile
            </button>
        </div>
    </div>

    <hr class="bg-black border m-3">

    <livewire:flash />

    <div class="m-4 shadow-lg rounded-md ring-1 ring-black ring-opacity-5 pb-4">

        <div class="m-4 block font-medium text-gray-700 text-2xl">
            Entrainements personnalisé :
        </div>

        <form action="{{ route('entrainement') }}" method="post">
            @csrf

            <div class="m-4">

                <ul class="flex flex-row justify-around">
                    <li><input type="radio" name="trainingType" value="plongeon">Plongeon</li>
                    <li><input type="radio" name="trainingType" value="reflexe">Réflexe</li>
                    <li><input type="radio" name="trainingType" value="vitesse">Vitesse</li>
                    <li><input type="radio" name="trainingType" value="dribble">Dribble</li>
                    <li><input type="radio" name="trainingType" value="tir">Tir</li>
                    <li><input type="radio" name="trainingType" value="passe">Passe</li>
                    <li><input type="radio" name="trainingType" value="defense">Defense</li>Défense</li>
                    <li><input type="radio" name="trainingType" value="force">Force</li>
                </ul>

            </div>

            <div class="m-4 bg-gray-300 shadow-lg rounded-md ring-1 ring-black ring-opacity-5">
                <ul class="py-2">
                    @foreach ($joueurs as $joueur)
                        <li
                            class="bg-gray-200 flex flex-row justify-around shadow-lg rounded-md ring-1 ring-black ring-opacity-5 m-3">
                            <a class="hover:underline" href="{{ route('joueur', $joueur) }}">

                                <div>
                                    {{ $joueur->nom }} {{ $joueur->prenom }}
                                </div>

                            </a>
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

                            <input type="checkbox" name="joueur[]" value="{{ $joueur->id }}" class="mt-2">
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-row justify-around mt-4 mb-4 ">
                <button
                    class="inline-flex items-center px-4 py-2 bg-bleu-pastel border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    commencer
                </button>
            </div>

        </form>

    </div>

</div>
