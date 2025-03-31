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
                <span>Predicaat Aanvragen</span>
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse bg-white rounded-lg shadow">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">#</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Naam</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Achternaan</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Email</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Bedrijf</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Sector</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Status</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($predicates as $pred)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 text-gray-900">{{ $pred->id }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ $pred->firstname }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($pred->lastname, 20) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ \Illuminate\Support\Str::limit($pred->email, 25) }}</td>
                            <td class="py-4 px-6 text-gray-900">
                                <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
                                    {{ ucfirst($pred->company) }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-gray-900">
                                <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
                                    {{ ucfirst($pred->sector) }}
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                @if($pred->status == 'goedgekeurd')
                                <span class="inline-flex items-center rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-800 ring-1 ring-inset ring-green-600/20">
                                    {{ ucfirst($pred->status) }}
                                </span>
                                @elseif($pred->status == 'in behandeling')
                                <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                                    {{ ucfirst($pred->status) }}
                                </span>
                                @elseif($pred->status == 'aangevraagd')
                                <span class="inline-flex items-center rounded-md bg-blue-100 px-2 py-1 text-xs font-medium text-blue-800 ring-1 ring-inset ring-blue-700/10">
                                    {{ ucfirst($pred->status) }}
                                </span>
                                @elseif($pred->status == 'afgekeurd')
                                <span class="inline-flex items-center rounded-md bg-red-100 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">
                                    {{ ucfirst($pred->status) }}
                                </span>
                                @endif
                            </td>

                            <td class="py-4 px-6 flex items-center space-x-4">
                                <a href="{{ route('admin.predicates.show', $pred->id) }}" class="text-blue-600 hover:text-blue-900">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $predicates->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection