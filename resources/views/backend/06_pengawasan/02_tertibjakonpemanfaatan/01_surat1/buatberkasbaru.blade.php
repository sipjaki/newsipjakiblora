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
.panel-body { padding: 20px 24px; }

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
.form-input[readonly] { background: #f8fafc; cursor: default; }
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
    overflow-x: auto;
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
    font-size: 14px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.6;
    margin-bottom: 20px;
    padding: 14px 18px;
    background: #f8fafc;
    border: 1px solid #111827;
    border-left: 4px solid #13A847;
    border-radius: 6px;
    text-align: center;
}

/* ==========================================
   INFO HEADER
   ========================================== */
.simak-header-info {
    margin-bottom: 20px;
    font-size: 14px;
    color: #0f172a;
    line-height: 1.8;
}
.simak-header-info table {
    border: none;
    width: 100%;
    max-width: 600px;
}
.simak-header-info td {
    padding: 2px 8px 2px 0;
    vertical-align: top;
    border: none;
}
.simak-header-info td.label { width: 220px; font-weight: 600; }
.simak-header-info td.titik-dua { width: 10px; text-align: center; }
.simak-header-info td.input-cell { width: 100%; }
.simak-header-info .form-input {
    border: 1px dashed #cbd5e1;
    padding: 4px 8px;
    background: #f8fafc;
    font-size: 13px;
    border-radius: 4px;
}
.simak-header-info .form-input:focus {
    background: #fff;
    border-style: solid;
}

/* ==========================================
   TABEL AUDIT
   ========================================== */
.table-audit {
    width: 100%;
    border-collapse: collapse;
    font-size: 12.5px;
    border: 1px solid #111827;
    background: #fff;
    margin-bottom: 20px;
    min-width: 900px;
}
.table-audit th,
.table-audit td {
    border: 1px solid #111827;
    padding: 10px;
    vertical-align: top;
    line-height: 1.5;
}
.table-audit th {
    background: #f8fafc;
    color: #111827;
    font-weight: 800;
    text-align: center;
    font-size: 12px;
}
.table-audit td.center { text-align: center; }

/* ==========================================
   DATA TABLE
   ========================================== */
.data-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 12.5px;
    border: 1px solid #111827;
}
.data-table th, .data-table td {
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
}

.submit-bar { display: flex; justify-content: flex-end; margin: 20px 0; }

/* ==========================================
   MODAL KONFIRMASI
   ========================================== */
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
    display: flex; align-items: flex-start; gap: 8px; font-size: 12.5px;
    color: #475569; text-align: left; padding: 12px;
    background: #fef3c7; border: 1px solid #fcd34d; border-radius: 8px;
    margin-bottom: 20px; line-height: 1.5;
}
.confirm-check input[type="checkbox"] { margin-top: 2px; flex-shrink: 0; }
.confirm-actions { display: flex; justify-content: center; gap: 10px; }

/* ==========================================
   CARD GAMBAR INFO
   ========================================== */
