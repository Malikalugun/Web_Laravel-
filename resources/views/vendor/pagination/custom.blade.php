
@if ($paginator->hasPages())
<nav class="courses-pagination mt-50">    
    <ul class="pagination justify-content-lg-end justify-content-center">


         {{-- Previous Page Link --}}
         @if ($paginator->onFirstPage())
         <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a href="#" aria-label="Previous">
                <i class="fa fa-angle-left"></i>
            </a>
         </li>
     @else
         <li class="page-item">
             <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
         </li>
     @endif


        {{-- <li class="page-item">
            <a href="#" aria-label="Previous">
                <i class="fa fa-angle-left"></i>
            </a>
        </li> --}}

          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
          {{-- "Three Dots" Separator --}}
          @if (is_string($element))
              <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
          @endif

          {{-- Array Of Links --}}
          @if (is_array($element))
              @foreach ($element as $page => $url)
                  @if ($page == $paginator->currentPage())
                      <li class=" page-item active" aria-current="page"><a class="active" href="{{ $url }}">{{ $page }}</a></li>
                  @else
                      <li class=" page-item"><a href="{{ $url }}">{{ $page }}</a></li>
                  @endif
              @endforeach
          @endif
      @endforeach

{{-- 
        <li class="page-item"><a class="active" href="#">1</a></li>
        <li class="page-item"><a href="#">2</a></li>
        <li class="page-item"><a href="#">3</a></li> --}}


           {{-- Next Page Link --}}
           @if ($paginator->hasMorePages())
           <li class="page-item">
               <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-angle-right"></i></a>
           </li>
       @else
           <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
            <a href="#" aria-label="Next">
                <i class="fa fa-angle-right"></i>
            </a>
           </li>
       @endif

        {{-- <li class="page-item">
            <a href="#" aria-label="Next">
                <i class="fa fa-angle-right"></i>
            </a>
        </li> --}}
    </ul>
</nav>  <!-- courses pagination --> 
@endif