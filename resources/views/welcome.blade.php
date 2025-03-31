@extends('layouts.guest')

@section('content')

<div class="relative w-full md:h-screen overflow-hidden">
    <img src="storage/images/sdg-global.jpg" alt="" class="w-full h-auto md:h-full object-cover object-left">
    <div class="bg-lazurite md:block">
        <div class="md:absolute inset-0 flex md:bg-black md:bg-opacity-40 md:z-10">
            <div class="text-white p-4 md:ml-36 md:mt-36 md:z-30 md:relative">
                <div class="md:relative md:z-40 order-1">
                    <img src="storage/images/test.png" alt="" class="w-48 md:w-96">
                    <p class="text-white md:truncate md:animate-typing font-bold text-lg md:text-2xl mt-8 md:mt-16 w-full md:w-2/5">
                        Maak kennis met SDG: het instituut dat jouw bedrijf helpt verduurzamen.
                    </p>
                    <p class="text-white font-medium text-md md:text-xl mt-4 w-full md:w-2/5">
                        Samen bouwen we aan een toekomstbestendige wereld. Ontdek hoe onze expertise jouw organisatie kan transformeren met duurzame oplossingen die impact maken. Start vandaag nog de reis naar een duurzamere toekomst.
                    </p>
                    <a href="#17sdg" class="text-white font-bold md:text-4xl mt-8 md:mt-16 flex items-center">
                        <i class="fas fa-arrow-down ml-2 text-4xl animate-bounce"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 id="17sdg" class="text-lazurite text-4xl font-semibold tracking-tight sm:text-5xl text-center my-8">
    Dit zijn de <span class="text-[#ff9f1b] font-bold">17</span> SDG's!
</h2>
<p class="text-gray-900 text-center mb-8 text-xl">
    <span class="text-[#ff9f1b] font-semibold">Scroll</span> over één van de doelen voor meer informatie.
</p>

@livewire('carousel')

