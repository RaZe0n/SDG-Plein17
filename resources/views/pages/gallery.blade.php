@extends('layouts.guest')

@section('content')

<div class="container mx-auto mt-4">
    <h1 class="font-bold text-3xl text-center mt-6">Foto bibliotheek - SDG's</h1>
    <div class="mx-auto mt-2 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3 p-4">
        <!-- SDG 1: Geen armoede -->
        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ asset('storage/pictures/foto1.jpeg') }}" alt="Geen armoede" class="absolute inset-0 -z-10 size-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6 text-gray-300">
                <time datetime="2020-03-16" class="mr-8">13 Juni 2023</time>
                <div class="-ml-4 flex items-center gap-x-4">
                    <svg viewBox="0 0 2 2" class="-ml-0.5 size-0.5 flex-none fill-white/50">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex gap-x-2.5">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Foster" class="size-6 flex-none rounded-full bg-white/10">
                        Michael Foster
                    </div>
                </div>
            </div>
            <h3 class="mt-3 text-lg/6 font-semibold text-white">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Geen Armoede - SDG 1
                </a>
            </h3>
            <p class="mt-2 text-sm text-gray-300">
                Het uitbannen van armoede in al zijn vormen overal ter wereld. Essentieel voor een duurzame toekomst.
            </p>
        </article>

        <!-- SDG 4: Kwaliteitsonderwijs -->
        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ asset('storage/pictures/foto2.jpeg') }}" alt="Kwaliteitsonderwijs" class="absolute inset-0 -z-10 size-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6 text-gray-300">
                <time datetime="2020-03-16" class="mr-8">13 Juni 2023</time>
                <div class="-ml-4 flex items-center gap-x-4">
                    <svg viewBox="0 0 2 2" class="-ml-0.5 size-0.5 flex-none fill-white/50">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex gap-x-2.5">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Foster" class="size-6 flex-none rounded-full bg-white/10">
                        Michael Foster
                    </div>
                </div>
            </div>
            <h3 class="mt-3 text-lg/6 font-semibold text-white">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Kwaliteitsonderwijs - SDG 4
                </a>
            </h3>
            <p class="mt-2 text-sm text-gray-300">
                Iedereen toegang geven tot kwaliteitsonderwijs en levenslang leren om duurzame ontwikkeling te bevorderen.
            </p>
        </article>

        <!-- SDG 13: Klimaatactie -->
        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ asset('storage/pictures/foto3.jpeg') }}" alt="Klimaatactie" class="absolute inset-0 -z-10 size-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6 text-gray-300">
                <time datetime="2020-03-16" class="mr-8">13 Juni 2023</time>
                <div class="-ml-4 flex items-center gap-x-4">
                    <svg viewBox="0 0 2 2" class="-ml-0.5 size-0.5 flex-none fill-white/50">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex gap-x-2.5">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Foster" class="size-6 flex-none rounded-full bg-white/10">
                        Michael Foster
                    </div>
                </div>
            </div>
            <h3 class="mt-3 text-lg/6 font-semibold text-white">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Klimaatactie - SDG 13
                </a>
            </h3>
            <p class="mt-2 text-sm text-gray-300">
                De urgentie van klimaatverandering aanpakken door mitigatie- en adaptatiestrategieën wereldwijd te bevorderen.
            </p>
        </article>

        <!-- SDG 5: Gendergelijkheid -->
        <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
            <img src="{{ asset('storage/pictures/foto4.jpeg') }}" alt="Gendergelijkheid" class="absolute inset-0 -z-10 size-full object-cover">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

            <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6 text-gray-300">
                <time datetime="2020-03-16" class="mr-8">13 Juni 2023</time>
                <div class="-ml-4 flex items-center gap-x-4">
                    <svg viewBox="0 0 2 2" class="-ml-0.5 size-0.5 flex-none fill-white/50">
                        <circle cx="1" cy="1" r="1" />
                    </svg>
                    <div class="flex gap-x-2.5">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Foster" class="size-6 flex-none rounded-full bg-white/10">
                        Michael Foster
                    </div>
                </div>
            </div>
            <h3 class="mt-3 text-lg/6 font-semibold text-white">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Gendergelijkheid - SDG 5
                </a>
            </h3>
            <p class="mt-2 text-sm text-gray-300">
                Gendergelijkheid bevorderen door discriminatie te beëindigen en gelijke kansen voor alle mensen te waarborgen.
            </p>
        </article>

    </div>
</div>
@endsection