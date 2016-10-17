<!-- foundation -->
@if ($paginator->hasPages())
    <ul class="pagination" role="navigation" aria-label="Pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pagination-previous disabled"></li>
        @else
            <li class="pagination-previous"><a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="ellipsis" aria-hidden="true"></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="current"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" aria-label="Page {{ $page }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-next"><a href="{{ $paginator->nextPageUrl() }}" aria-label="Next"></a></li>
        @else
            <li class="pagination-next disabled"></li>
        @endif
    </ul>
@endif
