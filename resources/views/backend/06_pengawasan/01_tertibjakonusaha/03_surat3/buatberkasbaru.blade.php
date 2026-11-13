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

        {{-- ═══ CARD GAMBAR INFO — DI ATAS (SEBELUM PANEL) ═══ --}}
        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <div class="col-md-12">
                    <div class="info-image-card">
                        <div class="info-image-header">
                            <i class="bi bi-diagram-3-fill"></i>
                            <div>
                                <h6 class="info-image-title">Alur Pemenuhan Syarat Jasa Konstruksi</h6>
                                <p class="info-image-subtitle">Panduan visual tahapan pemeriksaan pemenuhan syarat usaha jasa konstruksi</p>
                            </div>
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/pemenuhansyarat.webp"
                                 alt="Alur Pemenuhan Syarat Jasa Konstruksi"
                                 loading="lazy"
                                 onclick="window.open(this.src, '_blank')"
                                 onerror="this.parentElement.innerHTML='<div style=\'padding:30px;text-align:center;color:#94a3b8;font-size:13px;\'><i class=\'bi bi-image\' style=\'font-size:2rem;display:block;margin-bottom:8px;\'></i>Gambar tidak ditemukan. Periksa path: <code>/assets/01_tertibpengawasan/01_tertibusaha/pemenuhansyarat.webp</code></div>'">
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

                            {{-- ═══ FORM INPUT SURAT ═══ --}}
                            <form action="{{ route('betertibjakonusahapemenuhansyaratnewberkas') }}" method="POST" enctype="multipart/form-data" id="formBuatBerkas">
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
                                        Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Pemenuhan Persyaratan Usaha Jasa Konstruksi Secara Rutin
                                    </div>

                                    {{-- ═══ INFO TABLE — NAMA BU & WAKTU ═══ --}}
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

                                    {{-- ═══ TABEL DATA BUJK ═══ --}}
                                    <table class="data-table">
                                        <thead>
                                            <tr>
                                                <th style="width:40px;">No</th>
                                                <th style="width:300px;">Nama BUJK</th>
                                                <th style="width:220px;">Nomor Induk Berusaha</th>
                                                <th style="width:220px;">PJBU</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
                                                <td style="width:300px;">
                                                    <textarea class="form-textarea @error('namabujk') is-invalid @enderror"
                                                              name="namabujk"
                                                              placeholder="Masukan Nama Badan Usaha ..."
                                                              rows="4" readonly>{{ old('namabujk', $datatertibjasakonstruksinamabadanusaha ?? 'Data Masih Kosong') }}</textarea>
                                                    @error('namabujk')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td style="width:220px;">
                                                    <textarea class="form-textarea @error('nib') is-invalid @enderror"
                                                              name="nib"
                                                              placeholder="Masukan Nomor Induk Berusaha ..."
                                                              rows="4" style="text-align:center;" readonly>{{ old('nib', $datatertibjasakonstruksinib ?? 'Data Masih Kosong') }}</textarea>
                                                    @error('nib')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td style="width:220px;">
                                                    <textarea class="form-textarea @error('pjbu') is-invalid @enderror"
                                                              name="pjbu"
                                                              placeholder="Masukan Nama PJBU ..."
                                                              rows="4">{{ old('pjbu') }}</textarea>
                                                    @error('pjbu')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- ═══ TABEL JENIS USAHA & SUB KLASIFIKASI ═══ --}}
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
                                                <td>
                                                    <select class="form-select @error('jenisusaha') is-invalid @enderror" name="jenisusaha">
                                                        <option value="">-- Pilih Jenis Usaha --</option>
                                                        <option value="Pekerjaan Konstruksi" {{ old('jenisusaha') == 'Pekerjaan Konstruksi' ? 'selected' : '' }}>Pekerjaan Konstruksi</option>
                                                        <option value="Jasa Konsultasi Konstruksi" {{ old('jenisusaha') == 'Jasa Konsultasi Konstruksi' ? 'selected' : '' }}>Jasa Konsultasi Konstruksi</option>
                                                    </select>
                                                    @error('jenisusaha')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td style="max-width:600px;">
                                                    <div id="subklasifikasi-container">
                                                        <select class="form-select @error('subklasifikasi_id') is-invalid @enderror"
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
                                                    <input type="text"
                                                           name="nomorsertifikat"
                                                           class="form-input @error('nomorsertifikat') is-invalid @enderror"
                                                           value="{{ old('nomorsertifikat') }}"
                                                           placeholder="Masukkan Nomor Sertifikat">
                                                    @error('nomorsertifikat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- ═══ TABEL KESIMPULAN & CATATAN ═══ --}}
                                    <table class="data-table">
                                        <thead>
                                            <tr>
                                                <th style="width:200px;">Kesimpulan</th>
                                                <th>Catatan Pemeriksaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:200px;">
                                                    <select class="form-select @error('kesimpulan') is-invalid @enderror" name="kesimpulan">
                                                        <option value="">-- Pilih Kesimpulan --</option>
                                                        <option value="Tertib" {{ old('kesimpulan') == 'Tertib' ? 'selected' : '' }}>Tertib</option>
                                                        <option value="Tidak Tertib" {{ old('kesimpulan') == 'Tidak Tertib' ? 'selected' : '' }}>Tidak Tertib</option>
                                                    </select>
                                                    @error('kesimpulan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                                <td>
                                                    <textarea class="form-textarea @error('catatanpemeriksaan') is-invalid @enderror"
                                                              name="catatanpemeriksaan"
                                                              placeholder="Masukan Catatan Kesimpulan ..."
                                                              rows="4">{{ old('catatanpemeriksaan') }}</textarea>
                                                    @error('catatanpemeriksaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- ═══ TIM PEMERIKSA ═══ --}}
                                    <div class="tim-panel">
                                        <div class="tim-panel-title">
                                            <i class="bi bi-people-fill"></i> Tim Pemeriksa
                                        </div>
                                        <table class="data-table" style="font-size:12.5px; margin-bottom:0;">
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
