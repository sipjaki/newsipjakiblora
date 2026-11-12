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
   PANEL UTAMA
   ========================================== */
.panel {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
    overflow: hidden;
    margin-bottom: 24px;
}
.panel-header {
    padding: 20px 24px;
    border-bottom: 1px solid #f1f5f9;
    background: #ffffff;
}
.panel-body {
    padding: 20px 24px;
}

/* ==========================================
   ACTION BAR
   ========================================== */
.action-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    padding: 16px 20px;
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    margin-bottom: 20px;
}
.action-bar .left,
.action-bar .right {
    display: flex;
    gap: 8px;
    align-items: center;
    flex-wrap: wrap;
}
.action-bar .title-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 14px;
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
    border-radius: 10px;
    font-size: 12.5px;
    font-weight: 700;
    color: #15803d;
}
.action-bar .title-chip i {
    color: #13A847;
    font-size: 14px;
}

/* ==========================================
   FORM CONTROLS
   ========================================== */
.form-input,
.form-textarea,
.form-select {
    width: 100%;
    font-size: 13px;
    padding: 8px 12px;
    border: 1px solid #111827;
    border-radius: 8px;
    background: #ffffff;
    color: #1e293b;
    transition: all 0.15s ease;
}
.form-input:focus,
.form-textarea:focus,
.form-select:focus {
    border-color: #13A847;
    box-shadow: 0 0 0 3px rgba(19, 168, 71, 0.1);
    outline: none;
}
.form-input[readonly] {
    background: #f8fafc;
    cursor: default;
}
.form-textarea { resize: vertical; }

/* ==========================================
   FORM DOC CARD
   ========================================== */
.doc-card {
    background: #ffffff;
    border: 1px solid #111827;
    border-radius: 12px;
    padding: 28px 32px;
    margin-bottom: 20px;
}
.doc-header {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 14px;
    border-bottom: 2px solid #111827;
    margin-bottom: 18px;
}
.doc-header img { width: 28px; height: auto; }
.doc-header .header-sep {
    color: #111827;
    font-weight: 800;
    font-size: 14px;
}
.doc-header .header-title {
    font-size: 13.5px;
    font-weight: 700;
    color: #0f172a;
    margin: 0;
    line-height: 1.4;
}
.doc-title {
    font-size: 13.5px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.6;
    margin-bottom: 20px;
    padding: 14px 18px;
    background: #f8fafc;
    border: 1px solid #111827;
    border-left: 4px solid #13A847;
    border-radius: 6px;
}

/* ==========================================
   INFO TABLE
   ========================================== */
.info-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
    margin-bottom: 20px;
    border: 1px solid #111827;
}
.info-table td {
    padding: 10px 12px;
    border: 1px solid #111827;
    vertical-align: middle;
}
.info-table td.label-cell {
    background: #f8fafc;
    font-weight: 700;
    color: #111827;
    width: 200px;
    font-size: 12.5px;
}

/* ==========================================
   DATA TABLE
   ========================================== */
.data-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 12.5px;
    margin-bottom: 16px;
    border: 1px solid #111827;
}
.data-table th,
.data-table td {
    border: 1px solid #111827;
    padding: 9px 12px;
    vertical-align: middle;
}
.data-table th {
    background: #f8fafc;
    color: #111827;
    font-weight: 700;
    text-align: center;
    font-size: 12px;
    line-height: 1.35;
}
.data-table th .th-sub {
    display: block;
    font-size: 10.5px;
    font-weight: 500;
    color: #4b5563;
    margin-top: 2px;
    text-transform: none;
    letter-spacing: 0;
}
.data-table td {
    text-align: left;
    color: #111827;
}
.data-table td.center { text-align: center; }

/* ==========================================
   DATE RANGE INPUT
   ========================================== */
