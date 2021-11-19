<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-4xl title-font font-medium mb-4 text-center mt-6 -mb-1">Prekės aprašymas</h1>
<hr class="my-5">
                    <h3 class="text-xl title-font font-medium text-center -mb-3 text-green-400">Prekė su nuolaida</h3>
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$product->category}}</h2>
                                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{$product->name}}</h1>
                                    <div class="flex mb-4">
                                        <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Informacija</a>
                                    </div>
                                    <p class="leading-relaxed mb-4">{{$product->about}}</p>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Matavimo vienetai</span>
                                        <span class="ml-auto text-gray-900">{{$product->unit_of_measurement}}</span>
                                    </div>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Modelis</span>
                                        <span class="ml-auto text-gray-900">{{$product->model}}</span>
                                    </div>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Kaina</span>
                                        <span class="ml-auto title-font font-medium text-2xl text-gray-900 line-through">{{$product->price}} €</span>
                                    </div>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Kaina su nuolaida</span>
                                        <span class="ml-auto title-font font-medium text-2xl text-gray-900">{{$product->discount_price}} €</span>
                                    </div>
                                </div>
                                <img alt="ecommerce" class="lg:w-1/2 h-96 object-cover object-center rounded" src="{{asset('storage/products/'.$product->photo)}}">
                            </div>
                        </div>
                    </section>



                </div>
            </div>
        </div>
    </div>




</x-app-layout>
