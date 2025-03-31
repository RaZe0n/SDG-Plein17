@extends('layouts.guest')

@section('content')
<div class="container mx-auto max-w-7xl p-6">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Vraag aanmaken</h2>
        <form action="{{ route('admin.faq.store') }}" method="POST" class="space-y-6">
            @csrf
            @method('post')
            <div>
                <label for="question" class="block text-gray-700 font-medium mb-2">Vraag</label>
                <input
                    type="text"
                    name="question"
                    id="question"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Vul de vraag in">
            </div>

            <div>
                <label for="answer" class="block text-gray-700 font-medium mb-2">Antwoord</label>
                <textarea
                    name="answer"
                    id="answer"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Vul het antwoord in"
                    rows="4"></textarea>
            </div>

            <div>
                <label for="page" class="block text-gray-700 font-medium mb-2">Pagina</label>
                <select
                    name="page"
                    id="page"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3">
                    <option value="home">Home</option>
                    <option value="predicate">Predicaat</option>
                    <option value="about_us">Over Ons</option>
                </select>
            </div>

            <div class="flex justify-center">
                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Vraag toevoegen
                </button>
            </div>
        </form>
    </div>
</div>
@endsection