.date-range-input {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}
.date-range-input .form-input {
    flex: 1;
    min-width: 140px;
}
.date-range-input .sep {
    color: #111827;
    font-weight: 700;
    font-size: 12px;
}

/* ==========================================
   TIM PEMERIKSA
   ========================================== */
.tim-panel {
    background: #ffffff;
    border: 1px solid #111827;
    border-radius: 12px;
    padding: 16px 20px;
    margin-top: 16px;
}
.tim-panel-title {
    font-size: 12px;
    font-weight: 800;
    color: #111827;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
    padding-bottom: 10px;
    border-bottom: 1px solid #111827;
    display: flex;
    align-items: center;
    gap: 6px;
}
.tim-panel-title i {
    color: #13A847;
    font-size: 14px;
}

/* ==========================================
   SUBMIT BUTTON & MODAL KONFIRMASI
   ========================================== */
.submit-bar {
    display: flex;
    justify-content: flex-end;
    margin: 20px 0;
}

.confirm-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background-color: rgba(15, 23, 42, 0.6);
    z-index: 9999;
    justify-content: center;
    align-items: center;
    padding: 20px;
}
.confirm-box {
    background: #ffffff;
    padding: 28px 30px;
    border-radius: 16px;
    max-width: 440px;
    width: 100%;
    text-align: center;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
    border: 1px solid #111827;
}
.confirm-title {
    font-size: 15px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
}
.confirm-message {
    font-size: 13px;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 16px;
}
.confirm-check {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 12.5px;
    color: #475569;
    text-align: left;
    padding: 12px;
    background: #fef3c7;
    border: 1px solid #fcd34d;
    border-radius: 8px;
    margin-bottom: 20px;
    line-height: 1.5;
}
.confirm-check input[type="checkbox"] {
    margin-top: 2px;
    flex-shrink: 0;
}
.confirm-actions {
    display: flex;
    justify-content: center;
    gap: 10px;
}

/* ==========================================
   MODAL LIHAT BERKAS
   ========================================== */
.modal-modern .modal-content {
    border-radius: 16px;
    border: 1px solid #111827;
    box-shadow: 0 20px 40px -8px rgba(0, 0, 0, 0.15);
    overflow: hidden;
}
.modal-modern .modal-header {
    background: #ffffff;
    border-bottom: 1px solid #111827;
    padding: 16px 20px;
}
.modal-modern .modal-body {
    padding: 20px;
    font-size: 13px;
}

/* ==========================================
   CARD GAMBAR INFO
   ========================================== */
.info-image-card {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
    padding: 24px;
    margin-bottom: 24px;
    overflow: hidden;
}
.info-image-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding-bottom: 14px;
    margin-bottom: 18px;
    border-bottom: 2px solid #13A847;
}
.info-image-header i {
    color: #13A847;
    font-size: 20px;
    background: #f0fdf4;
    width: 42px;
    height: 42px;
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
}
.info-image-body img {
    max-width: 100%;
    height: auto;
    max-height: 520px;
    object-fit: contain;
    border-radius: 8px;
    display: block;
    cursor: zoom-in;
    transition: transform 0.2s ease;
}
.info-image-body img:hover {
    transform: scale(1.02);
}

/* ==========================================
   RESPONSIVE
   ========================================== */
@media (max-width: 768px) {
    .action-bar { flex-direction: column; align-items: stretch; }
    .action-bar .left,
    .action-bar .right { justify-content: stretch; width: 100%; }
    .action-bar .left > *,
    .action-bar .right > * { flex: 1 1 auto; justify-content: center; }
    .doc-card { padding: 20px 16px; }
    .info-table td.label-cell { width: auto; }
    .tim-panel { padding: 12px 14px; }
    .submit-bar { justify-content: stretch; }
    .btn-submit-green { width: 100%; justify-content: center; }
    .info-image-card { padding: 16px; border-radius: 14px; }
    .info-image-header { gap: 10px; }
    .info-image-header i { width: 36px; height: 36px; font-size: 17px; }
    .info-image-header .info-image-title { font-size: 14px; }
    .info-image-body { padding: 10px; }
    .info-image-body img { max-height: 340px; }
}
</style>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.03_sidebar')

   <main class="app-main">
