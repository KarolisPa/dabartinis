<div>
    <!-- Slideshow container -->
    <div class="slideshow-container text-center">


        <!-- Full-width images with number and caption text -->
        <div wire:ignore.self class="mySlides h-full w-full">
            <h1>Pasirinkite Vartelius</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$set('varteliaiSelected', {{0}})" onclick="plusSlides(1)">Vartelių nereikia</button>
            <div class="lg:grid lg:gap-3 lg:grid-cols-3 sm:grid sm:gap-3 sm:grid-cols-2">

               @foreach($varteliai as $vartas)
<div class="rounded-xl shadow-xl border border-2 bg-gray-200 m-5 focus-within:bg-yellow-400 focus-within:border-yellow-700" tabindex="0">
                        <input wire:ignore type="image" wire:click="$set('varteliaiSelected', {{$vartas->id}})" wire:model="varteliaiSelected" class="object-contain h-32 border border-2 mt-3 focus:border-yellow-700" alt="nuotrauka" src="{{asset('storage/products/'.$vartas->photo)}}">
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




        <div  wire:ignore.self class="mySlides w-full h-full">
            <h1>Pasirinkite Vartus</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$set('vartaiSelected', {{0}})" onclick="plusSlides(1)">Vartų nereikia</button>
            <div class="lg:grid lg:gap-3 lg:grid-cols-3 sm:grid sm:gap-3 sm:grid-cols-2">
                @foreach($vartai as $vartasMasina)
                    <div  wire:click="$set('vartaiSelected', {{$vartasMasina->id}})" class="rounded-xl shadow-xl border border-2 bg-gray-200 m-5 focus-within:bg-yellow-400 focus-within:border-yellow-700" tabindex="0">
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
            <div class="lg:grid lg:gap-3 lg:grid-cols-3 sm:grid sm:gap-3 sm:grid-cols-2">
                @foreach($tvoros as $tvora)
                    <div  wire:click="$set('tvoraSelected', {{$tvora->id}})" class="rounded-xl shadow-xl border border-2 bg-gray-200 m-5 focus-within:bg-yellow-400 focus-within:border-yellow-700" tabindex="0">
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

        <div  wire:ignore.self class="mySlides w-full h-auto">
            <h1>Pasirinkite bokšteli</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$set('boksteliaiSelected', {{0}})" onclick="plusSlides(1)">Bokštelių nereikia</button>
            <div class="lg:grid lg:gap-3 lg:grid-cols-3 sm:grid sm:gap-3 sm:grid-cols-2">
                @foreach($boksteliai as $bokstelis)
                    <div  wire:click="$set('boksteliaiSelected', {{$bokstelis->id}})" class="rounded-xl shadow-xl border border-2 bg-gray-200 m-5 focus-within:bg-yellow-400 focus-within:border-yellow-700" tabindex="0">
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

                    <button onclick="plusSlides(1)" class="disabled:opacity-10 p-2 bg-gray-500 text-white font-bold border-b-4 border-blue-700 rounded">Sekantis žingsnis</button>

                @endif
                @if($boksteliaiSelected !== null)
                    <div>
                    <button wire:click="$emit('productsAdded')" onclick="plusSlides(1)" class="p-2 bg-blue-500 hover:bg-blue-400 text-white font-bold border-b-4 border-blue-700 hover:border-blue-500 rounded cursor-pointer left-auto right-0">Sekantis žingsnis</button>
                    </div>
                        @endif
            </div>
        </div>

        <div wire:ignore.self class="mySlides w-full h-auto">
            <h1 class="-mt-10">Jūsų pasirinktos tvoros dalys :</h1>
            <button class="bg-blue-400 rounded rounded-2xl m-2 px-2" wire:click="$emit('productsAdded')" >Tikrinti</button>
            <div class="lg:grid lg:gap-3 lg:grid-cols-3 sm:grid sm:gap-3 sm:grid-cols-2">
                @isset($order)
                    @foreach($order as $prods)
                        <div class="rounded-xl shadow-xl border border-2 bg-gray-200 m-5" tabindex="0">
                            <input type="image" class="border border-2 z-10 h-32  mt-3" alt="nuotrauka" src="{{asset('storage/products/'.$prods->photo)}}">
                            <h2 class="text-gray-900 title-font text-lg font-medium">{{$prods->name}}</h2>
                            <h2 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$prods->category}}</h2>
                            <p class="inline-block">Aukštis : <p class="text-lg inline">{{$prods->height}}</p></p>
                            <p class="inline-block">Plotis : <p class="text-lg inline">{{$prods->width}}</p></p>
                            <p class="mt-1 inline-block">Kaina : <p class="text-lg inline">{{$prods->price}} €</p></p>
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="rounded-xl shadow-xl border border-2 bg-gray-200 w-full">

                <form class="" method="post" wire:submit.prevent=""  x-init="@this.on('saved', clean())">
                <label class="tracking-wide text-gray-700 text-2xl font-bold mb-2" for="fenceLenght">
                    Įveskite tvoros ilgį
                </label>
                <input wire:model="fenceLenght" class="text-center inline appearance-none block bg-gray-100 text-gray-800 border border-gray-300 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-white" name="fenceLenght" type="text" placeholder="Tvoros ilgis metrais">
                @error('fenceLenght') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
           <br>
                    <span class="tracking-wide text-gray-700 text-xl font-bold mb-2">
                        Pasirinkite norimas paslaugas
                    </span>

                                        <div class="lg:grid lg:gap-3 lg:grid-cols-3 sm:grid sm:gap-3 sm:grid-cols-2">

