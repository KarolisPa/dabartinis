<x-app-layout>


    <div class="py-12">
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-yellow-200 border-b border-gray-200">
                    <h1 class="font-sans text-center text-xl"></h1>
                    @livewire('add-prod')
                            @livewire('product-list-admin')

                </div>
            </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-200 border-b border-gray-200">
                    <h1 class="font-sans text-center text-xl"></h1>
                    @livewire('add-cat')
                    @livewire('category-list-admin')

                </div>
            </div>
        </div>
{{--        </div>--}}
    </div>
</x-app-layout>
