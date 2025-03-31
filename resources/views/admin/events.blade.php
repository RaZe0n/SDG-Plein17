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
                <span>Evenementen</span>
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse bg-white rounded-lg shadow">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Title</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Beschrijving</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Locatie</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Start</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Aanmeldingen</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Type</th>   
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($workshops as $event)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 text-gray-900">{{ $event->title }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($event->description, 20) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($event->location, 20) }}</td>
                            <td class="py-4 px-6 text-gray-900"> 
                                <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
                                   {{ ucfirst($event->start) }}
                                </span> 
                            </td>
                            <td class="py-4 px-6 text-gray-900"> 
                                <span class="nline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
                                    {{ count(json_decode($event->participants, true)) }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium ring-1 ring-inset 
                                    {{ $event->type == 'workshop' ? 'bg-purple-50 text-purple-600 ring-purple-500/10' : ($event->type == 'event' ? 'bg-orange-50 text-orange-600 ring-orange-500/10' : 'bg-gray-50 text-gray-600 ring-gray-500/10') }}">
                                    {{ ucfirst($event->type) }} 
                                </span>
                            </td>
                            </td>
                            <td class="py-4 px-6 flex items-center space-x-4">
                                <a href="" class="text-blue-600 hover:text-blue-900">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="" method="POST" class="inline-block">
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
                    {{ $workshops->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection