@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between pagination">
        
        <div class="flex-1 flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    <span>Show</span>
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    <span>to</span>
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    <span>of</span>
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    <span>Results</span>
                </p>
            </div>
                <ul class="pagination-list">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li aria-disabled="true" aria-label="Previous" class="pagination-item pagination-item--disabled">
                                <span><i class="fa fa-chevron-left text-sm"></i></span>
                        </li>
                    @else
                    <li  class="pagination-item">
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous" wire:click.prevent="previousPage" wire:loading.attr="disabled">
                            <i class="fa fa-chevron-left text-sm"></i>
                        </a>
                    </li>
                    @endif
                    
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li aria-disabled="true" class="pagination-item">
                                <span>{{ $element }}</span>
                            </li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                            
                                @if ($page == $paginator->currentPage())
                                <li class="pagination-item pagination-item--selected">
                                    <span>
                                        {{ $page }}
                                    </span>
                                </li>
                                @else
                                <li class="pagination-item" wire:key="paginator-page{{ $page }}">
                                    <a href="{{ $url }}" aria-label="Gehe zur Seite {{ $page }}" wire:click.prevent="gotoPage({{ $page }})">
                                        {{ $page }}
                                    </a>
                                </li>
                                @endif
                            
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                    <li class="pagination-item">
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next" wire:click.prevent="nextPage" wire:loading.attr="disabled">
                            <i class="fa fa-chevron-right text-sm"></i>
                        </a>
                    </li>
                    @else
                        <li aria-disabled="true" aria-label="Next" class="pagination-item pagination-item--disabled">
                               <span><i class="fa fa-chevron-right text-sm"></i></span>
                        </li>
                    @endif
            </ul>
        </div>
    </nav>
@endif
