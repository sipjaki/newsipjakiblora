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
    background-image: radial-gradient(rgba(19, 168, 71, 0.18) 1.5px, transparent 1.5px);
    background-size: 22px 22px;
    pointer-events: none;
    z-index: 0;
    mask-image: linear-gradient(180deg, black 0%, black 60%, transparent 100%);
    -webkit-mask-image: linear-gradient(180deg, black 0%, black 60%, transparent 100%);
}
.bg-soft-page > * { position: relative; z-index: 1; }

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
.panel-body { padding: 20px 24px; }

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
.action-bar .title-chip i { color: #13A847; font-size: 14px; }

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
.form-input[readonly] { background: #f8fafc; cursor: default; }
.form-textarea { resize: vertical; }

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
.doc-header .header-sep { color: #111827; font-weight: 800; font-size: 14px; }
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
.data-table td { text-align: left; color: #111827; }
.data-table td.center { text-align: center; }

.date-range-input {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}
.date-range-input .form-input { flex: 1; min-width: 140px; }
.date-range-input .sep { color: #111827; font-weight: 700; font-size: 12px; }

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
.tim-panel-title i { color: #13A847; font-size: 14px; }

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
.confirm-title { font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 12px; }
.confirm-message { font-size: 13px; color: #475569; line-height: 1.6; margin-bottom: 16px; }
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
.confirm-check input[type="checkbox"] { margin-top: 2px; flex-shrink: 0; }
.confirm-actions { display: flex; justify-content: center; gap: 10px; }

/* ⚠️ MODAL LIHAT BERKAS */
.berkas-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, 0.6);
    z-index: 10000;
    justify-content: center;
    align-items: flex-start;
    padding: 30px 15px;
    overflow-y: auto;
}
.berkas-overlay.show { display: flex; }

.berkas-dialog {
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid #111827;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    width: 100%;
    max-width: 1100px;
    margin: auto;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    max-height: calc(100vh - 60px);
}

.berkas-header {
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 14px 20px;
    border-bottom: 1px solid #111827;
    background: #ffffff;
    flex-shrink: 0;
}
.berkas-header .berkas-title {
    margin: 0 0 0 8px;
    font-size: 13px;
    font-weight: 600;
    color: #0f172a;
    line-height: 1.3;
}
.berkas-close-btn {
    margin-left: auto;
    background: #f1f5f9;
    border: 1px solid #cbd5e1;
    color: #334155;
    width: 32px;
    height: 32px;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.15s ease;
    font-size: 16px;
    line-height: 1;
    flex-shrink: 0;
}
.berkas-close-btn:hover { background: #fee2e2; border-color: #fca5a5; color: #b91c1c; }

.berkas-body {
    padding: 20px;
    font-size: 13px;
    overflow-y: auto;
    flex: 1;
}

/* ═══ TIM PEMERIKSA — KOLOM 6 KANAN ═══ */
.tim-panel-6 {
    display: flex;
    justify-content: flex-end;
    margin-top: 16px;
}
.tim-panel-6 .tim-inner {
    width: 50%; /* kolom 6 dari 12 */
    min-width: 320px;
    background: #ffffff;
    border: 1px solid #111827;
    border-radius: 10px;
    padding: 12px 14px;
}
.tim-panel-6 .tim-title {
    font-size: 12px;
    font-weight: 800;
    color: #111827;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    margin-bottom: 8px;
    padding-bottom: 6px;
    border-bottom: 1px solid #111827;
    text-align: center;
}
.tim-panel-6 table {
    width: 100%;
    border-collapse: collapse;
    font-size: 12px;
}
.tim-panel-6 table th,
.tim-panel-6 table td {
    border: 1px solid #111827;
    padding: 5px 8px;
    vertical-align: middle;
}
.tim-panel-6 table th {
    background: #f8fafc;
    text-align: center;
    font-weight: 700;
    font-size: 11.5px;
}
.tim-panel-6 table td.center { text-align: center; }
.tim-panel-6 .ttd-box {
    display: inline-block;
    width: 80px;
    height: 36px;
    border: 1px solid #111827;
    background: #ffffff;
    border-radius: 2px;
}

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
    .status-kesesuaian-card { padding: 14px 16px; border-radius: 12px; }
    .berkas-dialog { max-height: calc(100vh - 30px); }
    .berkas-body { padding: 14px; }
    .tim-panel-6 .tim-inner { width: 100%; min-width: 0; }
}

.status-kesesuaian-card {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
    padding: 20px 24px;
    margin-bottom: 20px;
}
.status-kesesuaian-title {
    font-size: 12px;
    font-weight: 800;
    color: #111827;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 16px;
    padding-bottom: 10px;
    border-bottom: 1px solid #111827;
    display: flex;
    align-items: center;
    gap: 8px;
}
.status-kesesuaian-title i { color: #13A847; font-size: 14px; }
.status-kesesuaian-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
}
@media (max-width: 768px) {
    .status-kesesuaian-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 480px) {
    .status-kesesuaian-grid { grid-template-columns: 1fr; }
}
.status-kesesuaian-item {
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 14px 16px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    transition: all 0.2s ease;
}
.status-kesesuaian-item:hover { border-color: #cbd5e1; background: #ffffff; }
.status-kesesuaian-label {
    font-size: 11px;
    font-weight: 800;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    display: flex;
    align-items: center;
    gap: 5px;
}
.status-kesesuaian-label i { color: #94a3b8; font-size: 12px; }
.status-kesesuaian-value {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    font-size: 12px;
    font-weight: 700;
    padding: 8px 12px;
    border-radius: 8px;
    border: 1.5px solid;
}
.status-kesesuaian-value.ok { background: #dcfce7; border-color: #86efac; color: #15803d; }
.status-kesesuaian-value.no { background: #fee2e2; border-color: #fca5a5; color: #b91c1c; }
</style>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.03_sidebar')

   <main class="app-main">
<section class="bg-soft-page">

        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
          </div>
        </div>

        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">

                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-header">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                        </div>

                        <div class="panel-body">

                            <div class="action-bar">
                                <div class="left">
                                    <span class="title-chip">
                                        <i class="bi bi-file-earmark-text"></i>
                                        Nama Pekerjaan: {{ $datatertibjasakonstruksi ?? 'Masih Kosong' }}
                                    </span>
                                </div>
                                <div class="right">
                                    @if($datasurat1->id)
                                        <button type="button" onclick="printModalContent({{ $datasurat1->id }})" class="button-berkas button-md">
                                            <i class="bi bi-printer"></i> Print
                                        </button>
                                        <button type="button" class="button-berkas button-md" onclick="downloadModalPDF({{ $datasurat1->id }})">
                                            <i class="bi bi-download"></i> Download
                                        </button>
                                        <button type="button" class="button-berkas button-md"
                                                onclick="openBerkasModal({{ $datasurat1->id }})">
                                            <i class="bi bi-eye"></i> Lihat Berkas
                                        </button>
                                    @endif
                                    <a href="{{ url()->previous() }}" class="button-baru button-md">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </div>

                            <div class="status-kesesuaian-card">
                                <div class="status-kesesuaian-title">
                                    <i class="bi bi-shield-check"></i> Kesesuaian Kegiatan Konstruksi
                                </div>
                                <div class="status-kesesuaian-grid">
                                    @php
                                        $statusItems = [
                                            ['label' => 'Sesuai Jenis',        'icon' => 'bi-file-earmark-check-fill', 'value' => $datasurat1->kesesuaian ?? null],
                                            ['label' => 'Sesuai Sifat',        'icon' => 'bi-file-earmark-check-fill', 'value' => $datasurat1->kesesuaiansbu ?? null],
                                            ['label' => 'Sesuai Klasifikasi',  'icon' => 'bi-file-earmark-check-fill', 'value' => $datasurat1->kesesuaianklasifikasi ?? null],
                                            ['label' => 'Sesuai Layanan',      'icon' => 'bi-file-earmark-check-fill', 'value' => $datasurat1->kesesuaianlayananusaha ?? null],
                                        ];
                                    @endphp

                                    @foreach ($statusItems as $s)
                                        @php
                                            $isOk = $s['value'] === 'Sesuai';
                                            $cls = $isOk ? 'ok' : 'no';
                                            $label = $isOk ? 'TERTIB' : 'BELUM TERTIB';
                                            $icon = $isOk ? 'bi-check-circle-fill' : 'bi-x-circle-fill';
                                        @endphp
                                        <div class="status-kesesuaian-item">
                                            <div class="status-kesesuaian-label">
                                                <i class="bi {{ $s['icon'] }}"></i> {{ $s['label'] }}
                                            </div>
                                            <div class="status-kesesuaian-value {{ $cls }}">
                                                <i class="bi {{ $icon }}"></i> {{ $label }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <form action="{{ route('betertibjakonusahasurat1createnewsurat') }}" method="POST" enctype="multipart/form-data" id="formBuatBerkas">
                                @csrf
                                <input type="hidden" name="tertibjasakonstruksi_id" value="{{ $datatertibjasakonstruksi_id }}">

                                <div class="doc-card">
                                    <div class="doc-header">
                                        <img src="/assets/icon/logokabupatenblora.png" alt="Logo">
                                        <img src="/assets/icon/pupr.png" alt="Logo">
                                        <span class="header-sep">:</span>
                                        <p class="header-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                    </div>

                                    <div class="doc-title">
                                        Surat Dukung Tertib Jakon Usaha : Pengawasan Tertib Usaha terhadap Kesesuaian Jenis, Sifat, Klasifikasi, dan Layanan Usaha
                                    </div>

                                    <table class="info-table">
                                        <tr>
                                            <td class="label-cell">Nama Badan Usaha</td>
                                            <td>
                                                <input type="text" class="form-input @error('namabadanusaha') is-invalid @enderror"
                                                       name="namabadanusaha" placeholder="Masukan Nama Badan Usaha ..."
                                                       value="{{ old('namabadanusaha', $datasurat1->namabadanusaha ?? '') }}" readonly>
                                                @error('namabadanusaha')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-cell">Status Perizinan Berusaha</td>
                                            <td>
                                                @php $status = $datasurat1->statusperizinan ?? null; @endphp
                                                @if ($status === 'Terverifikasi')
                                                    <span class="badge bg-success" style="font-size:13px;">Terverifikasi</span>
                                                @elseif ($status === 'Tidak Terdaftar')
                                                    <span class="badge bg-danger" style="font-size:13px;">Tidak Terdaftar</span>
                                                @elseif ($status === 'Belum Terdaftar')
                                                    <span class="badge bg-warning text-dark" style="font-size:13px;">Belum Terdaftar</span>
                                                @else
                                                    <span class="badge bg-secondary" style="font-size:13px;">-</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-cell">No NIB</td>
                                            <td>
                                                <input type="text" class="form-input @error('nib') is-invalid @enderror"
                                                       name="nib" placeholder="Masukkan NIB ..."
                                                       value="{{ old('nib', $datasurat1->nib ?? '') }}" readonly>
                                                @error('nib')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-cell">Waktu Pengawasan</td>
                                            <td>
                                                <div class="date-range-input">
                                                    @php
                                                        $mulai = ($datasurat1 && $datasurat1->waktupengawasan)
                                                            ? \Carbon\Carbon::parse($datasurat1->waktupengawasan)->translatedFormat('d F Y') : '-';
                                                        $selesai = ($datasurat1 && $datasurat1->waktupengawasanselesai)
                                                            ? \Carbon\Carbon::parse($datasurat1->waktupengawasanselesai)->translatedFormat('d F Y') : '-';
                                                    @endphp
                                                    <span style="padding: 6px 12px; background: #eff6ff; color: #1e40af; border: 1px solid #111827; border-radius: 6px; font-weight: 600; font-size: 12.5px;">{{ $mulai }}</span>
                                                    <span class="sep">→</span>
                                                    <span style="padding: 6px 12px; background: #f1f5f9; color: #475569; border: 1px solid #111827; border-radius: 6px; font-weight: 600; font-size: 12.5px;">{{ $selesai }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

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
                                                              name="namapaketpekerjaan" placeholder="Masukan Nama Pekerjaan ..."
                                                              rows="6">{{ old('namapaketpekerjaan', $datasurat1->namapaketpekerjaan ?? 'Data Masih Kosong') }}</textarea>
                                                    @error('namapaketpekerjaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td class="center">{{ $datasurat1->jenisusaha ?? '-' }}</td>
                                                <td class="center">{{ $datasurat1->kesesuaian ?? '-' }}</td>
                                                <td class="center">{{ $datasurat1->sifatusaha ?? '-' }}</td>
                                                <td class="center">{{ $datasurat1->kesesuaiansbu ?? '-' }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

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
                                                <td style="max-width:500px; min-height: 75px;">
                                                    {{ $datasurat1 && $datasurat1->subklasifikasi
                                                        ? Str::limit($datasurat1->subklasifikasi->pekerjaan, 500) : '-' }}
                                                </td>
                                                <td class="center">{{ $datasurat1->kesesuaianklasifikasi ?? '-' }}</td>
                                                <td class="center">{{ $datasurat1->layananusaha ?? '-' }}</td>
                                                <td class="center">{{ $datasurat1->kesesuaianlayananusaha ?? '-' }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- ═══ TIM PEMERIKSA — KOLOM 6 KANAN, TTD KOTAK KOSONG ═══ --}}
                                    <div class="tim-panel-6">
                                        <div class="tim-inner">
                                            <div class="tim-title">Tim Pemeriksa</div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th style="width:30px;">No</th>
                                                        <th>Nama Pemeriksa</th>
                                                        <th style="width:100px;">Tanda Tangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="center">1</td>
                                                        <td>{{ optional($datasurat1->tandatangan1)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                        <td class="center"><span class="ttd-box"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">2</td>
                                                        <td>{{ optional($datasurat1->tandatangan2)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                        <td class="center"><span class="ttd-box"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="center">3</td>
                                                        <td>{{ optional($datasurat1->tandatangan3)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                        <td class="center"><span class="ttd-box"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="submit-bar">
                                    <button class="button-hijau button-md" type="button" onclick="openModal()">
                                        <i class="bi bi-plus-circle"></i>
                                        <span>Buat Berkas</span>
                                    </button>
                                </div>

                                <div id="confirmModal" class="confirm-overlay">
                                    <div class="confirm-box">
                                        <div class="confirm-title">Konfirmasi Buat Berkas</div>
                                        <p class="confirm-message">Apakah Anda ingin membuat berkas ini?</p>
                                        <label class="confirm-check">
                                            <input type="checkbox" id="agreeCheckbox" onchange="toggleSubmitButton()">
                                            <span>Data yang dibuat tidak bisa dirubah kembali, harap periksa kembali data Anda!</span>
                                        </label>
                                        <div class="confirm-actions">
                                            <button id="confirmSubmitBtn" type="button" onclick="submitForm()" disabled class="button-baru button-md">
                                                <i class="bi bi-slash-circle"></i> Ya, Buat
                                            </button>
                                            <button type="button" onclick="closeModal()" class="button-merah button-md">
                                                <i class="bi bi-x-circle"></i> Batal
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            {{-- ═══════════════════════════════════════════════════════
                                 MODAL LIHAT BERKAS
                                 ═══════════════════════════════════════════════════════ --}}
                            @if($datasurat1->id)
                            <div class="berkas-overlay" id="berkasOverlay{{ $datasurat1->id }}"
                                 onclick="if(event.target === this) closeBerkasModal({{ $datasurat1->id }})">
                                <div class="berkas-dialog" id="berkasDialog{{ $datasurat1->id }}">
                                    <div class="berkas-header">
                                        <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="24" style="margin-right: 4px;">
                                        <img src="/assets/icon/pupr.png" alt="Logo" width="24" style="margin-right: 4px;">
                                        <span style="color:#111827; font-weight:800;">:</span>
                                        <p class="berkas-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                        <button type="button" class="berkas-close-btn"
                                                onclick="closeBerkasModal({{ $datasurat1->id }})"
                                                aria-label="Close">&times;</button>
                                    </div>
                                    <div class="berkas-body">
                                        <h6 style="font-size: 13px; font-weight:700; color:#0f172a; margin-bottom:14px;">
                                            Surat Dukung Tertib Jakon Usaha : Pengawasan Tertib Usaha terhadap Kesesuaian Jenis, Sifat, Klasifikasi, dan Layanan Usaha dengan Kegiatan Usaha Jasa Konstruksi Secara Rutin
                                        </h6>

                                        <table class="info-table" style="margin-bottom:14px;">
                                            <tr>
                                                <td class="label-cell">Nama Badan Usaha</td>
                                                <td>{{ $datasurat1->namabadanusaha ?? 'Data Belum Di Buat' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="label-cell">Status Perizinan Berusaha</td>
                                                <td>{{ $datasurat1->statusperizinan ?? 'Data Belum Di Buat' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="label-cell">No NIB</td>
                                                <td>{{ $datasurat1->nib ?? 'Data Belum Di Buat' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="label-cell">Waktu Pengawasan</td>
                                                <td>
                                                    @if ($datasurat1 && $datasurat1->waktupengawasan && $datasurat1->waktupengawasanselesai)
                                                        {{ \Carbon\Carbon::parse($datasurat1->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                        –
                                                        {{ \Carbon\Carbon::parse($datasurat1->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
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
                                                    <td>{{$datasurat1->namapaketpekerjaan ?? 'Data Belum Di Buat'}}</td>
                                                    <td>{{$datasurat1->jenisusaha ?? 'Data Belum Di Buat'}}</td>
                                                    <td class="center">{{$datasurat1->kesesuaian ?? 'Data Belum Di Buat'}}</td>
                                                    <td class="center">{{$datasurat1->sifatusaha ?? 'Data Belum Di Buat'}}</td>
                                                    <td class="center">{{$datasurat1->kesesuaiansbu ?? 'Data Belum Di Buat'}}</td>
                                                    <td>{{$datasurat1->subklasifikasi->kode ?? 'Data Belum Di Buat '}} {{$datasurat1->subklasifikasi->pekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                    <td class="center">{{$datasurat1->kesesuaianklasifikasi ?? 'Data Belum Di Buat'}}</td>
                                                    <td>{{$datasurat1->layananusaha ?? 'Data Belum Di Buat'}}</td>
                                                    <td class="center">{{$datasurat1->kesesuaianlayananusaha ?? 'Data Belum Di Buat'}}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        {{-- ═══ TIM PEMERIKSA — KOLOM 6 KANAN, TTD KOTAK KOSONG ═══ --}}
                                        <div class="tim-panel-6">
                                            <div class="tim-inner">
                                                <div class="tim-title">Tim Pemeriksa</div>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th style="width:30px;">No</th>
                                                            <th>Nama Lengkap</th>
                                                            <th style="width:100px;">Tanda Tangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="center">1</td>
                                                            <td>{{$datasurat1->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                            <td class="center"><span class="ttd-box"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">2</td>
                                                            <td>{{$datasurat1->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                            <td class="center"><span class="ttd-box"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">3</td>
                                                            <td>{{$datasurat1->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                            <td class="center"><span class="ttd-box"></span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
/* ═══════════════════════════════════════════════════════════
   MODAL LIHAT BERKAS — BUKA/TUTUP MANUAL
   ═══════════════════════════════════════════════════════════ */
function openBerkasModal(id) {
    const el = document.getElementById('berkasOverlay' + id);
    if (!el) return;
    el.classList.add('show');
    document.body.style.overflow = 'hidden';
}
function closeBerkasModal(id) {
    const el = document.getElementById('berkasOverlay' + id);
    if (!el) return;
    el.classList.remove('show');
    document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.berkas-overlay.show').forEach(function(el) {
            el.classList.remove('show');
        });
        document.body.style.overflow = '';
    }
});

/* ═══════════════════════════════════════════════════════════
   DOWNLOAD PDF — A4 LANDSCAPE • 1 HALAMAN • FONT 12px
   ═══════════════════════════════════════════════════════════ */
function downloadModalPDF(id) {
    const overlay = document.getElementById('berkasOverlay' + id);
    if (!overlay) { alert('Konten modal tidak ditemukan.'); return; }

    const dialog = overlay.querySelector('.berkas-dialog');
    if (!dialog) { alert('Konten modal tidak ditemukan.'); return; }

    // ── Ambil data
    const infoRows = overlay.querySelectorAll('.info-table tr');
    let namaBU = '-', statusIzin = '-', nib = '-', waktu = '-';
    infoRows.forEach(tr => {
        const label = tr.querySelector('.label-cell')?.innerText.trim();
        const value = tr.querySelector('td:last-child')?.innerText.trim();
        if (label === 'Nama Badan Usaha') namaBU = value;
        if (label === 'Status Perizinan Berusaha') statusIzin = value;
        if (label === 'No NIB') nib = value;
        if (label === 'Waktu Pengawasan') waktu = value;
    });

    const paketTable = overlay.querySelector('.data-table');
    const paketCells = paketTable ? paketTable.querySelectorAll('tbody tr:first-child td') : [];
    const getCell = (i) => paketCells[i] ? paketCells[i].innerText.trim() : '-';
    const namaPaket   = getCell(1);
    const jenisUsaha  = getCell(2);
    const kesJenis    = getCell(3);
    const sifatUsaha  = getCell(4);
    const kesSifat    = getCell(5);
    const subKlas     = getCell(6);
    const kesKlas     = getCell(7);
    const layanan     = getCell(8);
    const kesLayanan  = getCell(9);

    // Tim pemeriksa
    const timRows = overlay.querySelectorAll('.tim-panel-6 .tim-inner table tbody tr');
    let timData = [];
    timRows.forEach((tr, i) => {
        const tds = tr.querySelectorAll('td');
        const nama = tds[1]?.innerText.trim() || '-';
        timData.push({ no: i + 1, nama: nama });
    });

    const esc = (s) => String(s ?? '').replace(/[&<>"']/g, c => ({
        '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'
    }[c]));

    const logoKab = window.location.origin + '/assets/icon/logokabupatenblora.png';
    const logoPupr = window.location.origin + '/assets/icon/pupr.png';

    // ── HTML template PDF
    const pdfHTML = `
        <div class="pdf-page">
            <div class="pdf-header">
                <img src="${logoKab}" alt="Logo">
                <img src="${logoPupr}" alt="Logo">
                <span class="pdf-sep">:</span>
                <span class="pdf-header-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</span>
            </div>

            <div class="pdf-doc-title">
                Surat Dukung Tertib Jakon Usaha : Pengawasan Tertib Usaha terhadap Kesesuaian Jenis, Sifat, Klasifikasi, dan Layanan Usaha dengan Kegiatan Usaha Jasa Konstruksi Secara Rutin
            </div>

            <table class="pdf-info">
                <tr><td class="pdf-label">Nama Badan Usaha</td><td>${esc(namaBU)}</td></tr>
                <tr><td class="pdf-label">Status Perizinan Berusaha</td><td>${esc(statusIzin)}</td></tr>
                <tr><td class="pdf-label">No NIB</td><td>${esc(nib)}</td></tr>
                <tr><td class="pdf-label">Waktu Pengawasan</td><td>${esc(waktu)}</td></tr>
            </table>

            <table class="pdf-data">
                <thead>
                    <tr>
                        <th rowspan="2" style="width:28px;">No</th>
                        <th rowspan="2">Nama Paket Pekerjaan</th>
                        <th colspan="2">Jenis</th>
                        <th colspan="2">Sifat</th>
                        <th colspan="2">Subklasifikasi</th>
                        <th colspan="2">Layanan Usaha</th>
                    </tr>
                    <tr>
                        <th>Jenis Usaha<br><span class="pdf-sub">Yang Dipersyaratkan</span></th>
                        <th>Kesesuaian SBU</th>
                        <th>Sifat Usaha<br><span class="pdf-sub">Yang Dipersyaratkan</span></th>
                        <th>Kesesuaian SBU</th>
                        <th>Sub Klasifikasi<br><span class="pdf-sub">Yang Dipersyaratkan</span></th>
                        <th>Kesesuaian SBU</th>
                        <th>Layanan Usaha<br><span class="pdf-sub">Yang Dipersyaratkan</span></th>
                        <th>Kesesuaian SBU</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pdf-center">1</td>
                        <td>${esc(namaPaket)}</td>
                        <td>${esc(jenisUsaha)}</td>
                        <td class="pdf-center">${esc(kesJenis)}</td>
                        <td class="pdf-center">${esc(sifatUsaha)}</td>
                        <td class="pdf-center">${esc(kesSifat)}</td>
                        <td>${esc(subKlas)}</td>
                        <td class="pdf-center">${esc(kesKlas)}</td>
                        <td>${esc(layanan)}</td>
                        <td class="pdf-center">${esc(kesLayanan)}</td>
                    </tr>
                </tbody>
            </table>

            <div class="pdf-tim-wrap">
                <div class="pdf-tim-inner">
                    <div class="pdf-tim-title">Tim Pemeriksa</div>
                    <table class="pdf-data">
                        <thead>
                            <tr>
                                <th style="width:28px;">No</th>
                                <th>Nama Lengkap</th>
                                <th style="width:100px;">Tanda Tangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${timData.map(t => `
                                <tr>
                                    <td class="pdf-center">${t.no}</td>
                                    <td>${esc(t.nama)}</td>
                                    <td class="pdf-center"><span class="pdf-ttd-box"></span></td>
                                </tr>
                            `).join('')}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    `;

    // ── CSS PDF
    const pdfCSS = `
        #__pdf_holder__ {
            position: absolute !important;
            left: 0 !important;
            top: 0 !important;
            z-index: 999999 !important;
            background: #ffffff !important;
            padding: 10mm !important;
            width: 297mm !important;
            min-height: 210mm !important;
            box-sizing: border-box !important;
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 12px !important;
            color: #000000 !important;
            line-height: 1.3 !important;
            opacity: 0;
            pointer-events: none;
        }
        #__pdf_holder__ .pdf-page { width: 100%; }
        #__pdf_holder__ * {
            font-size: 12px !important;
            font-family: Arial, Helvetica, sans-serif !important;
            line-height: 1.3 !important;
            box-sizing: border-box !important;
        }
        #__pdf_holder__ .pdf-header {
            display: flex;
            align-items: center;
            gap: 6px;
            padding-bottom: 6px;
            border-bottom: 2px solid #000;
            margin-bottom: 8px;
        }
        #__pdf_holder__ .pdf-header img { width: 24px; height: 24px; object-fit: contain; }
        #__pdf_holder__ .pdf-header .pdf-sep { font-weight: 800; margin: 0 4px; }
        #__pdf_holder__ .pdf-header .pdf-header-title { font-weight: 700; font-size: 12px; }
        #__pdf_holder__ .pdf-doc-title {
            font-weight: 700;
            font-size: 12px;
            line-height: 1.35;
            padding: 6px 8px;
            background: #f2f2f2;
            border: 1px solid #000;
            border-left: 3px solid #13A847;
            margin-bottom: 8px;
        }
        #__pdf_holder__ .pdf-info,
        #__pdf_holder__ .pdf-data {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 8px;
        }
        #__pdf_holder__ .pdf-info td,
        #__pdf_holder__ .pdf-data th,
        #__pdf_holder__ .pdf-data td {
            border: 1px solid #000;
            padding: 3px 6px;
            font-size: 12px;
            vertical-align: middle;
            word-break: break-word;
        }
        #__pdf_holder__ .pdf-info .pdf-label {
            background: #f2f2f2;
            font-weight: 700;
            width: 160px;
        }
        #__pdf_holder__ .pdf-data th {
            background: #f2f2f2;
            text-align: center;
            font-weight: 700;
            line-height: 1.25;
        }
        #__pdf_holder__ .pdf-data td { text-align: left; }
        #__pdf_holder__ .pdf-center { text-align: center !important; }
        #__pdf_holder__ .pdf-sub { display: block; font-weight: 400; font-size: 11px; margin-top: 1px; }

        /* Tim pemeriksa di kanan (kolom 6) */
        #__pdf_holder__ .pdf-tim-wrap {
            display: flex;
            justify-content: flex-end;
            margin-top: 8px;
        }
        #__pdf_holder__ .pdf-tim-inner {
            width: 50%;
            min-width: 300px;
        }
        #__pdf_holder__ .pdf-tim-title {
            font-weight: 700;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            margin: 0 0 4px 0;
            padding-bottom: 3px;
            border-bottom: 1px solid #000;
            text-align: center;
        }
        #__pdf_holder__ .pdf-ttd-box {
            display: inline-block;
            width: 80px;
            height: 34px;
            border: 1px solid #000;
            background: #ffffff;
        }
    `;

    // ── Suntik CSS
    const styleEl = document.createElement('style');
    styleEl.id = '__pdf_style__';
    styleEl.textContent = pdfCSS;
    document.head.appendChild(styleEl);

    // ── Buat holder
    const holder = document.createElement('div');
    holder.id = '__pdf_holder__';
    holder.innerHTML = pdfHTML;
    document.body.appendChild(holder);

    // ── Konversi logo ke base64
    const allImgs = holder.querySelectorAll('img');
    const promises = Array.from(allImgs).map(img => {
        return new Promise((resolve) => {
            const src = img.getAttribute('src');
            if (!src) { resolve(); return; }
            const image = new Image();
            image.crossOrigin = 'anonymous';
            image.onload = () => {
                try {
                    const canvas = document.createElement('canvas');
                    canvas.width = image.naturalWidth || 1;
                    canvas.height = image.naturalHeight || 1;
                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(image, 0, 0);
                    img.src = canvas.toDataURL('image/png');
                } catch (e) {
                    console.warn('Convert image failed:', src, e);
                }
                resolve();
            };
            image.onerror = () => {
                console.warn('Load image failed:', src);
                resolve();
            };
            image.src = src;
        });
    });

    Promise.all(promises).then(() => {
        html2pdf().set({
            margin: 0,
            filename: `Tertibjakonusaha_kesesuaiankegiatankonstruksi_${id}.pdf`,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: {
                scale: 2,
                useCORS: true,
                allowTaint: true,
                backgroundColor: '#ffffff',
                logging: false,
                scrollX: 0,
                scrollY: 0,
                windowWidth: holder.scrollWidth,
                windowHeight: holder.scrollHeight,
                onclone: function(clonedDoc) {
                    const el = clonedDoc.getElementById('__pdf_holder__');
                    if (el) { el.style.opacity = '1'; el.style.pointerEvents = 'auto'; }
                }
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'landscape',
                compress: true
            },
            pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
        }).from(holder).save().then(() => {
            holder.remove();
            styleEl.remove();
        }).catch((err) => {
            console.error('PDF error:', err);
            alert('Gagal membuat PDF. Cek console browser.');
            holder.remove();
            styleEl.remove();
        });
    });
}

/* ═══════════════════════════════════════════════════════════
   PRINT — A4 LANDSCAPE, FONT 12px
   ═══════════════════════════════════════════════════════════ */
function printModalContent(id) {
    const overlay = document.getElementById('berkasOverlay' + id);
    if (!overlay) { alert("Konten tidak ditemukan."); return; }
    const dialog = overlay.querySelector('.berkas-dialog');
    if (!dialog) { alert("Konten tidak ditemukan."); return; }

    const clone = dialog.cloneNode(true);
    clone.querySelectorAll('.berkas-close-btn').forEach(el => el.remove());

    const printWindow = window.open('', '', 'width=1200,height=800');
    printWindow.document.write(`
        <html>
        <head>
            <title>Print Dokumen</title>
            <style>
                @page { size: A4 landscape; margin: 8mm; }
                * { box-sizing: border-box; }
                body {
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 12px;
                    color: #000;
                    margin: 0;
                }
                body * { font-size: 12px !important; }
                table { border-collapse: collapse; width: 100%; page-break-inside: auto; }
                th, td {
                    border: 1px solid #000;
                    padding: 3px 5px;
                    vertical-align: middle;
                    word-break: break-word;
                }
                th { background: #f2f2f2; text-align: center; font-weight: 700; }
                .center { text-align: center; }
                .th-sub { font-size: 12px !important; font-weight: 400; display: block; }
                h5, h6 { font-size: 12px !important; margin: 0 0 8px 0; }
                .berkas-header { border: none; padding: 0 0 6px 0; display: flex; align-items: center; gap: 4px; }
                .berkas-body { padding: 0; overflow: visible; }
                img { max-width: 100%; height: auto; }
                .tim-panel-6 { display: flex; justify-content: flex-end; margin-top: 8px; }
                .tim-panel-6 .tim-inner { width: 50%; min-width: 300px; border: 1px solid #000; padding: 8px; }
                .tim-panel-6 .tim-title { font-weight: 700; text-align: center; border-bottom: 1px solid #000; padding-bottom: 3px; margin-bottom: 4px; }
                .tim-panel-6 table { width: 100%; }
                .tim-panel-6 .ttd-box { display: inline-block; width: 80px; height: 34px; border: 1px solid #000; }
                tr { page-break-inside: avoid; }
            </style>
        </head>
        <body>
            ${clone.innerHTML}
            <script>
                window.onload = function() {
                    window.print();
                    window.onafterprint = function() { window.close(); };
                };
            <\/script>
        </body>
        </html>
    `);
    printWindow.document.close();
}

/* ═══════════════════════════════════════════════════════════
   MODAL KONFIRMASI BUAT BERKAS
   ═══════════════════════════════════════════════════════════ */
function openModal() { const m = document.getElementById("confirmModal"); if (m) m.style.display = "flex"; }
function closeModal() { const m = document.getElementById("confirmModal"); if (m) m.style.display = "none"; }
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
    const form = document.getElementById('formBuatBerkas');
    if (!form) { alert('Form tidak ditemukan.'); return; }
    const btn = document.getElementById('confirmSubmitBtn');
    if (btn) { btn.disabled = true; btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Memproses...'; }
    closeModal();
    form.submit();
}
</script>

</body>
</html>
