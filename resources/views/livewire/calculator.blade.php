<div>

    <!-- Slideshow container -->
    <div class="slideshow-container text-center">


        <!-- Full-width images with number and caption text -->
        <div wire:ignore.self class="mySlides h-full w-full">
            <h1>Pasirinkite Vartelius</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$set('varteliaiSelected', {{0}})" onclick="plusSlides(1)">Vartelių nereikia</button>
            <div class="grid grid-cols-3 gap-3">
               @foreach($varteliai as $vartas)
<div class="border border-2 bg-gray-200 focus-within:bg-yellow-400 focus-within:border-yellow-700">
                        <input wire:ignore type="image" wire:click="$set('varteliaiSelected', {{$vartas->id}})" wire:model="varteliaiSelected" class="object-contain h-32 border border-2 z-10 mt-3 focus:border-yellow-700" alt="nuotrauka" src="{{asset('storage/products/'.$vartas->photo)}}">
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{$vartas->name}}</h2>
                            <p class="mt-1">{{$vartas->price}} €</p>

                        </input>
</div>
                    @endforeach
            </div>

            {{$varteliai->links('components.pagination')}}


            <div class="text-right m-2">
                @if($varteliaiSelected == null)
                    <button  class="disabled:opacity-10 p-2 bg-gray-500 text-white font-bold border-b-4 border-blue-700 rounded">Sekantis žingsnis</button>
                @endif
                @if($varteliaiSelected !== null)
                    <button  class="disabled:opacity-10 p-2 bg-blue-500 hover:bg-blue-400 text-white font-bold border-b-4 border-blue-700 hover:border-blue-500 rounded" onclick="plusSlides(1)">Sekantis žingsnis</button>
                @endif
            </div>
            </div>




        <div  wire:ignore.self class="mySlides w-full h-auto ">
            <h1>Pasirinkite Vartus</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$set('vartaiSelected', {{0}})" onclick="plusSlides(1)">Vartų nereikia</button>
            <div class="grid grid-cols-3">
                @foreach($vartai as $vartasMasina)
                    <div  wire:click="$set('vartaiSelected', {{$vartasMasina->id}})" class="border border-2 bg-gray-200 m-5 focus-within:bg-yellow-400 focus-within:border-yellow-700">
                        <input type="image" wire:model ="vartaiSelected" class="border border-2 z-10 h-32  mt-3 focus:border-yellow-700" alt="nuotrauka" src="{{asset('storage/products/'.$vartasMasina->photo)}}">
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{$vartasMasina->name}}</h2>
                        <p class="mt-1">{{$vartasMasina->price}} €</p>

                        </input>
                    </div>
                @endforeach
            </div>
{{$vartai->links('components.pagination')}}

            <div class="text-right m-2">
                @if($vartaiSelected == null)
                    <button  class="disabled:opacity-10 p-2 bg-gray-500 text-white font-bold border-b-4 border-blue-700 rounded">Sekantis žingsnis</button>
                @endif
                @if($vartaiSelected !== null)
                    <button  class="disabled:opacity-10 p-2 bg-blue-500 hover:bg-blue-400 text-white font-bold border-b-4 border-blue-700 hover:border-blue-500 rounded" onclick="plusSlides(1)">Sekantis žingsnis</button>
                @endif
            </div>
        </div>




        <div  wire:ignore.self class="mySlides w-full h-auto ">
            <h1>Pasirinkite Tvoros tipą</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$set('tvoraSelected', {{0}})" onclick="plusSlides(1)">Tvoros nereikia</button>
            <div class="grid grid-cols-3">
                @foreach($tvoros as $tvora)
                    <div  wire:click="$set('tvoraSelected', {{$tvora->id}})" class="border border-2 bg-gray-200 m-5 focus-within:bg-yellow-400 focus-within:border-yellow-700">
                        <input type="image" wire:model ="vartaiSelected" class="border border-2 z-10 h-32  mt-3 focus:border-yellow-700" alt="nuotrauka" src="{{asset('storage/products/'.$tvora->photo)}}">
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{$tvora->name}}</h2>
                        <p class="mt-1">{{$tvora->price}} €</p>

                        </input>
                    </div>
                @endforeach
            </div>
            {{$tvoros->links('components.pagination')}}

                            <div class="text-right m-2">
                                @if($tvoraSelected == null)
                                    <button  class="disabled:opacity-10 p-2 bg-gray-500 text-white font-bold border-b-4 border-blue-700 rounded">Sekantis žingsnis</button>
                                @endif
                                @if($tvoraSelected !== null)
                                    <button  class="disabled:opacity-10 p-2 bg-blue-500 hover:bg-blue-400 text-white font-bold border-b-4 border-blue-700 hover:border-blue-500 rounded" onclick="plusSlides(1)">Sekantis žingsnis</button>
                                @endif
                            </div>
        </div>

        <div  wire:ignore.self class="mySlides w-full h-auto ">
            <h1>Pasirinkite bokšteli</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$set('boksteliaiSelected', {{0}})" onclick="plusSlides(1)">Bokštelių nereikia</button>
            <div class="grid grid-cols-3">
                @foreach($boksteliai as $bokstelis)
                    <div  wire:click="$set('bokstelisSelected', {{$bokstelis->id}})" class="border border-2 bg-gray-200 m-5 focus-within:bg-yellow-400 focus-within:border-yellow-700">
                        <input type="image" wire:model ="vartaiSelected" class="border border-2 z-10 h-32  mt-3 focus:border-yellow-700" alt="nuotrauka" src="{{asset('storage/products/'.$bokstelis->photo)}}">
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{$bokstelis->name}}</h2>
                        <p class="mt-1">{{$bokstelis->price}} €</p>

                        </input>
                    </div>
                @endforeach
            </div>
            {{$boksteliai->links('components.pagination')}}

            <div class="text-right m-2">
                @if($boksteliaiSelected == null)
                    <button  class="disabled:opacity-10 p-2 bg-gray-500 text-white font-bold border-b-4 border-blue-700 rounded">Sekantis žingsnis</button>
                @endif
                @if($boksteliaiSelected !== null)
                    <button  class="disabled:opacity-10 p-2 bg-blue-500 hover:bg-blue-400 text-white font-bold border-b-4 border-blue-700 hover:border-blue-500 rounded" onclick="plusSlides(1)">Sekantis žingsnis</button>
                @endif
            </div>
        </div>

        <div wire:ignore class="mySlides w-full h-auto ">
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="show()" >Tikrinti</button>
        </div>

        <!-- Next and previous buttons -->

{{--        <a class="next" onclick="plusSlides(1)">&#10095;</a>--}}
    </div>
    <br>

    @push('scripts')
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");

                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";

                }
                  slides[slideIndex-1].style.display = "block";

            }
        </script>
    @endpush
</div>
</div>


