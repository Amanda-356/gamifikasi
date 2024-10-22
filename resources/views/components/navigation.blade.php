<nav x-data="{ isOpen: false }"
    class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <!-- Button to open sidebar -->
                <button @click="isOpen = true" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <aside x-show="isOpen" @click.outside="isOpen=false"
                    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform bg-white border-r border-gray-200  dark:bg-gray-800 dark:border-gray-700"
                    aria-label="Sidebar">
                    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
                        <ul class="space-y-2 font-medium">
                            <li>
                                <x-nav-link href="{{ route('guru.dashboard') }}" icon="iconDashboard" :active="request()->routeIs('guru.dashboard')"
                                    class="text-white">Dashboard</x-nav-link>
                            </li>
                            <li>
                                <x-nav-link href="{{ route('guru.level1') }}" icon="iconLevel1" :active="request()->routeIs('guru.level1')"
                                    class="text-white">Level 1</x-nav-link>
                            </li>
                            <li>
                                <x-nav-link href="{{ route('guru.level2') }}" icon="iconLevel2" :active="request()->routeIs('guru.level2')"
                                    class="text-white">Level 2</x-nav-link>
                            </li>
                            <li>
                                <x-nav-link href="{{ route('guru.level3') }}" icon="iconLevel3" :active="request()->routeIs('guru.level3')"
                                    class="text-white">Level 3</x-nav-link>
                            </li>
                            <li>
                                <x-nav-link href="{{ route('guru.level4') }}" icon="iconLevel4" :active="request()->routeIs('guru.level4')"
                                    class="text-white">Level 4</x-nav-link>
                            </li>
                            <li>
                                <x-nav-link href="{{ route('guru.level5') }}" icon="iconLevel5" :active="request()->routeIs('guru.level5')"
                                    class="text-white">Level 5</x-nav-link>
                            </li>
                            <li>
                                <x-nav-link href="{{ route('guru.logout') }}" icon="iconLogout" :active="request()->routeIs('guru.logout')"
                                    class="text-red-500">Logout</x-nav-link>
                            </li>
                        </ul>
                    </div>
                </aside>
                <a href="" class="flex ms-2 md:me-24">
                    <img src="{{ asset('/img/logo.svg') }}" class="h-8 me-3" alt="Treasure-Hunt Logo" />
                    <span
                        class="font-bangers tracking-wider text-xl font-bold text-cyan-200 self-center sm:text-2xl whitespace-nowrap">
                        <span class="text-amber-600">Treasure</span> Hunt
                    </span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <x-nav-link href="{{ route('guru.dashboard') }}" icon="iconDashboard" :active="request()->routeIs('guru.dashboard')"
                    class="text-white">Dashboard</x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('guru.respondent') }}" icon="iconRespondent" :active="request()->routeIs('guru.respondent')" class="text-white">
                    Jawaban
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('guru.level1') }}" icon="iconLevel1" :active="request()->routeIs('guru.level1')" class="text-white">
                    Level 1
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('guru.level2') }}" icon="iconLevel2" :active="request()->routeIs('guru.level2')" class="text-white">
                    Level 2
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('guru.level3') }}" icon="iconLevel3" :active="request()->routeIs('guru.level3')" class="text-white">
                    Level 3
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('guru.level4') }}" icon="iconLevel4" :active="request()->routeIs('guru.level4')" class="text-white">
                    Level 4
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('guru.level5') }}" icon="iconLevel5" :active="request()->routeIs('guru.level5')" class="text-white">
                    Level 5
                </x-nav-link>
            </li>
            <li>
                <x-nav-link href="{{ route('guru.logout') }}" icon="iconLogout" :active="request()->routeIs('guru.logout')"
                    class="text-red-500">Logout</x-nav-link>
            </li>
        </ul>
    </div>
</aside>