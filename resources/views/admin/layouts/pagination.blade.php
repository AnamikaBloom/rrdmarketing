<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-8">

        <div class="">
            <ul class="pagination">
                @if (!$paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link" href="{{$paginator->previousPageUrl()}}">‹</a>
             </li>
            @else
            <li class="page-item disabled">
                <a class="page-link" href="#">‹</a>
            </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                <li class="page-item active disabled">
                    <a class="page-link" href="javascript:void(0);">1</a>
                </li>
                @endif
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0);">{{$page}}</a>
                </li>

                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $url }}">{{$page}}</a>
                </li>
                @endif
                @endforeach
                @endif
            @endforeach
                @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">›</a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">›</a>
                </li>
                @endif
                <li class="page-item">
                    <a class="page-link" href="?page={{$paginator->lastPage()}}">»</a>
                </li>
            </ul>
        </div>
    </div>

</div>
