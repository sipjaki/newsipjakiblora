{{-- ============================================================
     MODAL SESSION – SERAGAM DENGAN TEMA BLORA 3D PREMIUM
     ============================================================ --}}
@php
    /**
     * Kumpulan session key yang ditampilkan sebagai modal.
     */
    $sessionModals = [
        'daftarpelatihan'            => ['title' => 'Berhasil !', 'type' => 'success',  'link' => '/daftarpesertapelatihan', 'linkText' => 'Peserta'],
        'daftarpelatihanandroid'     => ['title' => 'Berhasil !', 'type' => 'success',  'link' => '/respesertapelatihan',    'linkText' => 'Lihat Daftar Peserta'],
        'daftarskk'                  => ['title' => 'Berhasil !', 'type' => 'success',  'link' => '/dashboard',              'linkText' => 'Lihat Status Pendaftaran'],
        'verifikasikehadiran'        => ['title' => 'Berhasil !', 'type' => 'success'],
        'validasiberkasskk'          => ['title' => 'Berhasil !', 'type' => 'success'],
        'create'                     => ['title' => 'Berhasil !', 'type' => 'success'],
        'info'                       => ['title' => 'Berhasil',   'type' => 'success'],
        'verifikasipesertapelatihan' => ['title' => 'Berhasil',   'type' => 'verify'],
        'verifikasipesertaskk'       => ['title' => 'Berhasil',   'type' => 'verify'],
        'pengesahankrk'              => ['title' => 'Berhasil',   'type' => 'success'],
        'update'                     => ['title' => 'Berhasil !', 'type' => 'success'],
                'delete'                     => ['title' => 'Delete Berhasil !', 'type' => 'delete'],
        'gagaldaftar'                => ['title' => 'Gagal',      'type' => 'delete'],
        'pertanyaan'                 => ['title' => 'Admin Kami Akan Menghubungi Saudara, Harap Menunggu!', 'type' => 'question'],
    ];
@endphp

