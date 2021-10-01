@if ($paginator->hasPages())
    <div class="flex items-end my-2 justify-center">


                <a
                    class="mx-1 px-4 py-2 bg-gray-200 border border-black text-black font-bold text-center hover:bg-blue-400 hover:border-blue-400 hover:text-white rounded-lg  cursor-pointer"
                    wire:click="previousPage"
                >
                    <
                </a>


    <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                <!--  Use three dots when current page is greater than 3.  -->
                    @if ($paginator->currentPage() > 3 && $page === 2)
                        <div class="text-black mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif

                <!--  Show active page two pages before and after it.  -->
                    @if ($page == $paginator->currentPage())
                        <span class="mx-1 px-4 py-2 border border-blue-400 bg-blue-400 text-white font-bold text-center hover:bg-blue-800 hover:border-blue-800 rounded-lg  cursor-pointer">{{ $page }}</span>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2)
                        <a class="mx-1 px-4 py-2 border border-black text-black font-bold text-center hover:text-white rounded-lg hover:bg-blue-400 hover:border-blue-400 cursor-pointer" wire:click="gotoPage({{$page}})">{{ $page }}</a>
                    @endif

                <!--  Use three dots when current page is away from end.  -->
                    @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                        <div class="text-black mx-1">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

                <a class="mx-1 px-4 py-2 bg-gray-200 border border-black text-black font-bold text-center hover:bg-blue-400 hover:border-blue-400 hover:text-white rounded-lg  cursor-pointer"
                   wire:click="nextPage"
                   rel="next">
                    >
                </a>
            @endif
        @if($paginator->lastPage() - $paginator->currentPage() == 0)
            <a class="mx-1 px-4 py-2 bg-gray-200 border border-black text-black font-bold text-center hover:bg-blue-400 hover:border-blue-400 rounded-lg  cursor-pointer"
               rel="next">
                >
            </a>
    @endif
    </div>
@endif
