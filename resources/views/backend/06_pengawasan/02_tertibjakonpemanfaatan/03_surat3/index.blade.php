@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ═══════════════════════════════════════════════════
   BACKGROUND HIJAU TITIK-TITIK
   ═══════════════════════════════════════════════════ */
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

/* BANNER TITLE BERKAS */
.berkas-title-banner {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px 20px;
    margin-bottom: 16px;
    margin-top: 8px;
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
.berkas-title-text { flex: 1; min-width: 0; }
.berkas-title-label {
    font-size: 10px; font-weight: 800;
    color: rgba(255, 255, 255, 0.85);
    text-transform: uppercase; letter-spacing: 1px;
    margin-bottom: 2px;
}
.berkas-title-name {
    font-size: 16px; font-weight: 800;
    color: #ffffff; line-height: 1.3;
    word-wrap: break-word;
}
.berkas-title-count {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 6px 12px;
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 20px;
    color: #ffffff; font-size: 12px; font-weight: 700;
    white-space: nowrap; flex-shrink: 0;
}

/* TOOLBAR BUTTONS */
.toolbar-buttons-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    align-items: center;
    margin-bottom: 4px;
}

/* TABLE MODERN */
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
    min-width: 800px;
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
    padding: 14px 12px !important;
    color: #1a2b4a;
    border-bottom: 1px solid #f1f5f9 !important;
    vertical-align: middle;
}
.table-custom-modern tbody tr:nth-child(odd) td { background-color: #ffffff !important; }
.table-custom-modern tbody tr:nth-child(even) td { background-color: #f1f5f9 !important; }
.table-custom-modern tbody tr:hover td {
    background-color: #bbf7d0 !important;
    border-bottom-color: #86efac !important;
}
.table-custom-modern tbody tr.empty-row:hover td {
    background-color: #ffffff !important;
    cursor: default;
}

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
    width: 80px; height: 80px; border-radius: 50%;
    background: #FEF2F2; border: 2px dashed #ef4444;
    color: #ef4444; display: flex;
    align-items: center; justify-content: center;
    font-size: 2rem; margin-bottom: 8px;
}
.empty-title { font-size: 16px; font-weight: 700; color: #1A2B4A; margin: 8px 0 0 0; }
.empty-desc  { font-size: 13px; color: #6B7A93; margin: 0; }

/* WRAPPER SURAT */
.surat-detail-wrap {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 16px;
    padding: 20px 22px;
    margin-top: 16px;
    box-shadow: 0 6px 18px -6px rgba(19, 168, 71, 0.12);
}
.surat-detail-header {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 14px;
    margin-bottom: 16px;
    border-bottom: 2px solid #13A847;
}
.surat-detail-header img { display: block; }
.surat-detail-header p {
    margin: 0 0 0 8px;
    font-size: 15px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.35;
}
.surat-detail-title {
    font-size: 14px;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.45;
    margin-bottom: 14px;
}

/* TABEL BORDER */
.table-bordered-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 16px;
}
.table-bordered-modern th,
.table-bordered-modern td {
    border: 1px solid #e2e8f0;
    padding: 10px 12px;
    vertical-align: middle;
    line-height: 1.5;
}
.table-bordered-modern thead th {
    background: #f0fdf4 !important;
    color: #15803d !important;
    font-weight: 800;
    font-size: 11.5px;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    text-align: center;
}
.table-bordered-modern tbody td { color: #1a2b4a; }
.table-bordered-modern tbody tr:nth-child(even) td { background: #f8fafc; }

.field-box {
    padding: 6px 12px;
    border: 1px solid #ced4da;
    border-radius: 6px;
    background-color: #e9ecef;
    color: #1a2b4a;
    font-size: 13px;
    font-weight: 600;
    min-height: 34px;
    display: flex;
    align-items: center;
}
.field-label {
    font-size: 14px;
    font-weight: 800;
    color: #0f172a;
}

/* TABEL AUDIT */
.table-audit-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 12.5px;
    border: 1.5px solid #111827;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 18px;
    background: #fff;
    min-width: 900px;
}
.table-audit-modern th,
.table-audit-modern td {
    border: 1px solid #111827;
    padding: 10px;
    vertical-align: top;
    line-height: 1.5;
    color: #111827;
    word-wrap: break-word;
}
.table-audit-modern thead th {
    background: #f8fafc !important;
    color: #111827 !important;
    font-weight: 800;
    font-size: 11.5px;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    text-align: center;
}
.table-audit-modern tbody tr:nth-child(even) td { background: #f8fafc; }

/* TIM PEMERIKSA CARD */
.tim-pemeriksa-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 14px;
    padding: 18px 20px;
    margin-top: 16px;
    box-shadow: 0 6px 18px -6px rgba(19, 168, 71, 0.10);
}
.tim-pemeriksa-card h6 {
    font-size: 14px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
}
.tim-pemeriksa-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
}
.tim-pemeriksa-table thead th {
    background: #f0fdf4 !important;
    color: #15803d !important;
    font-weight: 800;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    padding: 10px 8px;
    text-align: center;
    border-bottom: 1.5px solid #e2e8f0;
}
.tim-pemeriksa-table tbody td {
    border-bottom: 1px solid #f1f5f9;
    padding: 10px 8px;
    vertical-align: middle;
    color: #1a2b4a;
}

/* CARD GAMBAR INFO */
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
.info-image-body:last-child { margin-bottom: 0; }
.info-image-body img {
    max-width: 100%;
    height: auto;
    max-height: 520px;
    object-fit: contain;
    border-radius: 8px;
    display: block;
}

/* MODAL KTP */
.modal-content.ktp-modern {
    border-radius: 20px !important;
    border: none !important;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
.modal-content.ktp-modern .modal-header {
    background: #f0fdf4 !important;
    border-bottom: 1px solid #bbf7d0 !important;
    padding: 16px 22px !important;
}
.modal-content.ktp-modern .modal-header p {
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 0 8px;
    font-size: 13px;
}
.modal-content.ktp-modern .modal-body {
    padding: 20px 24px !important;
    max-height: 75vh;
    overflow-y: auto;
}
.modal-content.ktp-modern .modal-body::-webkit-scrollbar { width: 8px; }
.modal-content.ktp-modern .modal-body::-webkit-scrollbar-thumb {
    background: #cbd5e1; border-radius: 4px;
}

@media (max-width: 768px) {
    .card-header-custom { padding: 16px 18px !important; }
    .card-3d { border-radius: 16px; margin-bottom: 20px; }
    .surat-detail-wrap { padding: 14px; border-radius: 12px; }
    .table-bordered-modern { font-size: 11.5px; }
    .berkas-title-count { display: none; }
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

    {{-- HEADER --}}
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
        </div>
    </div>

    {{-- MAIN CONTENT --}}
    <div class="container-fluid">
        <div class="row" style="margin-right: 10px; margin-left:10px;">
            <div class="col-md-12">
                <div class="card card-3d mb-4">
                    <div class="card-header card-header-custom">

                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                        {{-- TOOLBAR --}}
                        <div class="toolbar-buttons-row" style="justify-content: flex-end; margin-bottom: 14px;">
                            <a href="/betertibjakonpemanfaatan">
                                <button class="button-modern button-md">
                                    <i class="bi bi-arrow-left" style="margin-right: 6px;"></i>
                                    Kembali
                                </button>
                            </a>

                            @if ($datasurat->isEmpty())
                                <a href="{{ route('betertibjakonpemanfataansurat3createberkas', ['id' => $id]) }}">
                                    <button class="button-berkas button-md">
                                        <i class="bi bi-file-earmark-plus" style="margin-right: 6px;"></i>
                                        Buat Berkas
                                    </button>
                                </a>
                            @endif

                            @if ($datasurat->isNotEmpty() && !is_null($datasurat_id))
                                <button onclick="printModalContent({{ $datasurat_id }})" class="button-berkas button-md">
                                    <i class="bi bi-file-earmark-arrow-down" style="margin-right: 6px;"></i>
                                    Print
                                </button>
                                <button class="button-berkas button-md" onclick="downloadModalPDF({{ $datasurat_id }})">
                                    <i class="bi bi-file-earmark-arrow-down" style="margin-right: 6px;"></i>
                                    Download
                                </button>
                                <button class="button-berkas button-md"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalKtp{{ $datasurat_id }}">
                                    <i class="bi bi-file-earmark-text" style="margin-right: 6px;"></i>
                                    Lihat Berkas
                                </button>
                            @endif
                        </div>

                        {{-- BANNER --}}
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

                    {{-- TABLE UTAMA --}}
                    <div class="card-body p-0">
                        <div class="table-responsive-custom">
                            <table class="table-custom-modern">
                                <thead>
                                    <tr>
                                        <th style="width: 60px; text-align: center;">
                                            <i class="bi bi-hash"></i> No
                                        </th>
                                        <th style="width: 300px; text-align: center;">
                                            <i class="bi bi-tools"></i> Pemeliharaan Konstruksi
                                        </th>
                                        <th style="width: 300px; text-align: center;">
                                            <i class="bi bi-hammer"></i> Pemeliharaan Struktur
                                        </th>
                                        <th style="width: 120px; text-align: center;">
                                            <i class="bi bi-gear-fill"></i> Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($datasurat as $item)
                                        @php
                                            $kesesuaianKonstruksi = $item->kesimpulanpemeriksaan ?? null;
                                            $tertibKonstruksi     = $kesesuaianKonstruksi === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                                            $btnClassKonstruksi   = $kesesuaianKonstruksi === 'Sesuai' ? 'button-hijau' : 'button-merah';
                                            $iconKonstruksi       = $kesesuaianKonstruksi === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';

                                            $kesesuaianStruktur   = $item->catatan ?? null;
                                            $tertibStruktur       = $kesesuaianStruktur === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                                            $btnClassStruktur     = $kesesuaianStruktur === 'Sesuai' ? 'button-hijau' : 'button-merah';
                                            $iconStruktur         = $kesesuaianStruktur === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
                                        @endphp

                                        <tr class="align-middle">
                                            <td style="text-align: center; font-weight: 700;">{{ $loop->iteration }}</td>
                                            <td style="text-align: center;">
                                                <span class="{{ $btnClassKonstruksi }}">
                                                    <i class="bi {{ $iconKonstruksi }}" style="margin-right: 8px;"></i>
                                                    {{ $tertibKonstruksi }}
                                                </span>
                                            </td>
                                            <td style="text-align: center;">
                                                <span class="{{ $btnClassStruktur }}">
                                                    <i class="bi {{ $iconStruktur }}" style="margin-right: 8px;"></i>
                                                    {{ $tertibStruktur }}
                                                </span>
                                            </td>
                                            <td style="text-align: center;">
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
                                                    <p class="empty-desc">Berkas Dukung Jakon Pemanfaatan Pengawasan Terhadap Pemeliharaan Konstruksi & Struktur Tidak Ditemukan !!</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- DETAIL SURAT --}}
        @if($datasurat && $datasurat->count() > 0)
            @php $suratDetail = $datasurat->first(); @endphp
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <div class="col-md-12">
                    <div class="surat-detail-wrap">

                        <div class="surat-detail-header">
                            <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="28">
                            <img src="/assets/icon/pupr.png" alt="Logo" width="28">
                            <p>Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                        </div>

                        <div class="surat-detail-title">
                            Surat Dukung Tertib Jakon Pemanfaatan : Pengawasan Tertib Pemanfaatan Produk Konstruksi Secara Rutin Terhadap Bangunan Konstruksi yang di Biayai dengan dana dari APBD
                        </div>

                        <table class="table-bordered-modern">
                            <tr>
                                <td style="width: 200px;"><strong class="field-label">Nama Bangunan</strong></td>
                                <td><div class="field-box">{{ $datainduk->namabangunan ?? '-' }}</div></td>
                            </tr>
                            <tr>
                                <td><strong class="field-label">Lokasi Bangunan</strong></td>
                                <td><div class="field-box">{{ $datainduk->lokasi ?? '-' }}</div></td>
                            </tr>
                        </table>

                        {{-- TABEL AUDIT --}}
                        <table class="table-audit-modern">
                            <thead>
                                <tr>
                                    <th style="width: 40px;">No</th>
                                    <th style="width: 250px;">LINGKUP PENGAWASAN</th>
                                    <th>INDIKATOR</th>
                                    <th>DOKUMEN YANG DIPERIKSA</th>
                                    <th>CARA PEMERIKSAAN</th>
                                    <th style="width: 150px;">KESIMPULAN PEMERIKSAAN</th>
                                    <th style="width: 200px;">CATATAN PEMERIKSAAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">4</td>
                                    <td>Pengawasan fungsi peruntukan terhadap tertib pemanfaatan produk Jasa Konstruksi</td>
                                    <td>
                                        a. Kesesuaian pemanfaatan bangunan konstruksi dengan fungsi yang direncanakan:<br>
                                        &bull; Bangunan gedung sesuai dengan perizinan<br>
                                        &bull; Bangunan sipil sesuai dengan peraturan perundangan
                                    </td>
                                    <td>Dokumen perizinan</td>
                                    <td>Membandingkan izin pembangunan dengan fakta di lapangan</td>
                                    <td style="text-align: center;">
                                        <span style="font-size: 13px; font-weight: 700; color: #0f172a;">
                                            {{ $suratDetail->kesimpulanpemeriksaan ?? '-' }}
                                        </span>
                                    </td>
                                    <td>{{ $suratDetail->carapemeriksaan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"></td>
                                    <td></td>
                                    <td>
                                        b. Kesesuaian lokasi bangunan konstruksi dengan peruntukan yang diatur dalam rencana detail tata ruang atau Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR)
                                    </td>
                                    <td>Dokumen resmi dari instansi berwenang</td>
                                    <td>Memeriksa ketersediaan Dokumen resmi dari instansi berwenang</td>
                                    <td style="text-align: center;">
                                        <span style="font-size: 13px; font-weight: 700; color: #0f172a;">
                                            {{ $suratDetail->catatan ?? '-' }}
                                        </span>
                                    </td>
                                    <td>{{ $suratDetail->dokumendiperiksa ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        @endif

    </div>

</section>
</main>
</div>

{{-- MODAL HAPUS --}}
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

{{-- MODAL KTP --}}
@if(!is_null($datasurat_id))
<div class="modal fade" id="modalKtp{{ $datasurat_id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $datasurat_id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content ktp-modern">
            <div class="modal-header d-flex align-items-center">
                <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                <p>Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="surat-detail-title" style="margin-bottom: 20px;">
                    Tertib Jakon Pemanfaatan Halaman Ke 3
                </div>

                @php $modalSurat = $datasurat->first(); @endphp

                <table class="table-audit-modern">
                    <thead>
                        <tr>
                            <th style="width: 40px;">No</th>
                            <th style="width: 250px;">LINGKUP PENGAWASAN</th>
                            <th>INDIKATOR</th>
                            <th>DOKUMEN YANG DIPERIKSA</th>
                            <th>CARA PEMERIKSAAN</th>
                            <th style="width: 150px;">KESIMPULAN PEMERIKSAAN</th>
                            <th style="width: 200px;">CATATAN PEMERIKSAAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center;">4</td>
                            <td>Pengawasan fungsi peruntukan terhadap tertib pemanfaatan produk Jasa Konstruksi</td>
                            <td>
                                a. Kesesuaian pemanfaatan bangunan konstruksi dengan fungsi yang direncanakan:<br>
                                &bull; Bangunan gedung sesuai dengan perizinan<br>
                                &bull; Bangunan sipil sesuai dengan peraturan perundangan
                            </td>
                            <td>Dokumen perizinan</td>
                            <td>Membandingkan izin pembangunan dengan fakta di lapangan</td>
                            <td style="text-align: center;">
                                <span style="font-size: 13px; font-weight: 700; color: #0f172a;">
                                    {{ $modalSurat->kesimpulanpemeriksaan ?? '-' }}
                                </span>
                            </td>
                            <td>{{ $modalSurat->carapemeriksaan ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:center;"></td>
                            <td></td>
                            <td>
                                b. Kesesuaian lokasi bangunan konstruksi dengan peruntukan yang diatur dalam rencana detail tata ruang atau Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR)
                            </td>
                            <td>Dokumen resmi dari instansi berwenang</td>
                            <td>Memeriksa ketersediaan Dokumen resmi dari instansi berwenang</td>
                            <td style="text-align: center;">
                                <span style="font-size: 13px; font-weight: 700; color: #0f172a;">
                                    {{ $modalSurat->catatan ?? '-' }}
                                </span>
                            </td>
                            <td>{{ $modalSurat->dokumendiperiksa ?? '-' }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endif

@include('backend.00_administrator.00_baganterpisah.02_footer')

{{-- SCRIPT PRINT/DOWNLOAD --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function downloadModalPDF(id) {
    const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);
    if (!modalContent) { alert('Konten modal tidak ditemukan.'); return; }
    const clone = modalContent.cloneNode(true);
    const wrapper = document.createElement('div');
    wrapper.style.display = 'flex';
    wrapper.style.justifyContent = 'center';
    wrapper.style.marginTop = '20px';
    wrapper.appendChild(clone);
    clone.style.fontSize = '9px';
    clone.style.padding = '5px';
    clone.style.lineHeight = '1';
    clone.style.transform = 'scale(0.75)';
    clone.style.transformOrigin = 'top center';
    const fileName = `Tertibjakonpemanfaatan_surat3_${id}.pdf`;
    html2pdf()
        .from(wrapper)
        .set({
            margin: 0.1, filename: fileName,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 3 },
            jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
        })
        .save();
}
function printModalContent(id) {
    const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);
    if (!modalContent) { alert("Konten tidak ditemukan."); return; }
    let iframe = document.createElement('iframe');
    iframe.style.position = 'absolute';
    iframe.style.top = '-10000px';
    document.body.appendChild(iframe);
    const wrapperStyle = `display:flex;justify-content:center;margin-top:40px;`;
    const cloneStyle = `transform:scale(0.85);transform-origin:top center;font-size:9px;line-height:1;`;
    const doc = iframe.contentWindow.document;
    doc.open();
    doc.write(`
        <html><head><style>
            @media print { @page { size: A4 landscape; margin: 10mm; }
            body { font-family: Arial, sans-serif; color:#000; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
            table { border-collapse: collapse; width: 100%; table-layout: fixed; border: 1px solid #000; }
            th, td { border: 1px solid #000; padding: 3px; vertical-align: top; word-wrap: break-word; }
            table tr td:first-child, table tr th:first-child { width: 50px; text-align: center; }
            }
        </style></head>
        <body><div style="${wrapperStyle}"><div style="${cloneStyle}">${modalContent.innerHTML}</div></div></body></html>
    `);
    doc.close();
    iframe.onload = function() {
        iframe.contentWindow.focus();
        iframe.contentWindow.print();
        setTimeout(() => document.body.removeChild(iframe), 1000);
    };
}
function setDeleteUrl(button) {
    var id = button.getAttribute('data-id');
    var deleteUrl = "{{ route('betertibjakonmanfaat3deleteberkas', ':id') }}";
    deleteUrl = deleteUrl.replace(':id', encodeURIComponent(id));
    document.getElementById('deleteForm').action = deleteUrl;
}
</script>

</body>
</html>