<div class="mt-4 px-6 py-24 sm:px-6 sm:py-32 lg:px-8 bg-gradient-to-r from-gray-50 to-gray-100" id="media">
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-lazurite text-4xl font-semibold tracking-tight sm:text-5xl">Ontdek onze media</h2>
        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">Verken onze <span class="text-[#ff9f1b] font-semibold">foto bibliotheek</span> en blijf op de hoogte van het laatste <span class="text-[#ff9f1b] font-semibold">nieuws</span> en updates.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ route('gallery') }}" class="rounded-md bg-lazurite px-6 py-3 text-sm font-semibold text-white shadow-lg transition-transform hover:scale-105">Foto bibliotheek</a>
            <a href="{{ route('news') }}" class="rounded-md bg-lazurite px-6 py-3 text-sm font-semibold text-white shadow-lg transition-transform hover:scale-105">Nieuwsberichten</a>
        </div>
    </div>
</div>


@livewire('calender')

<div class="bg-white" x-data="{ openFaq: null }" id="faq">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-16 lg:px-8 lg:py-16">
        <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
            <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Veel gestelde vragen</h2>
            <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                <div class="pt-6" x-data="{ open: false }">
                    <dt>
                        <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" @click="open = !open" aria-controls="faq-0" :aria-expanded="open">
                            <span class="text-base/7 font-semibold">Wat is een predicaat?</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': !open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-0" x-show="open">
                        <p class="text-base/7 text-gray-600">Een predicaat is een erkenning die wordt gegeven aan landen, bedrijven of organisaties die aanzienlijke vooruitgang boeken in het behalen van de Duurzame Ontwikkelingsdoelen (SDG's). Het wordt gebruikt om uitmuntende prestaties te waarderen op het gebied van duurzaamheid en dient als motivatie voor anderen om ook bij te dragen aan een duurzamere wereld.</p>
                    </dd>
                </div>

                <div class="pt-6" x-data="{ open: false }">
                    <dt>
                        <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" @click="open = !open" aria-controls="faq-1" :aria-expanded="open">
                            <span class="text-base/7 font-semibold">Wat kost een predicaat?</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': !open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-1" x-show="open">
                        <p class="text-base/7 text-gray-600">Het verkrijgen van een predicaat voor de Duurzame Ontwikkelingsdoelen (SDG's) is doorgaans gratis, maar het kan wel kosten met zich meebrengen voor de inspanningen die nodig zijn om de vereiste duurzaamheidsdoelen te bereiken. Dit omvat investeringen in duurzame technologieën, rapportages, certificeringen en het implementeren van initiatieven die bijdragen aan de SDG's.</p>
                    </dd>
                </div>

                <div class="pt-6" x-data="{ open: false }">
                    <dt>
                        <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" @click="open = !open" aria-controls="faq-2" :aria-expanded="open">
                            <span class="text-base/7 font-semibold">Wat is een SDG?</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': !open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-2" x-show="open">
                        <p class="text-base/7 text-gray-600">SDG staat voor Sustainable Development Goals (Duurzame Ontwikkelingsdoelen). Dit zijn 17 wereldwijde doelen, vastgesteld door de Verenigde Naties, die gericht zijn op het bevorderen van een duurzamere, rechtvaardigere en welvarendere wereld voor iedereen. De SDG's behandelen verschillende thema's, zoals armoedebestrijding, gezondheid, onderwijs, gelijkheid en klimaatactie, en moeten in 2030 wereldwijd worden bereikt.</p>
                    </dd>
                </div>

                <div class="pt-6" x-data="{ open: false }">
                    <dt>
                        <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" @click="open = !open" aria-controls="faq-3" :aria-expanded="open">
                            <span class="text-base/7 font-semibold">Hoe doe ik mee?</span>
                            <span class="ml-6 flex h-7 items-center">
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                </svg>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" :class="{ 'hidden': !open }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
                            </span>
                        </button>
                    </dt>
                    <dd class="mt-2 pr-12" id="faq-3" x-show="open">
                        <p class="text-base/7 text-gray-600">Je kunt meedoen aan het bereiken van de SDG's door je dagelijks gedrag en keuzes duurzamer te maken. Dit kan variëren van het verminderen van je energieverbruik, het ondersteunen van duurzame bedrijven, tot vrijwilligerswerk voor organisaties die zich inzetten voor de SDG's. Ook kun je bewustzijn creëren door anderen te informeren en te inspireren om bij te dragen aan een duurzamere toekomst.</p>
                    </dd>
                </div>

            </dl>
        </div>
    </div>
</div>

<div class="bg-lazurite py-8 sm:py-8 mt-6" id="diensten">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mt-2 grid gap-6 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2 hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="absolute inset-px bg-[#fdbe00] rounded-xl shadow-lg"></div>
                <div class="relative flex h-full flex-col overflow-hidden bg-[#fdbe00] rounded-xl shadow-md backdrop-blur-md transition-shadow duration-300 ease-in-out hover:shadow-2xl">
                    <div class="px-6 pb-4 pt-8 sm:px-8">
                        <h3 class="text-xl font-bold text-white"><i class="fa-solid fa-clipboard-list"></i> Predicaten</h3>
                        <p class="mt-2 text-base text-white">
                            SDG biedt predicaten aan voor organisaties die uitblinken in duurzaamheid en maatschappelijke verantwoordelijkheid. Ontdek hoe je deze kunt behalen!
                        </p>
                        <div class="flex mt-auto">
                            <a href="#contact" class="mt-12 inline-block bg-white text-[#fdbe00] font-bold py-2 px-4 rounded-full text-center transition-transform duration-300 ease-in-out hover:scale-105">
                                Vraag predicaat aan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="absolute inset-px bg-[#00a000] rounded-xl shadow-lg"></div>
                <div class="relative flex h-full flex-col overflow-hidden bg-[#00a000] text-white rounded-xl shadow-md backdrop-blur-md transition-shadow duration-300 ease-in-out hover:shadow-2xl">
                    <div class="px-6 pt-8 sm:px-8">
                        <h3 class="text-xl font-bold"><i class="fa-solid fa-calendar-days"></i> Verhuur</h3>
                        <p class="mt-2 text-base">
                            Huur duurzame materialen zoals presentatiemateriaal voor jouw evenementen en bijeenkomsten.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative hover:scale-105 transition-transform duration-300 ease-in-out lg:col-start-2 lg:row-start-2">
                <div class="absolute inset-px bg-crimson text-whit rounded-xl shadow-lg"></div>
                <div class="relative flex h-full flex-col overflow-hidden bg-crimson rounded-xl shadow-md backdrop-blur-md transition-shadow duration-300 ease-in-out hover:shadow-2xl">
                    <div class="p-8 sm:px-8">
                        <h3 class="text-xl font-bold text-white"><i class="fa-solid fa-handshake"></i> Uitleenservice</h3>
                        <p class="mt-2 text-base text-white">
                            Leen handige materialen voor jouw organisatie en draag bij aan een bewuste omgang met resources.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative lg:row-span-2 hover:scale-105 transition-transform duration-300 ease-in-out">
                <div class="absolute inset-px bg-deepsky rounded-xl shadow-lg"></div>
                <div class="relative flex h-full flex-col overflow-hidden bg-deepsky rounded-xl shadow-md backdrop-blur-md transition-shadow duration-300 ease-in-out hover:shadow-2xl">
                    <div class="px-6 pb-4 pt-8 sm:px-8">
                        <h3 class="text-xl font-bold text-white"><i class="fa-solid fa-screwdriver-wrench"></i> Workshops</h3>
                        <p class="mt-2 text-base text-white">
                            Neem deel aan inspirerende workshops over duurzame ontwikkeling en maatschappelijke betrokkenheid.
                        </p>
                        <div class="flex mt-auto">
                            <a href="#contact" class="mt-24 inline-block bg-white text-deepsky font-bold py-2 px-4 rounded-full text-center transition-transform duration-300 ease-in-out hover:scale-105">
                                Neem contact op!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-my-2">
    <path fill="#19486A" fill-opacity="1" d="M0,128L21.8,112C43.6,96,87,64,131,48C174.5,32,218,32,262,53.3C305.5,75,349,117,393,128C436.4,139,480,117,524,133.3C567.3,149,611,203,655,202.7C698.2,203,742,149,785,160C829.1,171,873,245,916,272C960,299,1004,277,1047,234.7C1090.9,192,1135,128,1178,112C1221.8,96,1265,128,1309,128C1352.7,128,1396,96,1418,80L1440,64L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
</svg>

<x-contact />

<div class="mx-auto max-w-2xl text-center mt-8">
    <hgroup>
        <p class="mt-2 text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Denk aan de <br>toekomst, gebruik
        <p class="mt-2 text-balance text-4xl font-bold tracking-tight text-[#ff9f1b] sm:text-5xl">SDG Plein 17</p>
    </hgroup>
    <div class="mt-8 flex justify-center">
        <a href="#" class="rounded-md bg-lazurite px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-lazurite focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lazurite">Meer informatie</a>
    </div>
</div>

<style>
    .flip-card-container {
        perspective: 1000px;
    }

    .flip-card {
        transform-style: preserve-3d;
        transition: transform 0.6s;
    }

    .flip-card:hover {
        transform: rotateY(180deg);
        animation-play-state: paused;
    }

    .flip-card-front,
    .flip-card-back {
        backface-visibility: hidden;
    }

    .flip-card-front {
        z-index: 2;
    }

    .flip-card-back {
        transform: rotateY(180deg);
    }

    .flip-card-container:hover .flip-card {
        transform: rotateY(180deg);
        animation-play-state: paused;
    }
</style>

<script>
    function enterWorkshop(workshop, userid) {
        axios.post(`/api/workshops/enter/${workshop}/${userid}`)
            .then(response => {
                console.log(response.data);
            })
            .catch(error => {
                console.error('There was an error!', error.response?.data || error.message);
            });
    }
</script>

@endsection