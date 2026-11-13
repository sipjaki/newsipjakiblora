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
.data-table td { text-align: left; color: #111827; }
.data-table td.center { text-align: center; }

/* ═══ TIM PEMERIKSA ═══ */
.tim-panel-6 { display: flex; justify-content: flex-end; margin-top: 16px; }
.tim-panel-6 .tim-inner {
    width: 50%; min-width: 320px;
    background: #ffffff; border: 1px solid #111827;
    border-radius: 10px; padding: 12px 14px;
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
.status-kesesuaian-grid { display: grid; grid-template-columns: 1fr; gap: 12px; }
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

/* BADGE DALAM MODAL */
.badge-status {
    display: inline-flex; align-items: center; gap: 4px;
    padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700;
}
.badge-ok { background: #dcfce7; color: #15803d; border: 1px solid #86efac; }
.badge-no { background: #fee2e2; color: #b91c1c; border: 1px solid #fca5a5; }

@media (max-width: 768px) {
    .action-bar { flex-direction: column; align-items: stretch; }
    .action-bar .left, .action-bar .right { justify-content: stretch; width: 100%; }
    .doc-card { padding: 20px 16px; }
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
                                        <i class="bi bi-file-earmark-text"></i>
                                        Nama Pekerjaan: {{ $datatertibjasakonstruksi ?? 'Masih Kosong' }}
                                    </span>
                                </div>
                                <div class="right">
                                    @if($datasurat4->id)
                                        <button type="button" onclick="printModalContent({{ $datasurat4->id }})" class="button-berkas button-md">
                                            <i class="bi bi-printer"></i> Print
                                        </button>
                                        {{-- <button type="button" class="button-berkas button-md" onclick="downloadModalPDF({{ $datasurat4->id }})">
                                            <i class="bi bi-download"></i> Download
                                        </button> --}}
                                        <button type="button" class="button-berkas button-md"
                                                onclick="openBerkasModal({{ $datasurat4->id }})">
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
                                    <i class="bi bi-shield-check"></i> Kesesuaian Pelaksana Pengembangan Usaha
                                </div>
                                <div class="status-kesesuaian-grid">
                                    @php
                                        $status = $datasurat4->status ?? null;
                                        $isOk = $status === 'Sudah' || $status === 'Sesuai';
                                        $cls = $isOk ? 'ok' : 'no';
                                        $label = $isOk ? 'TERTIB' : 'BELUM TERTIB';
                                        $icon = $isOk ? 'bi-check-circle-fill' : 'bi-x-circle-fill';
                                    @endphp
                                    <div class="status-kesesuaian-item">
                                        <div class="status-kesesuaian-label">
                                            <i class="bi bi-check2-square"></i> Kesesuaian Pelaksana Pengembangan Usaha
                                        </div>
                                        <div class="status-kesesuaian-value {{ $cls }}">
                                            <i class="bi {{ $icon }}"></i> {{ $label }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ═══ DOC CARD — TAMPILAN DATA LENGKAP ═══ --}}
                            <div class="doc-card">

                                <div class="doc-header">
                                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo">
                                    <img src="/assets/icon/pupr.png" alt="Logo">
                                    <span class="header-sep">:</span>
                                    <p class="header-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                </div>

                                <div class="doc-title">
                                    Surat Dukung Tertib Jakon Usaha : Pengembangan Usaha Berkelanjutan Jasa Konstruksi Secara Rutin
                                </div>

                                {{-- TABEL MATRIKS: 12 KOMPONEN (SESUAI GAMBAR) --}}
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 40px;">No</th>
                                            <th style="width: 180px;">Pengembangan Usaha Berkelanjutan</th>
                                            <th style="width: 250px;">Indikator / Sub Indikator</th>
                                            <th style="width: 180px;">Dokumen Yang Diperiksa</th>
                                            <th style="width: 250px;">Cara Pemeriksaan</th>
                                            <th style="width: 120px; text-align:center;">Hasil Pemeriksaan</th>
                                            <th style="width: 200px;">Catatan Pemeriksaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            // Array data komponen sesuai gambar
                                            $komponen = [
                                                [
                                                    'label' => 'Peningkatan kapasitas sumber daya manusia badan usaha',
                                                    'indikator' => 'Badan usaha melakukan kegiatan peningkatan kapasitas SDM melalui kegiatan pendidikan pelatihan / bimtek / seminar / loka karya (tahun terakhir)',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan dan/atau laporan pengembangan usaha berkelanjutan yang dilakukan Asosiasi',
                                                    'cara' => 'Memeriksa apakah dalam laporan telah memuat kegiatan peningkatan kapasitas SDM melalui kegiatan pendidikan pelatihan/ bimtek/ seminar/ loka karya (tahun terakhir)',
                                                    'hasil' => $datasurat4->status,
                                                    'catatan' => $datasurat4->catatan_sdm,
                                                ],
                                                [
                                                    'label' => 'Peningkatan Peralatan',
                                                    'indikator' => 'Penambahan/pembaruan peralatan',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Memeriksa apakah dalam laporan telah memuat kegiatan peningkatan peralatan melalui penambahan/pembaruan peralatan',
                                                    'hasil' => $datasurat4->hasil_peralatan,
                                                    'catatan' => $datasurat4->catatan_peralatan,
                                                ],
                                                [
                                                    'label' => 'Peningkatan teknologi (a)',
                                                    'indikator' => 'Penambahan / Pembaruan / Peningkatan kecepatan / peningkatan konten software',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Memeriksa apakah dalam laporan telah memuat kegiatan Penambahan/Pembaruan/Peningkatan kecepatan /peningkatan konten software',
                                                    'hasil' => $datasurat4->hasil_teknologi_software,
                                                    'catatan' => $datasurat4->catatan_teknologi_software,
                                                ],
                                                [
                                                    'label' => 'Peningkatan teknologi (b)',
                                                    'indikator' => 'Penambahan/ pembaruan/ peningkatan kapasitas hardware',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Memeriksa apakah dalam laporan telah memuat kegiatan Penambahan/pembaruan/peningkatan kapasitas hardware',
                                                    'hasil' => $datasurat4->hasil_teknologi_hardware,
                                                    'catatan' => $datasurat4->catatan_teknologi_hardware,
                                                ],
                                                [
                                                    'label' => 'Peningkatan kualitas pengelolaan keuangan (a)',
                                                    'indikator' => 'Opini akuntan publik untuk kualifikasi usaha besar dan menengah',
                                                    'dokumen' => 'Laporan keuangan BUJK',
                                                    'cara' => 'Memeriksa apakah ada peningkatan opini akuntan publik dari laporan opini akuntan publik tahun sebelumnya',
                                                    'hasil' => $datasurat4->hasil_keuangan_opini,
                                                    'catatan' => $datasurat4->catatan_keuangan_opini,
                                                ],
                                                [
                                                    'label' => 'Peningkatan kualitas pengelolaan keuangan (b)',
                                                    'indikator' => 'Penggunaan Standar Akuntansi untuk kualifikasi usaha kecil',
                                                    'dokumen' => 'Laporan keuangan BUJK',
                                                    'cara' => 'Memeriksa apakah laporan keuangan telah memenuhi standar akuntansi (minimal memuat pencatatan penerimaan dan pengeluaran, hutang dan piutang)',
                                                    'hasil' => $datasurat4->hasil_keuangan_standar,
                                                    'catatan' => $datasurat4->catatan_keuangan_standar,
                                                ],
                                                [
                                                    'label' => 'Pengembangan Organisasi (GCG)',
                                                    'indikator' => 'Penerapan Good Corporate Governance (GCG)',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Mengecek apakah BUJK telah menerapkan GCG (minimal memiliki dan melaksanakan SOP, memiliki struktur organisasi)',
                                                    'hasil' => $datasurat4->hasil_gcg,
                                                    'catatan' => $datasurat4->catatan_gcg,
                                                ],
                                                [
                                                    'label' => 'Pengembangan Organisasi (Penghargaan)',
                                                    'indikator' => 'Penghargaan',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Mengecek apakah BUJK telah memperoleh penghargaan (antara lain memenuhi ISO, PU Award, dll)',
                                                    'hasil' => $datasurat4->hasil_penghargaan,
                                                    'catatan' => $datasurat4->catatan_penghargaan,
                                                ],
                                                [
                                                    'label' => 'Manajemen Operasi (Rantai Pasok)',
                                                    'indikator' => 'Penerapan sistem manajemen rantai pasok',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Mengecek apakah BUJK telah menerapkan sistem manajemen rantai pasok (minimal memiliki daftar pemasok bahan dan peralatan, catatan kebutuhan dan penggunaan material dan peralatan)',
                                                    'hasil' => $datasurat4->hasil_rantai_pasok,
                                                    'catatan' => $datasurat4->catatan_rantai_pasok,
                                                ],
                                                [
                                                    'label' => 'Manajemen Operasi (Mutu Bahan)',
                                                    'indikator' => 'Penerapan standar mutu bahan',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Mengecek apakah BUJK telah menerapkan standar mutu bahan (antara lain memiliki SOP untuk pemilihan dan penggunaan bahan, memiliki laboratorium pengujian bahan)',
                                                    'hasil' => $datasurat4->hasil_mutu_bahan,
                                                    'catatan' => $datasurat4->catatan_mutu_bahan,
                                                ],
                                                [
                                                    'label' => 'Manajemen Operasi (Mutu Peralatan)',
                                                    'indikator' => 'Penerapan standar mutu peralatan',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Mengecek apakah BUJK telah menerapkan standar mutu peralatan (minimal mencatat peralatannya ke dalam SIMPK)',
                                                    'hasil' => $datasurat4->hasil_mutu_peralatan,
                                                    'catatan' => $datasurat4->catatan_mutu_peralatan,
                                                ],
                                                [
                                                    'label' => 'Manajemen Operasi (SMKK)',
                                                    'indikator' => 'Penerapan SMKK',
                                                    'dokumen' => 'Laporan tahunan kegiatan BUJK yang berisi pelaksanaan pengembangan usaha berkelanjutan',
                                                    'cara' => 'Mengecek apakah BUJK telah menerapkan standar keselamatan dan kesehatan kerja (minimal memiliki SOP SMKK, penyediaan dan penggunaan APD dan APK, terdapat tenaga ahli/petugas K3 konstruksi/keselamatan konstruksi)',
                                                    'hasil' => $datasurat4->hasil_smkk,
                                                    'catatan' => $datasurat4->catatan_smkk,
                                                ],
                                            ];
                                        @endphp

                                        @foreach($komponen as $index => $k)
                                            <tr>
                                                <td class="center">{{ $index + 1 }}</td>
                                                <td>{{ $k['label'] }}</td>
                                                <td>{{ $k['indikator'] }}</td>
                                                <td>{{ $k['dokumen'] }}</td>
                                                <td>{{ $k['cara'] }}</td>
                                                <td class="center">
                                                    @if(in_array($k['hasil'], ['Sudah', 'Sesuai', 'Meningkat']))
                                                        <span class="badge-status badge-ok">TERTIB</span>
                                                    @elseif(empty($k['hasil']))
                                                        <span class="text-muted">-</span>
                                                    @else
                                                        <span class="badge-status badge-no">BELUM</span>
                                                    @endif
                                                </td>
                                                <td>{{ $k['catatan'] ?? '-' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- ═══ TIM PEMERIKSA ═══ --}}
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
                                                    <td>{{ optional($datasurat4->tandatangan1)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                    <td class="center"><span class="ttd-box"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="center">2</td>
                                                    <td>{{ optional($datasurat4->tandatangan2)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                    <td class="center"><span class="ttd-box"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="center">3</td>
                                                    <td>{{ optional($datasurat4->tandatangan3)->namalengkap ?? 'Belum Di Tanda Tangan' }}</td>
                                                    <td class="center"><span class="ttd-box"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            {{-- ═══ MODAL LIHAT BERKAS ═══ --}}
                            @if($datasurat4->id)
                            <div class="berkas-overlay" id="berkasOverlay{{ $datasurat4->id }}"
                                 onclick="if(event.target === this) closeBerkasModal({{ $datasurat4->id }})">
                                <div class="berkas-dialog" id="berkasDialog{{ $datasurat4->id }}">
                                    <div class="berkas-header">
                                        <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="24" style="margin-right:4px;">
                                        <img src="/assets/icon/pupr.png" alt="Logo" width="24" style="margin-right:4px;">
                                        <span style="color:#111827; font-weight:800;">:</span>
                                        <p class="berkas-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                        <button type="button" class="berkas-close-btn"
                                                onclick="closeBerkasModal({{ $datasurat4->id }})"
                                                aria-label="Close">&times;</button>
                                    </div>
                                    <div class="berkas-body">
                                        <h6 style="font-size:13px; font-weight:700; color:#0f172a; margin-bottom:14px;">
                                            Surat Dukung Tertib Jakon Usaha : Pengembangan Usaha Berkelanjutan Jasa Konstruksi Secara Rutin
                                        </h6>

                                        {{-- TABEL MATRIKS DI DALAM MODAL --}}
                                        <table class="data-table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 40px;">No</th>
                                                    <th style="width: 180px;">Pengembangan Usaha Berkelanjutan</th>
                                                    <th style="width: 250px;">Indikator / Sub Indikator</th>
                                                    <th style="width: 180px;">Dokumen Yang Diperiksa</th>
                                                    <th style="width: 250px;">Cara Pemeriksaan</th>
                                                    <th style="width: 120px; text-align:center;">Hasil Pemeriksaan</th>
                                                    <th style="width: 200px;">Catatan Pemeriksaan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($komponen as $index => $k)
                                                    <tr>
                                                        <td class="center">{{ $index + 1 }}</td>
                                                        <td>{{ $k['label'] }}</td>
                                                        <td>{{ $k['indikator'] }}</td>
                                                        <td>{{ $k['dokumen'] }}</td>
                                                        <td>{{ $k['cara'] }}</td>
                                                        <td class="center">
                                                            @if(in_array($k['hasil'], ['Sudah', 'Sesuai', 'Meningkat']))
                                                                <span class="badge-status badge-ok">TERTIB</span>
                                                            @elseif(empty($k['hasil']))
                                                                <span class="text-muted">-</span>
                                                            @else
                                                                <span class="badge-status badge-no">BELUM</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $k['catatan'] ?? '-' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        {{-- TIM PEMERIKSA — TTD KOTAK KOSONG --}}
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
                                                            <td>{{ $datasurat4->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}</td>
                                                            <td class="center"><span class="ttd-box"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">2</td>
                                                            <td>{{ $datasurat4->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}</td>
                                                            <td class="center"><span class="ttd-box"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="center">3</td>
                                                            <td>{{ $datasurat4->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}</td>
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
   DOWNLOAD PDF
   ═══════════════════════════════════════════════════════════ */
function downloadModalPDF(id) {
    const overlay = document.getElementById('berkasOverlay' + id);
    if (!overlay) { alert('Konten modal tidak ditemukan.'); return; }

    const dialog = overlay.querySelector('.berkas-dialog');
    const clone = dialog.cloneNode(true);
    clone.querySelectorAll('.berkas-close-btn').forEach(el => el.remove());

    const holder = document.createElement('div');
    holder.style.padding = '20px';
    holder.style.background = '#fff';
    holder.style.fontFamily = 'Arial, sans-serif';
    holder.appendChild(clone);

    const fileName = `Tertibjakonusaha_pelaksanapengembanganusaha_${id}.pdf`;

    html2pdf()
        .from(holder)
        .set({
            margin: 10,
            filename: fileName,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
        })
        .save();
}

/* ═══════════════════════════════════════════════════════════
   PRINT
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
                th, td { border: 1px solid #000; padding: 4px 6px; vertical-align: middle; word-break: break-word; }
                th { background: #f2f2f2; text-align: center; font-weight: 700; }
                .center { text-align: center; }
                h5, h6 { font-size: 12px !important; margin: 0 0 8px 0; }
                .berkas-header { border: none; padding: 0 0 6px 0; display: flex; align-items: center; gap: 4px; border-bottom: 2px solid #000; margin-bottom: 10px; }
                .berkas-body { padding: 0; overflow: visible; }
                img { max-width: 100%; height: auto; }
                .tim-panel-6 { display: flex; justify-content: flex-end; margin-top: 8px; }
                .tim-panel-6 .tim-inner { width: 50%; min-width: 300px; border: 1px solid #000; padding: 8px; }
                .tim-panel-6 .tim-title { font-weight: 700; text-align: center; border-bottom: 1px solid #000; padding-bottom: 3px; margin-bottom: 4px; }
                .tim-panel-6 table { width: 100%; }
                .tim-panel-6 .ttd-box { display: inline-block; width: 80px; height: 34px; border: 1px solid #000; }
                tr { page-break-inside: avoid; }
                .badge-status { border: 1px solid #ccc; padding: 2px 6px; border-radius: 4px; }
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
