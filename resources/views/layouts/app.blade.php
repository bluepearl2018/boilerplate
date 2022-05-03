<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('Eutranet')}}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Feeds -->
{{--    <link rel="alternate" type="application/atom+xml" title="News" href="{{ route('feed') }}">--}}
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased h-full overflow-hidden bg-gray-300">
<div x-data="{ mobileMenu: false }" class="h-full flex flex-col max-w-7xl mx-auto">
    <!-- Top nav-->
    <header class="flex-shrink-0 relative h-16 bg-white flex items-center">
        <!-- Logo area -->
        <div class="absolute inset-y-0 left-0 md:static md:flex-shrink-0">
            <a href="#" style="background-color: #aa0000"
               class="flex items-center justify-center h-16 w-16 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-600 md:w-20">
                <img class="h-16 w-auto" src="{{asset('vendor/theme/images/eutranet-red.svg')}}" alt="Workflow">
            </a>
        </div>

        <!-- Picker area -->
        <div class="mx-auto md:hidden">
            <div class="relative">
                <label for="inbox-select" class="sr-only">Choose inbox</label>
                <select id="inbox-select"
                        class="rounded-md border-0 bg-none pl-3 pr-8 text-base font-medium text-gray-900 focus:ring-2 focus:ring-red-600">
                    <option selected>Open</option>

                    <option>Archive</option>

                    <option>Customers</option>

                    <option>Flagged</option>

                    <option>Spam</option>

                    <option>Drafts</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center justify-center pr-2">
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Menu button area -->
        <div class="absolute inset-y-0 right-0 pr-4 flex items-center sm:pr-6 md:hidden">
            <!-- Mobile menu button -->
            <button type="button"
                    @click="mobileMenu = !mobileMenu"
                    class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-600">
                <span class="sr-only">{{__('Open main menu')}}</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Desktop nav area -->
        <div class="hidden md:min-w-0 md:flex-1 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <div class="max-w-2xl relative text-gray-400 focus-within:text-gray-500">
                    <label for="desktop-search" class="sr-only">{{__('Search')}}</label>
                    <input id="desktop-search" type="search" placeholder="Search"
                           class="block w-full border-transparent pl-12 placeholder-gray-500 focus:border-transparent sm:text-sm focus:ring-0">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center justify-center pl-4">
                        <!-- Heroicon name: solid/search -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="ml-10 pr-6 flex-shrink-0 flex items-center space-x-6">
                <nav aria-label="Global" class="flex space-x-6">
                    <a href="{{ route('downloads') }}" class="text-sm font-medium text-gray-900">{{__('Downloads')}}</a>
                    @if(Route::has('login') && Schema::hasTable('users'))
                        @guest
                            <a href="{{ url('pre-register') }}" class="text-sm font-medium text-gray-900">{{__('Register')}}</a>
                        @endguest
                    @endif
                </nav>
                @if(Route::has('logout') && Schema::hasTable('users') && Route::has('pre-registered-profile'))
                    @auth
                    <div x-data="{userMenu: false}" class="flex items-center space-x-8">
                        <div class="relative inline-block text-left">
                            <button type="button"
                                    @click="userMenu = !userMenu"
                                    class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-red-600"
                                    id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">{{__('Open user menu')}}</span>
                                <img class="h-8 w-8 rounded-full"
                                     src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
                            </button>

                            <div x-show="userMenu" class="origin-top-right absolute z-30 right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                 role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    @if(Route::has('logout') && Schema::hasTable('users') && Route::has('pre-registered-profile'))
                                        @auth
                                            <a href="{{ url('/pre-registered-profile') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                               id="menu-0-item-0"> {{__('Your Profile')}} </a>
                                        @endauth
                                    @endif
                                    @if(Route::has('logout') && Schema::hasTable('users'))
                                        @auth
                                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                               id="menu-0-item-1">{{__('Sign Out')}}</a>
                                        @endauth
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
                @endif
            </div>
        </div>

        <!-- Mobile menu, show/hide this `div` based on menu open/closed state -->

        <div x-show="mobileMenu" class="fixed inset-0 z-40 md:hidden" role="dialog" aria-modal="true">
            <!--
			  Off-canvas menu overlay, show/hide based on off-canvas menu state.

			  Entering: "transition-opacity ease-linear duration-300"
				From: "opacity-0"
				To: "opacity-100"
			  Leaving: "transition-opacity ease-linear duration-300"
				From: "opacity-100"
				To: "opacity-0"
			-->
            <div class="hidden sm:block sm:fixed sm:inset-0 sm:bg-gray-600 sm:bg-opacity-75" aria-hidden="true"></div>

            <!--
			  Mobile menu, toggle classes based on menu state.

			  Entering: "transition ease-out duration-150 sm:ease-in-out sm:duration-300"
				From: "transform opacity-0 scale-110 sm:translate-x-full sm:scale-100 sm:opacity-100"
				To: "transform opacity-100 scale-100  sm:translate-x-0 sm:scale-100 sm:opacity-100"
			  Leaving: "transition ease-in duration-150 sm:ease-in-out sm:duration-300"
				From: "transform opacity-100 scale-100 sm:translate-x-0 sm:scale-100 sm:opacity-100"
				To: "transform opacity-0 scale-110  sm:translate-x-full sm:scale-100 sm:opacity-100"
			-->
            <nav class="fixed z-40 inset-0 h-full w-full bg-white sm:inset-y-0 sm:left-auto sm:right-0 sm:max-w-sm sm:w-full sm:shadow-lg"
                 aria-label="Global">
                <div class="h-16 flex items-center justify-between px-4 sm:px-6">
                    <a href="/">
                        <img class="h-16" src="{{asset('vendor/theme/images/eutranet-red.svg')}}" alt=""/>
                    </a>
                    <button type="button"
                            @click="mobileMenu = !mobileMenu"
                            class="-mr-2 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-600">
                        <span class="sr-only">{{__('Close main menu')}}</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="mt-2 max-w-8xl mx-auto px-4 sm:px-6">
                    <div class="relative text-gray-400 focus-within:text-gray-500">
                        <label for="mobile-search" class="sr-only">Search all inboxes</label>
                        <input id="mobile-search" type="search" placeholder="Search all inboxes"
                               class="block w-full border-gray-300 rounded-md pl-10 placeholder-gray-500 focus:border-red-600 focus:ring-red-600">
                        <div class="absolute inset-y-0 left-0 flex items-center justify-center pl-3">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="max-w-8xl mx-auto py-3 px-2 sm:px-4">
                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Inboxes</a>

                    <a href="#"
                       class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Technical
                        Support</a>

                    <a href="#"
                       class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">Sales</a>

                    <a href="#"
                       class="block rounded-md py-2 pl-5 pr-3 text-base font-medium text-gray-500 hover:bg-gray-100">General</a>

                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Reporting</a>

                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-100">Settings</a>
                </div>
                <div class="border-t border-gray-200 pt-4 pb-3">
                    <div class="max-w-8xl mx-auto px-4 flex items-center sm:px-6">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                 src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </div>
                        <div class="ml-3 min-w-0 flex-1">
                            <div class="text-base font-medium text-gray-800 truncate">Whitney Francis</div>
                            <div class="text-sm font-medium text-gray-500 truncate">whitney.francis@example.com</div>
                        </div>
                        <a href="#" class="ml-auto flex-shrink-0 bg-white p-2 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-3 max-w-8xl mx-auto px-2 space-y-1 sm:px-4">
                        <a href="#"
                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Your
                            Profile</a>

                        <a href="#"
                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-900 hover:bg-gray-50">Sign
                            out</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Bottom section -->
    <div class="min-h-0 flex-1 flex overflow-hidden">
        <!-- Narrow sidebar-->
        <nav aria-label="Sidebar" class="hidden md:block md:flex-shrink-0 md:bg-gray-800 md:overflow-y-auto">
            <div class="relative w-20 flex flex-col p-3 space-y-3">
                <a href="{{ route('industries.hr-and-communication') }}"
                   class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">{{__('HR & Communication')}}</span>
                    <i class="fa fa-users text-3xl"></i>
                </a>
                <a href="{{ route('industries.mapping') }}"
                   class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">{{__('Mapping')}}</span>
                    <i class="fa fa-map-marked-alt text-3xl"></i>
                </a>
                <a href="{{ route('industries.maritime') }}"
                   class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">{{__('Maritime')}}</span>
                    <i class="fa fa-ship text-3xl"></i>
                </a>
                <a href="{{ route('industries.scanning') }}"
                   class="text-gray-400 hover:bg-gray-700 flex-shrink-0 inline-flex items-center justify-center h-14 w-14 rounded-lg">
                    <span class="sr-only">{{__('Scanning')}}</span>
                    <i class="fa fa-barcode text-3xl"></i>
                </a>
            </div>
        </nav>

        <div class="flex-1 flex items-stretch overflow-hidden bg-gradient-to-b from-gray-200 to-white">
            <main class="flex-1 overflow-y-auto">
                <!-- Primary column -->
                <section aria-labelledby="primary-heading" class="min-w-0 flex-1 h-full flex flex-col lg:order-last">
                    <x-theme-flash-message></x-theme-flash-message>
                    <div class="p-6 sm:p-8 max-w-4xl">
                        @yield('content')
                    </div>
                </section>
            </main>

            <!-- Secondary column (hidden on smaller screens) -->
            <aside class="hidden w-96 bg-white border-l border-gray-200 overflow-y-auto lg:block">
                <div class="p-4">
                    <h3 class="border-b-4 border-red-500 text-gray-600 text-xl">
                        {{__('Contact us')}}
                    </h3>
                    <p class="leading-tight mt-2">{{__('Need a customized solution to meet specific management requirements, execute a specific mission ? Tell us what you need ! ')}}</p>
                    <form action="{{ url('/pre-register') }}" class="my-4 rounded-lg space-y-2 bg-gradient-to-br from-gray-200 to-gray-200 p-4 shadow-sm" method="POST">
                        <h3 class="border-b-2-gray-500 w-full uppercase italic font-semibold">{{__('Tell us what you need')}}</h3>
                        @csrf
                        <div class="col-span-6 sm:col-span-3">
                            <label for="full-name" class="block text-sm font-medium text-gray-700">{{__('Full name')}}</label>
                            <input required type="text" name="full_name" id="full-name" autocomplete="full-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-1 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="company" class="block text-sm font-medium text-gray-700">{{__('Company')}}</label>
                            <input required type="text" name="company" id="company" autocomplete="company" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-1 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="phone" class="block text-sm font-medium text-gray-700">{{__('Phone')}}</label>
                            <input required type="text" maxLength="16" minlength="9" name="phone" id="phone" autocomplete="phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-1 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{__('Email')}}</label>
                            <input required type="email" name="email" id="email" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-1 px-3 focus:outline-none focus:ring-gray-500 focus:border-gray-500 sm:text-sm" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <button type="submit" class="inline-block text-md rounded w-full bg-gray-700 my-2 py-1 text-white">{{__('Pre-register')}}</button>
                        </div>
                    </form>
                    <h3 class="border-b-4 border-red-500 text-gray-600 text-xl">{{__('Download our core packages for free')}}</h3>
                    <ul class="list-inside list-disc mt-2">
                        <li>
                            <a class="hover:underline" href="{{ url('/packages/laravel-init')}}">
                                {{__('Laravel Init')}}
                            </a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ url('/packages/laravel-theme')}}">
                                {{__('Laravel Theme')}}
                            </a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ url('/packages/laravel-florbela-commons')}}">
                                {{__('Laravel Commons')}}
                            </a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ url('/packages/laravel-setup')}}">
                                {{__('Laravel Setup')}}
                            </a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ url('/packages/laravel-be')}}">
                                {{__('Laravel Backend')}}
                            </a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ url('/packages/laravel-frontend')}}">
                                {{__('Laravel Frontend')}}
                            </a>
                        </li>
                        <li>
                            <a class="hover:underline" href="{{ url('/packages/laravel-my-space')}}">
                                {{__('Laravel My Space')}}
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Your content -->
            </aside>
        </div>
    </div>
</div>
</body>
</html>