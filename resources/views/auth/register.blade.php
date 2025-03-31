@extends('components.auth')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="flex gap-4">
        <!-- Name -->
        <div class="w-1/2">
            <x-input-label for="firstname" :value="__('Voornaam')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="w-1/2">
            <x-input-label for="lastname" :value="__('Achternaam')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Telefoonnummer -->
    <div class="mt-4">
        <x-input-label for="phone" :value="__('Telefoonnummer')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('Phone')" required autocomplete="phone" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>

    <div class="flex gap-4">
        <!-- Bedrijf -->
        <div class="w-1/2">
            <x-input-label for="bedrijf" :value="__('Bedrijf')" />
            <x-text-input id="bedrijf" class="block mt-1 w-full" type="text" name="bedrijf" :value="old('bedrijf')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('bedrijf')" class="mt-2" />
        </div>

        <!-- Sector -->
        <div class="w-1/2">
            <x-input-label for="sector" :value="__('Sector')" />
            <select id="sector" name="sector" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full" required>
                <option value="ICT">ICT</option>
                <option value="Gezondheidszorg">Gezondheidszorg</option>
                <option value="Onderwijs">Onderwijs</option>
                <option value="Financiële diensten">Financiële diensten</option>
                <option value="Detailhandel">Detailhandel</option>
                <option value="Productie">Productie</option>
                <option value="Bouw">Bouw</option>
                <option value="Transport en logistiek">Transport en logistiek</option>
                <option value="Overheid">Overheid</option>
                <option value="Horeca">Horeca</option>
            </select>
            <x-input-error :messages="$errors->get('sector')" class="mt-2" />
        </div>
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
            type="password"
            name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Heb je al een account?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Aanmelden') }}
        </x-primary-button>
    </div>
</form>
@endsection