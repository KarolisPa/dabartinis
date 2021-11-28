<div x-data="{swiper: null}"
     x-init="swiper = new Swiper($refs.container, {
      loop: true,
      autoplay:{
      delay: 0,
      },
      speed:4000,
      slidesPerView: 2,
      spaceBetween: 20,
      breakpoints: {
      1080: {
      slidesPerView: 4,
      spaceBetween: 30,
      }
      }
    })"
{{--     class="w-full flex flex-row"--}}
>
    {{--                        <div class="absolute inset-y-0 left-0 z-10 flex items-center">--}}
    {{--                            <button @click="swiper.slidePrev()"--}}
    {{--                                    class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">--}}
    {{--                                <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}

    <div class="swiper-container" x-ref="container">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-32 w-full object-cover" src="{{asset('/images/tvora1.jpg')}}" alt="">
                                                <figcaption class="absolute text-lg -mt-16 text-white px-4 w-full">
                                                    <div class="">
                                                        <h1 class="text-2xl">400&euro;</h1>
                                                    </div>
                                                    <div>
                                                        <h1><del>450&euro;</del></h1>
                                                    </div>
                                                    </figcaption>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-32 w-full object-cover" src="{{asset('/images/tvora2.jpg')}}" alt="">
                        <figcaption class="absolute text-lg -mt-16 text-white px-4 w-full">
                            <div class="">
                                <h1 class="text-2xl">400&euro;</h1>
                            </div>
                            <div>
                                <h1><del>450&euro;</del></h1>
                            </div>
                        </figcaption>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-32 w-full object-cover" src="{{asset('/images/tvora3.jpg')}}" alt="">
                        <figcaption class="absolute text-lg -mt-16 text-white px-4 w-full">
                            <div class="">
                                <h1 class="text-2xl">400&euro;</h1>
                            </div>
                            <div>
                                <h1><del>450&euro;</del></h1>
                            </div>
                        </figcaption>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-32 w-full object-cover" src="{{asset('/images/tvora4.jpg')}}" alt="">
                        <figcaption class="absolute text-lg -mt-16 text-white px-4 w-full">
                            <div class="">
                                <h1 class="text-2xl">400&euro;</h1>
                            </div>
                            <div>
                                <h1><del>450&euro;</del></h1>
                            </div>
                        </figcaption>
                    </div>
                </div>
            </div>



        </div>
    </div>

    {{--                        <div class="absolute inset-y-0 right-0 z-10 flex items-center">--}}
    {{--                            <button @click="swiper.slideNext()"--}}
    {{--                                    class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">--}}
    {{--                                <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
</div>


