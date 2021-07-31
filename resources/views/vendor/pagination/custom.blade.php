@if ($paginator->hasPages())
    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination pager">
        
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link">
                        <span aria-hidden="true">
                            <span class="lnr lnr-chevron-left"></span>
                        </span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        <span aria-hidden="true">
                            <span class="lnr lnr-chevron-left"></span>
                        </span>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
            
                @if (is_string($element))
                    <li class="page-item disabled">
                        <a class="page-link">
                            {{ $element }}
                        </a>
                    </li>
                @endif
            
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link">
                                    {{ $page }}
                                </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">
                            <span class="lnr lnr-chevron-right"></span>
                        </span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link">
                        <span aria-hidden="true">
                            <span class="lnr lnr-chevron-right"></span>
                        </span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif 