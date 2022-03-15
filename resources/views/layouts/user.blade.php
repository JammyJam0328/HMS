<!DOCTYPE html>
<html class="h-full bg-gray-200"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect"
        href="https://fonts.googleapis.com">
    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
</head>

<body x-data="{mobileNavOpen:false}"
    class="h-full antialiased font-poppins">

    <div class="min-h-full">
        <nav class="sticky top-0 z-50 bg-gray-700 shadow-sm">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex items-center flex-shrink-0">
                            <svg id="logo-38"
                                width="78"
                                height="32"
                                viewBox="0 0 78 32"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M55.5 0H77.5L58.5 32H36.5L55.5 0Z"
                                    class="ccustom"
                                    fill="#ffffff"
                                    stop-color="#ffffff"></path>
                                <path d="M35.5 0H51.5L32.5 32H16.5L35.5 0Z"
                                    class="ccompli1"
                                    fill="#dddddd"
                                    stop-color="#dddddd"></path>
                                <path d="M19.5 0H31.5L12.5 32H0.5L19.5 0Z"
                                    class="ccompli2"
                                    fill="#bbbbbb"
                                    stop-color="#bbbbbb"></path>
                            </svg>
                        </div>
                        <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                            <a href="{{ route('home') }}"
                                class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white border-b-2 border-transparent">Home</a>
                            <a href="#"
                                class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white border-b-2 border-transparent">Branch</a>
                            <a href="#"
                                class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white border-b-2 border-transparent">Account</a>
                            <a href="#"
                                class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white border-b-2 border-transparent">About</a>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center">
                        @guest
                            <div class="flex space-x-2">
                                <a href="{{ route('login') }}"
                                    class="inline-flex items-center px-1 pt-1 font-medium text-white border-b-2 border-transparent">Sign
                                    in</a>
                                <a href="{{ route('register') }}"
                                    type="button"
                                    class="inline-flex items-center px-4 py-2 font-medium text-gray-700 bg-white border border-transparent rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Sign
                                    up</a>
                            </div>
                        @endguest
                        @auth
                            <div x-data="{isOpen:false}"
                                class="relative ml-3">
                                <div>
                                    <button x-on:click="isOpen=!isOpen"
                                        type="button"
                                        class="flex items-center px-2 text-sm border border-white rounded-full"
                                        id="user-menu-button"
                                        aria-expanded="false"
                                        aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-8 text-white "
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-white">{{ auth()->user()->name }}</span>
                                    </button>
                                </div>
                                <div x-cloak
                                    x-show="isOpen"
                                    x-on:click.away="isOpen=false"
                                    class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu"
                                    aria-orientation="vertical"
                                    aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <form method="POST"
                                        action="{{ route('logout') }}"
                                        x-data>
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                            {{ __('Sign out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </div>
                            </div>
                        @endauth
                    </div>
                    <div class="flex items-center -mr-2 sm:hidden">
                        <button x-on:click="mobileNavOpen=!mobileNavOpen"
                            type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 "
                            aria-controls="mobile-menu"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>

                            <svg x-show="!mobileNavOpen"
                                class="w-6 h-6 "
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg x-cloak
                                x-show="mobileNavOpen"
                                class="w-6 h-6 "
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div x-cloak
                x-show="mobileNavOpen"
                class="sm:hidden"
                id="mobile-menu">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="{{ route('home') }}"
                        class="block py-2 pl-3 pr-4 text-base font-medium text-white border-l-4 border-transparent ">Home</a>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-base font-medium text-white border-l-4 border-transparent ">Branch</a>

                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-base font-medium text-white border-l-4 border-transparent ">Account</a>

                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-base font-medium text-white border-l-4 border-transparent ">About</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-10 h-10 text-white"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-50">tom@example.com</div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <form method="POST"
                            action="{{ route('logout') }}"
                            x-data>
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                @click.prevent="$root.submit();">
                                {{ __('Sign out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="pb-10">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    @livewireScripts
</body>

</html>
