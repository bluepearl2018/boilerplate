<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"></x-application-logo>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-theme-form-validation-errors class="mb-4" :errors="$errors"></x-theme-form-validation-errors>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-theme-form-label for="name" :value="__('Name')"></x-theme-form-label>

                <x-theme-form-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus></x-theme-form-input>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-theme-form-label for="email" :value="__('Email')"></x-theme-form-label>

                <x-theme-form-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required></x-theme-form-input>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-theme-form-label for="password" :value="__('Password')"></x-theme-form-label>

                <x-theme-form-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password"></x-theme-form-input>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-theme-form-label for="password_confirmation" :value="__('Confirm Password')"></x-theme-form-label>

                <x-theme-form-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required></x-theme-form-input>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
