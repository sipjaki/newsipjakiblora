<!-- PAGINATION COMPONENT MODERN BLORA -->
<div class="blora-pagination-container">

    <!-- Info Box Modern -->
    {{-- <div class="blora-info-card">
        <div class="blora-info-content">
            <div class="blora-info-icon">
                <img src="/assets/00_android/00_iconmenuutama/01_menuutam/06_shspkonstruksi.png"
                     alt="SHS P Konstruksi">
            </div>

            <div class="blora-info-text">
                <div class="blora-info-title">{{ $title }}</div>
                <div class="blora-info-count">
                    Data Ke <span class="blora-highlight">{{ $data->firstItem() }}</span> -
                    <span class="blora-highlight">{{ $data->lastItem() }}</span> dari
                    <span class="blora-highlight">{{ $data->total() }}</span> Jumlah Data
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Pagination Navigation Modern -->
    @php
        $window = 2;
        $last = $data->lastPage();
        $current = $data->currentPage();

        $start = max($current - $window, 1);
        $end = min($current + $window, $last);

        if ($end - $start < 4 && $last > 5) {
            if ($current <= 3) {
                $end = min(5, $last);
            } elseif ($current >= $last - 2) {
                $start = max($last - 4, 1);
            }
        }

        $paginator = $data->appends(request()->except('page'));
    @endphp

    <div class="blora-pagination-wrapper">

        {{-- First Page Button --}}
        @if($current > 1)
        <a href="{{ $paginator->url(1) }}" class="blora-page-btn blora-first">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M18 6L12 12L18 18M6 6V18"/>
            </svg>
            First
        </a>
        @endif

        {{-- Previous Button --}}
        <a href="{{ $data->onFirstPage() ? '#' : $paginator->previousPageUrl() }}"
           class="blora-page-btn blora-prev {{ $data->onFirstPage() ? 'disabled' : '' }}">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M15 19l-7-7 7-7"/>
            </svg>
            Prev
        </a>

        {{-- Page Numbers --}}
        <div class="blora-pages-container">

            {{-- Ellipsis for beginning --}}
            @if($start > 1)
                <span class="blora-ellipsis">...</span>
            @endif

            {{-- Page Numbers --}}
            @for ($page = $start; $page <= $end; $page++)
                @if($page == $current)
                    <div class="blora-page-current">
                        {{ $page }}
                    </div>
                @else
                    <a href="{{ $paginator->url($page) }}" class="blora-page-number">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            {{-- Ellipsis for end --}}
            @if($end < $last)
                <span class="blora-ellipsis">...</span>
            @endif
        </div>

        {{-- Next Button --}}
        <a href="{{ $data->hasMorePages() ? $paginator->nextPageUrl() : '#' }}"
           class="blora-page-btn blora-next {{ !$data->hasMorePages() ? 'disabled' : '' }}">
            Next
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M9 5l7 7-7 7"/>
            </svg>
        </a>

        {{-- Last Page Button --}}
        @if($current < $last)
        <a href="{{ $paginator->url($last) }}" class="blora-page-btn blora-last">
            Last
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M6 6V18M18 6L12 12L18 18"/>
            </svg>
        </a>
        @endif

    </div>

    <!-- Page Indicator -->
    <div class="blora-page-indicator">
        Halaman Ke <strong>{{ $current }}</strong> Dari <strong>{{ $last }}</strong>
    </div>

</div>

<style>
/* ============================================================
   MODERN BLORA PAGINATION – PUTIH DOMINAN + HIJAU POLESAN
   ============================================================ */

.blora-pagination-container {
    margin-top: 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    font-family: 'Poppins', 'Segoe UI', system-ui, sans-serif;
    position: relative;
    padding-bottom: 12px;
}

.blora-pagination-container * {
    box-sizing: border-box;
}

/* ============================================================
   INFO BOX – PUTIH DOMINAN, HIJAU SEBAGAI AKSEN
   ============================================================ */
.blora-info-card {
    padding: 12px 22px;
    border-radius: 12px;
    margin-bottom: 16px;
    background: #FFFFFF;                                   /* Putih dominan */
    border: 1px solid #E9EDF4;
    border-left: 4px solid var(--blora-green, #16A34A);    /* Aksen hijau kiri */
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.blora-info-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(22, 163, 74, 0.10);
    border-left-color: var(--blora-green-dark, #15803D);
}

.blora-info-content {
    color: #1A2B4A;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 12px;
    position: relative;
    z-index: 1;
}

.blora-info-icon {
    background: #F0FDF4;                                   /* Hijau soft */
    padding: 6px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    border: 1px solid rgba(22, 163, 74, 0.15);
}

.blora-info-icon img {
    width: 28px;
    height: 28px;
    object-fit: contain;
    display: block;
}

.blora-info-text {
    text-align: left;
}

.blora-info-title {
    font-size: 13px;
    color: #6B7A93;
    margin-bottom: 2px;
    font-weight: 500;
}

.blora-info-count {
    font-size: 14px;
    color: #1A2B4A;
    font-weight: 600;
    line-height: 1.3;
}

.blora-highlight {
    color: var(--blora-green, #16A34A);                    /* Angka hijau */
    font-weight: 700;
}

/* ============================================================
   PAGINATION WRAPPER
   ============================================================ */
.blora-pagination-wrapper {
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
    justify-content: center;
}

/* ============================================================
   BASE BUTTON – FIRST / PREV / NEXT / LAST – PUTIH DENGAN BORDER
   ============================================================ */
.blora-page-btn {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 7px 12px;
    border-radius: 8px;
    background: #FFFFFF;                                   /* Putih */
    color: var(--blora-green-deep, #14532D);               /* Teks hijau deep */
    text-decoration: none;
    font-weight: 600;
    font-size: 12px;
    border: 1.5px solid #E9EDF4;                           /* Border netral */
    transition: all 0.25s ease;
    cursor: pointer;
    white-space: nowrap;
    font-family: inherit;
    box-shadow: 0 1px 4px rgba(15, 23, 42, 0.04);
}

.blora-page-btn svg {
    stroke: currentColor;
    flex-shrink: 0;
}

.blora-page-btn:not(.disabled):hover {
    background: #F0FDF4;                                   /* Hover hijau soft */
    border-color: var(--blora-green, #16A34A);             /* Border hijau */
    color: var(--blora-green, #16A34A);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(22, 163, 74, 0.15);
}

/* First & Last – sama putih, tanpa perbedaan mencolok */
.blora-page-btn.blora-first,
.blora-page-btn.blora-last {
    background: #FFFFFF;
    color: #6B7A93;
    border: 1.5px solid #E9EDF4;
}

.blora-page-btn.blora-first:hover,
.blora-page-btn.blora-last:hover {
    background: #F0FDF4;
    border-color: var(--blora-green, #16A34A);
    color: var(--blora-green, #16A34A);
}

/* Disabled State */
.blora-page-btn.disabled {
    background: #F8FAFC !important;
    color: #CBD5E1 !important;
    border: 1.5px solid #F1F5F9 !important;
    cursor: not-allowed !important;
    box-shadow: none !important;
    transform: none !important;
    pointer-events: none;
}

/* ============================================================
   PAGE NUMBERS – PUTIH DOMINAN
   ============================================================ */
.blora-pages-container {
    display: flex;
    align-items: center;
    gap: 4px;
    flex-wrap: wrap;
}

.blora-page-number {
    padding: 7px 12px;
    min-width: 36px;
    border-radius: 8px;
    background: #FFFFFF;                                   /* Putih */
    color: #4A5A72;                                        /* Teks abu gelap */
    text-decoration: none;
    font-weight: 600;
    font-size: 12px;
    border: 1.5px solid #E9EDF4;
    transition: all 0.25s ease;
    text-align: center;
    font-family: inherit;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 1px 3px rgba(15, 23, 42, 0.03);
}

.blora-page-number:hover {
    background: #F0FDF4;                                   /* Hover hijau soft */
    color: var(--blora-green, #16A34A);
    border-color: var(--blora-green, #16A34A);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(22, 163, 74, 0.15);
}

/* Current Page – Hijau sebagai aksen (satu-satunya yang hijau solid) */
.blora-page-current {
    padding: 7px 12px;
    min-width: 36px;
    border-radius: 8px;
    background: var(--blora-green, #16A34A);               /* Hijau solid */
    color: #FFFFFF;
    font-weight: 700;
    font-size: 12px;
    border: 2px solid var(--blora-green, #16A34A);
    box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25);
    text-align: center;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    animation: pulseBlora 2s infinite;
    font-family: inherit;
}

@keyframes pulseBlora {
    0%, 100% { box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25); }
    50%      { box-shadow: 0 4px 18px rgba(22, 163, 74, 0.45); }
}

/* Ellipsis */
.blora-ellipsis {
    padding: 6px 6px;
    color: #94A3B8;
    font-weight: 700;
    font-size: 14px;
    user-select: none;
}

/* ============================================================
   PAGE INDICATOR – PUTIH DOMINAN
   ============================================================ */
.blora-page-indicator {
    margin-top: 14px;
    padding: 6px 16px;
    border-radius: 50px;
    background: #FFFFFF;                                   /* Putih */
    color: #4A5A72;
    font-weight: 500;
    font-size: 12px;
    border: 1px solid #E9EDF4;
    box-shadow: 0 1px 4px rgba(15, 23, 42, 0.03);
}

.blora-page-indicator strong {
    color: var(--blora-green, #16A34A);                    /* Angka hijau */
    font-weight: 700;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 768px) {
    .blora-pagination-wrapper {
        gap: 6px;
    }

    .blora-page-btn.blora-first,
    .blora-page-btn.blora-last {
        display: none;
    }

    .blora-info-content {
        flex-direction: column;
        text-align: center;
        gap: 8px;
    }

    .blora-info-text {
        text-align: center;
    }

    .blora-info-title { font-size: 12px; }
    .blora-info-count { font-size: 13px; }
}

@media (max-width: 480px) {
    .blora-page-number,
    .blora-page-current {
        padding: 6px 10px;
        min-width: 32px;
        font-size: 11px;
    }

    .blora-page-btn {
        padding: 6px 10px;
        font-size: 11px;
    }

    .blora-info-card {
        padding: 10px 16px;
    }

    .blora-info-icon img {
        width: 24px;
        height: 24px;
    }
}

/* ============================================================
   LOADING STATE
   ============================================================ */
.blora-page-btn.loading {
    position: relative;
    color: transparent !important;
}

.blora-page-btn.loading::after {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    border: 2px solid var(--blora-green, #16A34A);
    border-radius: 50%;
    border-top-color: transparent;
    animation: spinBlora 1s linear infinite;
    top: 50%;
    left: 50%;
    margin: -8px -8px 0 -8px;
    margin-top: -8px;
    margin-left: -8px;
}

@keyframes spinBlora {
    to { transform: rotate(360deg); }
}
</style>

<script>
// Smooth scroll + loading state saat pindah halaman
document.querySelectorAll('.blora-page-number, .blora-page-btn').forEach(link => {
    link.addEventListener('click', function(e) {
        if (!this.classList.contains('disabled')) {
            this.classList.add('loading');

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        }
    });
});
</script>