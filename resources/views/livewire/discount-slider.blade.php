<div>
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

    >
        <div class="swiper-container " x-ref="container">
            <div class="swiper-wrapper">
                <!-- Slides -->

                @foreach($discounts as $discount)
                <div class="swiper-slide">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0">
                            <a href="{{route('showPrekeDiscount', $discount->id)}}">
                            <img class="h-32 w-full object-cover" src="{{asset('storage/products/'.$discount->photo)}}" alt="">
                            <figcaption class="absolute text-2xl -mt-22 text-white w-full">
                                <div class="bg-green-700 text-center rounded">
                                    <h1 class="">{{$discount->discount_price}}&euro;</h1>
                                </div>
                            </figcaption>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
    </div>

        </div>
    </div>
</div>
