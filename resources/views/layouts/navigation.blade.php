<nav x-data="{ open: false }" class="bg-violet-pastel">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center py-1 px-1 border-white mb-1 mt-1 border-2">
                    <a href="{{ route('Accueil') }}">
                        <img class="img-responsive h-16" src="{{ URL::asset('/images/logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>


            @auth

                {{-- <div class="invisible hidden md:visible md:flex md:items-center">
                    <livewire:clock />
                </div> --}}


                <div id="date" class="flex items-center">
                    {{ Auth::user()->clubUser->nom }} FC
                </div>

                <div id="Argent_club" class="flex flex-row items-center">
                    <img src="{{ URL::asset('/images/dollars.svg') }}" alt="" class="img-responsive h-10" />
                    {{ Auth::user()->clubUser->Argent }}M
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">

                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            @guest
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a href="/register"
                        class="flex items-center mr-7 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">Register</a>
                    <a href="/login"
                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">Login</a>
                </div>
            @endguest

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            {{-- Home : --}}
            <x-responsive-nav-link href="{{ route('Accueil') }}" :active="request()->routeIs('Accueil')">
                Home
            </x-responsive-nav-link>

            {{-- Notifications : --}}
            <x-responsive-nav-link href="{{ route('notification') }}" :active="request()->routeIs('notification')">
                Notifications
            </x-responsive-nav-link>

            {{-- Ligue : --}}
            <x-responsive-nav-link href="{{ route('ligue') }}" :active="request()->routeIs('ligue')">
                Ligue
            </x-responsive-nav-link>

            {{-- Effectifs : --}}
            <x-responsive-nav-link href="{{ route('effectif') }}" :active="request()->routeIs('effectif')">
                Effectifs
            </x-responsive-nav-link>

            {{-- Tactiques : --}}
            <x-responsive-nav-link href="{{ route('tactique') }}" :active="request()->routeIs('tactique')">
                Tactiques
            </x-responsive-nav-link>

            {{-- Entrainements : --}}
            <x-responsive-nav-link href="{{ route('entrainement') }}" :active="request()->routeIs('entrainement')">
                Entrainements
            </x-responsive-nav-link>

            {{-- Stades : --}}
            <x-responsive-nav-link href="{{ route('structure') }}" :active="request()->routeIs('structure')">
                Stades
            </x-responsive-nav-link>

            {{-- Transfers : --}}
            <x-responsive-nav-link href="{{ route('transfert') }}" :active="request()->routeIs('transfert')">
                Transfers
            </x-responsive-nav-link>

            {{-- Finances : --}}
            <x-responsive-nav-link href="{{ route('finance') }}" :active="request()->routeIs('finance')">Finances
            </x-responsive-nav-link>

            {{-- Centre des jeunes : --}}
            <x-responsive-nav-link href="{{ route('jeune') }}" :active="request()->routeIs('jeune')">Centre des
                jeunes
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @guest
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800"><a href="/register">Register</a></div>
                    <div class="font-medium text-base mb-4 text-gray-800"><a href="/login">Login</a></div>
                </div>
            </div>
            @endguest

            @auth
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            @endauth

</nav>
