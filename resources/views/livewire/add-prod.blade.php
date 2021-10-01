<div>
<button class="modal-open bg-green-400 text-white hover:text-green-200 font-bold py-2 px-4 rounded-lg outline-none focus-within:outline-none float-right my-3">Pridėti prekę</button>

<!--Modal-->
<div wire:ignore.self class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
{{--    wire:ignore.self--}}
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6" >
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Pridėti produktą</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->

            <form class="w-full max-w-lg" method="get" wire:submit.prevent="save" enctype="multipart/form-data"
                  x-init="@this.on('saved', clean())"
            >
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            Prekės pavadinimas
                        </label>
                        <input wire:model="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" type="text" placeholder="Prekė">
                        @error('name') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="unit_of_measurement">
                            Matavimo vienetas
                        </label>
                        <input wire:model="unit_of_measurement" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id='unit_of_measurement' type="text" placeholder="vnt.">
                        @error('unit_of_measurement') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="categoryModel">
                            Kategorija
                        </label>
                        <div class="relative">
                            <select wire:model="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="categoryModel">
                                <option> Prekės kategorija </option>
                                                                    @foreach( $cats as $cat)
                                                                        <option value="{{$cat->name}}">{{$cat->name}}</option>
                                                                    @endforeach
                            </select>
                            @error('category') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="model">
                            Modelis
                        </label>
                        <input wire:model="model" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="model" type="text" placeholder="Modelio pavadinimas">
                        @error('model') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                            Kaina
                        </label>
                        <input wire:model="price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="price" type="number" placeholder="100">
                        @error('price') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                    </div>
{{--                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">--}}
{{--                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="photo">--}}
{{--                            Foto--}}
{{--                        </label>--}}
{{--                                                                        <input wire:model="photo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="photo" type="file" placeholder="tvora.jpg">--}}
{{--                    </div>--}}
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="photo">
                                                    Foto
                                                </label>
                                                                                                <input wire:model="photo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="photo" type="file" placeholder="tvora.jpg">
                        @error('photo') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror
                                            </div>

                    <div
                        class="alert alert-success bg-green-300 rounded text-center w-full my-5"
                        x-data="{show : false}"
                        x-show.transition.opacity.out.duration.1500ms = "show"
                        x-init="@this.on('saved', () => { show = true; setTimeout( () => { show = false; }, 2000 ) })"
                        style="display : none">
                        {{ session('message') }}

                    </div>
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Pridėti</button>


            </form>

            <!--Footer-->
            <div class="flex justify-end pt-2">
{{--                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>--}}
{{--                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>--}}
            </div>

        </div>
    </div>
</div>

    @push('scripts')
<script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event){
            // event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    // document.onkeydown = function(evt) {
    //     evt = evt || window.event
    //     var isEscape = false
    //     if ("key" in evt) {
    //         isEscape = (evt.key === "Escape" || evt.key === "Esc")
    //     } else {
    //         isEscape = (evt.keyCode === 27)
    //     }
    //     if (isEscape && document.body.classList.contains('modal-active')) {
    //         toggleModal()
    //     }
    // };

    function toggleModal () {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }

</script>
    @endpush
</div>
