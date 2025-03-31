@extends('layouts.guest')

@section('content')

<div class="container mx-auto max-w-7xl p-6">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Bericht aanpassen</h2>
        <form action="{{ route('admin.predicates.update', $predicate->id) }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="firstname" class="block text-gray-700 font-medium mb-2">Voornaam</label>
                    <input
                        type="text"
                        name="firstname"
                        id="firstname"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de voornaam in"
                        value="{{ $predicate->firstname }}"
                        disabled>
                </div>

                <div>
                    <label for="lastname" class="block text-gray-700 font-medium mb-2">Achternaam</label>
                    <input
                        type="text"
                        name="lastname"
                        id="lastname"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de achternaam in"
                        value="{{ $predicate->lastname }}"
                        disabled>
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">E-mail</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer het e-mailadres in"
                        value="{{ $predicate->email }}"
                        disabled>
                </div>

                <div>
                    <label for="contactperson" class="block text-gray-700 font-medium mb-2">Contactpersoon</label>
                    <input
                        type="text"
                        name="contactperson"
                        id="contactperson"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de contactpersoon in"
                        value="{{ $predicate->contactperson }}"
                        disabled>
                </div>

                <div>
                    <label for="company" class="block text-gray-700 font-medium mb-2">Bedrijf</label>
                    <input
                        type="text"
                        name="company"
                        id="company"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de bedrijfsnaam in"
                        value="{{ $predicate->company }}"
                        disabled>
                </div>

                <div>
                    <label for="sector" class="block text-gray-700 font-medium mb-2">Sector</label>
                    <input
                        type="text"
                        name="sector"
                        id="sector"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de sector in"
                        value="{{ $predicate->sector }}"
                        disabled>
                </div>

                <div>
                    <label for="street" class="block text-gray-700 font-medium mb-2">Straat</label>
                    <input
                        type="text"
                        name="street"
                        id="street"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de straat in"
                        value="{{ $predicate->street }}"
                        disabled>
                </div>

                <div>
                    <label for="postalcode" class="block text-gray-700 font-medium mb-2">Postcode</label>
                    <input
                        type="text"
                        name="postalcode"
                        id="postalcode"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de postcode in"
                        value="{{ $predicate->postalcode }}"
                        disabled>
                </div>

                <div>
                    <label for="city" class="block text-gray-700 font-medium mb-2">Stad</label>
                    <input
                        type="text"
                        name="city"
                        id="city"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de stad in"
                        value="{{ $predicate->city }}"
                        disabled>
                </div>

                <div>
                    <label for="province" class="block text-gray-700 font-medium mb-2">Provincie</label>
                    <input
                        type="text"
                        name="province"
                        id="province"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                        placeholder="Voer de provincie in"
                        value="{{ $predicate->province }}"
                        disabled>
                </div>
            </div>

            <div>
                <label for="involvement" class="block text-gray-700 font-medium mb-2">Betrokkenheid</label>
                <input
                    type="text"
                    name="involvement"
                    id="involvement"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer de betrokkenheid in"
                    value="{{ $predicate->involvement }}"
                    disabled>
            </div>

            <div>
                <label for="acknowledge" class="block text-gray-700 font-medium mb-2">Erkenning</label>
                <input
                    type="text"
                    name="acknowledge"
                    id="acknowledge"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer de erkenning in"
                    value="{{ $predicate->acknowledge }}"
                    disabled>
            </div>

            <div>
                <label for="steps" class="block text-gray-700 font-medium mb-2">Stappen</label>
                <textarea
                    name="steps"
                    id="steps"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Beschrijf de stappen"
                    disabled
                    rows="4">{{ $predicate->steps }}</textarea>

            </div>

            <div>
                <label for="impact" class="block text-gray-700 font-medium mb-2">Impact</label>
                <input
                    type="text"
                    name="impact"
                    id="impact"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer de impact in"
                    value="{{ $predicate->impact }}"
                    disabled>
            </div>

            <div>
                <label for="collab" class="block text-gray-700 font-medium mb-2">Samenwerking</label>
                <input
                    type="text"
                    name="collab"
                    id="collab"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer de samenwerking in"
                    value="{{ $predicate->collab }}"
                    disabled>
            </div>

            <div>
                <label for="results" class="block text-gray-700 font-medium mb-2">Resultaten</label>
                <input
                    type="text"
                    name="results"
                    id="results"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer de resultaten in"
                    value="{{ $predicate->results }}"
                    disabled>
            </div>

            <div>
                <label for="play" class="block text-gray-700 font-medium mb-2">Spel</label>
                <input
                    type="text"
                    name="play"
                    id="play"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer het spel in"
                    value="{{ $predicate->play }}"
                    disabled>
            </div>

            <div>
                <label for="proud" class="block text-gray-700 font-medium mb-2">Trots</label>
                <input
                    type="text"
                    name="proud"
                    id="proud"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer trots in"
                    value="{{ $predicate->proud }}"
                    disabled>
            </div>

            <div>
                <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
                <select
                    name="status"
                    id="status"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3">
                    <option value="goedgekeurd" {{ $predicate->status == 'goedgekeurd' ? 'selected' : '' }}>Goedgekeurd</option>
                    <option value="afgekeurd" {{ $predicate->status == 'afgekeurd' ? 'selected' : '' }}>Afgekeurd</option>
                    <option value="in behandeling" {{ $predicate->status == 'in behandeling' ? 'selected' : '' }}>In behandeling</option>
                    <option value="aangevraagd" {{ $predicate->status == 'aangevraagd' ? 'selected' : '' }}>Aangevraagd</option>
                </select>
            </div>

            <div class="flex justify-center mt-8">
                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Update status
                </button>
            </div>
        </form>
    </div>
</div>

@endsection