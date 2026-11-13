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
.form-select {
    width: 100%;
    font-size: 13px;
    padding: 6px 10px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    background: #ffffff;
    color: #1e293b;
    transition: all 0.15s ease;
}
.form-input:focus,
.form-select:focus {
    border-color: #13A847;
    box-shadow: 0 0 0 3px rgba(19, 168, 71, 0.1);
    outline: none;
}

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
   INFO TABLE (Data Atas)
   ========================================== */
.info-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 13px;
    margin-bottom: 24px;
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
    width: 250px;
    font-size: 12.5px;
}

/* ==========================================
   MATRIKS TABLE (Tabel Utama Pengembangan)
   ========================================== */
.matriks-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 12px;
    border: 1px solid #111827;
}
.matriks-table th,
.matriks-table td {
    border: 1px solid #111827;
    padding: 8px 10px;
    vertical-align: top;
}
.matriks-table th {
    background: #f8fafc;
    color: #111827;
    font-weight: 700;
    text-align: center;
    line-height: 1.4;
}
.matriks-table td {
    color: #1e293b;
    line-height: 1.5;
}
.matriks-table td.center { text-align: center; }

/* ==========================================
   TIM PEMERIKSA
   ========================================== */
.tim-panel {
    background: #ffffff;
    border: 1px solid #111827;
    border-radius: 12px;
    padding: 16px 20px;
    margin-top: 24px;
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
                            <form action="{{ route('betertibjakonusahapelaksananewberkas') }}" method="POST" enctype="multipart/form-data" id="formBuatBerkas">
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
                                        Surat Dukung Tertib Jakon Usaha : Pengembangan Usaha Berkelanjutan Jasa Konstruksi Secara Rutin
                                    </div>

                                    {{-- ═══ INFO TABLE — NAMA BU & WAKTU ═══ --}}
                                    <table class="info-table">
                                        <tr>
                                            <td class="label-cell">Nama Badan Usaha</td>
                                            <td>
                                                <input type="text"
                                                       class="form-input"
                                                       name="namabadanusaha"
                                                       value="{{ $datatertibjasakonstruksinamabadanusaha ?? 'Data Masih Kosong' }}"
                                                       readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label-cell">Waktu Pengawasan</td>
                                            <td>
                                                <div style="display: flex; gap: 8px; align-items: center;">
                                                    <input type="date" class="form-input" name="waktupengawasan" style="flex:1;">
                                                    <span style="font-weight:700;">s/d</span>
                                                    <input type="date" class="form-input" name="waktupengawasanselesai" style="flex:1;">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                    {{-- ═══ MATRIKS PENGEMBANGAN USAHA BERKELANJUTAN ═══ --}}
                                    <div style="overflow-x: auto;">
                                        <table class="matriks-table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px;">No</th>
                                                    <th style="width: 180px;">Pengembangan Usaha Berkelanjutan</th>
                                                    <th style="width: 250px;">Indikator / Sub Indikator</th>
                                                    <th style="width: 180px;">Dokumen Yang Diperiksa</th>
                                                    <th style="width: 250px;">Cara Pemeriksaan</th>
                                                    <th style="width: 150px;">Hasil Pemeriksaan</th>
                                                    <th style="width: 200px;">Catatan Pemeriksaan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- ROW 1 --}}
                                                <tr>
                                                    <td class="center">1</td>
                                                    <td>Peningkatan kapasitas sumber daya manusia badan usaha</td>
                                                    <td>Badan usaha melakukan kegiatan peningkatan kapasitas SDM melalui kegiatan pendidikan pelatihan / bimtek / seminar / loka karya (tahun terakhir)</td>
                                                    <td>Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan dan/atau laporan pengembangan usaha berkelanjutan yang dilakukan Asosiasi</td>
                                                    <td>Memeriksa apakah dalam laporan telah memuat kegiatan peningkatan kapasitas SDM melalui kegiatan pendidikan pelatihan/ bimtek/ seminar/ loka karya (tahun terakhir)</td>
                                                    <td class="center">
                                                        {{-- PERUBAHAN: name diganti jadi 'status' --}}
                                                        <select name="status" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_sdm" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>

                                                {{-- ROW 2 --}}
                                                <tr>
                                                    <td class="center">2</td>
                                                    <td>Peningkatan Peralatan</td>
                                                    <td>Penambahan/pembaruan peralatan</td>
                                                    <td>Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan</td>
                                                    <td>Memeriksa apakah dalam laporan telah memuat kegiatan peningkatan peralatan melalui penambahan/pembaruan peralatan</td>
                                                    <td class="center">
                                                        <select name="hasil_peralatan" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_peralatan" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>

                                                {{-- ROW 3 (Sub Row A) --}}
                                                <tr>
                                                    <td class="center" rowspan="2">3</td>
                                                    <td rowspan="2">Peningkatan teknologi</td>
                                                    <td>a. Penambahan / Pembaruan / Peningkatan kecepatan / peningkatan konten software</td>
                                                    <td rowspan="2">Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan</td>
                                                    <td>Memeriksa apakah dalam laporan telah memuat kegiatan Penambahan/Pembaruan/Peningkatan kecepatan /peningkatan konten software</td>
                                                    <td class="center">
                                                        <select name="hasil_teknologi_software" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_teknologi_software" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>
                                                {{-- ROW 3 (Sub Row B) --}}
                                                <tr>
                                                    <td>b. Penambahan/ pembaruan/ peningkatan kapasitas hardware</td>
                                                    <td>Memeriksa apakah dalam laporan telah memuat kegiatan Penambahan/pembaruan/peningkatan kapasitas hardware</td>
                                                    <td class="center">
                                                        <select name="hasil_teknologi_hardware" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_teknologi_hardware" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>

                                                {{-- ROW 4 (Sub Row A) --}}
                                                <tr>
                                                    <td class="center" rowspan="2">4</td>
                                                    <td rowspan="2">Peningkatan kualitas pengelolaan keuangan</td>
                                                    <td>a. Opini akuntan publik untuk kualifikasi usaha besar dan menengah</td>
                                                    <td rowspan="2">Laporan keuangan BUJK</td>
                                                    <td>Memeriksa apakah ada peningkatan opini akuntan publik dari laporan opini akuntan publik tahun sebelumnya</td>
                                                    <td class="center">
                                                        <select name="hasil_keuangan_opini" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Meningkat">Meningkat</option>
                                                            <option value="Tetap">Tetap</option>
                                                            <option value="Menurun">Menurun</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_keuangan_opini" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>
                                                {{-- ROW 4 (Sub Row B) --}}
                                                <tr>
                                                    <td>b. Penggunaan Standar Akuntansi untuk kualifikasi usaha kecil</td>
                                                    <td>Memeriksa apakah laporan keuangan telah memenuhi standar akuntansi (minimal memuat pencatatan penerimaan dan pengeluaran, hutang dan piutang)</td>
                                                    <td class="center">
                                                        <select name="hasil_keuangan_standar" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_keuangan_standar" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>

                                                {{-- ROW 5 (Sub Row A1) --}}
                                                <tr>
                                                    <td class="center" rowspan="6">5</td>
                                                    <td rowspan="2">a. Pengembangan Organisasi:</td>
                                                    <td>Penerapan Good Corporate Governance (GCG)</td>
                                                    <td rowspan="6">Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan</td>
                                                    <td>Mengecek apakah BUJK telah menerapkan GCG (minimal memiliki dan melaksanakan SOP, memiliki struktur organisasi)</td>
                                                    <td class="center">
                                                        <select name="hasil_gcg" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_gcg" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>
                                                {{-- ROW 5 (Sub Row A2) --}}
                                                <tr>
                                                    <td>Penghargaan</td>
                                                    <td>Mengecek apakah BUJK telah memperoleh penghargaan (antara lain memenuhi ISO, PU Award, dll)</td>
                                                    <td class="center">
                                                        <select name="hasil_penghargaan" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_penghargaan" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>
                                                {{-- ROW 5 (Sub Row B1) --}}
                                                <tr>
                                                    <td rowspan="4">b. Manajemen Operasi:</td>
                                                    <td>Penerapan sistem manajemen rantai pasok</td>
                                                    <td>Mengecek apakah BUJK telah menerapkan sistem manajemen rantai pasok (minimal memiliki daftar pemasok bahan dan peralatan, catatan kebutuhan dan penggunaan material dan peralatan)</td>
                                                    <td class="center">
                                                        <select name="hasil_rantai_pasok" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_rantai_pasok" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>
                                                {{-- ROW 5 (Sub Row B2) --}}
                                                <tr>
                                                    <td>Penerapan standar mutu bahan</td>
                                                    <td>Mengecek apakah BUJK telah menerapkan standar mutu bahan (antara lain memiliki SOP untuk pemilihan dan penggunaan bahan, memiliki laboratorium pengujian bahan)</td>
                                                    <td class="center">
                                                        <select name="hasil_mutu_bahan" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_mutu_bahan" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>
                                                {{-- ROW 5 (Sub Row B3) --}}
                                                <tr>
                                                    <td>Penerapan standar mutu peralatan</td>
                                                    <td>Mengecek apakah BUJK telah menerapkan standar mutu peralatan (minimal mencatat peralatannya ke dalam SIMPK)</td>
                                                    <td class="center">
                                                        <select name="hasil_mutu_peralatan" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_mutu_peralatan" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>
                                                {{-- ROW 5 (Sub Row B4) --}}
                                                <tr>
                                                    <td>Penerapan SMKK</td>
                                                    <td>Mengecek apakah BUJK telah menerapkan standar keselamatan dan kesehatan kerja (minimal memiliki SOP SMKK, penyediaan dan penggunaan APD dan APK, terdapat tenaga ahli/petugas K3 konstruksi/keselamatan konstruksi)</td>
                                                    <td class="center">
                                                        <select name="hasil_smkk" class="form-select" style="text-align: center;">
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="catatan_smkk" class="form-input" placeholder="Catatan...">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- ═══ TIM PEMERIKSA ═══ --}}
                                    <div class="tim-panel">
                                        <div class="tim-panel-title">
                                            <i class="bi bi-people-fill"></i> Tim Pemeriksa
                                        </div>
                                        <table style="width: 100%; border-collapse: collapse; font-size: 12.5px; margin-bottom: 0; border: 1px solid #111827;">
                                            <thead>
                                                <tr>
                                                    <th style="border: 1px solid #111827; padding: 9px 12px; background: #f8fafc; text-align: center; width: 50px;">No</th>
                                                    <th style="border: 1px solid #111827; padding: 9px 12px; background: #f8fafc; text-align: center;">Nama Pemeriksa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="border: 1px solid #111827; padding: 9px 12px; text-align: center;">1</td>
                                                    <td style="border: 1px solid #111827; padding: 9px 12px;">
                                                        <select name="tandatangan1_id" class="form-select">
                                                            <option value="">-- Pilih Pemeriksa --</option>
                                                            @if(isset($datatandatangan))
                                                                @foreach ($datatandatangan as $tandatangan)
                                                                    <option value="{{ $tandatangan->id }}">{{ $tandatangan->namalengkap }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #111827; padding: 9px 12px; text-align: center;">2</td>
                                                    <td style="border: 1px solid #111827; padding: 9px 12px;">
                                                        <select name="tandatangan2_id" class="form-select">
                                                            <option value="">-- Pilih Pemeriksa --</option>
                                                            @if(isset($datatandatangan))
                                                                @foreach ($datatandatangan as $tandatangan)
                                                                    <option value="{{ $tandatangan->id }}">{{ $tandatangan->namalengkap }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border: 1px solid #111827; padding: 9px 12px; text-align: center;">3</td>
                                                    <td style="border: 1px solid #111827; padding: 9px 12px;">
                                                        <select name="tandatangan3_id" class="form-select">
                                                            <option value="">-- Pilih Pemeriksa --</option>
                                                            @if(isset($datatandatangan))
                                                                @foreach ($datatandatangan as $tandatangan)
                                                                    <option value="{{ $tandatangan->id }}">{{ $tandatangan->namalengkap }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    {{-- 2 Kolom Cadangan (tidak digunakan di form, disesuaikan dengan database) --}}
                                    <input type="hidden" name="cadangan_5" value="">
                                    <input type="hidden" name="cadangan_6" value="">

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