<section class="bg-soft-page">

        {{-- ═══ APP CONTENT HEADER ═══ --}}
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
          </div>
        </div>

        {{-- ═══ CARD GAMBAR INFO — DI ATAS (SEBELUM PANEL) ═══ --}}
        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <div class="col-md-12">
                    <div class="info-image-card">
                        <div class="info-image-header">
                            <i class="bi bi-diagram-3-fill"></i>
                            <div>
                                <h6 class="info-image-title">Alur Kesesuaian Kegiatan Konstruksi</h6>
                                <p class="info-image-subtitle">Panduan visual tahapan pemeriksaan kesesuaian usaha jasa konstruksi</p>
                            </div>
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/kesesuaiankegiatankonstruksi.webp"
                                 alt="Alur Kesesuaian Kegiatan Konstruksi"
                                 loading="lazy"
                                 onclick="window.open(this.src, '_blank')"
                                 onerror="this.parentElement.innerHTML='<div style=\'padding:30px;text-align:center;color:#94a3b8;font-size:13px;\'><i class=\'bi bi-image\' style=\'font-size:2rem;display:block;margin-bottom:8px;\'></i>Gambar tidak ditemukan. Periksa path: <code>/assets/01_tertibpengawasan/01_tertibusaha/kesesuaiankegiatankonstruksi.webp</code></div>'">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ═══ MAIN CONTENT (PANEL FORM) ═══ --}}
        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">

                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-header">

                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                        </div>

                        <div class="panel-body">

                            {{-- ═══ ACTION BAR ═══ --}}
                            <div class="action-bar">
                                <div class="left">
                                    <span class="title-chip">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Nama Pekerjaan: {{ $datatertibjasakonstruksi ?? 'Masih Kosong' }}
                                    </span>
                                </div>
                                <div class="right">
                                    <a href="{{ url()->previous() }}" class="button-baru button-md">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </div>

                            {{-- ═══ MODAL LIHAT BERKAS ═══ --}}
                            <div class="modal fade modal-modern" id="modalKtp{{ $data->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header d-flex align-items-center">
                                            <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="24" style="margin-right: 4px;">
                                            <img src="/assets/icon/pupr.png" alt="Logo" width="24" style="margin-right: 4px;">
                                            <span class="mx-2" style="color:#111827; font-weight:800;">:</span>
                                            <p style="margin-left: 8px; font-size: 13px; margin-bottom: 0; font-weight:600;">
                                                Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                                            </p>
                                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 style="font-size: 13px; font-weight:700; color:#0f172a; margin-bottom:14px;">
                                                Surat Dukung Tertib Jakon Usaha : Pengawasan Tertib Usaha terhadap Kesesuaian Jenis, Sifat, Klasifikasi, dan Layanan Usaha dengan Kegiatan Usaha Jasa Konstruksi Secara Rutin
                                            </h6>

                                            <table class="info-table" style="margin-bottom:14px;">
                                                <tr>
                                                    <td class="label-cell">Nama Badan Usaha</td>
                                                    <td>{{ $data->surattertibjakonusaha1->namabadanusaha ?? 'Data Belum Di Buat' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="label-cell">Status Perizinan Berusaha</td>
                                                    <td>{{ $data->surattertibjakonusaha1->statusperizinan ?? 'Data Belum Di Buat' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="label-cell">No NIB</td>
                                                    <td>{{ $data->surattertibjakonusaha1->nib ?? 'Data Belum Di Buat' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="label-cell">Waktu Pengawasan</td>
                                                    <td>
                                                        @if ($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->waktupengawasan && $data->surattertibjakonusaha1->waktupengawasanselesai)
                                                            {{ \Carbon\Carbon::parse($data->surattertibjakonusaha1->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                            –
                                                            {{ \Carbon\Carbon::parse($data->surattertibjakonusaha1->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                        @else
                                                            <span class="text-muted">Belum Di Buat</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>

                                            <table class="data-table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" style="width:40px;">No</th>
                                                        <th rowspan="2">Nama Paket Pekerjaan</th>
                                                        <th colspan="2">Jenis</th>
                                                        <th colspan="2">Sifat</th>
                                                        <th colspan="2">Subklasifikasi</th>
                                                        <th colspan="2">Layanan Usaha</th>
                                                    </tr>
                                                    <tr>
                                                        <th><span>Jenis Usaha</span><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                        <th>Kesesuaian SBU</th>
                                                        <th><span>Sifat Usaha</span><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                        <th>Kesesuaian SBU</th>
                                                        <th><span>Sub Klasifikasi</span><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                        <th>Kesesuaian SBU</th>
                                                        <th><span>Layanan Usaha</span><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                        <th>Kesesuaian SBU</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="center">1</td>
                                                        <td>{{$data->surattertibjakonusaha1->namapaketpekerjaan ?? 'Data Belum Di Buat'}}</td>
                                                        <td>{{$data->surattertibjakonusaha1->jenisusaha ?? 'Data Belum Di Buat'}}</td>
                                                        <td class="center">{{$data->surattertibjakonusaha1->kesesuaian ?? 'Data Belum Di Buat'}}</td>
                                                        <td class="center">{{$data->surattertibjakonusaha1->sifatusaha ?? 'Data Belum Di Buat'}}</td>
                                                        <td class="center">{{$data->surattertibjakonusaha1->kesesuaiansbu ?? 'Data Belum Di Buat'}}</td>
                                                        <td>{{$data->surattertibjakonusaha1->subklasifikasi->kode ?? 'Data Belum Di Buat '}} {{$data->surattertibjakonusaha1->subklasifikasi->pekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                        <td class="center">{{$data->surattertibjakonusaha1->kesesuaianklasifikasi ?? 'Data Belum Di Buat'}}</td>
                                                        <td>{{$data->surattertibjakonusaha1->layananusaha ?? 'Data Belum Di Buat'}}</td>
                                                        <td class="center">{{$data->surattertibjakonusaha1->kesesuaianlayananusaha ?? 'Data Belum Di Buat'}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="tim-panel">
                                                <div class="tim-panel-title">
                                                    <i class="bi bi-people-fill"></i> Tim Pemeriksa
                                                </div>
                                                <table class="data-table" style="font-size:12px;">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:50px;">No</th>
                                                            <th>Nama Lengkap</th>
                                                            <th style="width:140px;">Tanda Tangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="center">1</td>
                                                            <td>{{$data->surattertibjakonusaha1->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                            <td class="center">
                                                                @if($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->tandatangan1 && $data->surattertibjakonusaha1->tandatangan1->tandatangan && file_exists(public_path('storage/' . $data->surattertibjakonusaha1->tandatangan1->tandatangan)))
                                                                    <img src="{{ asset('storage/' . $data->surattertibjakonusaha1->tandatangan1->tandatangan) }}" alt="TTD 1" style="max-width:100px; height:50px; object-fit:contain; border:1px solid #111827; border-radius:4px; background:#f8fafc; padding:2px;">
                                                                @elseif($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->tandatangan1 && $data->surattertibjakonusaha1->tandatangan1->tandatangan)
                                                                    <img src="{{ asset($data->surattertibjakonusaha1->tandatangan1->tandatangan) }}" alt="TTD 1" style="max-width:100px; height:50px; object-fit:contain; border:1px solid #111827; border-radius:4px; background:#f8fafc; padding:2px;">
                                                                @else
                                                                    <span style="font-size:11px; color:#94a3b8; font-style:italic;">Tidak Ada TTD</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">2</td>
                                                            <td>{{$data->surattertibjakonusaha1->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                            <td class="center">
                                                                @if($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->tandatangan2 && $data->surattertibjakonusaha1->tandatangan2->tandatangan && file_exists(public_path('storage/' . $data->surattertibjakonusaha1->tandatangan2->tandatangan)))
                                                                    <img src="{{ asset('storage/' . $data->surattertibjakonusaha1->tandatangan2->tandatangan) }}" alt="TTD 2" style="max-width:100px; height:50px; object-fit:contain; border:1px solid #111827; border-radius:4px; background:#f8fafc; padding:2px;">
                                                                @elseif($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->tandatangan2 && $data->surattertibjakonusaha1->tandatangan2->tandatangan)
                                                                    <img src="{{ asset($data->surattertibjakonusaha1->tandatangan2->tandatangan) }}" alt="TTD 2" style="max-width:100px; height:50px; object-fit:contain; border:1px solid #111827; border-radius:4px; background:#f8fafc; padding:2px;">
                                                                @else
                                                                    <span style="font-size:11px; color:#94a3b8; font-style:italic;">Tidak Ada TTD</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">3</td>
                                                            <td>{{$data->surattertibjakonusaha1->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                            <td class="center">
                                                                @if($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->tandatangan3 && $data->surattertibjakonusaha1->tandatangan3->tandatangan && file_exists(public_path('storage/' . $data->surattertibjakonusaha1->tandatangan3->tandatangan)))
                                                                    <img src="{{ asset('storage/' . $data->surattertibjakonusaha1->tandatangan3->tandatangan) }}" alt="TTD 3" style="max-width:100px; height:50px; object-fit:contain; border:1px solid #111827; border-radius:4px; background:#f8fafc; padding:2px;">
                                                                @elseif($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->tandatangan3 && $data->surattertibjakonusaha1->tandatangan3->tandatangan)
                                                                    <img src="{{ asset($data->surattertibjakonusaha1->tandatangan3->tandatangan) }}" alt="TTD 3" style="max-width:100px; height:50px; object-fit:contain; border:1px solid #111827; border-radius:4px; background:#f8fafc; padding:2px;">
                                                                @else
                                                                    <span style="font-size:11px; color:#94a3b8; font-style:italic;">Tidak Ada TTD</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ═══ FORM INPUT SURAT ═══ --}}
                            <form action="{{ route('betertibjakonusahasurat1createnewsurat') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="tertibjasakonstruksi_id" value="{{ $datatertibjasakonstruksi_id }}">

                                <div class="doc-card">

                                    <div class="doc-header">
                                        <img src="/assets/icon/logokabupatenblora.png" alt="Logo">
                                        <img src="/assets/icon/pupr.png" alt="Logo">
                                        <span class="header-sep">:</span>
                                        <p class="header-title">
                                            Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                                        </p>
                                    </div>

                                    <div class="doc-title">
                                        Surat Dukung Tertib Jakon Usaha : Pengawasan Tertib Usaha terhadap Kesesuaian Jenis, Sifat, Klasifikasi, dan Layanan Usaha
                                    </div>

                                    {{-- ═══ INFO TABLE ═══ --}}
                                    <table class="info-table">
                                        <tr>
                                            <td class="label-cell">Nama Badan Usaha</td>
                                            <td>
                                                <input type="text"
                                                       class="form-input @error('namabadanusaha') is-invalid @enderror"
                                                       name="namabadanusaha"
                                                       placeholder="Masukan Nama Badan Usaha ..."
                                                       value="{{ old('namabadanusaha', $datatertibjasakonstruksinamabadanusaha ?? '') }}"
                                                       readonly>
                                                @error('namabadanusaha')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-cell">Status Perizinan Berusaha</td>
                                            <td>
                                                <select class="form-select @error('statusperizinan') is-invalid @enderror" name="statusperizinan">
                                                    <option value="">-- Pilih Status --</option>
                                                    <option value="Terverifikasi" {{ old('statusperizinan') == 'Terverifikasi' ? 'selected' : '' }}>Terverifikasi</option>
                                                    <option value="Tidak Terdaftar" {{ old('statusperizinan') == 'Tidak Terdaftar' ? 'selected' : '' }}>Tidak Terdaftar</option>
                                                </select>
                                                @error('statusperizinan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-cell">No NIB</td>
                                            <td>
                                                <input type="text"
                                                       class="form-input @error('nib') is-invalid @enderror"
                                                       name="nib"
                                                       placeholder="Masukkan NIB ..."
                                                       value="{{ old('nib', $datatertibjasakonstruksinib ?? '') }}"
                                                       readonly>
                                                @error('nib')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-cell">Waktu Pengawasan</td>
                                            <td>
                                                <div class="date-range-input">
                                                    <input type="date" class="form-input @error('waktupengawasan') is-invalid @enderror" name="waktupengawasan" value="{{ old('waktupengawasan') }}">
                                                    <span class="sep">→</span>
                                                    <input type="date" class="form-input @error('waktupengawasanselesai') is-invalid @enderror" name="waktupengawasanselesai" value="{{ old('waktupengawasanselesai') }}">
                                                </div>
                                                @error('waktupengawasan')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                @error('waktupengawasanselesai')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                            </td>
                                        </tr>
                                    </table>

                                    {{-- ═══ TABEL JENIS, SIFAT ═══ --}}
                                    <table class="data-table">
                                        <thead>
                                            <tr>
                                                <th style="width:40px;">No</th>
                                                <th rowspan="2" style="width:300px;">Nama Paket Pekerjaan</th>
                                                <th>Jenis Usaha<br><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                <th>Kesesuaian SBU</th>
                                                <th>Sifat Usaha<br><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                <th>Kesesuaian SBU</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
                                                <td style="width:300px;">
                                                    <textarea class="form-textarea @error('namapaketpekerjaan') is-invalid @enderror"
                                                              name="namapaketpekerjaan"
                                                              placeholder="Masukan Nama Pekerjaan ..."
                                                              rows="4" readonly>{{ old('namapaketpekerjaan', $datatertibjasakonstruksi ?? 'Data Masih Kosong') }}</textarea>
                                                    @error('namapaketpekerjaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td>
                                                    <select class="form-select @error('jenisusaha') is-invalid @enderror" name="jenisusaha">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Pekerjaan Konstruksi" {{ old('jenisusaha') == 'Pekerjaan Konstruksi' ? 'selected' : '' }}>Pekerjaan Konstruksi</option>
                                                        <option value="Pekerjaan Konsultasi Konstruksi" {{ old('jenisusaha') == 'Pekerjaan Konsultasi Konstruksi' ? 'selected' : '' }}>Pekerjaan Konsultasi Konstruksi</option>
                                                    </select>
                                                    @error('jenisusaha')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td>
                                                    <select class="form-select @error('kesesuaian') is-invalid @enderror" name="kesesuaian">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Sesuai" {{ old('kesesuaian') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                        <option value="Tidak Sesuai" {{ old('kesesuaian') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                    </select>
                                                    @error('kesesuaian')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td>
                                                    <select class="form-select @error('sifatusaha') is-invalid @enderror" name="sifatusaha">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Umum" {{ old('sifatusaha') == 'Umum' ? 'selected' : '' }}>Umum</option>
                                                        <option value="Spesialis" {{ old('sifatusaha') == 'Spesialis' ? 'selected' : '' }}>Spesialis</option>
                                                    </select>
                                                    @error('sifatusaha')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td>
                                                    <select class="form-select @error('kesesuaiansbu') is-invalid @enderror" name="kesesuaiansbu">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Sesuai" {{ old('kesesuaiansbu') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                        <option value="Tidak Sesuai" {{ old('kesesuaiansbu') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                    </select>
                                                    @error('kesesuaiansbu')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- ═══ TABEL SUB KLASIFIKASI ═══ --}}
                                    <table class="data-table">
                                        <thead>
                                            <tr>
                                                <th>Sub Klasifikasi<br><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                <th>Kesesuaian SBU</th>
                                                <th>Layanan Usaha<br><span class="th-sub">Yang Dipersyaratkan</span></th>
                                                <th>Kesesuaian SBU</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="max-width:500px;">
                                                    <div id="subklasifikasi-container">
                                                        <select class="form-select mb-1 @error('subklasifikasi_id') is-invalid @enderror"
                                                                name="subklasifikasi_id"
                                                                id="subklasifikasiSelect"
                                                                onchange="convertToTextarea(this)">
                                                            <option value="">-- Pilih Subklasifikasi --</option>
                                                            @foreach ($datasubklasifikasi as $sub)
                                                                <option value="{{ $sub->id }}" {{ old('subklasifikasi_id') == $sub->id ? 'selected' : '' }}>
                                                                    {{ Str::limit($sub->pekerjaan, 125) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('subklasifikasi_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-select @error('kesesuaianklasifikasi') is-invalid @enderror" name="kesesuaianklasifikasi">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Sesuai" {{ old('kesesuaianklasifikasi') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                        <option value="Tidak Sesuai" {{ old('kesesuaianklasifikasi') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                    </select>
                                                    @error('kesesuaianklasifikasi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td>
                                                    <select class="form-select @error('layananusaha') is-invalid @enderror" name="layananusaha">
                                                        <option value="">-- Pilih Layanan Usaha --</option>
                                                        <option value="Pekerjaan Konstruksi" {{ old('layananusaha') == 'Pekerjaan Konstruksi' ? 'selected' : '' }}>Pekerjaan Konstruksi</option>
                                                        <option value="Pekerjaan Konsultasi Konstruksi" {{ old('layananusaha') == 'Pekerjaan Konsultasi Konstruksi' ? 'selected' : '' }}>Pekerjaan Konsultasi Konstruksi</option>
                                                    </select>
                                                    @error('layananusaha')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td>
                                                    <select class="form-select @error('kesesuaianlayananusaha') is-invalid @enderror" name="kesesuaianlayananusaha">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Sesuai" {{ old('kesesuaianlayananusaha') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                        <option value="Tidak Sesuai" {{ old('kesesuaianlayananusaha') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                    </select>
                                                    @error('kesesuaianlayananusaha')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- ═══ TIM PEMERIKSA ═══ --}}
                                    <div class="tim-panel">
                                        <div class="tim-panel-title">
                                            <i class="bi bi-people-fill"></i> Tim Pemeriksa
                                        </div>
                                        <table class="data-table" style="font-size:12.5px;">
                                            <thead>
                                                <tr>
                                                    <th style="width:50px;">No</th>
                                                    <th>Nama Pemeriksa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="center">1</td>
                                                    <td>
                                                        <select name="tandatangan1_id" class="form-select @error('tandatangan1_id') is-invalid @enderror">
                                                            <option value="">-- Pilih Pemeriksa --</option>
                                                            @foreach ($datatandatangan as $tandatangan)
                                                                <option value="{{ $tandatangan->id }}"
                                                                    {{ old('tandatangan1_id', optional($data->surattertibjakonusaha1)->tandatangan1_id) == $tandatangan->id ? 'selected' : '' }}>
                                                                    {{ $tandatangan->namalengkap }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('tandatangan1_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="center">2</td>
                                                    <td>
                                                        <select name="tandatangan2_id" class="form-select @error('tandatangan2_id') is-invalid @enderror">
                                                            <option value="">-- Pilih Pemeriksa --</option>
                                                            @foreach ($datatandatangan as $tandatangan)
                                                                <option value="{{ $tandatangan->id }}"
                                                                    {{ old('tandatangan2_id', optional($data->surattertibjakonusaha1)->tandatangan2_id) == $tandatangan->id ? 'selected' : '' }}>
                                                                    {{ $tandatangan->namalengkap }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('tandatangan2_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="center">3</td>
                                                    <td>
                                                        <select name="tandatangan3_id" class="form-select @error('tandatangan3_id') is-invalid @enderror">
                                                            <option value="">-- Pilih Pemeriksa --</option>
                                                            @foreach ($datatandatangan as $tandatangan)
                                                                <option value="{{ $tandatangan->id }}"
                                                                    {{ old('tandatangan3_id', optional($data->surattertibjakonusaha1)->tandatangan3_id) == $tandatangan->id ? 'selected' : '' }}>
                                                                    {{ $tandatangan->namalengkap }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('tandatangan3_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                {{-- ═══ SUBMIT BUTTON ═══ --}}
                                <div class="submit-bar">
                                    <button class="button-hijau button-md" type="button" onclick="openModal()">
                                        <i class="bi bi-plus-circle"></i>
                                        <span>Buat Berkas</span>
                                    </button>
                                </div>

                                {{-- ═══ MODAL KONFIRMASI ═══ --}}
                                <div id="confirmModal" class="confirm-overlay">
                                    <div class="confirm-box">
                                        <div class="confirm-title">Konfirmasi Buat Berkas</div>
                                        <p class="confirm-message">
                                            Apakah Anda ingin membuat berkas ini?
                                        </p>

                                        <label class="confirm-check">
                                            <input type="checkbox" id="agreeCheckbox" onchange="toggleSubmitButton()">
                                            <span>Data yang dibuat tidak bisa dirubah kembali, harap periksa kembali data Anda!</span>
                                        </label>

                                        <div class="confirm-actions">
                                            <button id="confirmSubmitBtn"
                                                    onclick="submitForm()"
                                                    disabled
                                                    class="button-baru button-md">
                                                <i class="bi bi-slash-circle"></i> Ya, Buat
                                            </button>

                                            <button type="button" onclick="closeModal()" class="button-merah button-md">
                                                <i class="bi bi-x-circle"></i> Ya, Batal
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

</section>
   </main>
</div>
</div>

@include('backend.00_administrator.00_baganterpisah.02_footer')

{{-- ═══ SCRIPT ═══ --}}
<script>
function convertToTextarea(select) {
    const selectedText = select.options[select.selectedIndex].text;
    const container = document.getElementById("subklasifikasi-container");
    if (!selectedText || !select.value) return;

    container.innerHTML = `
        <textarea class="form-textarea" readonly rows="3" style="width:100%; resize:vertical;">${selectedText}</textarea>
        <input type="hidden" name="subklasifikasi_id" value="${select.value}">
    `;
}

function openModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "none";
}

function toggleSubmitButton() {
    const checkbox = document.getElementById("agreeCheckbox");
    const btn = document.getElementById("confirmSubmitBtn");

    if (checkbox.checked) {
        btn.disabled = false;
        btn.style.cursor = 'pointer';
        btn.style.backgroundColor = '#13A847';
        btn.style.borderColor = '#13A847';
        btn.style.opacity = '1';
        btn.innerHTML = '<i class="bi bi-check-circle"></i> Ya, Buat';
    } else {
        btn.disabled = true;
        btn.style.cursor = 'not-allowed';
        btn.style.backgroundColor = '#dc2626';
        btn.style.borderColor = '#dc2626';
        btn.style.opacity = '0.7';
        btn.innerHTML = '<i class="bi bi-slash-circle"></i> Ya, Buat';
    }
}

function submitForm() {
    const form = document.querySelector('form');
    if (form) form.submit();
    closeModal();
}
</script>

</body>
</html>
