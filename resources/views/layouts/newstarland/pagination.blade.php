<div class="col-xs-12 text-center">
    <nav class="pagination  text-center">
        <?php
        $current = $paging->currentPage();
        $lastPage = $paging->lastPage();
        $start = $current - 3 <= 1 ? 1 : $current - 3;
        $end = $current + 3 > $lastPage ? $lastPage : $current + 3;
        ?>
        <ul class="page-numbers">
            @if($paging->currentPage() > 1)
            <li>
                <a class="next page-numbers" href="{{$paging->previousPageUrl()}}">
                    <i class="fa fa-caret-left"></i>
                </a>
            </li>
            @endif
            @for($i = $start; $i <= $end; $i++)
            <li>
                @if($paging->currentPage() == $i)
                <span class="page-numbers current">
                    <span class="sr-only">Page </span>{{ $i }}
                </span>
                @else
                <a class="page-numbers" href="{{ $paging->url($i) }}">{{$i}}</a>
                @endif
            </li>
            @endfor
            <li>
                <a class="next page-numbers" href="{{$paging->nextPageUrl()}}">
                    <i class="fa fa-caret-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>