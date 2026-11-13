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

/* ═══ PANEL ═══ */
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

/* ═══ ACTION BAR ═══ */
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
.action-bar .left, .action-bar .right {
    display: flex; gap: 8px; align-items: center; flex-wrap: wrap;
}
.action-bar .title-chip {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 8px 14px; background: #f0fdf4; border: 1px solid #bbf7d0;
    border-radius: 10px; font-size: 12.5px; font-weight: 700; color: #15803d;
}
.action-bar .title-chip i { color: #13A847; font-size: 14px; }

/* ═══ FORM CONTROLS ═══ */
.form-input, .form-textarea {
    width: 100%; font-size: 13px; padding: 8px 12px;
    border: 1px solid #111827; border-radius: 8px;
    background: #ffffff; color: #1e293b; transition: all 0.15s ease;
}
.form-input:focus, .form-textarea:focus {
    border-color: #13A847; box-shadow: 0 0 0 3px rgba(19, 168, 71, 0.1); outline: none;
}
.form-input[readonly] { background: #f8fafc; cursor: default; }
.form-textarea { resize: vertical; }

/* ═══ DOC CARD ═══ */
.doc-card {
    background: #ffffff; border: 1px solid #111827;
    border-radius: 12px; padding: 28px 32px; margin-bottom: 20px;
}
.doc-header {
    display: flex; align-items: center; gap: 10px;
    padding-bottom: 14px; border-bottom: 2px solid #111827; margin-bottom: 18px;
}
.doc-header img { width: 28px; height: auto; }
.doc-header .header-sep { color: #111827; font-weight: 800; font-size: 14px; }
.doc-header .header-title {
    font-size: 13.5px; font-weight: 700; color: #0f172a; margin: 0; line-height: 1.4;
}
.doc-title {
    font-size: 13.5px; font-weight: 700; color: #0f172a; line-height: 1.6;
    margin-bottom: 20px; padding: 14px 18px; background: #f8fafc;
    border: 1px solid #111827; border-left: 4px solid #13A847; border-radius: 6px;
}

/* ═══ INFO TABLE ═══ */
.info-table {
    width: 100%; border-collapse: collapse; font-size: 13px;
    margin-bottom: 20px; border: 1px solid #111827;
}
.info-table td { padding: 10px 12px; border: 1px solid #111827; vertical-align: middle; }
.info-table td.label-cell {
    background: #f8fafc; font-weight: 700; color: #111827;
    width: 200px; font-size: 12.5px;
}

/* ═══ DATA TABLE ═══ */
.data-table {
    width: 100%; border-collapse: collapse; font-size: 12.5px;
    margin-bottom: 16px; border: 1px solid #111827;
}
.data-table th, .data-table td {
    border: 1px solid #111827; padding: 9px 12px; vertical-align: middle;
}
.data-table th {
    background: #f8fafc; color: #111827; font-weight: 700;
    text-align: center; font-size: 12px; line-height: 1.35;
}
.data-table th .th-sub {
    display: block; font-size: 10.5px; font-weight: 500;
    color: #4b5563; margin-top: 2px;
}
.data-table td { text-align: left; color: #111827; }
.data-table td.center { text-align: center; }

/* ═══ DATE RANGE ═══ */
.date-range-input { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
.date-range-input .sep { color: #111827; font-weight: 700; font-size: 12px; }

/* ═══ TIM PEMERIKSA (KOLOM 6 KANAN) ═══ */
.tim-panel-6 {
    display: flex;
    justify-content: flex-end;
    margin-top: 16px;
}
.tim-panel-6 .tim-inner {
    width: 50%;
    min-width: 320px;
    background: #ffffff;
    border: 1px solid #111827;
    border-radius: 10px;
    padding: 12px 14px;
}
.tim-panel-6 .tim-title {
    font-size: 12px; font-weight: 800; color: #111827;
    text-transform: uppercase; letter-spacing: 0.4px;
    margin-bottom: 8px; padding-bottom: 6px;
    border-bottom: 1px solid #111827; text-align: center;
}
.tim-panel-6 table { width: 100%; border-collapse: collapse; font-size: 12px; }
.tim-panel-6 table th, .tim-panel-6 table td {
    border: 1px solid #111827; padding: 5px 8px; vertical-align: middle;
}
.tim-panel-6 table th {
    background: #f8fafc; text-align: center; font-weight: 700; font-size: 11.5px;
}
.tim-panel-6 table td.center { text-align: center; }
.tim-panel-6 .ttd-box {
    display: inline-block; width: 80px; height: 36px;
    border: 1px solid #111827; background: #ffffff; border-radius: 2px;
}

/* ═══ STATUS KESESUAIAN ═══ */
.status-kesesuaian-card {
    background: #ffffff; border: 1px solid #e5e7eb; border-radius: 16px;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
    padding: 20px 24px; margin-bottom: 20px;
}
.status-kesesuaian-title {
    font-size: 12px; font-weight: 800; color: #111827;
    text-transform: uppercase; letter-spacing: 0.5px;
    margin-bottom: 16px; padding-bottom: 10px;
    border-bottom: 1px solid #111827;
    display: flex; align-items: center; gap: 8px;
}
.status-kesesuaian-title i { color: #13A847; font-size: 14px; }
.status-kesesuaian-grid {
    display: grid; grid-template-columns: 1fr; gap: 12px;
}
.status-kesesuaian-item {
    background: #f8fafc; border: 1px solid #e5e7eb; border-radius: 10px;
    padding: 14px 16px; display: flex; flex-direction: column; gap: 8px;
}
.status-kesesuaian-label {
    font-size: 11px; font-weight: 800; color: #64748b;
    text-transform: uppercase; letter-spacing: 0.3px;
    display: flex; align-items: center; gap: 5px;
}
.status-kesesuaian-label i { color: #94a3b8; font-size: 12px; }
.status-kesesuaian-value {
    display: inline-flex; align-items: center; justify-content: center;
    gap: 5px; font-size: 12px; font-weight: 700;
    padding: 8px 12px; border-radius: 8px; border: 1.5px solid;
}
.status-kesesuaian-value.ok { background: #dcfce7; border-color: #86efac; color: #15803d; }
.status-kesesuaian-value.no { background: #fee2e2; border-color: #fca5a5; color: #b91c1c; }

/* ═══ MODAL LIHAT BERKAS ═══ */
.berkas-overlay {
    display: none; position: fixed; inset: 0;
    background: rgba(15, 23, 42, 0.6); z-index: 10000;
    justify-content: center; align-items: flex-start;
    padding: 30px 15px; overflow-y: auto;
}
.berkas-overlay.show { display: flex; }
.berkas-dialog {
    background: #ffffff; border-radius: 16px; border: 1px solid #111827;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    width: 100%; max-width: 1100px; margin: auto; overflow: hidden;
    display: flex; flex-direction: column; max-height: calc(100vh - 60px);
}
.berkas-header {
    display: flex; align-items: center; gap: 4px;
    padding: 14px 20px; border-bottom: 1px solid #111827;
    background: #ffffff; flex-shrink: 0;
}
.berkas-header .berkas-title {
    margin: 0 0 0 8px; font-size: 13px; font-weight: 600;
    color: #0f172a; line-height: 1.3;
}
.berkas-close-btn {
    margin-left: auto; background: #f1f5f9; border: 1px solid #cbd5e1;
    color: #334155; width: 32px; height: 32px; border-radius: 8px;
    display: inline-flex; align-items: center; justify-content: center;
    cursor: pointer; transition: all 0.15s ease; font-size: 16px;
    line-height: 1; flex-shrink: 0;
}
.berkas-close-btn:hover { background: #fee2e2; border-color: #fca5a5; color: #b91c1c; }
.berkas-body { padding: 20px; font-size: 13px; overflow-y: auto; flex: 1; }

/* ═══ RESPONSIVE ═══ */
@media (max-width: 768px) {
    .action-bar { flex-direction: column; align-items: stretch; }
    .action-bar .left, .action-bar .right { justify-content: stretch; width: 100%; }
    .doc-card { padding: 20px 16px; }
    .info-table td.label-cell { width: auto; }
    .tim-panel-6 .tim-inner { width: 100%; min-width: 0; }
    .berkas-dialog { max-height: calc(100vh - 30px); }
    .berkas-body { padding: 14px; }
}
</style>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_style.01_cssdashboard.style')
@include('button')
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

        {{-- ═══ MAIN CONTENT ═══ --}}
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
                                        <i class="bi bi-building"></i>
                                        Nama Badan Usaha: {{ $datatertibjasakonstruksi ?? 'Masih Kosong' }}
                                    </span>
                                </div>
                                <div class="right">
                                    @if($datasurat3->id)
                                        <button type="button" onclick="printModalContent({{ $datasurat3->id }})" class="button-berkas button-md">
                                            <i class="bi bi-printer"></i> Print
                                        </button>
                                        {{-- <button type="button" class="button-berkas button-md" onclick="downloadModalPDF({{ $datasurat3->id }})">
                                            <i class="bi bi-download"></i> Download
                                        </button> --}}
                                        <button type="button" class="button-berkas button-md"
                                                onclick="openBerkasModal({{ $datasurat3->id }})">
                                            <i class="bi bi-eye"></i> Lihat Berkas
                                        </button>
                                    @endif
                                    <a href="javascript:history.back()" class="button-baru button-md">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </div>

                            {{-- ═══ STATUS KESESUAIAN ═══ --}}
                            <div class="status-kesesuaian-card">
                                <div class="status-kesesuaian-title">
                                    <i class="bi bi-shield-check"></i> Kesesuaian Pemenuhan Syarat Kegiatan Konstruksi
                                </div>
                                <div class="status-kesesuaian-grid">
                                    @php
                                        $kesimpulan = $datasurat3->kesimpulan ?? null;
                                        $isOk = $kesimpulan === 'Tertib';
                                        $cls = $isOk ? 'ok' : 'no';
                                        $label = $isOk ? 'TERTIB' : 'BELUM TERTIB';
                                        $icon = $isOk ? 'bi-check-circle-fill' : 'bi-x-circle-fill';
                                    @endphp
                                    <div class="status-kesesuaian-item">
                                        <div class="status-kesesuaian-label">
                                            <i class="bi bi-journal-check"></i> Kesimpulan Pemeriksaan
                                        </div>
                                        <div class="status-kesesuaian-value {{ $cls }}">
                                            <i class="bi {{ $icon }}"></i> {{ $label }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ═══ DOC CARD — TAMPILAN DATA ═══ --}}
                            <div class="doc-card">

                                <div class="doc-header">
                                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo">
                                    <img src="/assets/icon/pupr.png" alt="Logo">
                                    <span class="header-sep">:</span>
                                    <p class="header-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                </div>

                                <div class="doc-title">
                                    Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Pemenuhan Persyaratan Usaha Jasa Konstruksi Secara Rutin
                                </div>

                                <table class="info-table">
                                    <tr>
                                        <td class="label-cell">Nama Badan Usaha</td>
                                        <td>
                                            <input type="text" class="form-input" name="namabadanusaha"
                                                   value="{{ $datasurat3->namabadanusaha ?? '' }}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label-cell">Waktu Pengawasan</td>
                                        <td>
                                            <div class="date-range-input">
                                                @php
                                                    $mulai = ($datasurat3 && $datasurat3->waktupengawasan)
                                                        ? \Carbon\Carbon::parse($datasurat3->waktupengawasan)->translatedFormat('d F Y') : '-';
                                                    $selesai = ($datasurat3 && $datasurat3->waktupengawasanselesai)
                                                        ? \Carbon\Carbon::parse($datasurat3->waktupengawasanselesai)->translatedFormat('d F Y') : '-';
                                                @endphp
                                                <span style="padding:6px 12px; background:#eff6ff; color:#1e40af; border:1px solid #111827; border-radius:6px; font-weight:600; font-size:12.5px;">{{ $mulai }}</span>
                                                <span class="sep">→</span>
                                                <span style="padding:6px 12px; background:#f1f5f9; color:#475569; border:1px solid #111827; border-radius:6px; font-weight:600; font-size:12.5px;">{{ $selesai }}</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                {{-- ═══ TABEL BUJK ═══ --}}
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th style="width:40px;">No</th>
                                            <th>Nama BUJK</th>
                                            <th>Nomor Induk Berusaha</th>
                                            <th>PJBU</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center">1</td>
                                            <td>{{ $datasurat3->namabujk ?? '-' }}</td>
                                            <td>{{ $datasurat3->nib ?? '-' }}</td>
                                            <td>{{ $datasurat3->pjbu ?? '-' }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                {{-- ═══ TABEL JENIS USAHA ═══ --}}
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th>Jenis Usaha</th>
                                            <th>Klasifikasi / Sub Klasifikasi</th>
                                            <th>Nomor Sertifikat Standar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $datasurat3->jenisusaha ?? '-' }}</td>
                                            <td>{{ $datasurat3->subklasifikasi->kode ?? '-' }} {{ $datasurat3->subklasifikasi->pekerjaan ?? '' }}</td>
                                            <td>{{ $datasurat3->nomorsertifikat ?? '-' }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                {{-- ═══ TABEL KESIMPULAN & CATATAN ═══ --}}
                                <table class="data-table" style="margin-bottom:0;">
                                    <thead>
                                        <tr>
                                            <th style="width:200px;">Kesimpulan Pemeriksaan</th>
                                            <th>Catatan Pemeriksa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center" style="width:200px;">{{ $datasurat3->kesimpulan ?? '-' }}</td>
                                            <td>{{ $datasurat3->catatanpemeriksaan ?? '-' }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                {{-- ═══ TIM PEMERIKSA — TTD KOTAK KOSONG ═══ --}}
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
                                                    <td>{{ optional($datasurat3->tandatangan1)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                    <td class="center"><span class="ttd-box"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="center">2</td>
                                                    <td>{{ optional($datasurat3->tandatangan2)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                    <td class="center"><span class="ttd-box"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="center">3</td>
                                                    <td>{{ optional($datasurat3->tandatangan3)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                    <td class="center"><span class="ttd-box"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            {{-- ═══ MODAL LIHAT BERKAS ═══ --}}
                            @if($datasurat3->id)
                            <div class="berkas-overlay" id="berkasOverlay{{ $datasurat3->id }}"
                                 onclick="if(event.target === this) closeBerkasModal({{ $datasurat3->id }})">
                                <div class="berkas-dialog" id="berkasDialog{{ $datasurat3->id }}">
                                    <div class="berkas-header">
                                        <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="24" style="margin-right:4px;">
                                        <img src="/assets/icon/pupr.png" alt="Logo" width="24" style="margin-right:4px;">
                                        <span style="color:#111827; font-weight:800;">:</span>
                                        <p class="berkas-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                        <button type="button" class="berkas-close-btn"
                                                onclick="closeBerkasModal({{ $datasurat3->id }})"
                                                aria-label="Close">&times;</button>
                                    </div>
                                    <div class="berkas-body">
                                        <h6 style="font-size:13px; font-weight:700; color:#0f172a; margin-bottom:14px;">
                                            Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Pemenuhan Persyaratan Usaha Jasa Konstruksi Secara Rutin
                                        </h6>

                                        <table class="info-table" style="margin-bottom:14px;">
                                            <tr>
                                                <td class="label-cell">Nama Badan Usaha</td>
                                                <td>{{ $datasurat3->namabadanusaha ?? 'Data Belum Di Buat' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="label-cell">Waktu Pengawasan</td>
                                                <td>
                                                    @if ($datasurat3 && $datasurat3->waktupengawasan && $datasurat3->waktupengawasanselesai)
                                                        {{ \Carbon\Carbon::parse($datasurat3->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                        –
                                                        {{ \Carbon\Carbon::parse($datasurat3->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                    @else
                                                        <span class="text-muted">Belum Di Buat</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>

                                        {{-- TABEL BUJK --}}
                                        <table class="data-table">
                                            <thead>
                                                <tr>
                                                    <th style="width:40px;">No</th>
                                                    <th>Nama BUJK</th>
                                                    <th>Nomor Induk Berusaha</th>
                                                    <th>PJBU</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="center">1</td>
                                                    <td>{{ $datasurat3->namabujk ?? 'Data Belum Di Buat' }}</td>
                                                    <td>{{ $datasurat3->nib ?? 'Data Belum Di Buat' }}</td>
                                                    <td>{{ $datasurat3->pjbu ?? 'Data Belum Di Buat' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        {{-- TABEL JENIS USAHA --}}
                                        <table class="data-table">
                                            <thead>
                                                <tr>
                                                    <th>Jenis Usaha</th>
                                                    <th>Klasifikasi / Sub Klasifikasi</th>
                                                    <th>Nomor Sertifikat Standar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $datasurat3->jenisusaha ?? 'Data Belum Di Buat' }}</td>
                                                    <td>{{ $datasurat3->subklasifikasi->kode ?? '-' }} {{ $datasurat3->subklasifikasi->pekerjaan ?? '' }}</td>
                                                    <td>{{ $datasurat3->nomorsertifikat ?? 'Data Belum Di Buat' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        {{-- TABEL KESIMPULAN --}}
                                        <table class="data-table" style="margin-bottom:0;">
                                            <thead>
                                                <tr>
                                                    <th style="width:200px;">Kesimpulan Pemeriksaan</th>
                                                    <th>Catatan Pemeriksa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="center" style="width:200px;">{{ $datasurat3->kesimpulan ?? 'Data Belum Di Buat' }}</td>
                                                    <td>{{ $datasurat3->catatanpemeriksaan ?? 'Data Belum Di Buat' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        {{-- TIM PEMERIKSA — TTD KOTAK KOSONG (TIDAK TAMPILKAN GAMBAR TTD) --}}
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
                                                            <td>{{ $datasurat3->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}</td>
                                                            <td class="center"><span class="ttd-box"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">2</td>
                                                            <td>{{ $datasurat3->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}</td>
                                                            <td class="center"><span class="ttd-box"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">3</td>
                                                            <td>{{ $datasurat3->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}</td>
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
   MODAL LIHAT BERKAS — BUKA/TUTUP
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

    const infoRows = overlay.querySelectorAll('.info-table tr');
    let namaBU = '-', waktu = '-';
    infoRows.forEach(tr => {
        const label = tr.querySelector('.label-cell')?.innerText.trim();
        const value = tr.querySelector('td:last-child')?.innerText.trim();
        if (label === 'Nama Badan Usaha') namaBU = value;
        if (label === 'Waktu Pengawasan') waktu = value;
    });

    const tables = overlay.querySelectorAll('.data-table');
    const bujkCells = tables[0] ? tables[0].querySelectorAll('tbody tr:first-child td') : [];
    const jenisCells = tables[1] ? tables[1].querySelectorAll('tbody tr:first-child td') : [];
    const kesimpulanCells = tables[2] ? tables[2].querySelectorAll('tbody tr:first-child td') : [];

    const getCell = (cells, i) => cells[i] ? cells[i].innerText.trim() : '-';
    const namaBujk = getCell(bujkCells, 1);
    const nib = getCell(bujkCells, 2);
    const pjbu = getCell(bujkCells, 3);
    const jenisUsaha = getCell(jenisCells, 0);
    const subKlas = getCell(jenisCells, 1);
    const noSert = getCell(jenisCells, 2);
    const kesimpulan = getCell(kesimpulanCells, 0);
    const catatan = getCell(kesimpulanCells, 1);

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

    const pdfHTML = `
        <div class="pdf-page">
            <div class="pdf-header">
                <div style="display:flex; align-items:center; gap:6px;">
                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo" crossorigin="anonymous">
                    <img src="/assets/icon/pupr.png" alt="Logo" crossorigin="anonymous">
                    <span style="font-weight:800; margin:0 4px;">:</span>
                    <span style="font-weight:700; font-size:12px;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</span>
                </div>
            </div>

            <div class="pdf-doc-title">
                Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Pemenuhan Persyaratan Usaha Jasa Konstruksi Secara Rutin
            </div>

            <table class="pdf-info">
                <tr><td class="pdf-label">Nama Badan Usaha</td><td>${esc(namaBU)}</td></tr>
                <tr><td class="pdf-label">Waktu Pengawasan</td><td>${esc(waktu)}</td></tr>
            </table>

            <table class="pdf-data">
                <thead>
                    <tr>
                        <th style="width:28px;">No</th>
                        <th>Nama BUJK</th>
                        <th>Nomor Induk Berusaha</th>
                        <th>PJBU</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pdf-center">1</td>
                        <td>${esc(namaBujk)}</td>
                        <td>${esc(nib)}</td>
                        <td>${esc(pjbu)}</td>
                    </tr>
                </tbody>
            </table>

            <table class="pdf-data">
                <thead>
                    <tr>
                        <th>Jenis Usaha</th>
                        <th>Klasifikasi / Sub Klasifikasi</th>
                        <th>Nomor Sertifikat Standar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>${esc(jenisUsaha)}</td>
                        <td>${esc(subKlas)}</td>
                        <td>${esc(noSert)}</td>
                    </tr>
                </tbody>
            </table>

            <table class="pdf-data">
                <thead>
                    <tr>
                        <th style="width:160px;">Kesimpulan Pemeriksaan</th>
                        <th>Catatan Pemeriksa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pdf-center">${esc(kesimpulan)}</td>
                        <td>${esc(catatan)}</td>
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

    const pdfCSS = `
        #__pdf_holder__ {
            position: absolute !important;
            left: 0 !important; top: 0 !important;
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
            opacity: 0; pointer-events: none;
        }
        #__pdf_holder__ .pdf-page { width: 100%; }
        #__pdf_holder__ * { box-sizing: border-box !important; }
        #__pdf_holder__ .pdf-header {
            display: flex; align-items: center; gap: 6px;
            padding-bottom: 6px; border-bottom: 2px solid #000; margin-bottom: 8px;
        }
        #__pdf_holder__ .pdf-header img { width: 24px; height: 24px; object-fit: contain; }
        #__pdf_holder__ .pdf-doc-title {
            font-weight: 700; font-size: 12px; line-height: 1.35;
            padding: 6px 8px; background: #f2f2f2; border: 1px solid #000;
            border-left: 3px solid #13A847; margin-bottom: 8px;
        }
        #__pdf_holder__ .pdf-info,
        #__pdf_holder__ .pdf-data {
            width: 100%; border-collapse: collapse; margin-bottom: 8px;
        }
        #__pdf_holder__ .pdf-info td,
        #__pdf_holder__ .pdf-data th,
        #__pdf_holder__ .pdf-data td {
            border: 1px solid #000; padding: 3px 6px; font-size: 12px;
            vertical-align: middle; word-break: break-word;
        }
        #__pdf_holder__ .pdf-info .pdf-label {
            background: #f2f2f2; font-weight: 700; width: 160px;
        }
        #__pdf_holder__ .pdf-data th {
            background: #f2f2f2; text-align: center; font-weight: 700; line-height: 1.25;
        }
        #__pdf_holder__ .pdf-data td { text-align: left; }
        #__pdf_holder__ .pdf-center { text-align: center !important; }
        #__pdf_holder__ .pdf-tim-wrap { display: flex; justify-content: flex-end; margin-top: 8px; }
        #__pdf_holder__ .pdf-tim-inner { width: 50%; min-width: 300px; }
        #__pdf_holder__ .pdf-tim-title {
            font-weight: 700; font-size: 12px; text-transform: uppercase;
            letter-spacing: 0.4px; margin: 0 0 4px 0; padding-bottom: 3px;
            border-bottom: 1px solid #000; text-align: center;
        }
        #__pdf_holder__ .pdf-ttd-box {
            display: inline-block; width: 80px; height: 34px;
            border: 1px solid #000; background: #ffffff;
        }
    `;

    const styleEl = document.createElement('style');
    styleEl.id = '__pdf_style__';
    styleEl.textContent = pdfCSS;
    document.head.appendChild(styleEl);

    const holder = document.createElement('div');
    holder.id = '__pdf_holder__';
    holder.innerHTML = pdfHTML;
    document.body.appendChild(holder);

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
                } catch (e) {}
                resolve();
            };
            image.onerror = () => resolve();
            image.src = src;
        });
    });

    Promise.all(promises).then(() => {
        html2pdf().set({
            margin: 0,
            filename: `Tertibjakonusaha_pemenuhansyarat_${id}.pdf`,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: {
                scale: 2, useCORS: true, allowTaint: true,
                backgroundColor: '#ffffff', logging: false,
                scrollX: 0, scrollY: 0,
                windowWidth: holder.scrollWidth,
                windowHeight: holder.scrollHeight,
                onclone: function(clonedDoc) {
                    const el = clonedDoc.getElementById('__pdf_holder__');
                    if (el) { el.style.opacity = '1'; el.style.pointerEvents = 'auto'; }
                }
            },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape', compress: true },
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
                body { font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000; margin: 0; }
                body * { font-size: 12px !important; }
                table { border-collapse: collapse; width: 100%; page-break-inside: auto; }
                th, td { border: 1px solid #000; padding: 3px 5px; vertical-align: middle; word-break: break-word; }
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
</script>

</body>
</html>
