@if ($paginator->hasPages())
    <ul class="pagination" role="navigation" aria-label="Pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="pagination-previous disabled"></li>
        @else
            <li class="pagination-previous"><a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"></a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-next"><a href="{{ $paginator->nextPageUrl() }}" aria-label="Next"></a></li>
        @else
            <li class="pagination-next disabled"></li>
        @endif
    </ul>
@endif
