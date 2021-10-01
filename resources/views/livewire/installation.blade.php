<div>
    <div x-data="{ show: @entangle('show') }" wire:target="toggle()" class="{{$border}} xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-blue-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Montavimo darbai</h2>
        <p class="leading-relaxed text-base mb-4">Atliekame įvairius montavimo darbus</p>
        <button wire:click="toggle()" class="text-indigo-500 inline-flex items-center outline-none focus:outline-none" type="button">Skaityti daugiau
            @if($show)
                <img class="w-4 m-2 top-0.5" src="{{asset('/icons/arrowD.png')}}";/>
            @else
                <img class="w-4 m-2 top-0.5" src="{{asset('/icons/arrowR.png')}}";/>
            @endif
        </button>
        <div>

<div x-show ="show" x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform scale-90"
     x-transition:enter-end="opacity-100 transform scale-100"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="opacity-100 transform scale-100"
     x-transition:leave-end="opacity-0 transform scale-90">
                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2 mt-5">Mes suprantame ką darome</h2>
</div>

        </div>
    </div>
</div>
