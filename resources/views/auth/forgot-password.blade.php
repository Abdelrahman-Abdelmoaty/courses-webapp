<x-app-layout>
    <main class="relative grid min-h-screen grid-cols-1 p-2 text-gray-800 bg-white font-poppins lg:grid-cols-2">
        <div class="relative z-10 px-6 py-12 my-auto bg-white rounded-lg h-fit lg:px-24">
            <div class="max-w-lg">

                <svg class="w-16 text-blue-700" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" version="1.1" id="Capa_1"
                    viewBox="0 0 536.138 536.138" xml:space="preserve">
                    <g>
                        <g>
                            <circle cx="69.582" cy="145.48" r="64.48" />
                            <path
                                d="M523.083,8.66c-16.878-16.677-44.093-7-60.789,9.868L308.118,175.87l-55.663,6.741c-5.68,1.75-14.229,0.421-19.116-2.964    l-7.698-5.327l109.165-85.049c16.381-12.756,19.326-36.395,6.551-52.784c-12.747-16.381-36.386-19.307-52.775-6.561    L173.067,119.92c-7.124,5.556-11.542,13.196-13.397,21.362c-0.038,0.076-0.105,0.124-0.144,0.201c0,0-42.658,68.802-42.629,70.819    c-8.587,11.38-10.385,27.11-3.185,40.469l62.682,116.414c6.799,12.613,19.756,19.785,33.144,19.785    c6.024,0,12.135-1.444,17.805-4.504c18.284-9.85,25.121-32.656,15.281-50.949l-27.645-51.341l64.317,3.729v207.257    c0,23.725,9.677,42.975,33.411,42.975s33.421-19.25,33.421-42.975V240.665c0-0.593-0.152-1.147-0.172-1.74l164.59-171.838    C527.224,50.219,539.951,25.365,523.083,8.66z" />
                        </g>
                    </g>
                </svg>

                <h2 class="mt-12 text-2xl font-bold lg:text-4xl">Forgot your password?</h2>
                <p class="mt-2 text-sm text-gray-500 lg:text-sm">
                    No problem. Just let us know your email address and we will email you a password reset link that
                    will allow you to choose a new one.
                </p>


                <form method="POST" action="{{ route('password.email') }}" class="mt-8">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-semibold tracking-tighter">Email
                            <span class="text-red-500" title="Required" aria-hidden="true">*</span>
                        </label>
                        <input
                            class="block w-full p-4 mt-1 text-sm border-gray-300 rounded-lg shadow-sm placeholder:text-gray-400"
                            id="email" type="email" name="email" placeholder="Enter your email address" />

                        @if ($errors->get('email'))
                            <div class="mt-2">
                                <ul class="space-y-1 text-sm text-red-600">
                                    @foreach ($errors->get('email') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    @if (session('status'))
                        <div class= "mt-4 text-sm font-medium text-green-600 ">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button
                        class="w-full p-4 mt-4 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        Email Password Reset Link
                    </button>

                </form>

                <div class="flex items-center my-6">
                    <div class="h-[0.5px] bg-gray-700 flex-1"></div>
                    <div class="mx-3 text-sm text-gray-700">
                        Or
                    </div>
                    <div class="h-[0.5px] bg-gray-700 flex-1"></div>
                </div>

                <a href="{{ route('login') }}"
                    class="block p-4 mt-4 text-sm font-medium text-center border border-gray-300 rounded-lg hover:opacity-85">
                    Login
                </a>
            </div>
        </div>
        <div class="relative max-lg:inset-0 max-lg:object-cover max-lg:w-full max-lg:h-full max-lg:absolute">
            <img src="/assets/login-1.jpg" alt="login-hero"
                class="absolute inset-0 object-cover w-full h-full rounded-lg" />
        </div>
    </main>
</x-app-layout>
