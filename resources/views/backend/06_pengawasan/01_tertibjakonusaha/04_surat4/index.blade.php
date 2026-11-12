@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ═══════════════════════════════════════════════════
   BACKGROUND HIJAU TITIK-TITIK
   ═══════════════════════════════════════════════════ */
.bg-soft-page {
    background:
        radial-gradient(circle at 15% 15%, rgba(19, 168, 71, 0.10) 0%, transparent 45%),
        radial-gradient(circle at 85% 85%, rgba(19, 168, 71, 0.08) 0%, transparent 45%),
        linear-gradient(180deg, #d9f0e2 0%, #eaf7ee 200px, #f8fafc 400px, #f8fafc 100%);
    background-attachment: fixed;
    min-height: 100vh;
    padding: 24px 0 48px;
    position: relative;
}
.bg-soft-page::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image:
        radial-gradient(rgba(19, 168, 71, 0.18) 1.5px, transparent 1.5px);
    background-size: 22px 22px;
    pointer-events: none;
    z-index: 0;
    mask-image: linear-gradient(180deg, black 0%, black 60%, transparent 100%);
    -webkit-mask-image: linear-gradient(180deg, black 0%, black 60%, transparent 100%);
}
.bg-soft-page > * { position: relative; z-index: 1; }

/* ==========================================
   STYLING 3D BACKGROUND & TABLE PREMIUM
   ========================================== */
.bg-3d-pattern {
    background-color: #f4f7f6;
    background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
    background-size: 20px 20px;
    min-height: 100vh;
    padding-top: 20px;
    padding-bottom: 40px;
}

.card-3d {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 10px 25px -5px rgba(19, 168, 71, 0.15), 0 20px 40px -10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    margin-bottom: 30px;
}
.card-3d:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px -5px rgba(19, 168, 71, 0.25), 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}

.card-header-custom {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
}

/* ==========================================
   BANNER TITLE BERKAS
   ========================================== */
.berkas-title-banner {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px 20px;
    margin-bottom: 16px;
    background: linear-gradient(135deg, #13A847 0%, #0f8f3a 100%);
    border-radius: 14px;
    box-shadow: 0 8px 20px -4px rgba(19, 168, 71, 0.35);
    position: relative;
    overflow: hidden;
}
.berkas-title-banner::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(255,255,255,0.15), transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}
.berkas-title-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.18);
    border: 1px solid rgba(255, 255, 255, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 22px;
    flex-shrink: 0;
    backdrop-filter: blur(4px);
}
.berkas-title-text {
    flex: 1;
    min-width: 0;
}
.berkas-title-label {
    font-size: 10px;
    font-weight: 800;
    color: rgba(255, 255, 255, 0.85);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 2px;
}
.berkas-title-name {
    font-size: 16px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.3;
    word-wrap: break-word;
}
.berkas-title-count {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 20px;
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    white-space: nowrap;
    flex-shrink: 0;
}

/* ==========================================
   TABLE MODERN
   ========================================== */
.table-responsive-custom {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    width: 100%;
    border-radius: 0 0 20px 20px;
}
.table-custom-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.85rem;
    min-width: 900px;
}
.table-custom-modern thead th {
    background: #f8fafc !important;
    color: #4a5a72 !important;
    font-weight: 700;
    padding: 15px 12px !important;
    text-align: center;
    border-bottom: 2px solid #e2e8f0 !important;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}
.table-custom-modern tbody td {
    padding: 12px !important;
    color: #1a2b4a;
    border-bottom: 1px solid #f1f5f9 !important;
    vertical-align: top; /* Agar list rata atas */
}
.table-custom-modern tbody tr:nth-child(odd) td { background-color: #ffffff !important; }
.table-custom-modern tbody tr:nth-child(even) td { background-color: #f1f5f9 !important; }
.table-custom-modern tbody tr:hover td {
    background-color: #bbf7d0 !important;
    border-bottom-color: #86efac !important;
    cursor: pointer;
}
.table-custom-modern tbody tr.empty-row:hover td {
    background-color: #ffffff !important;
    cursor: default;
}

/* LIST KOMPONEN (Untuk isi tabel) */
.list-komponen {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.item-komponen {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 4px 8px;
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    font-size: 12px;
}
.item-komponen .label {
    font-weight: 600;
    color: #475569;
}
.item-komponen .status {
    font-weight: 800;
    font-size: 10px;
    padding: 2px 8px;
    border-radius: 4px;
}
.status-ok { background: #dcfce7; color: #15803d; }
.status-no { background: #fee2e2; color: #b91c1c; }
.status-empty { background: #f1f5f9; color: #94a3b8; }

/* EMPTY STATE */
.empty-state {
    padding: 50px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
}
.empty-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #FEF2F2;
    border: 2px dashed #ef4444;
    color: #ef4444;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin-bottom: 8px;
}
.empty-title { font-size: 16px; font-weight: 700; color: #1A2B4A; margin: 8px 0 0 0; }
.empty-desc { font-size: 13px; color: #6B7A93; margin: 0; }

/* ==========================================
   CARD GAMBAR INFO
   ========================================== */
.info-image-card {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 20px;
    box-shadow: 0 10px 25px -5px rgba(19, 168, 71, 0.10), 0 20px 40px -10px rgba(0, 0, 0, 0.08);
    padding: 24px;
    margin-top: 24px;
    margin-bottom: 24px;
}
.info-image-header {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 14px;
    margin-bottom: 18px;
    border-bottom: 2px solid #13A847;
}
.info-image-header i {
    color: #13A847;
    font-size: 20px;
    background: #f0fdf4;
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.info-image-header .info-image-title {
    font-size: 15px;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.3;
    margin: 0;
}
.info-image-header .info-image-subtitle {
    font-size: 12px;
    color: #64748b;
    margin: 2px 0 0 0;
}
.info-image-body {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f8fafc;
    border: 1.5px dashed #cbd5e1;
    border-radius: 12px;
    padding: 16px;
    overflow: hidden;
    margin-bottom: 16px;
}
.info-image-body img {
    max-width: 100%;
    height: auto;
    max-height: 520px;
    object-fit: contain;
    border-radius: 8px;
    display: block;
}

@media (max-width: 768px) {
    .card-header-custom { padding: 16px 18px !important; }
    .card-3d { border-radius: 16px; margin-bottom: 20px; }
    .info-image-card { padding: 16px; border-radius: 16px; }
    .info-image-body { padding: 10px; }
    .info-image-body img { max-height: 340px; }
}
</style>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_style.01_cssdashboard.style')
@include('button')
@include('backend.00_administrator.00_baganterpisah.03_sidebar')

   <main class="app-main">
<section class="bg-3d-pattern">

        {{-- ═══ APP CONTENT HEADER ═══ --}}
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
          </div>
        </div>

        {{-- ═══ MAIN CONTENT ═══ --}}
        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">

                <div class="col-md-12">
                    <div class="card card-3d mb-4">
                        <div class="card-header card-header-custom">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                            {{-- ═══ TOOLBAR: TOMBOL AKSI ═══ --}}
                            <div class="toolbar-buttons-row" style="justify-content: flex-end;">

                                <a href="/betertibjakonusaha">
                                    <button class="button-modern button-md">
                                        <i class="bi bi-arrow-left" style="margin-right: 6px;"></i>
                                        Kembali
                                    </button>
                                </a>

                                <a href="/betertibjakonusaha">
                                    <button class="button-modern button-md">
                                        <i class="bi bi-database" style="margin-right: 6px;"></i>
                                        Data Induk
                                    </button>
                                </a>

                                @if ($datasurat->isEmpty())
                                    <a href="{{ route('betertibjakonusahapelaksanacreateberkas', ['id' => $data->id]) }}">
                                        <button class="button-berkas button-md">
                                            <i class="bi bi-file-earmark-plus" style="margin-right: 6px;"></i>
                                            Buat Berkas
                                        </button>
                                    </a>
                                @endif

                                @if ($datasurat->isNotEmpty())
                                    <a href="{{ url('betertibjakonusahapelaksana/show/' . $datasurat_id) }}">
                                        <button class="button-berkas button-md">
                                            <i class="bi bi-file-earmark" style="margin-right: 6px;"></i>
                                            Dokumen
                                        </button>
                                    </a>
                                @endif

                            </div>

                            {{-- ═══ BANNER TITLE BERKAS ═══ --}}
                            <div class="berkas-title-banner">
                                <div class="berkas-title-icon">
                                    <i class="bi bi-folder2-open"></i>
                                </div>
                                <div class="berkas-title-text">
                                    <div class="berkas-title-label">Berkas Dukung</div>
                                    <div class="berkas-title-name">{{ $title }}</div>
                                </div>
                                <div class="berkas-title-count">
                                    <i class="bi bi-files"></i>
                                    {{ $datasurat->count() }} Berkas
                                </div>
                            </div>

                        </div>

                        {{-- ═══ TABLE ═══ --}}
                        <div class="card-body p-0">
                            <div class="table-responsive-custom">
                                <table class="table-custom-modern">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px; text-align: center;">
                                                <i class="bi bi-hash"></i> No
                                            </th>
                                            <th style="width: 450px; text-align: center;">
                                                <i class="bi bi-building-fill"></i> Hasil Pemeriksaan Komponen Pengembangan Usaha
                                            </th>
                                            {{-- <th style="width: 250px; text-align: center;">
                                                <i class="bi bi-calendar-event"></i> Waktu Pengawasan
                                            </th> --}}
                                            <th style="width: 120px; text-align: center;">
                                                <i class="bi bi-gear-fill"></i> Aksi
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse($datasurat as $item)
                                            <tr class="align-middle">
                                                <td style="text-align: center; font-weight: 700;">{{ $loop->iteration }}</td>

                                                {{-- KOLOM HASIL PEMERIKSAAN (SEMUA KOMPONEN) --}}
                                                <td style="text-align: left;">
                                                    @php
                                                        $komponen = [
                                                            ['label' => 'Peningkatan Kapasitas SDM', 'hasil' => $item->status],
                                                            ['label' => 'Peningkatan Peralatan', 'hasil' => $item->hasil_peralatan],
                                                            ['label' => 'Peningkatan Teknologi (Software)', 'hasil' => $item->hasil_teknologi_software],
                                                            ['label' => 'Peningkatan Teknologi (Hardware)', 'hasil' => $item->hasil_teknologi_hardware],
                                                            ['label' => 'Peningkatan Kualitas Keuangan (Opini)', 'hasil' => $item->hasil_keuangan_opini],
                                                            ['label' => 'Peningkatan Kualitas Keuangan (Standar)', 'hasil' => $item->hasil_keuangan_standar],
                                                            ['label' => 'Pengembangan Organisasi (GCG)', 'hasil' => $item->hasil_gcg],
                                                            ['label' => 'Pengembangan Organisasi (Penghargaan)', 'hasil' => $item->hasil_penghargaan],
                                                            ['label' => 'Manajemen Operasi (Rantai Pasok)', 'hasil' => $item->hasil_rantai_pasok],
                                                            ['label' => 'Manajemen Operasi (Mutu Bahan)', 'hasil' => $item->hasil_mutu_bahan],
                                                            ['label' => 'Manajemen Operasi (Mutu Peralatan)', 'hasil' => $item->hasil_mutu_peralatan],
                                                            ['label' => 'Manajemen Operasi (SMKK)', 'hasil' => $item->hasil_smkk],
                                                        ];
                                                    @endphp

                                                    <div class="list-komponen">
                                                        @foreach($komponen as $k)
                                                            @php
                                                                $isOk = in_array($k['hasil'], ['Sudah', 'Sesuai', 'Meningkat']);
                                                                $statusClass = $isOk ? 'status-ok' : 'status-no';
                                                                $statusText = $isOk ? 'TERTIB' : 'BELUM';

                                                                if (empty($k['hasil'])) {
                                                                    $statusClass = 'status-empty';
                                                                    $statusText = '-';
                                                                }
                                                            @endphp
                                                            <div class="item-komponen">
                                                                <span class="label">{{ $k['label'] }}</span>
                                                                <span class="status {{ $statusClass }}">{{ $statusText }}</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </td>

                                                {{-- KOLOM TANGGAL --}}
                                                {{-- <td style="text-align: center; font-size: 13px; white-space: normal; vertical-align: middle;">
                                                    @if($item->cadangan_5 && $item->cadangan_6)
                                                        <span class="badge bg-light text-dark border">
                                                            {{ \Carbon\Carbon::parse($item->cadangan_5)->translatedFormat('d M Y') }}
                                                            <br><span class="text-muted">s/d</span><br>
                                                            {{ \Carbon\Carbon::parse($item->cadangan_6)->translatedFormat('d M Y') }}
                                                        </span>
                                                    @else
                                                        <span class="text-muted fst-italic">- Belum diset -</span>
                                                    @endif
                                                </td> --}}

                                                {{-- KOLOM AKSI --}}
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <a href="javascript:void(0)"
                                                       class="button-merah"
                                                       title="Delete"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#deleteModal"
                                                       data-id="{{ $item->id }}"
                                                       onclick="setDeleteUrl(this)">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="empty-row">
                                                <td colspan="4">
                                                    <div class="empty-state">
                                                        <div class="empty-icon">
                                                            <i class="bi bi-folder-x"></i>
                                                        </div>
                                                        <h5 class="empty-title">Berkas Dukung Tidak Ditemukan</h5>
                                                        <p class="empty-desc">Silakan buat berkas dukung terlebih dahulu.</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @if(method_exists($datasurat, 'links') && $datasurat->count() > 0)
                            <div class="p-3">
                                {{ $datasurat->links() }}
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>

        {{-- ═══ CARD GAMBAR INFO (DIPISAH DARI TABEL) ═══ --}}
        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <div class="col-md-12">
                    <div class="info-image-card">
                        <div class="info-image-header">
                            <i class="bi bi-diagram-3-fill"></i>
                            <div>
                                <h6 class="info-image-title">Alur Pelaksana Pengembangan Usaha</h6>
                                <p class="info-image-subtitle">Panduan visual tahapan pemeriksaan pelaksana pengembangan usaha jasa konstruksi</p>
                            </div>
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan11.webp"
                                 alt="Alur Pelaksana Pengembangan Usaha"
                                 loading="lazy"
                                 onerror="this.parentElement.innerHTML='<div style=\'padding:30px;text-align:center;color:#94a3b8;font-size:13px;\'><i class=\'bi bi-image\' style=\'font-size:2rem;display:block;margin-bottom:8px;\'></i>Gambar tidak ditemukan. Periksa path: <code>/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan11.webp</code></div>'">
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan12.webp"
                                 alt="Alur Pelaksana Pengembangan Usaha"
                                 loading="lazy"
                                 onerror="this.parentElement.innerHTML='<div style=\'padding:30px;text-align:center;color:#94a3b8;font-size:13px;\'><i class=\'bi bi-image\' style=\'font-size:2rem;display:block;margin-bottom:8px;\'></i>Gambar tidak ditemukan. Periksa path: <code>/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan12.webp</code></div>'">
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan13.webp"
                                 alt="Alur Pelaksana Pengembangan Usaha"
                                 loading="lazy"
                                 onerror="this.parentElement.innerHTML='<div style=\'padding:30px;text-align:center;color:#94a3b8;font-size:13px;\'><i class=\'bi bi-image\' style=\'font-size:2rem;display:block;margin-bottom:8px;\'></i>Gambar tidak ditemukan. Periksa path: <code>/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan13.webp</code></div>'">
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan14.webp"
                                 alt="Alur Pelaksana Pengembangan Usaha"
                                 loading="lazy"
                                 onerror="this.parentElement.innerHTML='<div style=\'padding:30px;text-align:center;color:#94a3b8;font-size:13px;\'><i class=\'bi bi-image\' style=\'font-size:2rem;display:block;margin-bottom:8px;\'></i>Gambar tidak ditemukan. Periksa path: <code>/assets/01_tertibpengawasan/01_tertibusaha/pelaksanapengembangan14.webp</code></div>'">
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
   </main>
</div>

{{-- ═══ MODAL HAPUS ═══ --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);">
            <div class="modal-header" style="background: #fef2f2; border-bottom: 1px solid #fecaca; border-radius: 20px 20px 0 0; padding: 20px 25px;">
                <h5 class="modal-title" id="deleteModalLabel" style="font-weight: 700; color: #991b1b;">
                    <i class="bi bi-exclamation-triangle-fill" style="margin-right:8px;"></i> Konfirmasi Hapus !
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 30px; text-align: center;">
                <div style="width: 80px; height: 80px; background: #fee2e2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; color: #ef4444;"></i>
                </div>
                <h5 style="font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Apakah Anda Yakin?</h5>
                <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Data akan dihapus dan tidak dapat dikembalikan.</p>
            </div>
            <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #eaeaea; border-radius: 0 0 20px 20px; padding: 15px 25px; justify-content: center; gap: 12px;">
                <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                    <i class="bi bi-x"></i> Batal
                </button>
                <form id="deleteForm" method="POST" action="" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-merah button-md">
                        <i class="bi bi-trash"></i> Hapus Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('backend.00_administrator.00_baganterpisah.02_footer')

<script>
function setDeleteUrl(button) {
    const id = button.getAttribute('data-id');
    let deleteUrl = "{{ route('betertibjakonusahapelaksanadelete', ':id') }}";
    deleteUrl = deleteUrl.replace(':id', encodeURIComponent(id));
    document.getElementById('deleteForm').action = deleteUrl;
}
</script>

</body>
</html>
