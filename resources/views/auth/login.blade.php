<x-guest-layout>
    <x-slot name="header">
        <x-application-logo />
    </x-slot>

    <div class="container max-w-md py-16">
        <h2 class="text-3xl font-bold text-gray-300 mb-6 text-center">Login</h2>

        <form method="POST" action="{{ route('login') }}" class="contents">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <!-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded bg-gray-800 border-gray-700 text-primary shadow-sm focus:ring-indigo-500"
                    name="remember">
                <span class="ms-2 text-sm font-medium text-gray-500">{{ __('Remember me') }}</span>
            </label>
            </div> -->

            <a class="underline text-sm text-gray-500 hover:text-gray-400 rounded-md block mt-2"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />


            <x-primary-button class="w-full mt-4">
                {{ __('Log in') }}
            </x-primary-button>

        </form>

        <div class="flex items-center my-6">
            <div class="h-0.5 bg-gray-700 flex-1"></div>
            <div class="mx-3 text-gray-500 font-medium">OR</div>
            <div class="h-0.5 bg-gray-700 flex-1"></div>
        </div>

        <x-primary-button class="w-full">
            <a href="{{ route('register') }}">Register</a>
        </x-primary-button>
    </div>
</x-guest-layout>