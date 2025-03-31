@extends('layouts.guest')

@section('content')
<div class="bg-white">
    <section>
        <div class="bg-white py-16">
            <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
                <div class="mx-auto max-w-2xl">
                    <h2 class="text-34l text-balance font-semibold tracking-tight text-gray-900 sm:text-5xl">Ontdek ons team!</h2>
                    <p class="mt-6 text-lg/8 text-gray-600">Wij zijn een dynamische groep individuen die gepassioneerd zijn over wat we doen en toegewijd zijn aan het leveren van de beste resultaten voor onze klanten.</p>
                </div>
                <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <li>
                        <img class="mx-auto size-56 rounded-full object-cover" src="{{ asset('storage/images/celia.jpg') }}" alt="">
                        <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900">Celia Koetze</h3>
                        <p class="text-sm/6 text-gray-600">Bestuur</p>
                        <div class="accordion-placeholder">
                            <div class="pt-4" x-data="{ open: false }">
                                <dt>
                                    <button type="button" class="flex w-full items-center justify-center text-left text-gray-900" @click="open = !open" aria-controls="faq-0" :aria-expanded="open">
                                        <span class="text-base/7 font-semibold">Lees meer over mij.</span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12 text-left" id="faq-0" x-show="open">
                                    <p class="text-base/7 text-gray-600">Celia Koetze werkt al 14 jaar bij de Politie. Ze begon als hoofd Facilitymanagement in de eenheid Oost-Nederland en was daarna 8 jaar Relatiemanager binnen het facilitaire werkveld voor verschillende eenheden. De afgelopen 2 jaar richt ze zich op de Politieacademie. In haar rol komt ze veel in aanraking met duurzaamheidsvraagstukken, de bijbehorende complexiteit, en inspirerende initiatieven op dit gebied. Haar mede-bestuursleden, die actief bijdragen aan verduurzaming, motiveren haar om naast haar fulltime baan hieraan mee te werken. Als secretaris en penningmeester in het bestuur zet ze zich graag in voor een duurzamere wereld.</p>
                                </dd>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img class="mx-auto size-56 rounded-full object-cover" src="{{ asset('storage/images/mark.jpg') }}" alt="">
                        <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900">Mark ter Maat</h3>
                        <p class="text-sm/6 text-gray-600">Bestuur</p>
                        <div class="accordion-placeholder">
                            <div class="pt-4" x-data="{ open: false }">
                                <dt>
                                    <button type="button" class="flex w-full items-center justify-center text-left text-gray-900" @click="open = !open" aria-controls="faq-1" :aria-expanded="open">
                                        <span class="text-base/7 font-semibold">Lees meer over mij.</span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12 text-left" id="faq-1" x-show="open">
                                    <p class="text-base/7 text-gray-600">Eigenaar van Koffiebranderij Koffielust in Veenhuizen, waar koffie elektrisch wordt geroosterd in een van de gevangenissen. Sinds 2015 gevestigd in dit dorp met een rijke historie, en vanaf 2019 via DJI (Peter Holtrop) bewust van onze bijdrage aan de SDG-doelen. We richten ons op ecologische en sociale duurzaamheid, zoals koffie roosteren met gedetineerden en circulair ondernemen door hergebruik van materialen.

                                        Met de overtuiging dat samenwerking meer mogelijk maakt, heeft ons bestuur de uitdaging aangenomen om bedrijven te verbinden en duurzaam ondernemen te bevorderen. Onze stichting “SDG Plein 17” is opgericht als ontmoetingsplek waar bedrijven, onderwijs en overheden in Noord-Nederland samenkomen om duurzaamheid rondom de SDG-doelen te versterken.</p>
                                </dd>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img class="mx-auto size-56 rounded-full object-cover" src="{{ asset('storage/images/peter.jpg') }}" alt="">
                        <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900">Peter Holtrop</h3>
                        <p class="text-sm/6 text-gray-600">Bestuur</p>
                        <div class="accordion-placeholder">
                            <div class="pt-4" x-data="{ open: false }">
                                <dt>
                                    <button type="button" class="flex w-full items-center justify-center text-left text-gray-900" @click="open = !open" aria-controls="faq-2" :aria-expanded="open">
                                        <span class="text-base/7 font-semibold">Lees meer over mij.</span>
                                    </button>
                                </dt>
                                <dd class="mt-2 pr-12 text-left" id="faq-2" x-show="open">
                                    <p class="text-base/7 text-gray-600">Ik ben Peter Holtrop: enthousiast, doelgericht en een doorzetter. Al jaren werk ik bij Dienst Justitiële Inrichtingen, waarvan de laatste 8 jaar als manager Duurzaam Inventaris Beheer. Duurzaamheid en duurzame inzetbaarheid staan centraal in mijn werk. In 2022 werd mijn inzet beloond met een SDG Predicaat en de eerste SDG Award, een bevestiging dat ik op de juiste weg zit.

                                        Dit motiveerde mij om mij verder in te zetten voor de SDG’s. Ik (mede)organiseerde twee keer de Experience Duurzaamheid, waar DJI en het bedrijfsleven hun duurzame initiatieven presenteerden. Tijdens deze bijeenkomsten werden SDG-predicaten uitgereikt, die voor de ontvangers grote waarde hebben.

                                        Om de SDG-predicaten te borgen, heb ik samen met anderen SDG House Plein 17 opgericht, waar ik nu de rol van voorzitter vervul.</p>
                                </dd>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section>
        <div class="bg-gray-50 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0 hover:scale-105 ease-in-out duration-500">
                    <h2 class="text-4xl font-semibold tracking-tight text-green-700 sm:text-5xl">Samen voor de SDG's</h2>
                    <p class="mt-6 text-lg text-gray-600">
                        SDG Plein 17 is dé plek waar mensen, organisaties en overheden samenwerken aan de Duurzame Ontwikkelingsdoelen.
                        Met een focus op partnerschappen (SDG 17) verbinden we initiatieven, delen we kennis en versnellen we duurzame acties. Hier komen ideeën tot leven en werken we samen aan een betere toekomst voor iedereen.
                    </p>
                </div>

                <div class="mx-auto mt-16 grid grid-cols-1 gap-8 lg:mx-0 lg:mt-20 lg:grid-cols-3">
                    <div class="flex flex-col justify-between rounded-2xl bg-green-100 p-8 hover:scale-105 ease-in-out duration-500">
                        <p class="text-3xl font-bold tracking-tight text-green-800">300+</p>
                        <div>
                            <p class="text-lg font-semibold tracking-tight text-green-800">Samenwerkingen gestart</p>
                            <p class="mt-2 text-base text-gray-600">Meer dan 300 organisaties hebben samengewerkt aan duurzame projecten.</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between rounded-2xl bg-green-700 p-8 hover:scale-105 ease-in-out duration-500">
                        <p class="text-3xl font-bold tracking-tight text-white">17 doelen</p>
                        <div>
                            <p class="text-lg font-semibold tracking-tight text-white">Focus op SDG 17</p>
                            <p class="mt-2 text-base text-green-200">We bouwen bruggen tussen overheden, bedrijven en burgers om alle SDG's te bereiken.</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between rounded-2xl bg-indigo-600 p-8 hover:scale-105 ease-in-out duration-500">
                        <p class="text-3xl font-bold tracking-tight text-white">500,000+</p>
                        <div>
                            <p class="text-lg font-semibold tracking-tight text-white">Mensen bereikt</p>
                            <p class="mt-2 text-base text-indigo-200">Via evenementen, campagnes en projecten hebben we een groot publiek geïnspireerd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-white">
            <div class="px-6 py-8 sm:px-6 sm:py-8 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Word vrijwilliger bij SDG Nederland</h2>
                    <p class="mx-auto mt-6 max-w-xl text-pretty text-lg/8 text-gray-600">Sluit je aan bij ons team van vrijwilligers en draag bij aan een duurzame toekomst. Samen kunnen we de Duurzame Ontwikkelingsdoelen bereiken.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="mailto:info@sdgnederland.nl" class="rounded-md bg-lazurite px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:scale-105 ease-in-out duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Meld je aan!</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection