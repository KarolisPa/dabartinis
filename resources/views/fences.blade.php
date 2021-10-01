<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<h1 class="text-center my-5 text-xl">Nuolaidos</h1>

                    @include('components.discount-slider')

                    <div class="w-full bg-gray-100 p-2">
                    <h2 class="text-center my-5 text-xl">Produktų filtras</h2>
                        <div class="text-center">
                        <label class="inline-flex items-center mx-3">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">Tvoros</span>
                        </label>
                            <label class="inline-flex items-center mx-3">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Bokštai</span>
                            </label>
                            <label class="inline-flex items-center mx-3">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Vartai</span>
                            </label>
                            <label class="inline-flex items-center mx-3">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Lentelės</span>
                            </label>
                            <label class="inline-flex items-center mx-3">
                                <input type="checkbox" class="form-checkbox">
                                <span class="ml-2">Segmentai</span>
                            </label>
                    </div>

                    </div>
                    @livewire('product-list')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
