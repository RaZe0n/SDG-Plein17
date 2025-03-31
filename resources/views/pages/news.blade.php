@extends('layouts.guest')

@section('content')

<div class="mx-auto max-w-2xl lg:max-w-4xl h-screen">
    <h2 class="text-pretty mt-4 text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl text-center">Nieuwsberichten - SDG Nederland</h2>
    <div class="mt-16 lg:mt-20 p-4">
        @foreach ($posts as $newsItem)
        <article class="relative isolate w-full">
            <div>
                <div class="text-xs">
                    <time datetime="{{ $newsItem->created_at }}" class="text-gray-500">{{ \Carbon\Carbon::parse($newsItem->created_at)->format('M d, Y') }}</time>
                    <span class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $newsItem->tag }}</span>
                </div>
                <div class="group relative">
                    <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                        <span class="absolute inset-0"></span>
                        {{ $newsItem->title }}
                    </h3>
                    <p class="mt-5 text-sm/6 text-gray-600 max-h-40 overflow-auto">
                        {{ $newsItem->content }}
                    </p>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</div>

@endsection