<x-app-layout>
    <div class=" relative overflow-hidden  max-w-screen h-screen w-auto">

{{--        <img src="{{asset('/images/tvora4.jpg')}}" class="w-screen h-screen opacity-70" />--}}
        @include('components.carousel')
        <div class="absolute   top-1/2 w-full z-20">
        <img src="{{asset('/images/logoTvora.svg')}}"  class="text-center m-auto h-40"/>
        <h2 class="text-white text-center text-5xl z-20 font-serif">Tvorūna</h2>
            <h4 class="text-white text-center text-3xl z-20">Jūsų namo karūna</h4>
        </div>

    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:repairs/>
                    <livewire:installation/>
                    @include('components.recentjobs')
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

