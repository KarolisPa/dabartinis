<div>
    <div class="w-full bg-gray-100 p-2 mt-12 border border-gray-300 rounded">
        <h2 class="text-center my-2 text-2xl">Produktų filtras pagal kategorija</h2>
        <div class="text-center">
            @foreach( $cats as $cat)
                <label class="inline-flex items-center mx-1">
                    <input wire:click="$emit('checked')" wire:model="catFilter" type="checkbox" value="{{$cat->name}}" class="form-checkbox" tabindex="0">
                    <span class="ml-2">{{$cat->name}}</span>
                </label>
            @endforeach
        </div>

    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap justify-start">
                @foreach($prods as $prod)


                <div class="rounded rounded-2xl shadow-xl p-4 w-full bg-gray-200 my-3 lg:w-3/12 lg:mx-9 inline">
                        @switch($prod->discount_status)
                            @case("0")
                        <a href="{{route('showPreke', $prod->id)}}">
                            @break
                        @endswitch

                    <div class="h-48 w-full">
                        <img alt="nuotrauka" class="object-cover object-center w-full h-full block" src="{{asset('storage/products/'.$prod->photo)}}">
                    </div>
                        <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$prod->category}}</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{$prod->name}}</h2>
                        <p class="mt-1">{{$prod->price}} €</p>
                    </div>
                    </a>
            </div>

                    @endforeach
                </div>
        </div>
        {{$prods->links('components.pagination')}}
    </section>
</div>
