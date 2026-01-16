<!-- PAGINATION COMPONENT MODERN BLORA -->
<div class="blora-pagination-container"
     style="margin-top: 50px; display: flex; flex-direction: column; align-items: center; text-align: center; font-family: 'Segoe UI', system-ui, sans-serif;">

    <!-- Info Box Modern -->
    <div class="blora-info-card"
        style="padding: 16px 28px; border-radius: 12px; margin-bottom: 25px;
               background: linear-gradient(135deg, #04b347 0%, #0a8f3a 100%);
               border: none; box-shadow: 0 8px 32px rgba(4, 179, 71, 0.2);
               display: flex; align-items: center; justify-content: center;
               transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
               backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1);">
        <div class="blora-info-content" style="color: white; font-weight: 600; text-align: center; display: flex; align-items: center; gap: 8px;">
            <div style="background: rgba(255,255,255,0.15); padding: 8px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <img src="/assets/00_android/00_iconmenuutama/01_menuutam/06_shspkonstruksi.png"
                        alt="SHS P Konstruksi"
                        style="width: 32px; height: 32px; object-fit: contain;">
                </div>

            <div style="text-align: left;">
                <div style="font-size: 14px; opacity: 0.9; margin-bottom: 4px;">{{ $title }}</div>
                <div style="font-size: 16px;">
                    Data Ke <span style="color: #ffeb3b; font-weight: 700;">{{ $data->firstItem() }}</span> -
                    <span style="color: #ffeb3b; font-weight: 700;">{{ $data->lastItem() }}</span> dari
                    <span style="color: #ffeb3b; font-weight: 700;">{{ $data->total() }}</span> Jumlah Data
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination Navigation Modern -->
    @php
        $window = 2; // Jumlah halaman di kiri/kanan halaman aktif
        $last = $data->lastPage();
        $current = $data->currentPage();

        // Menghitung halaman yang akan ditampilkan
        $start = max($current - $window, 1);
        $end = min($current + $window, $last);

        // Pastikan selalu ada minimal 5 halaman jika memungkinkan
        if ($end - $start < 4 && $last > 5) {
            if ($current <= 3) {
                $end = min(5, $last);
            } elseif ($current >= $last - 2) {
                $start = max($last - 4, 1);
            }
        }

        // Helper untuk URL dengan semua query parameter
        $paginator = $data->appends(request()->except('page'));
    @endphp

    <div class="blora-pagination-wrapper"
         style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap; justify-content: center;">

        {{-- First Page Button --}}
        @if($current > 1)
        <a href="{{ $paginator->url(1) }}"
           class="blora-page-btn blora-first"
           style="display: flex; align-items: center; gap: 6px; padding: 10px 16px; border-radius: 10px;
                  background: #f0f9f0; color: #04b347; text-decoration: none; font-weight: 600;
                  border: 2px solid #d1f0d1; transition: all 0.3s ease;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L12 12L18 18M6 6V18"/>
            </svg>
            First
        </a>
        @endif

        {{-- Previous Button --}}
        <a href="{{ $data->onFirstPage() ? '#' : $paginator->previousPageUrl() }}"
           class="blora-page-btn blora-prev {{ $data->onFirstPage() ? 'disabled' : '' }}"
           style="display: flex; align-items: center; gap: 6px; padding: 10px 20px; border-radius: 10px;
                  background: {{ $data->onFirstPage() ? '#e0e0e0' : '#04b347' }};
                  color: {{ $data->onFirstPage() ? '#999' : 'white' }};
                  text-decoration: none; font-weight: 600; border: none;
                  transition: all 0.3s ease; cursor: {{ $data->onFirstPage() ? 'not-allowed' : 'pointer' }};
                  box-shadow: 0 4px 12px rgba(4, 179, 71, 0.2);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 19l-7-7 7-7"/>
            </svg>
            Prev
        </a>

        {{-- Page Numbers --}}
        <div class="blora-pages-container"
             style="display: flex; align-items: center; gap: 6px; flex-wrap: wrap;">

            {{-- Ellipsis for beginning --}}
            @if($start > 1)
                <span style="padding: 8px 12px; color: #666; font-weight: 600;">...</span>
            @endif

            {{-- Page Numbers --}}
            @for ($page = $start; $page <= $end; $page++)
                @if($page == $current)
                    <div class="blora-page-current"
                         style="padding: 12px 18px; border-radius: 10px; background: linear-gradient(135deg, #04b347 0%, #0a8f3a 100%);
                                color: white; font-weight: 700; box-shadow: 0 6px 20px rgba(4, 179, 71, 0.3);
                                border: 2px solid white; position: relative;">
                        {{ $page }}
                        <div style="position: absolute; bottom: -8px; left: 50%; transform: translateX(-50%);
                                    width: 8px; height: 8px; background: #ffeb3b; border-radius: 50%;"></div>
                    </div>
                @else
                    <a href="{{ $paginator->url($page) }}"
                       class="blora-page-number"
                       style="padding: 10px 16px; border-radius: 10px; background: white; color: #04b347;
                              text-decoration: none; font-weight: 600; border: 2px solid #e0f2e0;
                              transition: all 0.3s ease; min-width: 45px;">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            {{-- Ellipsis for end --}}
            @if($end < $last)
                <span style="padding: 8px 12px; color: #666; font-weight: 600;">...</span>
            @endif
        </div>

        {{-- Next Button --}}
        <a href="{{ $data->hasMorePages() ? $paginator->nextPageUrl() : '#' }}"
           class="blora-page-btn blora-next {{ !$data->hasMorePages() ? 'disabled' : '' }}"
           style="display: flex; align-items: center; gap: 6px; padding: 10px 20px; border-radius: 10px;
                  background: {{ !$data->hasMorePages() ? '#e0e0e0' : '#04b347' }};
                  color: {{ !$data->hasMorePages() ? '#999' : 'white' }};
                  text-decoration: none; font-weight: 600; border: none;
                  transition: all 0.3s ease; cursor: {{ !$data->hasMorePages() ? 'not-allowed' : 'pointer' }};
                  box-shadow: 0 4px 12px rgba(4, 179, 71, 0.2);">
            Next
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 5l7 7-7 7"/>
            </svg>
        </a>

        {{-- Last Page Button --}}
        @if($current < $last)
        <a href="{{ $paginator->url($last) }}"
           class="blora-page-btn blora-last"
           style="display: flex; align-items: center; gap: 6px; padding: 10px 16px; border-radius: 10px;
                  background: #f0f9f0; color: #04b347; text-decoration: none; font-weight: 600;
                  border: 2px solid #d1f0d1; transition: all 0.3s ease;">
            Last
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 6V18M18 6L12 12L18 18"/>
            </svg>
        </a>
        @endif

    </div>

    <!-- Page Indicator -->
    <div class="blora-page-indicator"
         style="margin-top: 20px; padding: 8px 20px; border-radius: 20px; background: #f8fff8;
                color: #0a8f3a; font-weight: 600; font-size: 14px; border: 1px solid #d1f0d1;">
        Halaman Ke {{ $current }} Dari {{ $last }}
    </div>

