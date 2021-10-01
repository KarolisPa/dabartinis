<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="flex w-full mb-20 flex-wrap">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Paskutiniai darbai</h1>
            <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base flex flex-nowrap">Padarius kanors gero norisi įamžinti.</p>
        </div>
        <div x-data="{}"class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-1/2">
                    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('/images/tvora1.jpg')}}'})" class="cursor-pointer">
                        <img alt="Placeholder" class="object-fit h-full w-full" src="{{asset('/images/tvora1.jpg')}}">
                    </a>
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('/images/tvora2.jpg')}}'})" class="cursor-pointer">
                        <img alt="Placeholder" class="object-fit h-full w-full" src="{{asset('/images/tvora2.jpg')}}">
                    </a>
                </div>

                <div class="md:p-2 p-1 w-full">
                    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('/images/tvora3.jpg')}}'})" class="cursor-pointer">
                        <img alt="Placeholder" class="object-fit h-full w-full" src="{{asset('/images/tvora3.jpg')}}">
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-full">
                    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('/images/tvora4.jpg')}}'})" class="cursor-pointer">
                        <img alt="Placeholder" class="object-fit h-full w-full" src="{{asset('/images/tvora4.jpg')}}">
                    </a>
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('/images/tvora5.jpeg')}}'})" class="cursor-pointer">
                        <img alt="Placeholder" class="object-fit h-full w-full" src="{{asset('/images/tvora5.jpeg')}}">
                    </a>
                     </div>
                <div class="md:p-2 p-1 w-1/2">
                    <a @click="$dispatch('img-modal', {  imgModalSrc: '{{asset('/images/tvora6.jpg')}}'})" class="cursor-pointer">
                        <img alt="Placeholder" class="object-fit h-full w-full " src="{{asset('/images/tvora6.jpg')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div x-data="{ imgModal : false, imgModalSrc : ''}">
    <template @img-modal.window="imgModal = true; imgModalSrc = $event.detail.imgModalSrc;" x-if="imgModal">
        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="imgModalSrc = ''" class="p-2 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center bg-black bg-opacity-75">
            <div @click.away="imgModal = ''" class="flex flex-col max-w-3xl max-h-full overflow-auto">
                <div class="z-50">
                    <button @click="imgModal = ''" class="float-right pt-2 pr-2 outline-none focus:outline-none">
                        <svg class="fill-current text-white " xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-2">
                    <img :alt="imgModalSrc" class="object-contain h-1/2-screen" :src="imgModalSrc">
                </div>
            </div>
        </div>
    </template>
</div>
