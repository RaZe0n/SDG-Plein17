@extends('layouts.admin')

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
                <span>FAQ Vragen</span>
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse bg-white rounded-lg shadow">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">ID</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">vraag</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Antwoord</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Categorie / Vraag</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Clicks</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($faqData as $faq)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 text-gray-900">{{ $faq->id }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($faq->question, 20) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($faq->answer, 20) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ $faq->page }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ $faq->clicks }}</td>
                            <td class="py-4 px-6 flex items-center space-x-4">
                                <a href="{{ route('admin.faq.edit', $faq->id) }}" class="text-blue-600 hover:text-blue-900">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    <a href="{{ route('admin.faq.create') }}" class="bg-lazurite hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Voeg vraag toe
                    </a>
                </div>
                <div class="mt-4">
                    {{ $faqData->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection