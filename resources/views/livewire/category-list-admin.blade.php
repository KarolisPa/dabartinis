<div>

    <div x-data="{ open: false }">
        <button x-on:click="open = ! open" class="justify-center w-full bg-indigo-400 rounded my-2">Kategorijos</button>

        <div x-show="open" x-transition>
            <table class="w-full whitespace-no-wrap w-full whitespace-no-wrap bg-white">
                <thead>
                <tr class="text-center font-bold">
                    <td class="border px-6 py-4">Pavadinimas</td>
                    <td class="border px-6 py-4">Veiksmai</td>
                </tr>
                </thead>

                @foreach($cats as $cat)
                    <tr>
                        <td class="border px-6 py-4">{{$cat->name}}</td>
                        <td class="border px-6 py-4">
                            <button class="bg-green-400 rounded px-2 modal-openCatEdit" onclick="edit()" wire:click = "setId({{$cat->id}})" value="{{$cat->id}}">Redaguoti</button>
                            <button class="bg-red-400 rounded px-2" wire:click.prevent="delete({{$cat->id}})">Trinti</button></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    <!--Modal-->
    <div wire:ignore.self class="modalCatEdit hidden pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50" id="modalas">
        <div class="modal-overlayCatEdit absolute w-full h-full bg-gray-900 opacity-50" onclick="edit()"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-closeCatEdit absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm" onclick="edit()">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6" >
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Pridėti kategoriją</p>
                    <div class="modal-closeCatEdit cursor-pointer z-50">
                        <svg onclick="edit()" class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <!--Body-->
@isset($cat)
                <form class="w-full max-w-lg" method="get" wire:submit.prevent="edit({{$cat->id}})" enctype="multipart/form-data"
                      x-init="@this.on('saved', clean())"
                >
                    <div class="flex flex-wrap -mx-3 mb-6">

                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nameCat">
                                Kategorijos pavadinimas
                            </label>
                            <input wire:model="nameCatEdit" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nameCatEdit" type="text" placeholder="{{$current}}">
                            @error('name') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="{{$cat->id}}" type="submit">Pridėti</button>
                    @endisset

                </form>

                <!--Footer-->
                <div class="flex justify-end pt-2">
                   <div
                        class="alert alert-success bg-red-300 rounded text-center w-full my-5"
                        x-data="{show : false}"
                        x-show.transition.opacity.out.duration.1500ms = "show"
                        x-init="@this.on('exists', () => { show = true; setTimeout( () => { show = false; }, 2000 ) })"
                        style="display : none">
                        Kategorija egzistuoja

                    </div>
                    <div
                        class="alert alert-success bg-green-300 rounded text-center w-full my-5"
                        x-data="{show : false}"
                        x-show.transition.opacity.out.duration.1500ms = "show"
                        x-init="@this.on('savedCatEdit', () => { show = true; setTimeout( () => { show = false; }, 2000 ) })"
                        style="display : none">
                        Kategorija pakeista

                    </div>
                </div>

            </div>
        </div>
</div>
    @push('scripts')
        <script>
            var modalas = document.getElementById('modalas');
            function edit(){
                if(modalas.classList.contains("hidden")){
                    modalas.classList.remove("hidden");
                    modalas.classList.remove("pointer-events-none");
                }else{
                    modalas.classList.add("hidden");
                    modalas.classList.add("pointer-events-none");
                }

            }

        </script>
    @endpush
</div>
