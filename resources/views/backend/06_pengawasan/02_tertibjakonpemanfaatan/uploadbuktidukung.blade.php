@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ═══════════════════════════════════════════════════════
   BACKGROUND PUTIH + TINT HIJAU TRANSPARAN + TITIK
   ═══════════════════════════════════════════════════════ */
.bg-3d-pattern {
    background-color: #ffffff;
    background-image:
        radial-gradient(rgba(19, 168, 71, 0.25) 2px, transparent 2px),
        linear-gradient(180deg, rgba(19, 168, 71, 0.06) 0%, rgba(19, 168, 71, 0.01) 100%);
    background-size: 24px 24px, 100% 100%;
    background-attachment: fixed;
    background-position: center top;
    min-height: 100vh;
    padding: 24px 0 48px;
    position: relative;
    overflow: hidden;
}
.bg-3d-pattern > * { position: relative; z-index: 1; }

.glass-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid #cbd5e1;
    border-radius: 20px;
    box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.1), 0 4px 6px -2px rgba(15, 23, 42, 0.05);
    transition: all 0.3s ease;
}

.upload-dropzone {
    border: 2px dashed #13A847;
    border-radius: 12px;
    padding: 30px;
    text-align: center;
    background: #ffffff;
    transition: all 0.2s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
}
.upload-dropzone:hover {
    border-color: #0f172a;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
}

@keyframes popIn {
    0% { transform: scale(0.95); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
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
        <div class="row" style="margin-right: 15px; margin-left:15px;">

            <div class="col-md-12">
                <div class="card mb-4 glass-card">

                    <div class="card-header" style="background: transparent; border-bottom: 1px solid #e2e8f0; padding: 20px 24px;">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                    </div>

                    <div class="card-body" style="padding: 24px;">

                        {{-- KARTU DATA INDUK --}}
                        <div style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 12px; padding: 20px; margin-bottom: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                                <div>
                                    <h5 style="font-weight: 800; color: #0f172a; margin: 0 0 4px 0; font-size: 16px;">
                                        <i class="bi bi-building" style="color: #13A847; margin-right: 8px;"></i>
                                        Data Induk Pengawasan Tertib Pemanfaatan
                                    </h5>
                                    <p style="color: #64748b; font-size: 13px; margin: 0;">Informasi detail terkait pengawasan pemanfaatan jasa konstruksi.</p>
                                </div>
                                <a href="/betertibjakonpemanfaatan" class="button-modern button-md" style="text-decoration: none; display: inline-flex; align-items: center; font-size: 13px; padding: 8px 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                    <i class="bi bi-arrow-left" style="margin-right: 6px;"></i> Kembali
                                </a>
                            </div>

                            {{-- ✅ DATA DIAMBIL DARI $datatertib --}}
                            <table style="width: 100%; border-collapse: collapse; font-size: 13px;">
                                {{-- <tr>
                                    <td style="padding: 8px 0; width: 200px; font-weight: 700; color: #475569;">ID Tertib Pemanfaatan</td>
                                    <td style="padding: 8px 0; color: #0f172a;">: {{ $datatertib->id ?? '-' }}</td>
                                </tr> --}}
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 700; color: #475569;">Nama Bangunan</td>
                                    <td style="padding: 8px 0; color: #0f172a;">: {{ $datatertib->namabangunan ?? 'Belum Diisi' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 700; color: #475569;">Lokasi</td>
                                    <td style="padding: 8px 0; color: #0f172a;">: {{ $datatertib->lokasi ?? 'Belum Diisi' }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px 0; font-weight: 700; color: #475569;">Nama Pekerjaan</td>
                                    <td style="padding: 8px 0; color: #0f172a;">: {{ $datatertib->namapekerjaan ?? 'Belum Diisi' }}</td>
                                </tr>
                            </table>
                        </div>

                        {{-- FORM UPLOAD --}}
                        <form action="{{ route('create.uploadpemanfaaatantertib') }}" method="POST" enctype="multipart/form-data" id="formUploadBerkas">
                            @csrf
                            <input type="hidden" name="tertibjakonpemanfaatan_id" value="{{ $tertibjakonpemanfaatan_id }}">

                            <div class="row">
                                <div class="col-md-10 mx-auto">

                                    {{-- 1. BUKTI PENGUSAHAAN PEMANFAATAN --}}
                                    <div class="upload-dropzone" style="margin-bottom: 20px;">
                                        <i class="bi bi-file-earmark-pdf" style="font-size: 40px; color: #dc2626; margin-bottom: 12px; display: block;"></i>
                                        <h6 style="font-weight: 800; color: #0f172a; margin-bottom: 8px; font-size: 15px;">
                                            Bukti Dukung Pengawasan Pemanfaatan Jasa Konstruksi
                                        </h6>
                                        <p style="font-size: 12.5px; color: #64748b; margin-bottom: 16px;">
                                            Format: <strong>PDF</strong>. Max: <strong>20 MB</strong>.
                                        </p>

                                        <input type="file" id="lingkuppengawasan" name="lingkuppengawasan" accept="application/pdf"
                                               class="form-control @error('lingkuppengawasan') is-invalid @enderror"
                                               onchange="previewPDF(this, 'previewLingkup')"
                                               style="font-size: 13px; padding: 10px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f8fafc;">
                                        @error('lingkuppengawasan')
                                            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-3" style="height: 300px; display: none;" id="wrapPreviewLingkup">
                                            <embed id="previewLingkup" type="application/pdf" width="100%" height="100%" style="border-radius: 8px; border: 1px solid #cbd5e1;" />
                                        </div>
                                    </div>

                                    {{-- 2. BUKTI PENGUSAHAAN RENCANA UMUR --}}
                                    <div class="upload-dropzone" style="margin-bottom: 20px;">
                                        <i class="bi bi-file-earmark-pdf" style="font-size: 40px; color: #dc2626; margin-bottom: 12px; display: block;"></i>
                                        <h6 style="font-weight: 800; color: #0f172a; margin-bottom: 8px; font-size: 15px;">
                                            Bukti Dukung Pengawasan Rencana Umur Konstruksi & Kapasitas Beban
                                        </h6>
                                        <p style="font-size: 12.5px; color: #64748b; margin-bottom: 16px;">
                                            Format: <strong>PDF</strong>. Max: <strong>20 MB</strong>.
                                        </p>

                                        <input type="file" id="indikator" name="indikator" accept="application/pdf"
                                               class="form-control @error('indikator') is-invalid @enderror"
                                               onchange="previewPDF(this, 'previewIndikator')"
                                               style="font-size: 13px; padding: 10px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f8fafc;">
                                        @error('indikator')
                                            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-3" style="height: 300px; display: none;" id="wrapPreviewIndikator">
                                            <embed id="previewIndikator" type="application/pdf" width="100%" height="100%" style="border-radius: 8px; border: 1px solid #cbd5e1;" />
                                        </div>
                                    </div>

                                    {{-- 3. BUKTI PENGUSAHAAN PEMELIHARAAN --}}
                                    <div class="upload-dropzone" style="margin-bottom: 20px;">
                                        <i class="bi bi-file-earmark-pdf" style="font-size: 40px; color: #dc2626; margin-bottom: 12px; display: block;"></i>
                                        <h6 style="font-weight: 800; color: #0f172a; margin-bottom: 8px; font-size: 15px;">
                                            Bukti Dukung Pengawasan Pemeliharaan Konstruksi & Struktur
                                        </h6>
                                        <p style="font-size: 12.5px; color: #64748b; margin-bottom: 16px;">
                                            Format: <strong>PDF</strong>. Max: <strong>20 MB</strong>.
                                        </p>

                                        <input type="file" id="dokumendiperiksa" name="dokumendiperiksa" accept="application/pdf"
                                               class="form-control @error('dokumendiperiksa') is-invalid @enderror"
                                               onchange="previewPDF(this, 'previewDokumen')"
                                               style="font-size: 13px; padding: 10px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f8fafc;">
                                        @error('dokumendiperiksa')
                                            <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                        @enderror

                                        <div class="mt-3" style="height: 300px; display: none;" id="wrapPreviewDokumen">
                                            <embed id="previewDokumen" type="application/pdf" width="100%" height="100%" style="border-radius: 8px; border: 1px solid #cbd5e1;" />
                                        </div>
                                    </div>

                                    {{-- SUBMIT --}}
                                    <div style="display: flex; justify-content: flex-end; margin-top: 24px;">
                                        <button type="button" onclick="openModal()" class="button-baru button-md" style="display: inline-flex; align-items: center; padding: 10px 24px; font-size: 14px; box-shadow: 0 4px 6px -1px rgba(19,168,71,0.3);">
                                            <i class="bi bi-cloud-upload" style="margin-right: 8px; font-size: 16px;"></i>
                                            Upload Berkas
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

{{-- MODAL KONFIRMASI --}}
<div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(15, 23, 42, 0.6); z-index: 9999; justify-content: center; align-items: center; padding: 20px; backdrop-filter: blur(4px);">
    <div style="background: white; padding: 28px 30px; border-radius: 16px; max-width: 400px; width: 100%; text-align: center; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.3); border: 1px solid #e2e8f0; transform: scale(1); animation: popIn 0.3s ease;">
        <div style="margin-bottom: 16px;">
            <i class="bi bi-cloud-arrow-up" style="font-size: 42px; color: #13A847;"></i>
        </div>
        <h5 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Konfirmasi Upload</h5>
        <p style="font-size: 13px; color: #475569; margin-bottom: 24px; line-height: 1.5;">
            Apakah Anda yakin ingin mengunggah berkas dukung ini? Pastikan semua file sudah benar.
        </p>

        <div style="display: flex; justify-content: center; gap: 12px;">
            <button id="confirmSubmitBtn" type="button" onclick="submitForm()" class="button-hijau" style="display: inline-flex; align-items: center; padding: 10px 20px; font-size: 13.5px; box-shadow: 0 4px 6px -1px rgba(19,168,71,0.3);">
                <i class="bi bi-check-circle" style="margin-right: 6px;"></i> Ya, Upload
            </button>
            <button type="button" onclick="closeModal()" class="button-merah" style="display: inline-flex; align-items: center; padding: 10px 20px; font-size: 13.5px; box-shadow: 0 4px 6px -1px rgba(220,38,38,0.3);">
                <i class="bi bi-x-circle" style="margin-right: 6px;"></i> Batal
            </button>
        </div>
    </div>
</div>

@include('backend.00_administrator.00_baganterpisah.02_footer')

<script>
function previewPDF(input, previewId) {
    const file = input.files[0];
    const embed = document.getElementById(previewId);
    const wrap = document.getElementById(previewId).parentElement;

    if (file && file.type === 'application/pdf') {
        const fileURL = URL.createObjectURL(file);
        embed.src = fileURL;
        wrap.style.display = "block";
    } else {
        embed.src = "";
        wrap.style.display = "none";
    }
}

function openModal() {
    const files = [
        document.getElementById('lingkuppengawasan').files.length,
        document.getElementById('indikator').files.length,
        document.getElementById('dokumendiperiksa').files.length,
    ];

    const total = files.reduce((a, b) => a + b, 0);
    if (total === 0) {
        alert('Silakan pilih minimal satu berkas terlebih dahulu!');
        return;
    }

    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "none";
}

function submitForm() {
    const form = document.getElementById('formUploadBerkas');
    if (!form) { alert('Form tidak ditemukan.'); return; }

    const btn = document.getElementById('confirmSubmitBtn');
    if (btn) {
        btn.disabled = true;
        btn.innerHTML = '<i class="bi bi-hourglass-split" style="margin-right: 6px;"></i> Memproses...';
    }

    closeModal();
    form.submit();
}
</script>

</body>
</html>