{{--                                            Pasirinkimas Vartu automatizavimo darbo tvorai  sviestuvai --}}
                                <div wire:click="$toggle('vartaiService')" class="rounded-xl shadow-xl border border-2 bg-gray-400 m-5 cursor-pointer focus:bg-blue-400" tabindex="0">
                                    <img type="image" class="justify-center h-32  mt-3 mx-auto" alt="nuotrauka" src="{{asset('images/lietuva.png')}}">
                                    <span class="tracking-wide text-gray-700 text-l font-bold mb-2">
                                        Vartų automatizavimas
                                    </span>
                                    {{$vartaiService}}

{{--                                    <select wire:model="service" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="categoryModel">--}}
{{--                                        <option> Pasirinkite paslaugą </option>--}}
{{--                                            <option value="{{$cat->name}}">{{$cat->name}}</option>--}}
{{--                                    </select>--}}

                                    {{--
                                            <h2 class="text-gray-900 title-font text-lg font-medium">{{$prods->name}}</h2>--}}
{{--                                    <h2 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$prods->category}}</h2>--}}
{{--                                    <p class="inline-block">Aukštis : <p class="text-lg inline">{{$prods->height}}</p></p>--}}
{{--                                    <p class="inline-block">Plotis : <p class="text-lg inline">{{$prods->width}}</p></p>--}}
{{--                                    <p class="mt-1 inline-block">Kaina : <p class="text-lg inline">{{$prods->price}} €</p></p>--}}
                                </div>

                               <div class="rounded-xl shadow-xl border border-2 bg-gray-400 m-5">
                                      <img type="image" class="justify-center h-32  mt-3 mx-auto" alt="nuotrauka" src="{{asset('images/lietuva.png')}}">
                                                {{--                                    <h2 class="text-gray-900 title-font text-lg font-medium">{{$prods->name}}</h2>--}}
                                                {{--                                    <h2 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$prods->category}}</h2>--}}
                                                {{--                                    <p class="inline-block">Aukštis : <p class="text-lg inline">{{$prods->height}}</p></p>--}}
                                                {{--                                    <p class="inline-block">Plotis : <p class="text-lg inline">{{$prods->width}}</p></p>--}}
                                                {{--                                    <p class="mt-1 inline-block">Kaina : <p class="text-lg inline">{{$prods->price}} €</p></p>--}}
                               </div>


                    </div>

                </form>
            </div>

        </div>
    </div>

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



