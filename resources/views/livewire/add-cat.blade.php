<div>
    <button class="modal-openCat bg-green-400 text-white hover:text-green-200 font-bold py-2 px-4 rounded-lg outline-none focus-within:outline-none float-right my-3">Pridėti kategoriją</button>

    <!--Modal-->
    <div wire:ignore.self class="modalCat opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
        {{--    wire:ignore.self--}}
        <div class="modal-overlayCat absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-closeCat absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6" >
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Pridėti kategoriją</p>
                    <div class="modal-closeCat cursor-pointer z-50">
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

                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nameCat">
                                Kategorijos pavadinimas
                            </label>
                            <input wire:model="nameCat" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nameCat" type="text" placeholder="Kategorijos pavadinimas">
                            @error('name') <span class="error text-sm text-red-400">{{ $message }}</span> @enderror

                        </div>




                    </div>
                    <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Pridėti</button>


                </form>

                <!--Footer-->
                <div class="flex justify-end pt-2">
                    {{--                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>--}}
                    {{--                <button class="modal-closeCat px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>--}}
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
                        x-init="@this.on('savedCat', () => { show = true; setTimeout( () => { show = false; }, 2000 ) })"
                        style="display : none">
                        Kategorija sukurta

                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            var openmodal = document.querySelectorAll('.modal-openCat')
            for (var i = 0; i < openmodal.length; i++) {
                openmodal[i].addEventListener('click', function(event){
                    // event.preventDefault()
                    toggleModalCat()
                })
           }
            const overlayCat = document.querySelector('.modal-overlayCat')
            overlayCat.addEventListener('click', toggleModalCat)

            var closemodal = document.querySelectorAll('.modal-closeCat')
            for (var i = 0; i < closemodal.length; i++) {
                closemodal[i].addEventListener('click', toggleModalCat)
            }

            document.onkeydown = function(evt) {
                evt = evt || window.event
                let isEscapeCat = false
                if ("key" in evt) {
                    isEscapeCat= (evt.key === "Escape" || evt.key === "Esc")
                } else {
                    isEscapeCat = (evt.keyCode === 27)
                }
                if (isEscapeCat && document.body.classList.contains('modal-activeCat')) {
                    toggleModalCat()
                }if (isEscapeCat && document.body.classList.contains('modal-active')) {
                    toggleModal()
                }
            }

            function toggleModalCat () {
                const bodyCat = document.querySelector('body')
                const modalCat = document.querySelector('.modalCat')
                modalCat.classList.toggle('opacity-0')
                modalCat.classList.toggle('pointer-events-none')
                bodyCat.classList.toggle('modal-activeCat')
            }

        </script>
    @endpush
</div>
