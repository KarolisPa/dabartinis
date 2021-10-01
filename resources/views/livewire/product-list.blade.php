<div>

{{--    @Auth--}}
{{--        @livewire('add-prod')--}}
{{--    @endauth--}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap justify-start">
                @foreach($prods as $prod)


                <div class="p-4 w-full bg-gray-200 my-3 lg:w-3/12 lg:mx-9 inline">
                    <a href="{{route('showPreke', $prod->id)}}">
{{--                    <div class="block relative h-48 rounded overflow-hidden">--}}
                    <div class="h-48 w-full">
                        <img alt="nuotrauka" class="object-cover object-center w-full h-full block" src="{{asset('storage/products/'.$prod->photo)}}">
{{--                    </div>--}}
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
