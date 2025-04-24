
<style>
    /* Style untuk tombol yang dinonaktifkan */
    .custom-page-item.disabled .custom-page-link {
        background-color: #9CA3AF !important;
        color: white !important;
        border-color: #9CA3AF !important;
        pointer-events: none;
    }

    /* Tambahan agar semua elemen dalam container pakai font-size 15px */
    .custom-pagination-container * {
        font-size: 15px !important;
    }

    /* Animasi Modern */
    .custom-pagination-container .custom-page-link {
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .custom-pagination-container .custom-page-link::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            45deg,
            transparent 10%,
            rgba(255, 255, 255, 0.4) 50%,
            transparent 90%
        );
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(-100%) rotate(45deg);
        z-index: 1;
    }

    .custom-pagination-container .custom-page-link:hover::before {
        transform: translateX(100%) rotate(45deg);
    }

    /* Efek tambahan untuk tombol aktif */
    .custom-page-item.active .custom-page-link {
        box-shadow: 0 4px 15px rgba(22, 163, 74, 0.3);
    }

    /* Efek hover yang lebih smooth */
    .custom-page-link:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    /* Nonaktifkan animasi untuk tombol disabled */
    .custom-page-item.disabled .custom-page-link::before {
        display: none;
    }
</style>


<div class="custom-pagination-container"
    style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; text-align: center; font-size: 15px;">

    <!-- Box Informasi Pagination -->
    <div class="custom-pagination-info-box"
        style="padding: 12px 20px; border-radius: 8px; margin-bottom: 15px;
               background-color: #166534; border: 1px solid #166534; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
               display: flex; align-items: center; justify-content: center;
               transition: all 0.3s ease-in-out;"
        onmouseover="this.style.backgroundColor='white'; this.style.color='#166534';
                     this.querySelector('.custom-pagination-info').style.color='#166534';"
        onmouseout="this.style.backgroundColor='#166534'; this.style.color='white';
                     this.querySelector('.custom-pagination-info').style.color='white';">

        <div class="custom-pagination-info"
            style="color: white; font-weight: 600; text-align: center;">
            📊 Data Ke <span style="color: #ffffff;">{{ $data->firstItem() }}</span>
            Sampai <span style="color: #ffffff;">{{ $data->lastItem() }}</span>
            Dari <span style="color: #ffffff;">{{ $data->total() }}</span> Jumlah
            <span style="color: #ffffff;">{{$title}}</span>
        </div>
    </div>

    <!-- Navigasi Pagination -->
    <ul class="custom-pagination-paginate"
        style="display: flex; padding-left: 0; list-style: none; gap: 10px; margin: 0;">

        <!-- Tombol Previous -->
        <li class="custom-page-item {{ $data->onFirstPage() ? 'disabled' : '' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->previousPageUrl() }}"
                style="background-color: #14532D; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #14532D;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#14532D'; this.style.color='white';">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px; height:16px; margin-right:8px;"><path d="M15 19l-7-7 7-7"/></svg>
                Previous
            </a>
        </li>

        <!-- Tombol Halaman -->
        @foreach ($data->links()->elements[0] as $page => $url)
        <li class="custom-page-item {{ $data->currentPage() == $page ? 'active' : '' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $url }}"
                style="background-color: {{ $data->currentPage() == $page ? '#16A34A' : '#374151' }};
                color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none;
                border: 1px solid {{ $data->currentPage() == $page ? '#16A34A' : '#374151' }};
                transition: all 0.3s ease;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='{{ $data->currentPage() == $page ? '#16A34A' : '#374151' }}'; this.style.color='white';">
                {{ $page }}
            </a>
        </li>
        @endforeach

        <!-- Tombol Next -->
        <li class="custom-page-item {{ $data->hasMorePages() ? '' : 'disabled' }}"
            style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->nextPageUrl() }}"
                style="background-color: #14532D; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #14532D;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#14532D'; this.style.color='white';">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px; height:16px; margin-left:8px;"><path d="M9 5l7 7-7 7"/></svg>
            </a>
        </li>
    </ul>
</div>
