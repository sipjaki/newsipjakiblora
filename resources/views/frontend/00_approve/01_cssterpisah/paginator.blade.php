{{-- <div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center;">
    <div class="pagination-info mb-2" style="margin-bottom: 100px; color: black; font-weight: 500;">
        Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
    </div>
    <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $data->previousPageUrl() }}">
                <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
            </a>
        </li>
        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $data->nextPageUrl() }}">
                Next <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
            </a>
        </li>
    </ul>
</div> --}}


<div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center;">
    <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $data->previousPageUrl() }}">
                <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
            </a>
        </li>
        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
            <a class="page-link" href="{{ $data->nextPageUrl() }}">
                Next <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
            </a>
        </li>
    </ul>
</div>
