@extends('layouts.guest')

@section('content')
<div class="container mx-auto max-w-lg p-6">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Update User</h2>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- First Name -->
            <div>
                <label for="firstname" class="block text-gray-700 font-medium mb-2">Voornaam</label>
                <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    value="{{ $user->firstname }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Enter first name">
            </div>

            <!-- Last Name -->
            <div>
                <label for="lastname" class="block text-gray-700 font-medium mb-2">Achternaam</label>
                <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    value="{{ $user->lastname }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Enter last name">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Email Adres</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ $user->email }}"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Enter email">
            </div>

            <!-- Company Sector -->
            <div class="flex gap-2">
                <div>
                    <label for="company_sector" class="block text-gray-700 font-medium mb-2">Bedrijf</label>
                    <input
                        type="text"
                        name="company"
                        id="company"
                        value="{{ $user->company }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Enter company sector">
                </div>
                <div>
                    <label for="company_sector" class="block text-gray-700 font-medium mb-2">Sector</label>
                    <input
                        type="text"
                        name="company_sector"
                        id="company_sector"
                        value="{{ $user->sector }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Enter company sector">
                </div>
            </div>

            <!-- Role -->
            <div>
                <label for="role" class="block text-gray-700 font-medium mb-2">Role</label>
                <select
                    name="role"
                    id="role"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3">
                    <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>User</option>
                    <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
                </select>
            </div>

            <div class="flex justify-center">
                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Gebruiker bijwerken
                </button>
            </div>
        </form>
    </div>
</div>
@endsection