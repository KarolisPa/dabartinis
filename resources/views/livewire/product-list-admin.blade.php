<div>

    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="justify-center w-full bg-yellow-400 rounded my-2">Prekės</button>

<div x-show="open" x-transition class="overflow-auto">
    <table class="whitespace-no-wrap bg-white w-full ">
        <thead>
        <tr class="text-center font-bold text-xs">
            <td class="border lg:px-6 lg:py-4 sm:px-2 sm:py-10">Foto
               </td>
            <td class="border px-6 py-4">Pavadinimas</td>
            <td class="border px-6 py-4">Matavimo vnt.</td>
            <td class="border px-6 py-4">Kategorija</td>
            <td class="border px-6 py-4">Modelis</td>
            <td class="border px-6 py-4">Kaina</td>
            <td class="border px-6 py-4">Akcija</td>
            <td class="border px-6 py-4">Kaina su akcija</td>
            <td class="border px-6 py-4">Akcijos pabaiga</td>
            <td class="border px-6 py-4">Aprašymas</td>
            <td class="border px-6 py-4">Veiksmai</td>

        </tr>
        </thead>
        @foreach($prods as $prod)
            <tr>
                <td class="border">
                    <img alt="nuotrauka" class="object-cover object-center w-32 h-32 block object-cover" src="{{asset('storage/products/'.$prod->photo)}}">

                </td>
                <td class="border px-6 py-4">{{$prod->name}}</td>
                <td class="border px-6 py-4">{{$prod->unit_of_measurement}}</td>
                <td class="border px-6 py-4">{{$prod->category}}</td>
                <td class="border px-6 py-4">{{$prod->model}}</td>
                <td class="border px-6 py-4">{{$prod->price}}</td>
                @if($prod->discount_status == 1)
                <td class="border px-6 py-4 bg-green-200 text-center">Taip</td>
                @else
                    <td class="border px-6 py-4 bg-red-200 text-center">Ne</td>
                    @endif
                <td class="border px-6 py-4">{{$prod->discount_price}}</td>
                <td class="border px-6 py-4">{{$prod->discount_end}}</td>
                <td class="border px-6 py-4">{{$prod->about}}</td>
                <td class="border px-6 py-4">
                    <button class="bg-green-400 rounded px-2" wire:click = "setId({{$prod->id}})" onclick="editProd()">Redaguoti</button>
                    <button class="bg-red-400 rounded px-2" wire:click.prevent="delete({{$prod->id}})" >Trinti</button>
                </td>
            </tr>
        @endforeach
    </table>
        </div>
    </div>

    <!--Modal-->
    <div wire:ignore.self class="overflow-scroll hidden pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50" id="modalasProd">
        <div class="modal-overlayCatEdit absolute w-full h-full bg-gray-900 opacity-50" onclick="editProd()"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-closeCatEdit absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm" onclick="editProd()">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6" >
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Redaguoti produkta</p>
                    <div class="modal-closeCatEdit cursor-pointer z-50">
                        <svg onclick="editProd()" class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <!--Body-->
                @isset($nId)
                    <form class="w-full max-w-lg" method="get" wire:submit.prevent="edit({{$nId}})" enctype="multipart/form-data"
                          x-init="@this.on('saved', clean())"
                    >
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <input class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nameProd">
                                    Pavadinimas
                                </label>
                                <input name="nameProd" wire:model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="{{$name}}">
                                @error('name') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                                <div class="w-full px-3 mb-6">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="categoryModel">
                                        Kategorija
                                    </label>

                                        <select wire:model="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="categoryModel">
                                            <option> Prekės kategorija </option>
                                            @foreach( $cats as $cat)
                                                <option value="{{$cat->name}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror


                                </div>
{{--                            </div>--}}

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="unitProd">
                                    Matavimo vnt.
                                </label>
                                <input name="unitProd" wire:model="unit_of_measurement" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="{{$unit_of_measurement}}">
                                @error('unit_of_measurement') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="modelProd">
                                    Modelis
                                </label>
                                <input name ="modelProd" wire:model="model" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="{{$model}}">
                                @error('model') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="priceProd">
                                    Kaina
                                </label>
                                <input name ="priceProd" wire:model="price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" step="0.01" placeholder="{{$price}}">
                                @error('price') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                                    <hr class="my-3">

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="discountProd">
                                    Akcijos statusas
                                </label>
                                <select name ="discountProd" wire:model="discount_status" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="{{$discount_status}}">
                                <option value="">Pasirinkite reikšmę</option>
                                    <option value="1">Taip</option>
                                    <option value="2">Ne</option>
                                </select>
                                @error('discount_status') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="DpriceProd">
                                    Kaina su akcija
                                </label>
                                <input name ="DpriceProd" wire:model="discount_price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" step="0.01" placeholder="{{$discount_price}}">
                                @error('discount_price') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="discount_end">
                                    Akcijos pabaigos data
                                </label>
                                <input name ="discount_end" wire:model="discount_end" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="date" placeholder="{{$discount_end}}">
                                @error('discount_end') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                                <hr class="my-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fotoProd">
                                    Foto
                                </label>
                                <input name ="fotoProd" wire:model="photo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="file" placeholder="{{$photo}}">
                                @error('photo') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="about">
                                    Aprašymas
                                </label>
                                <input wire:model="about" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id='about' type="text" placeholder="Apie prekę">
                                @error('unit_of_measurement') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                            </div>

                            </div>
{{--                        </div>--}}
                        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="{{$prod->id}}" type="submit">Redaguoti</button>
                        @endisset

                    </form>

                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <div
                            class="alert alert-success bg-green-300 rounded text-center w-full my-5"
                            x-data="{show : false}"
                            x-show.transition.opacity.out.duration.1500ms = "show"
                            x-init="@this.on('savedCatEdit', () => { show = true; setTimeout( () => { show = false; }, 2000 ) })"
                            style="display : none">
                            Produktas pakeistas

                        </div>
                    </div>

            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            var modalasProd = document.getElementById('modalasProd');
            function editProd(){
                if(modalasProd.classList.contains("hidden")){
                    modalasProd.classList.remove("hidden");
                    modalasProd.classList.remove("pointer-events-none");
                }else{
                    modalasProd.classList.add("hidden");
                    modalasProd.classList.add("pointer-events-none");
                }

            }

        </script>
    @endpush


</div>
</div>
