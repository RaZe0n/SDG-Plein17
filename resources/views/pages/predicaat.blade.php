@extends('layouts.guest')

@section('content')
<div class="bg-white">
  <header class="absolute inset-x-0 top-0 z-50">
    <div class="mx-auto max-w-7xl">
      <div class="px-6 pt-6 lg:max-w-2xl lg:pl-8 lg:pr-0">
      </div>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="relative">
    <div class="mx-auto max-w-7xl">
      <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
        <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="0,0 90,0 50,100 0,100" />
        </svg>

        <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
          <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
            <div class="hidden sm:mb-10 sm:flex">
              <!-- <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-500 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Anim aute id magna aliqua ad ad non deserunt sunt. <a href="#" class="whitespace-nowrap font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
              </div> -->
            </div>
            <h1 class="text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Bouw mee aan een betere <span class="text-green-700">wereld</span></h1>
            <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Denk aan de <span class="text-orange-500 font-bold">natuur</span>, denk aan de <span class="text-orange-500 font-bold">toekomst</span> – vraag een van de predicaten aan en maak het verschil!</p>
            <div class="mt-10 flex items-center gap-x-6">
              <a href="#" class="rounded-md bg-lazurite px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Predicaat aanvragen</a>
              <a href="#" class="text-sm/6 font-semibold text-gray-900">Ik heb nog wat vragen <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="aspect-[3/2] object-cover lg:aspect-auto lg:size-full" src="storage/images/P17_GIF.gif" alt="">
    </div>
  </div>
</div>

<h1 class="text-center text-5xl mt-10 p-4 font-semibold tracking-tight text-gray-900 sm:text-5xl">Recent uitgegeven predicaten</h1>
<p class="mt-2 text-center text-lg font-medium text-gray-500 sm:text-xl/8">Bekijk hier de meest recent uitgegeven predicaten en ontdek hoe jij het verschil kunt maken.</p>

<div class="container mx-auto mt-2 grid auto-rows-fr grid-cols-1 gap-8 sm:mt-10 lg:grid-cols-3 p-8">
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
          SDG 2
        </div>
      </div>
    </div>
    <h3 class="mt-3 text-lg/6 font-semibold text-white">
      <a href="#">
        <span class="absolute inset-0"></span>
        Bedrijf
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
          SDG
        </div>
      </div>
    </div>
    <h3 class="mt-3 text-lg/6 font-semibold text-white">
      <a href="#">
        <span class="absolute inset-0"></span>
        Bedrijf
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
          SDG
        </div>
      </div>
    </div>
    <h3 class="mt-3 text-lg/6 font-semibold text-white">
      <a href="#">
        <span class="absolute inset-0"></span>
        Bedrijf
      </a>
    </h3>
    <p class="mt-2 text-sm text-gray-300">
      De urgentie van klimaatverandering aanpakken door mitigatie- en adaptatiestrategieën wereldwijd te bevorderen.
    </p>
  </article>
</div>
<h1 class="text-center text-5xl mt-10 p-4 font-semibold tracking-tight text-gray-900 sm:text-5xl">Predicaat aanvragen</h1>
<p class="mt-2 text-center text-lg font-medium text-gray-500 sm:text-xl/8">Hieronder vind je het forumulier voor het aanvragen van een predicaat.</p>
<form action="{{ route('predicaat.sent') }}" method="post">
  @csrf
  <div class="flex justify-center py-10">
    <div class="w-full max-w-4xl">
      <div id="form-step-1">
        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
          <div class="px-4 py-6 sm:p-8">
            <h1 class="text-2xl font-semibold tracking-tight text-lazurite mb-2">Persoonsgegevens</h1>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Voornaam</label>
                <div class="mt-2">
                  <input type="text" name="firstname" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Achternaam</label>
                <div class="mt-2">
                  <input type="text" name="lastname" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email adres</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="contact-person" class="block text-sm/6 font-medium text-gray-900">Contactpersoon</label>
                <div class="mt-2">
                  <input type="text" name="contactperson" id="contact-person" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="col-span-full">
                <hr class="border-t border-gray-300">
              </div>
              <div class="sm:col-span-3">
                <label for="companyname" class="block text-sm/6 font-medium text-gray-900">Bedrijfsnaam</label>
                <div class="mt-2">
                  <input type="text" name="company" id="companyname" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="sm:col-span-3">
                <label for="sector" class="block text-sm/6 font-medium text-gray-900">Sector</label>
                <div class="mt-2 grid grid-cols-1">
                  <select id="sector" name="sector" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <option value="ict">ICT</option>
                    <option value="sector2">Sector2</option>
                    <option value="sector3">Sector3</option>
                    <option value="sector4">Sector4</option>
                    <option value="sector5">Sector5</option>
                  </select>
                </div>
              </div>
              <div class="col-span-4">
                <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Straatnaam + Huisnummer</label>
                <div class="mt-2">
                  <input type="text" name="street" id="street-address" autocomplete="street-address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="postal-code" class="block text-sm/6 font-medium text-gray-900">Postcode</label>
                <div class="mt-2">
                  <input type="text" name="postalcode" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm/6 font-medium text-gray-900">Stad</label>
                <div class="mt-2">
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="region" class="block text-sm/6 font-medium text-gray-900">Provincie</label>
                <div class="mt-2">
                  <input type="text" name="province" id="region" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <nav aria-label="Progress">
              <ol role="list" class="space-y-4 mt-4 md:flex md:space-x-8 md:space-y-0">
                <li class="md:flex-1">
                  <a href="#" class="group flex flex-col border-l-4 border-lazurite py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                    <span class="text-sm font-medium text-lazurite">Stap 1</span>
                    <span class="text-sm font-medium">Persoonsgegevens</span>
                  </a>
                </li>
                <li class="md:flex-1">
                  <a href="#" class="flex flex-col border-l-4 border-gray-200 py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4" aria-current="step">
                    <span class="text-sm font-medium text-gray-500">Stap 2</span>
                    <span class="text-sm font-medium">Predicaat</span>
                  </a>
                </li>
                <li class="md:flex-1">
                  <a href="#" class="group flex flex-col border-l-4 border-gray-200 py-2 pl-4 hover:border-gray-300 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                    <span class="text-sm font-medium text-gray-500 group-hover:text-gray-700">Stap 3</span>
                    <span class="text-sm font-medium">Overzicht</span>
                  </a>
                </li>
              </ol>
            </nav>
            <div class="flex items-start justify-end gap-x-6 mt-4 w-full">
              <button type="button" onclick="showStep2()" class="float-right rounded-md bg-lazurite px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Volgende</button>
            </div>
          </div>
        </div>
      </div>

      <div id="form-step-2" style="display: none;">
        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
          <div class="px-4 py-6 sm:p-8">
            <h1 class="text-2xl font-semibold tracking-tight text-lazurite mb-2">Predicaat formulier</h1>
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Betrokkenheid bij de samenleving</h2>
                <label for="involvement" class="block text-sm/6 font-medium text-gray-900">Welke activiteiten onderneemt uw bedrijf/organisatie om actief bij te dragen aan een betere samenleving?</label>
                <div class="mt-2">
                  <textarea placeholder="Geef een gedetailleerde beschrijving van uw betrokkenheid bij sociale, maatschappelijke of milieugerichte activiteiten." name="involvement" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Bewustwording over duurzaamheid en SDG's</h2>
                <label for="acknowledge" class="block text-sm/6 font-medium text-gray-900">Welke inspanningen heeft uw bedrijf geleverd om bewustzijn te vergroten over duurzaamheidskwesties en de Duurzame Ontwikkelingsdoelen (SDG's)?</label>
                <div class="mt-2">
                  <textarea placeholder="Geef voorbeelden van campagnes, workshops, of andere initiatieven die gericht zijn op het vergroten van bewustwording." name="acknowledge" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Concrete kleine stappen voor duurzaamheid</h2>
                <label for="steps" class="block text-sm/6 font-medium text-gray-900">Welke kleine, concrete stappen heeft uw organisatie ondernomen om duurzaamheid te bevorderen?</label>
                <div class="mt-2">
                  <textarea placeholder="Beschrijf specifieke acties (bijvoorbeeld energiebesparing, afvalreductie, duurzame inkoop) en de impact ervan." name="steps" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Positieve impact op gemeenschap en milieu</h2>
                <label for="impact" class="block text-sm/6 font-medium text-gray-900">Hoe heeft uw organisatie een positieve impact gehad op de lokale gemeenschap of het milieu?</label>
                <div class="mt-2">
                  <textarea placeholder="Geef concrete voorbeelden en, indien mogelijk, meetbare resultaten van deze impact." name="impact" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Samenwerking om duurzaamheid te versterken</h2>
                <label for="collab" class="block text-sm/6 font-medium text-gray-900">Heeft uw organisatie samengewerkt met andere bedrijven, organisaties of gemeenschappen om de impact te vergroten?</label>
                <div class="mt-2">
                  <textarea placeholder="Beschrijf samenwerkingsverbanden en de gezamenlijke resultaten" name="collab" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Transparantie over inspanningen en resultaten</h2>
                <label for="results" class="block text-sm/6 font-medium text-gray-900">Hoe zorgt uw organisatie voor openheid en transparantie over haar duurzaamheidsprestaties?</label>
                <div class="mt-2">
                  <textarea placeholder="Voorzie voorbeelden zoals rapportages, nieuwsbrieven of andere communicatievormen die transparantie waarborgen." name="results" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Inspelen op gemeenschapsbehoeften</h2>
                <label for="play" class="block text-sm/6 font-medium text-gray-900">Hoe draagt uw bedrijf bij aan het invullen van lokale gemeenschapsbehoeften en -ontwikkeling?</label>
                <div class="mt-2">
                  <textarea placeholder="Geef specifieke voorbeelden van initiatieven of projecten die aansluiten bij de behoeften van de gemeenschap." name="play" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
              <div class="sm:col-span-6">
                <h2 class="font-semibold">Trots en erkenning voor SDG-inspanningen</h2>
                <label for="proud" class="block text-sm/6 font-medium text-gray-900">Hoe toont uw organisatie trots op haar bijdrage aan de SDG’s en erkent zij deze bijdrage, zowel intern als extern?</label>
                <div class="mt-2">
                  <textarea placeholder="Beschrijf hoe prestaties worden gevierd, erkend en gedeeld met medewerkers, klanten en andere belanghebbenden." name="proud" id="" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <nav aria-label="Progress">
              <ol role="list" class="space-y-4 mt-4 md:flex md:space-x-8 md:space-y-0">
                <li class="md:flex-1">
                  <a href="#" class="group flex flex-col border-l-4 border-green-600 py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                    <span class="text-sm font-medium text-gray-500">Stap 1</span>
                    <span class="text-sm font-medium">Persoonsgegevens</span>
                  </a>
                </li>
                <li class="md:flex-1">
                  <a href="#" class="flex flex-col border-l-4 border-lazurite py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4" aria-current="step">
                    <span class="text-sm font-medium text-lazurite">Stap 2</span>
                    <span class="text-sm font-medium">Predicaat</span>
                  </a>
                </li>
                <li class="md:flex-1">
                  <a href="#" class="group flex flex-col border-l-4 border-gray-200 py-2 pl-4 hover:border-gray-300 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                    <span class="text-sm font-medium text-gray-500 group-hover:text-gray-700">Stap 3</span>
                    <span class="text-sm font-medium">Overzicht</span>
                  </a>
                </li>
              </ol>
            </nav>
            <div class="flex items-start justify-end gap-x-6 mt-4 w-full">
              <button type="button" onclick="showStep1()" class="float-left rounded-md bg-gray-200 px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Terug</button>
              <button type="button" onclick="showStep3()" class="float-right rounded-md bg-lazurite px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Volgende</button>
            </div>
          </div>
        </div>
      </div>

      <div id="form-step-3" style="display: none;">
        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl">
          <div class="px-4 py-6 sm:p-8">
            <div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl p-6 text-center">
              <h2 class="text-2xl font-semibold text-green-600 mb-4">Bedankt voor uw aanvraag!</h2>
              <p class="text-lg text-gray-700">We waarderen uw tijd en moeite om het formulier in te vullen. Uw aanvraag zal na het versturen via de knop beneden succesvol worden ontvangen en we zullen deze zo spoedig mogelijk verwerken.</p>
              <p class="mt-4 text-gray-500">Vergeet niet het formulier nog te versturen via de knop beneden!</p>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <nav aria-label="Progress">
              <ol role="list" class="space-y-4 mt-4 md:flex md:space-x-8 md:space-y-0">
                <li class="md:flex-1">
                  <a href="#" class="group flex flex-col border-l-4 border-green-600 py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                    <span class="text-sm font-medium text-gray-500">Stap 1</span>
                    <span class="text-sm font-medium">Persoonsgegevens</span>
                  </a>
                </li>
                <li class="md:flex-1">
                  <a href="#" class="flex flex-col border-l-4 border-green-600 py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4">
                    <span class="text-sm font-medium text-gray-500">Stap 2</span>
                    <span class="text-sm font-medium">Predicaat</span>
                  </a>
                </li>
                <li class="md:flex-1">
                  <a href="#" class="group flex flex-col border-l-4 border-lazurite py-2 pl-4 md:border-l-0 md:border-t-4 md:pb-0 md:pl-0 md:pt-4" aria-current="step">
                    <span class="text-sm font-medium text-lazurite">Stap 3</span>
                    <span class="text-sm font-medium">Overzicht</span>
                  </a>
                </li>
              </ol>
            </nav>
            <div class="flex items-start justify-end gap-x-6 mt-4 w-full">
              <button type="button" onclick="showStep2()" class="float-left rounded-md bg-gray-200 px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Terug</button>
              <button type="submit" class="float-right rounded-md bg-lazurite px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Aanvragen</button>
            </div>
          </div>
        </div>
      </div>
      <script>
        function showStep1() {
          document.getElementById('form-step-1').style.display = 'block';
          document.getElementById('form-step-2').style.display = 'none';
          document.getElementById('form-step-3').style.display = 'none';
        }

        function showStep2() {
          document.getElementById('form-step-1').style.display = 'none';
          document.getElementById('form-step-2').style.display = 'block';
          document.getElementById('form-step-3').style.display = 'none';
        }

        function showStep3() {
          document.getElementById('form-step-1').style.display = 'none';
          document.getElementById('form-step-2').style.display = 'none';
          document.getElementById('form-step-3').style.display = 'block';
        }

        // Removed event listener that hides all steps
      </script>


    </div>
  </div>
  <div class="bg-white" x-data="{ openFaq: null }" id="faq">
    <div class="mx-auto max-w-7xl px-6 py-24 sm:py-16 lg:px-8 lg:py-16">
      <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
        <h2 class="text-4xl font-semibold  text-center tracking-tight text-gray-900 sm:text-5xl">Veel gestelde vragen</h2>
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
</form>
</div>
@endsection