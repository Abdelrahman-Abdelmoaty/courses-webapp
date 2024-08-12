<x-app-layout>
    <main class="relative grid min-h-screen grid-cols-1 bg-white p-2 font-poppins text-gray-800 lg:grid-cols-2">
        <div class="relative z-10 my-auto h-fit rounded-lg bg-white px-6 py-12 lg:px-24">
            <div class="max-w-lg">
                <svg class="w-16 text-blue-700" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60.403 60.403" xml:space="preserve">
                    <g>
                        <path style="fill:currentColor;"
                            d="M11.16,11.748c0-3.171,2.571-5.743,5.743-5.743s5.743,2.571,5.743,5.743s-2.571,5.743-5.743,5.743   S11.16,14.92,11.16,11.748z M19.486,20.168l2.536-1.282l-0.513-1.015l-2.535,1.282L19.486,20.168z M60.4,8.539l-1.221,12.654   c-0.031,0.316-0.314,0.547-0.629,0.518l-8.146-0.789c-0.316-0.03-0.549-0.313-0.52-0.627l0.312-3.207l-1.229-0.118   c-0.354,0.416-0.828,0.765-1.436,0.998c-5.423,2.083-10.953,3.651-16.594,4.802c2.371,2.683,4.369,5.706,5.898,8.926   c0.176,0.366,0.314,0.739,0.426,1.118c0.113,0.146,0.221,0.298,0.324,0.473c3.618,6.342,9.368,12.301,16.514,14.454   c4.15,1.251,2.381,7.755-1.791,6.496c-7.528-2.271-13.893-7.726-18.393-14.166c-7.085,1.108-18.237,3.446-19.505,11.593   c-0.667,4.282-7.16,2.459-6.498-1.791c1.313-8.449,9.641-12.713,17.704-14.902c-1.715-2.938-3.825-5.498-6.507-7.751   c-0.051-0.044-0.096-0.093-0.145-0.139c-6.192,0.852-12.18-0.733-17.457-4.384c-3.548-2.454-0.183-8.297,3.4-5.818   c4.619,3.989,13.337,3.353,13.39,3.266l3.083,2.036l-1.502-1.629l2.141-1.198l0.627,2.079v-3.997   c0.023-0.004,0.046-0.013,0.069-0.016c7.89-1.035,15.598-3.091,23.023-5.943c1.387-0.532,2.501-0.124,3.209,0.705l0.146-1.5   l1.703,0.164l0.311-3.204c0.033-0.316,0.314-0.548,0.629-0.517l8.146,0.786C60.2,7.941,60.431,8.223,60.4,8.539z M50.743,11.43   l-1.118-0.108l-0.162,1.677c0.467,1.043,0.48,2.36-0.105,3.421l0.896,0.088L50.743,11.43z" />
                    </g>
                </svg>

                <h2 class="mt-12 text-2xl font-bold lg:text-4xl">
                    Reset Password
                </h2>
                <p class="mt-2 text-sm text-gray-500 lg:text-sm">
                    Enter your email address and password to reset your password.
                </p>

                <form method="POST" action="{{ route('password.store') }}" class="mt-8">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">


                    <div>
                        <label for="email" class="block text-sm font-semibold tracking-tighter">Email
                            <span class="text-red-500" title="Required" aria-hidden="true">*</span>
                        </label>
                        <input
                            class="mt-1 block w-full rounded-lg border-gray-300 p-4 text-sm shadow-sm placeholder:text-gray-400"
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

                    <div class="mt-4">
                        <label for="password" class="block text-sm font-semibold tracking-tighter">Password
                            <span class="text-red-500" title="Required" aria-hidden="true">*</span></label>
                        <input
                            class="mt-1 block w-full rounded-lg border-gray-300 p-4 text-sm shadow-sm placeholder:text-gray-400"
                            id="password" type="password" name="password" placeholder="•••••••" />
                        @if ($errors->get('password'))
                            <div class="mt-2">
                                <ul class="space-y-1 text-sm text-red-600">
                                    @foreach ($errors->get('password') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="mt-4">
                        <label for="password_confirmation" class="block text-sm font-semibold tracking-tighter">Confirm
                            Password
                            <span class="text-red-500" title="Required" aria-hidden="true">*</span></label>
                        <input
                            class="mt-1 block w-full rounded-lg border-gray-300 p-4 text-sm shadow-sm placeholder:text-gray-400"
                            id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="•••••••" autocomplete="new-password" />
                        @if ($errors->get('password_confirmation'))
                            <div class="mt-2">
                                <ul class="space-y-1 text-sm text-red-600">
                                    @foreach ($errors->get('password_confirmation') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>






                    <button
                        class="mt-4 w-full rounded-lg bg-blue-700 p-4 text-sm font-medium text-white hover:bg-blue-800">
                        Reset Password
                    </button>

                </form>

                <div class="my-6 flex items-center">
                    <div class="h-[0.5px] flex-1 bg-gray-700"></div>
                    <div class="mx-3 text-sm text-gray-700">Or</div>
                    <div class="h-[0.5px] flex-1 bg-gray-700"></div>
                </div>

                <a href="{{ route('login') }}"
                    class="hover:opacity-85 mt-4 block rounded-lg border border-gray-300 p-4 text-center text-sm font-medium">
                    Login
                </a>
            </div>
        </div>
        <div class="relative max-lg:absolute max-lg:inset-0 max-lg:h-full max-lg:w-full max-lg:object-cover">
            <img src="/assets/login-1.jpg" alt="login-hero"
                class="absolute inset-0 h-full w-full rounded-lg object-cover" />
        </div>
    </main>
</x-app-layout>
