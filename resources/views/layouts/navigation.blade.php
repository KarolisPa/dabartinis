<nav x-data="{ open: false }" class="bg-opacity-100 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('index') }}">
{{--                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />--}}
                        <img class="h-10" src="{{asset('/images/logoTvoraPilka.svg')}}";/>
                    </a>
                </div>

                <!-- NUORODOS -->
                <div class="flex mx-3">
                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                        {{ __('Pradžia') }}
                    </x-nav-link>
                </div>

                <div class="flex mx-3">
                    <x-nav-link :href="route('fences')"  :active="request()->routeIs('fences')">
                        {{ __('Tvoros') }}
                    </x-nav-link>
                </div>

                <div class="flex mx-3">
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" >
                        {{ __('Apie mus') }}
                    </x-nav-link>
                </div>

                <div class="flex mx-3">
                    <x-nav-link :href="route('order')" :active="request()->routeIs('order')" >
                        {{ __('Skaičiuoklė') }}
                    </x-nav-link>
                </div>

            </div>

        @Auth
            <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Atsijungti') }}
                                </x-dropdown-link>
                            </form>

                            <x-dropdown-link :href="route('order')">
                                {{ __('Užsakymai') }}
                            </x-dropdown-link>


                            <x-dropdown-link :href="route('adminPanel')">
                                {{ __('Tvarkyti įkėlimus') }}
                            </x-dropdown-link>

                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            @guest
                {{-- Vartotojo dropdown sveciui --}}
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>Vartotojas</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="get" action="{{ route('login') }}">
                                @csrf

                                <x-dropdown-link :href="route('login')"
                                                 onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Prisijungti') }}
                            </form>
                            </x-dropdown-link>

                            <form method="get" action="{{ route('register') }}">
                            <x-dropdown-link :href="route('register')"
                                             onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Registruotis') }}
                                </form>
                            </x-dropdown-link>

                        </x-slot>

                    </x-dropdown>
                </div>
        @endguest

        <!-- Hamburger -->
            <div class="-mr-2 flex float-right sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
{{--            <x-responsive-nav-link :href="route('index')" :active="request()->routeIs('index')">--}}
{{--                {{ __('index') }}--}}
{{--            </x-responsive-nav-link>--}}
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{__('Prisijungti')}}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">
                {{__('Registruotis')}}
            </x-responsive-nav-link>
        </div>

    @Auth
        <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <x-responsive-nav-link :href="route('adminPanel')" :active="request()->routeIs('adminPanel')">
                    {{__('Tvarkyti įkėlimus')}}
                </x-responsive-nav-link>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
