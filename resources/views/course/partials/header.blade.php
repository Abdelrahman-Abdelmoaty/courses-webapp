<header
    class="flex items-center justify-between sticky top-0 bg-primary dark:bg-primary-dark z-50 border-b-2 border-b-gray-300 dark:border-b-gray-800">
    <div class="grid place-items-center px-6 py-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-leafy-green">
            <path
                d="M2 22c1.25-.987 2.27-1.975 3.9-2.2a5.56 5.56 0 0 1 3.8 1.5 4 4 0 0 0 6.187-2.353 3.5 3.5 0 0 0 3.69-5.116A3.5 3.5 0 0 0 20.95 8 3.5 3.5 0 1 0 16 3.05a3.5 3.5 0 0 0-5.831 1.373 3.5 3.5 0 0 0-5.116 3.69 4 4 0 0 0-2.348 6.155C3.499 15.42 4.409 16.712 4.2 18.1 3.926 19.743 3.014 20.732 2 22" />
            <path d="M2 22 17 7" />
        </svg>
    </div>
    <div class="flex-1 px-6 py-4 border-x-2 border-x-gray-300 dark:border-x-gray-800">
        <button class="flex items-center gap-1 text-gray-700 dark:text-gray-400 hover:opacity-85">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-left">
                <path d="m15 18-6-6 6-6" />
            </svg>
            <span class="font-extrabold text-sm">
                Course Overview
            </span>
        </button>
    </div>
    <div class="px-6 hidden sm:block">
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
            <button class="hover:opacity-85">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-graduation-cap">
                    <path
                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                    <path d="M22 10v6" />
                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                </svg>
            </button>

            <div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="hover:opacity-85">
                            <div class="dark:bg-secondary bg-secondary-dark size-6 rounded-full"></div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center gap-3 p-3 hover:opacity-85 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            <span class="font-semibold">Profile</span>
                        </a>

                        <a class="flex items-center gap-3 p-3 hover:opacity-85 cursor-pointer">
                            <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                <polyline points="16 17 21 12 16 7" />
                                <line x1="21" x2="9" y1="12" y2="12" />
                            </svg>
                            <span class="font-semibold">Logout</span>
                        </a>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation -->
    <div class="flex items-center sm:hidden" x-data="{ open: false }">
        <button @click.prevent ="open=!open"
            class="inline-flex items-center justify-center p-2 rounded-md hover:opacity-85 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
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
                <button class="flex items-center gap-3 border-l-2 border-gray-900 dark:border-gray-200 pl-4 py-2"
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
                    <span class="font-bold text-lg">Toggle Theme</span>
                </button>


                <a class="flex items-center gap-3 border-l-2 border-gray-900 dark:border-gray-200 pl-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-graduation-cap">
                        <path
                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                        <path d="M22 10v6" />
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                    </svg>
                    <span class="font-bold text-lg">Move Forward</span>
                </a>

                <a class="flex items-center gap-3 border-l-2 border-gray-900 dark:border-gray-200 pl-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-user">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                    <span class="font-bold text-lg">Profile</span>
                </a>

                <a class="flex items-center gap-3 border-l-2 border-gray-900 dark:border-gray-200 pl-4 py-2">
                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-log-out">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" x2="9" y1="12" y2="12" />
                    </svg>
                    <span class="font-bold text-lg">Logout</span>
                </a>



            </div>

        </div>


</header>
