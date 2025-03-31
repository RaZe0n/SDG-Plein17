@extends('layouts.guest')

@section('content')
<div class="container mx-auto max-w-7xl p-6">
    <div class="bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Bericht maken</h2>
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Titel</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Geef het bericht een titel"
                    value="{{ $post->title }}">
            </div>

            <div>
                <label for="content" class="block text-gray-700 font-medium mb-2">Bericht</label>
                <textarea
                    name="content"
                    id="content"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Vul het bericht in"
                    rows="4">{{ $post->content }}</textarea>
            </div>

            <div>
                <label for="tag" class="block text-gray-700 font-medium mb-2">Tag</label>
                <input
                    type="text"
                    name="tag"
                    id="tag"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 py-2 px-3"
                    placeholder="Voer een tag in"
                    value="{{ $post->tag }}">

                <div class="flex justify-center mt-8">
                    <button
                        type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        update bericht
                    </button>
                </div>
        </form>
    </div>
</div>
@endsection