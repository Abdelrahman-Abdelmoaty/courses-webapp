<header
    class="sticky top-0 z-50 flex items-center justify-between border-b-2 bg-primary dark:bg-primary-dark border-b-gray-300 dark:border-b-gray-800">
    <div class="grid px-6 py-4 place-items-center">
        <a href="{{ route('profile.edit') }}" class="hover:opacity-85">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-circle-user-round">
                <path d="M18 20a6 6 0 0 0-12 0" />
                <circle cx="12" cy="10" r="4" />
                <circle cx="12" cy="12" r="10" />
            </svg>
        </a>
    </div>
    <div class="flex-1 px-6 py-4 border-x-2 border-x-gray-300 dark:border-x-gray-800">
        <a href="/" class="flex items-center gap-1 text-gray-700 w-fit dark:text-gray-400 hover:opacity-85">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-left">
                <path d="m15 18-6-6 6-6" />
            </svg>
            <span class="text-sm font-extrabold">
                Course Overview
            </span>
        </a>
    </div>
    <div class="hidden px-6 lg:block">
        <div class="flex items-center justify-center gap-4">
            <button class="hover:opacity-85" x-data="{
                theme: localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
            }"
                @click="console.log(theme); const current = document.documentElement.classList; if (theme === 'dark') { current.add('light'); current.remove('dark'); localStorage.setItem('theme', 'light'); theme = 'light'; } else { current.add('dark'); current.remove('light'); localStorage.setItem('theme', 'dark'); theme = 'dark'; }">


                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-sun-moon">
                    <path d="M12 8a2.83 2.83 0 0 0 4 4 4 4 0 1 1-4-4" />
                    <path d="M12 2v2" />
                    <path d="M12 20v2" />
                    <path d="m4.9 4.9 1.4 1.4" />
                    <path d="m17.7 17.7 1.4 1.4" />
                    <path d="M2 12h2" />
                    <path d="M20 12h2" />
                    <path d="m6.3 17.7-1.4 1.4" />
                    <path d="m19.1 4.9-1.4 1.4" />
                </svg>
            </button>



            <div class="contents">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="hover:opacity-85">
                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-log-out">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" x2="9" y1="12" y2="12" />
                    </svg>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>


        </div>
    </div>

    <!-- Responsive Navigation -->
    {{-- <div class="flex items-center sm:hidden" x-data="{ open: false }">
        <button @click.prevent ="open=!open"
            class="inline-flex items-center justify-center p-2 transition duration-150 ease-in-out rounded-md hover:opacity-85">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="fixed top-0 inset-x-0 min-h-screen p-4 transition transform origin-top-right z-[9999] bg-primary dark:bg-primary-dark"
            :class="{ 'block': open, 'hidden': !open }">
            <div>
                <button @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-4 mt-8">
                <button class="flex items-center gap-3 py-2 pl-4 border-l-2 border-gray-900 dark:border-gray-200"
                    x-data="{ theme: localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light') }"
                    @click="const current = document.documentElement.classList; if (theme === 'dark') { current.add('light'); current.remove('dark'); localStorage.setItem('theme', 'light'); theme = 'light'; } else { current.add('dark'); current.remove('light'); localStorage.setItem('theme', 'dark'); theme = 'dark'; }">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-sun-moon">
                        <path d="M12 8a2.83 2.83 0 0 0 4 4 4 4 0 1 1-4-4" />
                        <path d="M12 2v2" />
                        <path d="M12 20v2" />
                        <path d="m4.9 4.9 1.4 1.4" />
                        <path d="m17.7 17.7 1.4 1.4" />
                        <path d="M2 12h2" />
                        <path d="M20 12h2" />
                        <path d="m6.3 17.7-1.4 1.4" />
                        <path d="m19.1 4.9-1.4 1.4" />
                    </svg>
                    <span class="text-lg font-bold">Toggle Theme</span>
                </button>


                <a class="flex items-center gap-3 py-2 pl-4 border-l-2 border-gray-900 dark:border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-graduation-cap">
                        <path
                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                        <path d="M22 10v6" />
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                    </svg>
                    <span class="text-lg font-bold">Move Forward</span>
                </a>

                <a class="flex items-center gap-3 py-2 pl-4 border-l-2 border-gray-900 dark:border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-user">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    <span class="text-lg font-bold">Profile</span>
                </a>

                <a class="flex items-center gap-3 py-2 pl-4 border-l-2 border-gray-900 dark:border-gray-200">
                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-log-out">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" x2="9" y1="12" y2="12" />
                    </svg>
                    <span class="text-lg font-bold">Logout</span>
                </a>



            </div>

        </div> --}}


</header>
