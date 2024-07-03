<header class="container flex items-center justify-between py-2 sticky top-0 bg-primary z-50">
    <a href="/" class="font-bold transition hover:opacity-85">LOGO</a>
    <div class="flex items-center gap-3">
        @auth
        <a href="/profile" class="hover:bg-gray-800 transition font-medium rounded-lg text-sm px-5 py-2.5">
            Profile
        </a>

        <form method="POST" action="{{ route('logout') }}" class="contents">
            @csrf

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                class="text-white bg-gray-800 hover:opacity-85 transition font-medium rounded-lg text-sm px-5 py-2.5">
                <svg xmlns=" http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-log-out">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" x2="9" y1="12" y2="12" />
                </svg>
            </a>
        </form>
        @else
        <a href="/login" class="hover:bg-gray-800 transition font-medium rounded-lg text-sm px-5 py-2.5">
            Login
        </a>
        <a href="/register" class="hover:bg-gray-800 transition font-medium rounded-lg text-sm px-5 py-2.5">
            Register
        </a>
        @endauth
    </div>
</header>

<hr class="border-b border-gray-800" />