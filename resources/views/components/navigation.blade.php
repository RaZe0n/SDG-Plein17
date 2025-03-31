<nav class="{{ request()->routeIs('home') ? 'bg-transparent absolute' : 'bg-lazurite' }} block top-0 left-0 w-full z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16">
            <div class="flex justify-between w-full">

                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
                <div class="hidden md:flex flex-col items-center md:flex-row md:justify-center md:items-center md:space-x-16 md:mx-auto">
                    <a href="{{ route('about') }}" class="text-white transition duration-150 ease-in-out my-3">Over ons</a>
                    <a href="{{ route('predicaat') }}" class="text-white transition duration-150 ease-in-out my-3">Predicaten</a>
                </div>
                <div class="flex items-center">
                    @auth
                    <a href="{{ route('dashboard') }}" class="text-white transition duration-150 ease-in-out my-3">Mijn Plein 17</a>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="text-white transition duration-150 ease-in-out my-3">Login</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>