@if ($paginator->hasPages())
    <nav class="flex justify-center mt-6" aria-label="Pagination">
        <div class="join">
            {{-- Previous Button --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled" aria-disabled="true">«</button>
            @else
                <button wire:click="previousPage" wire:loading.attr="disabled" class="join-item btn">«</button>
            @endif

            {{-- Page Numbers --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <button class="join-item btn btn-disabled">{{ $element }}</button>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="join-item btn btn-active" aria-current="page">{{ $page }}</button>
                        @else
                            <button wire:click="gotoPage({{ $page }})" class="join-item btn">{{ $page }}</button>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Button --}}
            @if ($paginator->hasMorePages())
                <button wire:click="nextPage" wire:loading.attr="disabled" class="join-item btn">»</button>
            @else
                <button class="join-item btn btn-disabled" aria-disabled="true">»</button>
            @endif
        </div>
    </nav>
@endif
