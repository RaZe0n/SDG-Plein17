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
                <span>Gebruikers</span>
            </h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse bg-white rounded-lg shadow">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">ID</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Voornaam</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Achternaam</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Bedrijf</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Sector</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Email</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Rol</th>
                            <th class="py-4 px-6 text-left font-medium text-sm uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-6 text-gray-900">{{ $user->id }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ ucfirst($user->firstname) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ ucfirst($user->lastname) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ ucfirst($user->company) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ ucfirst($user->sector) }}</td>
                            <td class="py-4 px-6 text-gray-900">{{ $user->email }}</td>
                            <td class="py-4 px-6 text-gray-900">
                                <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium {{ $user->is_admin ? 'bg-red-100 text-red-700' : 'bg-blue-100 text-blue-700' }}">
                                    {{ $user->is_admin ? 'Admin' : 'Gebruiker' }}
                                </span>
                            </td>
                            <td class="py-4 px-6 flex items-center space-x-4">
                                <!-- Edit Icon -->
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-600 hover:text-blue-900">
                                    <i class="fa-solid fa-user-pen"></i>
                                </a>
                                <!-- Delete Icon -->
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block">
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
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection