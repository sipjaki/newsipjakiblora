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
    display: flex; justify-content: space-between; align-items: center;
    gap: 12px; flex-wrap: wrap; padding: 16px 20px;
    background: #ffffff; border: 1px solid #e5e7eb;
    border-radius: 12px; margin-bottom: 20px;
}
.action-bar .left, .action-bar .right {
    display: flex; gap: 8px; align-items: center; flex-wrap: wrap;
}
.action-bar .title-chip {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 8px 14px; background: #f0fdf4;
    border: 1px solid #bbf7d0; border-radius: 10px;
    font-size: 12.5px; font-weight: 700; color: #15803d;
}
.action-bar .title-chip i { color: #13A847; font-size: 14px; }

/* ==========================================
   FORM CONTROLS
   ========================================== */
.form-input, .form-textarea, .form-select {
    width: 100%; font-size: 13px; padding: 8px 12px;
    border: 1px solid #111827; border-radius: 8px;
    background: #ffffff; color: #1e293b;
    transition: all 0.15s ease;
}
.form-input:focus, .form-textarea:focus, .form-select:focus {
    border-color: #13A847; box-shadow: 0 0 0 3px rgba(19, 168, 71, 0.1); outline: none;
}
.form-input[readonly], .form-textarea[readonly] { background: #f8fafc; cursor: default; }
.form-textarea { resize: vertical; }

/* ==========================================
   FORM DOC CARD
   ========================================== */
.doc-card {
    background: #ffffff; border: 1px solid #111827;
    border-radius: 12px; padding: 28px 32px;
    margin-bottom: 20px; overflow-x: auto;
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
    font-size: 14px; font-weight: 700; color: #0f172a; line-height: 1.6;
    margin-bottom: 20px; padding: 14px 18px;
    background: #f8fafc; border: 1px solid #111827;
    border-left: 4px solid #13A847; border-radius: 6px; text-align: center;
}

/* ==========================================
   TABEL AUDIT
   ========================================== */
.table-audit {
    width: 100%; border-collapse: collapse; font-size: 12.5px;
    border: 1px solid #111827; background: #fff; margin-bottom: 20px; min-width: 900px;
}
.table-audit th, .table-audit td {
    border: 1px solid #111827; padding: 10px; vertical-align: top; line-height: 1.5;
}
.table-audit th {
    background: #f8fafc; color: #111827; font-weight: 800;
    text-align: center; font-size: 12px;
}
.table-audit td.center { text-align: center; }

/* ==========================================
   DATA TABLE
   ========================================== */
.data-table {
    width: 100%; border-collapse: collapse; font-size: 12.5px;
    border: 1px solid #111827; margin-bottom: 16px;
}
.data-table th, .data-table td {
    border: 1px solid #111827; padding: 9px 12px; vertical-align: middle;
}
.data-table th {
    background: #f8fafc; color: #111827; font-weight: 700;
    text-align: center; font-size: 12px;
}

/* ==========================================
   SUBMIT & MODAL
   ========================================== */
.submit-bar { display: flex; justify-content: flex-end; margin: 20px 0; }
.confirm-overlay {
    display: none; position: fixed; inset: 0;
    background-color: rgba(15, 23, 42, 0.6); z-index: 9999;
    justify-content: center; align-items: center; padding: 20px;
}
.confirm-box {
    background: #ffffff; padding: 28px 30px; border-radius: 16px;
    max-width: 440px; width: 100%; text-align: center;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3); border: 1px solid #111827;
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
    padding-bottom: 14px; margin-bottom: 18px; border-bottom: 2px solid #13A847;
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
                                <h6 class="info-image-title">Alur Pemenuhan Syarat Pengawasan Pemanfaatan Rencana Umur Konstruksi & Kapasitas Beban</h6>
                                <p class="info-image-subtitle">Panduan visual tahapan pemeriksaan pemenuhan syarat usaha jasa konstruksi</p>
                            </div>
                        </div>
                        <div class="info-image-body">
                            <img src="/assets/01_tertibpengawasan/01_tertibusaha/pemanfaatan2.webp"
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
                            <form action="{{ route('betertibjakonmanfaat2') }}" method="POST" enctype="multipart/form-data" id="formBuatBerkas">
                                @csrf
                                <input type="hidden" name="tertibjakonpemanfaatan_id" value="{{ $datatertibjasakonstruksi_id }}">

                                <div class="doc-card">

                                    <div class="doc-header">
                                        <img src="/assets/icon/logokabupatenblora.png" alt="Logo">
                                        <img src="/assets/icon/pupr.png" alt="Logo">
                                        <span class="header-sep">:</span>
                                        <p class="header-title">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                    </div>

                                    <div class="doc-title">
                                        <strong>Surat Dukung Tertib Jakon Pemanfaatan</strong><br>
                                        Pengawasan Terhadap Rencana Umur Konstruksi & Kapasitas Beban
                                    </div>

                                    {{-- AUDIT TABLE --}}
                                    <table class="table-audit">
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
                                                <td class="center">2</td>
                                                <td>Pengawasan terhadap rencana umur konstruksi</td>
                                                <td>Terjaminnya bangunan konstruksi tetap laik fungsi sepanjang umur konstruksi yang di buktikan dengan tersedianya dokumen laik fungsi atau dokumen sejenis lainnya</td>
                                                <td>Dokumen laik fungsi atau dokumen sejenis yang di terbitkan oleh instansi berwenang</td>
                                                <td>Memerika ketersediaan dokumen laik fungsi atau dokumen sejenis yang diterbitkan oleh instansi berwenang</td>
                                                <td class="center">
                                                    <span id="textKesimpulan" style="font-size: 13px; font-weight: 700; color: #0f172a;">-</span>
                                                </td>
                                                <td>
                                                    <div id="carapemeriksaanPreview" style="white-space:pre-line; font-size:12px;">-</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="center">3</td>
                                                <td>Pengawasan terhadap kapasitas dan beban</td>
                                                <td>Terjaminnya bangunan konstruksi dari kelebihan kapasitas dan beban yang di buktikan dengan tersedianya surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan atau konfirmasi instansi yang memiliki kewenangan atau pemilik/pengelola bangunan</td>
                                                <td>Surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan</td>
                                                <td>Memerika ketersediaan surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan atau melakukan konfirmasi instansi yang memiliki kewenangan atau pemilik/pengelola bangunan</td>
                                                <td class="center">
                                                    <span id="textCatatan" style="font-size: 13px; font-weight: 700; color: #0f172a;">-</span>
                                                </td>
                                                <td>
                                                    <div id="dokumendiperiksaPreview" style="white-space:pre-line; font-size:12px;">-</div>
                                                </td>
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
                                                <td style="font-weight:700;">Kesimpulan Pemeriksaan</td>
                                                <td>
                                                    <select name="kesimpulanpemeriksaan" id="kesimpulanSelect" class="form-select @error('kesimpulanpemeriksaan') is-invalid @enderror">
                                                        <option value="" disabled {{ old('kesimpulanpemeriksaan') ? '' : 'selected' }}>--- Pilih Catatan ---</option>
                                                        <option value="Tersedia" {{ old('kesimpulanpemeriksaan') == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                                                        <option value="Tidak Tersedia" {{ old('kesimpulanpemeriksaan') == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                                    </select>
                                                    @error('kesimpulanpemeriksaan')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:700;">Catatan Pemeriksaan 1</td>
                                                <td>
                                                    <textarea name="carapemeriksaan" id="carapemeriksaanInput" rows="3" class="form-textarea @error('carapemeriksaan') is-invalid @enderror" placeholder="Masukkan catatan pemeriksaan 1 ...">{{ old('carapemeriksaan') }}</textarea>
                                                    @error('carapemeriksaan')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:700;">Catatan</td>
                                                <td>
                                                    <select name="catatan" id="catatanSelect" class="form-select @error('catatan') is-invalid @enderror">
                                                        <option value="" disabled {{ old('catatan') ? '' : 'selected' }}>--- Pilih Kesimpulan ---</option>
                                                        <option value="Sesuai" {{ old('catatan') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                        <option value="Tidak Sesuai" {{ old('catatan') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                    </select>
                                                    @error('catatan')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:700;">Catatan Pemeriksaan 2</td>
                                                <td>
                                                    <textarea name="dokumendiperiksa" id="dokumendiperiksaInput" rows="3" class="form-textarea @error('dokumendiperiksa') is-invalid @enderror" placeholder="Masukkan catatan pemeriksaan 2...">{{ old('dokumendiperiksa') }}</textarea>
                                                    @error('dokumendiperiksa')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
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
                                        <p class="confirm-message">Apakah Anda ingin membuat berkas ini?</p>

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

document.addEventListener('DOMContentLoaded', function () {
    const kesimpulanSelect = document.getElementById('kesimpulanSelect');
    const textKesimpulan = document.getElementById('textKesimpulan');
    const catatanSelect = document.getElementById('catatanSelect');
    const textCatatan = document.getElementById('textCatatan');

    if(kesimpulanSelect) {
        kesimpulanSelect.addEventListener('change', function () {
            textKesimpulan.textContent = this.value || '-';
        });
    }

    if(catatanSelect) {
        catatanSelect.addEventListener('change', function () {
            textCatatan.textContent = this.value || '-';
        });
    }

    const carapemeriksaanInput = document.getElementById('carapemeriksaanInput');
    const carapemeriksaanPreview = document.getElementById('carapemeriksaanPreview');
    if(carapemeriksaanInput) {
        carapemeriksaanInput.addEventListener('input', function() {
            let text = this.value.trim();
            if (!text) { carapemeriksaanPreview.innerText = '-'; return; }
            let words = text.split(/\s+/);
            let result = '';
            for (let i = 0; i < words.length; i++) {
                result += words[i] + ' ';
                if ((i + 1) % 5 === 0) result = result.trim() + '\n';
            }
            carapemeriksaanPreview.innerText = result.trim();
        });
    }

    const dokumendiperiksaInput = document.getElementById('dokumendiperiksaInput');
    const dokumendiperiksaPreview = document.getElementById('dokumendiperiksaPreview');
    if(dokumendiperiksaInput) {
        dokumendiperiksaInput.addEventListener('input', function() {
            let text = this.value.trim();
            if (!text) { dokumendiperiksaPreview.innerText = '-'; return; }
            let words = text.split(/\s+/);
            let result = '';
            for (let i = 0; i < words.length; i++) {
                result += words[i] + ' ';
                if ((i + 1) % 5 === 0) result = result.trim() + '\n';
            }
            dokumendiperiksaPreview.innerText = result.trim();
        });
    }
});
</script>

</body>
</html>