<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="max-w-md w-full mx-auto p-6  rounded-lg">
        @csrf

        <!-- First Name -->
        <div class="mb-4">
            <x-input-label for="first_name" :value="__('First Name')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="first_name" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="first_name" :value="old('first_name')" required autofocus />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Last Name -->
        <div class="mb-4">
            <x-input-label for="last_name" :value="__('Last Name')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="last_name" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="last_name" :value="old('last_name')" required />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Username -->
        <div class="mb-4">
            <x-input-label for="username" :value="__('Username')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="username" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="username" :value="old('username')" required />
            <x-input-error :messages="$errors->get('username')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="password" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-600" />
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 mt-6">
            <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="w-full sm:w-auto justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
