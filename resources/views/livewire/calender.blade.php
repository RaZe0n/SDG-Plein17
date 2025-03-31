<div class="mx-auto max-w-4xl mt-24 mb-24">
    <h2 class="text-3xl font-bold text-center mb-8">Aankomende evenementen</h2>
    <div class="grid grid-rows-1 md:grid-rows-2 lg:grid-row-3 gap-8">
        @foreach ($events as $event)
        <div class="bg-white shadow-md rounded-lg overflow-hidden flex hover:scale-105 duration-300 ease-linear">
            <div class="bg-lazurite text-white flex items-center justify-center w-1/4 p-4">
                <div class="text-center">
                    <p class="text-2xl font-bold">{{ \Carbon\Carbon::parse($event->start)->format('d') }}</p>
                    <p class="uppercase text-sm">{{ \Carbon\Carbon::parse($event->start)->format('M') }}</p>
                    <p class="text-sm">{{ \Carbon\Carbon::parse($event->start)->format('Y') }}</p>
                </div>
            </div>
            <div class="p-6 w-3/4">
                <h3 class="text-xl font-bold mb-2">{{ $event->title }}</h3>
                <p class="text-gray-700 mb-4">{{ Str::limit($event->description, 100) }}</p>
                @if (Auth::check())
                <button class="flex justify-end text-lazurite font-bold" onclick="enterWorkshop('{{ $event->id }}', '{{ Auth::id() }}')">Ik doe mee!</button>
                @else
                <a href="{{ route('login') }}" class="flex justify-end text-lazurite font-bold">Inloggen!</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>