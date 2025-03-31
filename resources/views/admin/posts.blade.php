@extends('layouts.guest')

@section('content')
<div class="mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
        <!-- Sidebar -->
        <div class="col-span-1 shadow-lg p-4 h-auto lg:h-screen bg-white rounded-lg">
            <x-adminsidebar />
        </div>

        <!-- Main Content -->
        <div class="col-span-1 lg:col-span-4 bg-gray-50 shadow-lg rounded-lg p-8 h-screen">
            <h2 class="text-3xl font-extrabold text-gray-800 flex items-center space-x-2 mb-6">
                <span>Berichten</span>
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse bg-white rounded-lg shadow">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">ID</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Titel</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Bericht</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Tag</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($posts as $post)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 text-gray-900">{{ $post->id }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($post->title, 20) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($post->content, 20) }}</td>
                            <td class="py-4 px-6 text-gray-900">
                                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                    {{ ucfirst($post->tag) }}
                                </span>
                            </td>
                            <td class="py-4 px-6 flex items-center space-x-4">
                                <!-- Edit Icon -->
                                <form action="{{ route('admin.posts.edit', $post->id) }}" method="GET" class="inline-block">
                                    @csrf
                                    <button type="submit" class="text-blue-600 hover:text-blue-900">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </form>
                                <!-- Delete Icon -->
                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE') <!-- Method spoofing to support DELETE -->
                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    <a href="{{ route('admin.posts.create') }}" class="bg-lazurite hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Maak een bericht
                    </a>
                </div>
                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection