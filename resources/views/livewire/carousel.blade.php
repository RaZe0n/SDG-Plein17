@php
$sdgs = [
'Geen Armoede', 'Geen Honger', 'Goede Gezondheid en Welzijn', 'Kwaliteitsonderwijs',
'Gendergelijkheid', 'Schoon Water en Sanitair', 'Betaalbare en Schone Energie',
'Waardig Werk en Economische Groei', 'Industrie, Innovatie en Infrastructuur',
'Minder Ongelijkheid', 'Duurzame Steden en Gemeenschappen',
'Verantwoorde Consumptie en Productie', 'Klimaatactie', 'Leven in het Water',
'Leven op het Land', 'Vrede, Justitie en Sterke Instellingen', 'Partnerschap om Doelen te Bereiken'
];

$sdgsColors = [
'Geen Armoede' => 'bg-[#ff0000]', 'Geen Honger' => 'bg-[#edaa10]', 'Goede Gezondheid en Welzijn' => 'bg-[#00a000]',
'Kwaliteitsonderwijs' => 'bg-[#da0822]', 'Gendergelijkheid' => 'bg-[#ff4000]', 'Schoon Water en Sanitair' => 'bg-[#00bdff]',
'Betaalbare en Schone Energie' => 'bg-[#fdbe00]', 'Waardig Werk en Economische Groei' => 'bg-[#9f0830]',
'Industrie, Innovatie en Infrastructuur' => 'bg-[#ff6919]', 'Minder Ongelijkheid' => 'bg-[#ff006e]',
'Duurzame Steden en Gemeenschappen' => 'bg-[#ff9f1b]', 'Verantwoorde Consumptie en Productie' => 'bg-[#f59305]',
'Klimaatactie' => 'bg-[#379223]', 'Leven in het Water' => 'bg-[#0d81df]', 'Leven op het Land' => 'bg-[#56c739]',
'Vrede, Justitie en Sterke Instellingen' => 'bg-[#0e559c]', 'Partnerschap om Doelen te Bereiken' => 'bg-[#362397]'
];
@endphp

<div>

    <div class="embla max-w-7xl mx-auto">
        <div class="embla__viewport">
            <div class="embla__container">
                @for ($i = 1; $i <= 17; $i++)
                    <div class="flip-card-container flex-shrink-0 w-64 h-64 mx-4 md:mx-12 p-4 embla__slide">
                    <div class="flip-card w-full h-full relative embla__slide__number">
                        <div class="flip-card-front absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center bg-white rounded-lg">
                            <img src="{{ asset('storage/17-doelen/17-sdg-s-' . $i . '.png') }}" class="w-full h-full object-cover rounded-lg" />
                        </div>
                        <div class="flip-card-back absolute top-0 left-0 right-0 bottom-0 p-8 {{ $sdgsColors[$sdgs[$i - 1]] }} flex items-center justify-center rounded-lg">
                            <h2 class="text-white font-bold text-center text-xl">Doel {{ $i }}: {{ $sdgs[$i - 1] }}</h2>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>
    <div class="embla__controls">
        <div class="embla__buttons flex justify-between space-x-4 m-4">
            <button
                class="embla__button embla__button--prev border-2 border-gray-100 hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 rounded-full shadow-md"
                type="button"
                disabled="">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="embla__play border-2 border-gray-100 hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 rounded-full shadow-md" type="button">
                <i class="fa-solid fa-pause"></i>
            </button>
            <button
                class="embla__button embla__button--next border-2 border-gray-100 hover:bg-gray-100 text-gray-800 font-bold py-2 px-4 rounded-full shadow-md"
                type="button"
                disabled="">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

    </div>

</div>

<style>
    .embla {
        margin: auto;
        --slide-height: 14rem;
        --slide-spacing: 1rem;
        --slide-size: auto;
    }

    .embla__viewport {
        overflow: hidden;
    }

    .embla__container {
        display: flex;
        margin-left: calc(var(--slide-spacing) * -1);
    }

    .embla__slide {
        transform: translate3d(0, 0, 0);
        flex: 0 0 var(--slide-size);
        min-width: 0;
        padding-left: var(--slide-spacing);
    }

    .embla__slide__number {
        box-shadow: inset 0 0 0 0.2rem var(--detail-medium-contrast);
        border-radius: 1.8rem;
        font-size: 4rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        height: var(--slide-height);
        user-select: none;
    }

    @keyframes autoplay-progress {
        0% {
            transform: translate3d(0, 0, 0);
        }

        100% {
            transform: translate3d(100%, 0, 0);
        }
    }
</style>

@assets
@vite('resources/js/embla.js')
@endassets