@foreach($sessionModals as $key => $cfg)
    @if(session($key))
        <div class="modal-session-overlay modal-verify-alert {{ $cfg['type'] === 'question' ? 'modal-question-alert' : '' }}" id="sessionModal-{{ $key }}">
            <div class="modal-session-box {{ $cfg['type'] === 'question' ? 'modal-box-question' : 'modal-box' }}">

                {{-- Crane animasi --}}
                <div class="modal-crane"></div>

                {{-- Tombol close (X) --}}
                <button type="button" class="modal-session-close" onclick="closeSessionModal('sessionModal-{{ $key }}')">
                    &times;
                </button>

                {{-- Logo maskot --}}
                <img src="/assets/00_masjaki/images/maskotjakon.png" alt="Maskot Jakon" class="modal-session-logo">

                {{-- Header instansi --}}
                {{-- <p class="modal-session-instansi">
                    @if($cfg['type'] === 'question')
                        Pemerintah Kabupaten Blora
                    @else
                        Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora
                    @endif
                </p> --}}

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
     STYLE MODAL SESSION – TEMA 3D PREMIUM
     ============================================================ -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

    .modal-session-overlay,
    .modal-session-overlay * {
        font-family: 'Poppins', sans-serif !important;
        box-sizing: border-box;
    }

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
        background: rgba(15, 23, 42, 0.65);
        backdrop-filter: blur(6px);
        animation: fadeIn 0.3s ease;
    }

    /* Card Modal 3D Premium */
    .modal-session-box {
        background: #FFFFFF;
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 24px;
        width: 100%;
        max-width: 420px;
        padding: 40px 30px 30px 30px;
        position: relative;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 12px;
        box-shadow:
            0 10px 25px -5px rgba(19, 168, 71, 0.15),
            0 25px 50px -12px rgba(0, 0, 0, 0.25);
        overflow: hidden;
        animation: slideUp 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    /* Crane animasi (background) */
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

    .modal-session-close {
        background: #f1f5f9;
        border: none;
        color: #64748b;
        font-size: 24px;
        font-weight: 600;
        line-height: 1;
        position: absolute;
        top: 15px;
        right: 15px;
        cursor: pointer;
        z-index: 10;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s ease;
    }

    .modal-session-close:hover {
        background: #fee2e2;
        color: #ef4444;
        transform: rotate(90deg);
    }

    .modal-session-logo {
        width: 110px !important;
        height: auto;
        object-fit: contain;
        position: relative;
        z-index: 1;
        animation: bounceZoom 2.5s ease-in-out infinite;
        margin-bottom: 5px;
        filter: drop-shadow(0 10px 10px rgba(0,0,0,0.1));
    }

    @keyframes bounceZoom {
        0%, 100% { transform: scale(1) translateY(0); }
        50%      { transform: scale(1.05) translateY(-8px); }
    }

    .modal-session-instansi {
        color: #64748b;
        font-size: 12px;
        line-height: 1.5;
        margin: 0;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        z-index: 1;
    }

    .modal-session-title {
        font-size: 24px;
        font-weight: 800;
        letter-spacing: -0.5px;
        line-height: 1.3;
        margin: 5px 0 10px 0;
        position: relative;
        z-index: 1;
    }

    .modal-session-title.text-success  { color: #16A34A; }
    .modal-session-title.text-update   { color: #1D4ED8; }
    .modal-session-title.text-delete   { color: #DC3545; }
    .modal-session-title.text-question { color: #B45309; font-size: 16px; line-height: 1.5; padding: 0 10px; }
    .modal-session-title.text-verify   { color: #0F766E; }

    .modal-session-desc,
    .modal-session-note {
        font-size: 14px;
        color: #475569;
        margin: 0;
        line-height: 1.6;
        position: relative;
        z-index: 1;
    }

    .modal-session-note {
        font-size: 12px;
        font-style: italic;
        color: #94A3B8;
        margin-top: 8px;
    }

    .modal-session-link {
        margin: 5px 0 15px 0;
        position: relative;
        z-index: 1;
    }

    .modal-session-link a {
        color: #16A34A;
        font-weight: 700;
        text-decoration: none;
        font-size: 14px;
        background: #ecfdf5;
        padding: 8px 16px;
        border-radius: 50px;
        display: inline-block;
        transition: all 0.25s ease;
        border: 1px solid #a7f3d0;
    }

    .modal-session-link a:hover {
        background: #16A34A;
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(22, 163, 74, 0.2);
    }

    .modal-session-btn {
        margin-top: 15px;
        padding: 12px 25px !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        border-radius: 12px !important;
        position: relative;
        z-index: 1;
        border: none;
        cursor: pointer;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        max-width: 280px;
        line-height: 1.4;
    }

    /* Warna Tombol */
    .modal-session-btn.button-baru {
        background: linear-gradient(135deg, #13A847, #0e7a33) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 15px rgba(19, 168, 71, 0.3);
    }

    .modal-session-btn.button-modern {
        background: linear-gradient(135deg, #1e3a8a, #1e40af) !important;
        color: #FFFFFF !important;
        box-shadow: 0 4px 15px rgba(30, 58, 138, 0.3);
    }

    .modal-session-btn.button-merah {
        background: linear-gradient(135deg, #ef4444, #b91c1c) !important;
        color: #FFFFFF !important;
        box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
    }

    .modal-session-btn:hover {
        transform: translateY(-2px);
        filter: brightness(1.1);
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px) scale(0.95); }
        to   { opacity: 1; transform: translateY(0) scale(1); }
    }

    @media (max-width: 480px) {
        .modal-session-box {
            max-width: 92%;
            padding: 30px 20px 20px 20px;
            border-radius: 20px;
        }
        .modal-session-logo { width: 90px !important; }
        .modal-session-title { font-size: 20px; }
        .modal-session-title.text-question { font-size: 14px; }
        .modal-session-btn { font-size: 12px !important; padding: 10px 20px !important; }
    }
</style>

<!-- ============================================================
     SCRIPT MODAL SESSION – TUTUP SAAT KLIK OVERLAY + CRANE ACAK
     ============================================================ -->
<script>
(function() {
    'use strict';

    // Fungsi untuk menutup modal berdasarkan ID
    window.closeSessionModal = function(id) {
        var modal = document.getElementById(id);
        if (modal) {
            modal.style.display = 'none';
        }
    };

    // Tutup modal jika klik di luar konten modal (overlay)
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

            const randomTop   = Math.random() * 60 + 15;
            const randomSize  = Math.random() * 40 + 60;
            const randomSpeed = Math.random() * 10 + 10;

            crane.style.top = randomTop + '%';
            crane.style.width = randomSize + 'px';
            crane.style.height = (randomSize * 0.75) + 'px';
            crane.style.animationDuration = randomSpeed + 's';
        });
    });
})();
</script>