</div>

<style>
/* MODERN BLORA PAGINATION STYLES */

/* Global Reset */
.blora-pagination-container * {
    box-sizing: border-box;
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
}

/* Info Card Animation */
.blora-info-card {
    position: relative;
    overflow: hidden;
}

.blora-info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: 0.5s;
}

.blora-info-card:hover::before {
    left: 100%;
}

/* Page Numbers Hover Effects */
.blora-page-number {
    position: relative;
    overflow: hidden;
}

.blora-page-number:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(4, 179, 71, 0.25);
    border-color: #04b347 !important;
    color: #0a8f3a !important;
}

.blora-page-number::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(4, 179, 71, 0.1);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.blora-page-number:hover::before {
    width: 150px;
    height: 150px;
}

/* Current Page Animation */
.blora-page-current {
    animation: pulse-green 2s infinite;
}

@keyframes pulse-green {
    0% {
        box-shadow: 0 6px 20px rgba(4, 179, 71, 0.3);
    }
    50% {
        box-shadow: 0 6px 30px rgba(4, 179, 71, 0.5);
    }
    100% {
        box-shadow: 0 6px 20px rgba(4, 179, 71, 0.3);
    }
}

/* Button Hover Effects */
.blora-page-btn:not(.disabled):hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 30px rgba(4, 179, 71, 0.4) !important;
}

/* Disabled State */
.blora-page-btn.disabled {
    opacity: 0.6;
    cursor: not-allowed !important;
    box-shadow: none !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    .blora-pagination-wrapper {
        flex-direction: column;
        gap: 12px;
    }

    .blora-pages-container {
        order: 3;
        margin-top: 10px;
    }

    .blora-page-btn.blora-first,
    .blora-page-btn.blora-last {
        display: none !important;
    }

    .blora-info-content {
        flex-direction: column;
        text-align: center !important;
        gap: 12px;
    }
}

@media (max-width: 480px) {
    .blora-page-number,
    .blora-page-current {
        padding: 8px 12px !important;
        min-width: 40px !important;
        font-size: 14px;
    }

    .blora-page-btn {
        padding: 8px 16px !important;
        font-size: 14px;
    }

    .blora-info-card {
        padding: 12px 16px !important;
    }
}

/* Loading Animation */
.blora-page-btn.loading {
    position: relative;
    color: transparent !important;
}

.blora-page-btn.loading::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    border: 2px solid white;
    border-radius: 50%;
    border-top-color: transparent;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}

/* Gradient Border Effect for Container */
.blora-pagination-container {
    position: relative;
}

.blora-pagination-container::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 10%;
    width: 80%;
    height: 1px;
    background: linear-gradient(90deg, transparent, #04b347, transparent);
}
</style>

<script>
// Smooth scroll to top when changing page
document.querySelectorAll('.blora-page-number, .blora-page-btn').forEach(link => {
    link.addEventListener('click', function(e) {
        if (!this.classList.contains('disabled')) {
            // Add loading state
            this.classList.add('loading');

            // Smooth scroll to top
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            // Optional: Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        }
    });
});

// Hover effect for page numbers
document.querySelectorAll('.blora-page-number').forEach(btn => {
    btn.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-3px)';
    });

    btn.addEventListener('mouseleave', function() {
        this.style.transform = '';
    });
});
</script>
