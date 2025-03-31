@extends('layouts.admin')

@section('content')
<div class="mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-5">
        <div class="col-span-1 shadow-lg p-4 h-auto lg:h-screen bg-white">
            <x-adminsidebar />
        </div>
        <div class="col-span-1 lg:col-span-4 bg-gray-100 shadow-lg rounded-lg p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Welkom, {{ ucfirst(Auth::user()->firstname) }} {{ ucfirst(Auth::user()->lastname) }}</h2>
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="col-span-1 bg-white shadow-md rounded-lg p-4 m-2 flex flex-col items-center">
                    <div class="flex items-center justify-center w-16 h-16 bg-blue-100 text-blue-500 rounded-full">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-700"><span>{{ $userCount}} </span> Gebruikers</h3>
                    </div>
                </div>
                <div class="col-span-1 bg-white shadow-md rounded-lg p-4 m-2 flex flex-col items-center">
                    <div class="flex items-center justify-center w-16 h-16 bg-green-100 text-green-500 rounded-full">
                        <i class="fas fa-chart-bar text-2xl"></i>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-700"><span>{{ $awardedCount }}</span> Predicaten</h3>
                    </div>
                </div>
                <div class="col-span-1 bg-white shadow-md rounded-lg p-4 m-2 flex flex-col items-center">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 text-red-500 rounded-full">
                        <i class="fas fa-chalkboard-teacher text-2xl"></i>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-700"><span>{{ $workshopCount }}</span> Workshops</h3>
                    </div>
                </div>
                <div class="col-span-1 bg-white shadow-md rounded-lg p-4 m-2 flex flex-col items-center">
                    <div class="flex items-center justify-center w-16 h-16 bg-yellow-100 text-yellow-500 rounded-full">
                        <i class="fas fa-newspaper text-2xl"></i>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-700"><span>{{ $postsCount }}</span> Nieuwsberichten</h3>
                    </div>
                </div>
            </div>
            <div class="mt-4 grid grid-cols-5">
                <div class="col-span-3 bg-white shadow-md rounded-lg p-4 m-2">
                    @livewire('AanvragenChart')
                </div>
                <div class="col-span-2 bg-white shadow-md rounded-lg p-4 m-2">
                    @livewire('Sector-Chart')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection