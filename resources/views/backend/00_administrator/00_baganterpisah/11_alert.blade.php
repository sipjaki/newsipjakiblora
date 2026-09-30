{{-- ============================================================
     MODAL SESSION – SERAGAM DENGAN TEMA BLORA
     ============================================================ --}}
@php
    /**
     * Kumpulan session key yang ditampilkan sebagai modal.
     * Format: 'session_key' => ['title', 'type', 'link' => optional]
     *   type: 'success' | 'update' | 'delete' | 'question' | 'verify'
     */
    $sessionModals = [
        'daftarpelatihan'         => ['title' => 'Berhasil !', 'type' => 'success',  'link' => '/daftarpesertapelatihan', 'linkText' => 'Peserta'],
        'daftarpelatihanandroid'  => ['title' => 'Berhasil !', 'type' => 'success',  'link' => '/respesertapelatihan',    'linkText' => 'Lihat Daftar Peserta'],
        'daftarskk'               => ['title' => 'Berhasil !', 'type' => 'success',  'link' => '/dashboard',              'linkText' => 'Lihat Status Pendaftaran'],
        'verifikasikehadiran'     => ['title' => 'Berhasil !', 'type' => 'success'],
        'validasiberkasskk'       => ['title' => 'Berhasil !', 'type' => 'success'],
        'create'                  => ['title' => 'Berhasil !', 'type' => 'success'],
        'info'                    => ['title' => 'Berhasil',   'type' => 'success'],
        'verifikasipesertapelatihan' => ['title' => 'Berhasil', 'type' => 'verify'],
        'verifikasipesertaskk'    => ['title' => 'Berhasil',   'type' => 'verify'],
        'pengesahankrk'           => ['title' => 'Berhasil',   'type' => 'success'],
        'update'                  => ['title' => 'Update Berhasil !', 'type' => 'update'],
        'delete'                  => ['title' => 'Delete Berhasil !', 'type' => 'delete'],
        'gagaldaftar'             => ['title' => 'Gagal',      'type' => 'delete'],
        'pertanyaan'              => ['title' => 'Admin Kami Akan Menghubungi Saudara, Harap Menunggu!', 'type' => 'question'],
    ];
@endphp

@foreach($sessionModals as $key => $cfg)
    @if(session($key))
        <div class="modal-session-overlay modal-verify-alert {{ $cfg['type'] === 'question' ? 'modal-question-alert' : '' }}">
            <div class="modal-session-box {{ $cfg['type'] === 'question' ? 'modal-box-question' : 'modal-box' }}">

                {{-- Crane animasi --}}
                <div class="modal-crane"></div>

                {{-- Tombol close (X) --}}
                <button
                    type="button"
                    class="modal-session-close btnalert-view"
                    onclick="this.closest('.modal-session-overlay').style.display='none';"
                >&times;</button>

                {{-- Logo maskot --}}
                <img
                    src="/assets/00_masjaki/images/maskotjakon.png"
                    alt="Maskot Jakon"
                    class="modal-session-logo logo-animate-bounce"
                >

                {{-- Header instansi --}}
                <p class="modal-session-instansi">
                    @if($cfg['type'] === 'question')
                        Pemerintah Kabupaten Blora
                    @else
                        Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora
                    @endif
                </p>

                {{-- Judul --}}
                <div class="modal-session-title
                    @if($cfg['type'] === 'success') text-success
                    @elseif($cfg['type'] === 'update') text-update
                    @elseif($cfg['type'] === 'delete') text-delete
                    @elseif($cfg['type'] === 'question') text-question
                    @else text-verify
                    @endif
                ">
                    {{ $cfg['title'] }}
                </div>

                {{-- Body / pesan tambahan --}}
                @if(isset($cfg['link']))
                    <p class="modal-session-desc">
                        Silakan klik tautan berikut:
                    </p>
                    <p class="modal-session-link">
                        <a href="{{ $cfg['link'] }}">{{ $cfg['linkText'] }}</a>
                    </p>
                @endif

                @if($cfg['type'] === 'question')
                    <p class="modal-session-note">
                        Silakan muat ulang halaman ini atau tekan tanda X di pojok kanan atas.
                    </p>
                @endif

                {{-- Pesan session --}}
                <button class="modal-session-btn
                    @if($cfg['type'] === 'update') button-modern
                    @elseif($cfg['type'] === 'delete') button-merah
                    @elseif($cfg['type'] === 'verify') button-baru
                    @else button-baru
                    @endif
                ">
                    {{ session($key) }}
                </button>

            </div>
        </div>
    @endif
@endforeach


<!-- ============================================================
     STYLE MODAL SESSION – SERAGAM TEMA BLORA
     ============================================================ -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    /* --- Overlay --- */
    .modal-session-overlay {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 9999;
        inset: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        padding: 20px;
        background: rgba(15, 23, 42, 0.5);
        backdrop-filter: blur(2px);
    }

    /* --- Box Utama --- */
    .modal-session-box {
        background: #FFFFFF;
        border: 1px solid #E9EDF4;
        border-radius: 16px;
        width: 100%;
        max-width: 400px;
        padding: 32px 24px 24px 24px;
        position: relative;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        animation: fadeIn 0.4s ease;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.10);
    }

    /* --- Crane animasi (background) --- */
    .modal-crane {
        position: absolute;
        width: 80px;
        height: 60px;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%2316A34A"><path d="M21 6h-4v2h4V6zm-5 0h-4v2h4V6zm-5 0H7v2h4V6zM6 6H2v2h4V6zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2z"/></svg>');
        background-size: contain;
        background-repeat: no-repeat;
        opacity: 0.08;
        z-index: 0;
        animation: craneFly 15s linear infinite;
        pointer-events: none;
    }

    @keyframes craneFly {
        0%   { transform: translateX(-100px) translateY(0); }
        25%  { transform: translateX(25%)   translateY(-20px); }
        50%  { transform: translateX(150%)  translateY(0); }
        75%  { transform: translateX(25%)   translateY(20px); }
        100% { transform: translateX(-100px) translateY(0); }
    }

    /* --- Tombol Close (X) --- */
    .modal-session-close {
        background: transparent;
        border: none;
        color: #94A3B8;
        font-size: 22px;
        font-weight: 700;
        line-height: 1;
        position: absolute;
        top: 12px;
        right: 16px;
        cursor: pointer;
        z-index: 10;
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .modal-session-close:hover {
        color: #DC3545;
        background: #FEF2F2;
    }

    /* --- Logo Maskot --- */
    .modal-session-logo {
        width: 100px !important;
        height: auto;
        object-fit: contain;
        position: relative;
        z-index: 1;
        animation: bounceZoom 2.5s ease-in-out infinite;
        margin-bottom: 4px;
    }

    @keyframes bounceZoom {
        0%, 100% { transform: scale(1) translateY(0); }
        50%      { transform: scale(1.08) translateY(-6px); }
    }

    /* --- Instansi --- */
    .modal-session-instansi {
        color: #4A5A72;
        font-size: 12px;
        line-height: 1.5;
        margin: 0;
        font-weight: 500;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    /* --- Judul --- */
    .modal-session-title {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: -0.3px;
        line-height: 1.3;
        margin: 4px 0 6px 0;
        position: relative;
        z-index: 1;
    }

    .modal-session-title.text-success  { color: #16A34A; }
    .modal-session-title.text-update   { color: #1D4ED8; }
    .modal-session-title.text-delete   { color: #DC3545; }
    .modal-session-title.text-question { color: #B45309; font-size: 15px; line-height: 1.5; padding: 0 8px; }
    .modal-session-title.text-verify   { color: #0F766E; }

    /* --- Deskripsi --- */
    .modal-session-desc,
    .modal-session-note {
        font-size: 13px;
        color: #6B7A93;
        margin: 0;
        line-height: 1.5;
        position: relative;
        z-index: 1;
    }

    .modal-session-note {
        font-size: 11px;
        font-style: italic;
        color: #94A3B8;
        margin-top: 6px;
    }

    .modal-session-link {
        margin: 0 0 4px 0;
        position: relative;
        z-index: 1;
    }

    .modal-session-link a {
        color: #16A34A;
        font-weight: 700;
        text-decoration: none;
        font-size: 13px;
        border-bottom: 1px solid transparent;
        transition: all 0.2s ease;
    }

    .modal-session-link a:hover {
        color: #14532D;
        border-bottom-color: #14532D;
    }

    /* --- Tombol Pesan Session --- */
    .modal-session-btn {
        margin-top: 10px;
        padding: 9px 20px !important;
        font-size: 12px !important;
        font-weight: 700 !important;
        border-radius: 10px !important;
        position: relative;
        z-index: 1;
        border: none;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.2px;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        max-width: 100%;
        text-align: center;
        white-space: normal;
        line-height: 1.4;
    }

    /* Default: hijau soft (untuk success/info) */
    .modal-session-btn.button-baru {
        background: linear-gradient(145deg, #e6f1ff, #d4e6ff) !important;
        color: #003366 !important;
        border: 1px solid #bfdcff !important;
    }

    /* Verify (tosca) */
    .modal-session-btn.button-baru:not(.button-merah):not(.button-modern) {
        background: linear-gradient(145deg, #d1fae5, #a7f3d0) !important;
        color: #065f46 !important;
        border: 1px solid #6ee7b7 !important;
    }

    /* Update (navy) */
    .modal-session-btn.button-modern {
        background: linear-gradient(145deg, #1e3a8a, #1e40af) !important;
        color: #FFFFFF !important;
        border: 1px solid #1e3a8a !important;
    }

    /* Delete (merah) */
    .modal-session-btn.button-merah {
        background: linear-gradient(145deg, #b33c3c, #8b1c1c) !important;
        color: #FFFFFF !important;
        border: 1px solid #7a1414 !important;
    }

    .modal-session-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.10);
        filter: brightness(1.05);
    }

    /* --- Animasi Fade In --- */
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to   { opacity: 1; transform: scale(1); }
    }

    /* --- Responsive --- */
    @media (max-width: 480px) {
        .modal-session-box {
            max-width: 92%;
            padding: 26px 18px 20px 18px;
            border-radius: 12px;
        }

        .modal-session-logo {
            width: 84px !important;
        }

        .modal-session-title {
            font-size: 19px;
        }

        .modal-session-title.text-question {
            font-size: 14px;
        }

        .modal-session-instansi {
            font-size: 11px;
        }

        .modal-session-btn {
            font-size: 11px !important;
            padding: 8px 16px !important;
        }
    }
</style>


<!-- ============================================================
     SCRIPT MODAL SESSION – TUTUP SAAT KLIK OVERLAY + CRANE ACAK
     ============================================================ -->
<script>
(function() {
    'use strict';

    // Tutup modal jika klik di luar konten modal
    window.addEventListener('click', function(e) {
        document.querySelectorAll('.modal-session-overlay').forEach(function(modal) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    });

    // Tutup modal dengan tombol ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal-session-overlay').forEach(function(modal) {
                if (modal.style.display !== 'none') {
                    modal.style.display = 'none';
                }
            });
        }
    });

    // Tambahkan crane ke setiap modal saat dimuat + posisi acak
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.modal-session-box').forEach(function(modal) {
            const crane = modal.querySelector('.modal-crane');
            if (!crane) return;

            const randomTop   = Math.random() * 60 + 15;   // 15–75%
            const randomSize  = Math.random() * 40 + 60;   // 60–100px
            const randomSpeed = Math.random() * 10 + 10;   // 10–20s

            crane.style.top = randomTop + '%';
            crane.style.width = randomSize + 'px';
            crane.style.height = (randomSize * 0.75) + 'px';
            crane.style.animationDuration = randomSpeed + 's';
        });
    });
})();
</script>