.info-image-card {
    background: #ffffff; border: 1px solid #e5e7eb; border-radius: 16px;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
    padding: 24px; margin-bottom: 24px; overflow: hidden;
}
.info-image-header {
    display: flex; align-items: center; gap: 12px;
    padding-bottom: 14px; margin-bottom: 18px;
    border-bottom: 2px solid #13A847;
}
.info-image-header i {
    color: #13A847; font-size: 20px; background: #f0fdf4;
    width: 42px; height: 42px; border-radius: 10px;
    display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.info-image-header .info-image-title { font-size: 15px; font-weight: 800; color: #0f172a; margin: 0; }
.info-image-header .info-image-subtitle { font-size: 12px; color: #64748b; margin: 2px 0 0 0; }
.info-image-body {
    display: flex; justify-content: center; align-items: center;
    background: #f8fafc; border: 1.5px dashed #cbd5e1;
    border-radius: 12px; padding: 16px; overflow: hidden;
}
.info-image-body img {
    max-width: 100%; height: auto; max-height: 520px;
    object-fit: contain; border-radius: 8px; display: block;
    cursor: zoom-in; transition: transform 0.2s ease;
}
.info-image-body img:hover { transform: scale(1.02); }

@media (max-width: 768px) {
    .action-bar { flex-direction: column; align-items: stretch; }
    .action-bar .left, .action-bar .right { justify-content: stretch; width: 100%; }
    .action-bar .left > *, .action-bar .right > * { flex: 1 1 auto; justify-content: center; }
    .doc-card { padding: 20px 16px; }
    .submit-bar { justify-content: stretch; }
    .info-image-card { padding: 16px; border-radius: 14px; }
    .info-image-header i { width: 36px; height: 36px; font-size: 17px; }
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

        {{-- HEADER --}}
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
          </div>
        </div>

        {{-- CARD GAMBAR INFO --}}
        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <div class="col-md-12">
                    <div class="info-image-card">
                        <div class="info-image-header">
                            <i class="bi bi-diagram-3-fill"></i>
                            <div>
                                <h6 class="info-image-title">Alur Pemenuhan Syarat Pemanfaatan Jasa Konstruksi</h6>
                                <p class="info-image-subtitle">Panduan visual tahapan pemeriksaan pemenuhan syarat usaha jasa konstruksi</p>
                            </div>
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/pemanfaatan1.webp"
                                 alt="Alur Pemenuhan Syarat Jasa Konstruksi"
                                 loading="lazy"
                                 onclick="window.open(this.src, '_blank')"
                                 onerror="this.parentElement.innerHTML='<div style=\'padding:30px;text-align:center;color:#94a3b8;font-size:13px;\'><i class=\'bi bi-image\' style=\'font-size:2rem;display:block;margin-bottom:8px;\'></i>Gambar tidak ditemukan. Periksa path.</div>'">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- MAIN CONTENT --}}
        <div class="container-fluid">
            <div class="row" style="margin-right: 10px; margin-left:10px;">

                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-header">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                        </div>

                        <div class="panel-body">

                            {{-- ACTION BAR --}}
                            <div class="action-bar">
                                <div class="left">
                                    <span class="title-chip">
                                        <i class="bi bi-building"></i>
                                        Nama Bangunan: {{ $datanamabangunan ?? 'Masih Kosong' }}
                                    </span>
                                </div>
                                <div class="right">
                                    <a href="{{ url()->previous() }}" class="button-baru button-md">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </div>

                            {{-- FORM INPUT --}}
                            <form action="{{ route('betertibjakonmanfaat1') }}" method="POST" enctype="multipart/form-data" id="formBuatBerkas">
                                @csrf
                                <input type="hidden" name="tertibjakonpemanfaatan_id" value="{{ $datatertibjasakonstruksi_id }}">

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
                                        <strong>Simak 3 - Simak Pengawasan Tertib Pemanfaatan Produk Konstruksi Secara Rutin Maupun Insidental</strong><br>
                                        Terhadap Bangunan Konstruksi yang dibiayai dengan dana dari APBD dan/atau Masyarakat, swasta, atau badan usaha
                                    </div>

                                    {{-- INFO HEADER --}}
                                    <div class="simak-header-info">
                                        <table>
                                            <tr>
                                                <td class="label">Nama Bangunan</td>
                                                <td class="titik-dua">:</td>
                                                <td class="input-cell">
                                                    <input type="text" class="form-input" value="{{ $datanamabangunan ?? '-' }}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label">Lokasi</td>
                                                <td class="titik-dua">:</td>
                                                <td class="input-cell">
                                                    <input type="text" class="form-input" value="{{ $datalokasi ?? '-' }}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label">Nama Pemilik Bangunan</td>
                                                <td class="titik-dua">:</td>
                                                <td class="input-cell">
                                                    <input type="text" name="lingkuppengawasan" class="form-input @error('lingkuppengawasan') is-invalid @enderror" value="{{ old('lingkuppengawasan') }}" placeholder="Masukan Nama Pemilik Bangunan...">
                                                    @error('lingkuppengawasan')<div class="invalid-feedback d-block" style="font-size:11px;">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label">Nama Pengelola Bangunan</td>
                                                <td class="titik-dua">:</td>
                                                <td class="input-cell">
                                                    <input type="text" name="indikator" class="form-input @error('indikator') is-invalid @enderror" value="{{ old('indikator') }}" placeholder="Masukan Nama Pengelola Bangunan...">
                                                    @error('indikator')<div class="invalid-feedback d-block" style="font-size:11px;">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label">Waktu Pengawasan</td>
                                                <td class="titik-dua">:</td>
                                                <td class="input-cell">
                                                    <div style="display: flex; gap: 8px; align-items: center;">
                                                        <input type="date" class="form-input @error('dokumendiperiksa') is-invalid @enderror" name="dokumendiperiksa" value="{{ old('dokumendiperiksa') }}" style="max-width: 200px;">
                                                        <span style="font-weight:700;">s/d</span>
                                                        <input type="date" class="form-input @error('carapemeriksaan') is-invalid @enderror" name="carapemeriksaan" value="{{ old('carapemeriksaan') }}" style="max-width: 200px;">
                                                    </div>
                                                    @error('dokumendiperiksa')<div class="invalid-feedback d-block" style="font-size:11px;">{{ $message }}</div>@enderror
                                                    @error('carapemeriksaan')<div class="invalid-feedback d-block" style="font-size:11px;">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    {{-- TABEL AUDIT --}}
                                    <table class="table-audit">
                                        <thead>
                                            <tr>
                                                <th style="width: 40px;">No</th>
                                                <th style="width: 250px;">LINGKUP PENGAWASAN</th>
                                                <th>Indikator</th>
                                                <th>DOKUMEN YANG DIPERIKSA</th>
                                                <th>CARA PEMERIKSAAN</th>
                                                <th style="width: 150px;">KESIMPULAN PEMERIKSAAN</th>
                                                <th style="width: 200px;">CATATAN PEMERIKSAAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
                                                <td>Pengawasan fungsi peruntukan terhadap tertib pemanfaatan produk Jasa Konstruksi</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    a. Kesesuaian pemanfaatan bangunan konstruksi dengan fungsi yang direncanakan:<br>
                                                    <ul style="margin-top: 5px; margin-bottom: 0; padding-left: 20px;">
                                                        <li>Bangunan gedung sesuai dengan perizinan</li>
                                                        <li>Bangunan sipil sesuai dengan peraturan perundangan</li>
                                                    </ul>
                                                </td>
                                                <td>Pemanfaatan bangunan konstruksi sesuai dengan perizinannya</td>
                                                <td>Dokumen perizinan</td>
                                                <td>Membandingkan izin pembangunan dengan fakta di lapangan</td>
                                                <td class="center">
                                                    <span id="textKesimpulan" style="font-size: 13px; font-weight: 700; color: #0f172a;">Sesuai/Tidak</span>
                                                </td>
                                                <td id="outputCatatan1" style="white-space:pre-line; font-size:12px;">-</td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>
                                                    b. Kesesuaian lokasi bangunan konstruksi dengan peruntukan yang diatur dalam rencana detail tata ruang atau Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR).
                                                </td>
                                                <td>Lokasi bangunan konstruksi sesuai peruntukan tata ruang yang dibuktikan dengan surat pernyataan dari instansi berwenang</td>
                                                <td>Dokumen resmi dari instansi berwenang</td>
                                                <td>Memeriksa ketersediaan Dokumen resmi dari instansi berwenang</td>
                                                <td class="center">
                                                    <span id="textCatatan" style="font-size: 13px; font-weight: 700; color: #0f172a;">Tersedia/Tidak</span>
                                                </td>
                                                <td id="outputCatatan2" style="white-space:pre-line; font-size:12px;">-</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{-- INPUT DATA PEMERIKSAAN --}}
                                    <table class="data-table">
                                        <thead>
                                            <tr>
                                                <th style="width:250px;">Input Data Pemeriksaan</th>
                                                <th>Isian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="font-weight:700;">Kesimpulan Pemeriksaan 1</td>
                                                <td>
                                                    <select name="kesimpulanpemeriksaan" id="kesimpulanSelect" class="form-select @error('kesimpulanpemeriksaan') is-invalid @enderror">
                                                        <option value="" disabled {{ old('kesimpulanpemeriksaan') ? '' : 'selected' }}>--- Pilih Kesimpulan ---</option>
                                                        <option value="Sesuai" {{ old('kesimpulanpemeriksaan') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                        <option value="Tidak Sesuai" {{ old('kesimpulanpemeriksaan') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                    </select>
                                                    @error('kesimpulanpemeriksaan')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:700;">Catatan Pemeriksaan 1</td>
                                                <td>
                                                    <textarea name="catatan1" id="catatan1" rows="2" class="form-textarea @error('catatan1') is-invalid @enderror" placeholder="Masukan Catatan...">{{ old('catatan1') }}</textarea>
                                                    @error('catatan1')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:700;">Kesimpulan Pemeriksaan 2</td>
                                                <td>
                                                    <select name="catatan" id="catatanSelect" class="form-select @error('catatan') is-invalid @enderror">
                                                        <option value="" disabled {{ old('catatan') ? '' : 'selected' }}>--- Pilih Catatan ---</option>
                                                        <option value="Tersedia" {{ old('catatan') == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                                                        <option value="Tidak Tersedia" {{ old('catatan') == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                                    </select>
                                                    @error('catatan')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:700;">Catatan Pemeriksaan 2</td>
                                                <td>
                                                    <textarea name="catatan2" id="catatan2" rows="2" class="form-textarea @error('catatan2') is-invalid @enderror" placeholder="Masukan Catatan...">{{ old('catatan2') }}</textarea>
                                                    @error('catatan2')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                                {{-- SUBMIT --}}
                                <div class="submit-bar">
                                    <button class="button-hijau button-md" type="button" onclick="openModal()">
                                        <i class="bi bi-plus-circle"></i>
                                        <span>Buat Berkas</span>
                                    </button>
                                </div>

                                {{-- MODAL KONFIRMASI --}}
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
                                                <i class="bi bi-x-circle"></i> Batal
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

{{-- SCRIPT --}}
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

// Sinkronisasi Kesimpulan & Catatan
document.addEventListener('DOMContentLoaded', function () {
    const kesimpulanSelect = document.getElementById('kesimpulanSelect');
    const textKesimpulan = document.getElementById('textKesimpulan');
    const catatanSelect = document.getElementById('catatanSelect');
    const textCatatan = document.getElementById('textCatatan');

    if(kesimpulanSelect) {
        kesimpulanSelect.addEventListener('change', function () {
            textKesimpulan.textContent = this.value || 'Sesuai/Tidak';
        });
    }

    if(catatanSelect) {
        catatanSelect.addEventListener('change', function () {
            textCatatan.textContent = this.value || 'Tersedia/Tidak';
        });
    }

    // Sync Catatan 1 (5 kata per baris)
    const catatan1Input = document.getElementById('catatan1');
    if(catatan1Input) {
        catatan1Input.addEventListener('input', function() {
            let text = this.value.trim();
            if (!text) { document.getElementById('outputCatatan1').innerText = '-'; return; }
            let words = text.split(/\s+/);
            let result = '';
            for (let i = 0; i < words.length; i++) {
                result += words[i] + ' ';
                if ((i + 1) % 5 === 0) result = result.trim() + '\n';
            }
            document.getElementById('outputCatatan1').innerText = result.trim();
        });
    }

    // Sync Catatan 2 (5 kata per baris)
    const catatan2Input = document.getElementById('catatan2');
    if(catatan2Input) {
        catatan2Input.addEventListener('input', function() {
            let text = this.value.trim();
            if (!text) { document.getElementById('outputCatatan2').innerText = '-'; return; }
            let words = text.split(/\s+/);
            let result = '';
            for (let i = 0; i < words.length; i++) {
                result += words[i] + ' ';
                if ((i + 1) % 5 === 0) result = result.trim() + '\n';
            }
            document.getElementById('outputCatatan2').innerText = result.trim();
        });
    }
});
</script>

</body>
</html>