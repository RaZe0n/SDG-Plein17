@extends('layouts.guest')

@section('content')
<div class="container max-w-7xl mx-auto mt-16">
    <div class="grid grid-cols-1 md:grid-cols-3 grid-rows-2 gap-4">
        <div class="col-span-1 bg-gray-100 p-4 h-96 rounded-md flex items-center justify-center">
            <div class="text-center">
                <p class="text-2xl font-bold text-gray-700">{{ count($awarded_predicates) }}</p>
                <p class="text-sm text-gray-500">Aantal Predicaten</p>
            </div>
        </div>

        <div class="col-span-1 bg-gray-100 h-96 rounded-md">
            @if(count($awarded_predicates) > 0)
            <p class="text-lg text-center text-gray-700 font-semibold m-3">Meest recente predicaat</p>
            <div class="flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('storage/17-doelen/17-sdg-s-' . $awarded_predicates[0]->awarded_predicate . '.png') }}" alt="Predicate Image" class="w-48 h-48 mb-4 rounded-md">
                    <p class="text-gray-600 mt-2 text-center">{{ $awarded_predicates[0]->goal }}</p>
                </div>
            </div>
            @else
            <p>U heeft geen recente predicaten.</p>
            <p>Wilt u één aanvragen? <span><a href="{{ route('predicaat') }}" class="text-blue-500 underline">Klik hier!</a></span></p>
            @endif
        </div>


        <div class="col-span-1 row-span-2 bg-gray-100 p-4 h-full rounded-md">
            <div class="flow-root">
            <p class="text-lg text-center text-gray-700 font-semibold mb-3">Activiteiten Feed <span class="text-green-500">(In Progress)</span></p>
                <ul role="list" class="-mb-8">
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="flex size-8 items-center justify-center rounded-full bg-blue-200">
                                        <i class="fa-regular fa-user"></i>
                                    </span>
                                </div>
                                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                    <div>
                                        <p class="text-sm text-gray-500">Account  <span class="text-green-500">succesvol</span> aangemaakt</p>
                                    </div>
                                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                        <time datetime="2020-09-20">Sep 20</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="flex size-8 items-center justify-center rounded-full bg-blue-200">
                                        <i class="fa-regular fa-newspaper"></i>
                                    </span>
                                </div>
                                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                    <div>
                                        <p class="text-sm text-gray-500">Predicaatformulier  <span class="text-green-500">succesvol</span> ingeleverd</p>
                                    </div>
                                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                        <time datetime="2020-09-22">Sep 22</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="flex size-8 items-center justify-center rounded-full bg-blue-200">
                                        <i class="fa-regular fa-newspaper"></i>
                                    </span>
                                </div>
                                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                    <div>
                                        <p class="text-sm text-gray-500">Predicaatformulier  <span class="text-yellow-500">in benhandeling</span> genomen</p>
                                    </div>
                                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                        <time datetime="2020-09-28">Sep 28</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span class="flex size-8 items-center justify-center rounded-full bg-blue-200">
                                        <i class="fa-regular fa-newspaper"></i>
                                    </span>
                                </div>
                                <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                    <div>
                                        <p class="text-sm text-gray-500">Advanced to interview by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                                    </div>
                                    <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                        <time datetime="2020-09-30">Sep 30</time>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-span-2 bg-white p-6 h-96 rounded-md overflow-auto shadow-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Datum</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Beschrijving</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Locatie</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($registered_events as $event)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $event->description }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $event->location }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection