<!-- PAGINATION COMPONENT -->
<div class="custom-pagination-container"
     style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; text-align: center; font-size: 15px;">

    <!-- Info Box -->
    <div class="custom-pagination-info-box"
        style="padding: 12px 20px; border-radius: 8px; margin-bottom: 15px;
               background-color: #166534; border: 1px solid #166534; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
               display: flex; align-items: center; justify-content: center;
               transition: all 0.3s ease-in-out;"
        onmouseover="this.style.backgroundColor='white'; this.style.color='#166534';
                     this.querySelector('.custom-pagination-info').style.color='#166534';"
        onmouseout="this.style.backgroundColor='#166534'; this.style.color='white';
                     this.querySelector('.custom-pagination-info').style.color='white';">

        <div class="custom-pagination-info" style="color: white; font-weight: 600; text-align: center;">
            📊 Data Ke <span style="color: currentColor;">{{ $data->firstItem() }}</span>
            Sampai <span style="color: currentColor;">{{ $data->lastItem() }}</span>
            Dari <span style="color: currentColor;">{{ $data->total() }}</span> Jumlah
            <span style="color: currentColor;">{{$title}}</span>
        </div>
    </div>

    <!-- Pagination Navigation -->
    <ul class="custom-pagination-paginate"
        style="display: flex; padding-left: 0; list-style: none; gap: 10px; margin: 0;">

        <!-- Previous Button -->
        <li class="custom-page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->previousPageUrl() }}"
                style="background-color: #14532D; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #14532D;
                position: relative; overflow: hidden;"
                onmouseover="this.style.color='black';"
                onmouseout="this.style.color='white';">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     style="width:16px; height:16px; margin-right:8px;">
                    <path d="M15 19l-7-7 7-7"/>
                </svg>
                Previous
            </a>
        </li>

        <!-- Page Numbers -->
        @foreach ($data->links()->elements[0] as $page => $url)
        <li class="custom-page-item {{ $data->currentPage() == $page ? 'active' : '' }}" style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $url }}"
                style="background-color: {{ $data->currentPage() == $page ? '#16A34A' : '#374151' }};
                color: white; padding: 8px 12px; border-radius: 5px; text-decoration: none;
                border: 1px solid {{ $data->currentPage() == $page ? '#16A34A' : '#374151' }};
                transition: all 0.3s ease; position: relative; overflow: hidden;"
                onmouseover="this.style.color='black';"
                onmouseout="this.style.color='white';">
                {{ $page }}
            </a>
        </li>
        @endforeach

        <!-- Next Button -->
        <li class="custom-page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="display: flex; align-items: center;">
            <a class="custom-page-link" href="{{ $data->nextPageUrl() }}"
                style="background-color: #14532D; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none;
                display: flex; align-items: center; transition: all 0.3s ease; border: 1px solid #14532D;
                position: relative; overflow: hidden;"
                onmouseover="this.style.color='black';"
                onmouseout="this.style.color='white';">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     style="width:16px; height:16px; margin-left:8px;">
                    <path d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </li>
    </ul>
</div>

<style>
    /* Global Styles */
    .custom-pagination-container * {
        font-size: 15px !important;
        box-sizing: border-box;
    }

    /* Animation Effects */
    .custom-page-link {
        transform: translateZ(0);
        backface-visibility: hidden;
        -webkit-font-smoothing: subpixel-antialiased;
    }

    .custom-page-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 200%;
        height: 100%;
        background: linear-gradient(
            120deg,
            rgba(255, 255, 255, 0) 20%,
            rgba(255, 255, 255, 0.2) 50%,
            rgba(255, 255, 255, 0) 80%
        );
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1;
    }

    .custom-page-link:hover::before {
        left: 100%;
    }

    /* Active State Glow */
    .custom-page-item.active .custom-page-link {
        box-shadow: 0 0 15px rgba(22, 163, 74, 0.4);
        animation: pulse-glow 2s infinite;
    }

    /* Hover Effects */
    .custom-page-link:hover {
        transform: translateY(-2px) scale(1.02);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    /* Disabled State */
    .custom-page-item.disabled .custom-page-link {
        background-color: #9CA3AF !important;
        border-color: #9CA3AF !important;
        color: white !important;
        pointer-events: none;
        filter: grayscale(0.8);
    }

    /* Animations */
    @keyframes pulse-glow {
        0% { box-shadow: 0 0 10px rgba(22, 163, 74, 0.3); }
        50% { box-shadow: 0 0 20px rgba(22, 163, 74, 0.5); }
        100% { box-shadow: 0 0 10px rgba(22, 163, 74, 0.3); }
    }

    /* Smooth Transitions */
    .custom-pagination-info-box,
    .custom-page-link {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>
