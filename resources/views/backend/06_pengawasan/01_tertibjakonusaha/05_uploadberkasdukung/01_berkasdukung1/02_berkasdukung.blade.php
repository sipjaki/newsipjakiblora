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

/* Efek Kaca (Glassmorphism) pada Card Utama + Border Silver */
.glass-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid #cbd5e1;
    border-radius: 20px;
    box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.1), 0 4px 6px -2px rgba(15, 23, 42, 0.05);
    transition: all 0.3s ease;
}

/* Hover effect untuk form upload */
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

/* Animasi Pop-in untuk Modal */
@keyframes popIn {
    0% { transform: scale(0.95); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
}
</style>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('button')
@include('backend.00_administrator.00_baganterpisah.03_sidebar')

   <main class="app-main">
<section class="bg-3d-pattern">

        <!--begin::App Content Header-->
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
          </div>
        </div>

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        <div class="container-fluid">
            <div class="row" style="margin-right: 15px; margin-left:15px;">

                <!-- PANEL UTAMA DENGAN EFEK GLASSMORPHISM & BORDER SILVER -->
                <div class="col-md-12">
                    <div class="card mb-4 glass-card">

                        <!-- Header Panel -->
                        <div class="card-header" style="background: transparent; border-bottom: 1px solid #e2e8f0; padding: 20px 24px;">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                        </div>

                        <div class="card-body" style="padding: 24px;">

                            {{-- ═══════════════════════════════════════════════════════
                                 KARTU DATA INDUK
                                 ═══════════════════════════════════════════════════════ --}}
                            <div style="background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 12px; padding: 20px; margin-bottom: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px;">
                                    <div>
                                        <h5 style="font-weight: 800; color: #0f172a; margin: 0 0 4px 0; font-size: 16px;">
                                            <i class="bi bi-building" style="color: #13A847; margin-right: 8px;"></i>
                                            Data Induk Pengawasan Tertib Usaha
                                        </h5>
                                        <p style="color: #64748b; font-size: 13px; margin: 0;">Informasi detail terkait pemilik dan kegiatan yang sedang diawasi.</p>
                                    </div>
                                    <a href="/betertibjakonusaha" class="button-modern button-md" style="text-decoration: none; display: inline-flex; align-items: center; font-size: 13px; padding: 8px 16px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                        <i class="bi bi-arrow-left" style="margin-right: 6px;"></i> Kembali
                                    </a>
                                </div>

                                <table style="width: 100%; border-collapse: collapse; font-size: 13px;">
                                    <tr>
                                        <td style="padding: 8px 0; width: 200px; font-weight: 700; color: #475569;">Nama Badan Usaha</td>
                                        <td style="padding: 8px 0; color: #0f172a;">: {{ $data->namabadanusaha ?? 'Belum Diisi' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px 0; font-weight: 700; color: #475569;">Nama Pekerjaan</td>
                                        <td style="padding: 8px 0; color: #0f172a;">: {{ $data->namapekerjaan ?? 'Belum Diisi' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px 0; font-weight: 700; color: #475569;">Tahun Pelaksanaan</td>
                                        <td style="padding: 8px 0; color: #0f172a;">: {{ $data->tahunpelaksanaan ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px 0; font-weight: 700; color: #475569;">Nomor Induk Berusaha (NIB)</td>
                                        <td style="padding: 8px 0; color: #0f172a;">: {{ $data->nib ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px 0; font-weight: 700; color: #475569;">Penanggung Jawab Badan Usaha (PJBU)</td>
                                        <td style="padding: 8px 0; color: #0f172a;">: {{ $data->pjbu ?? '-' }}</td>
                                    </tr>
                                </table>
                            </div>

                            {{-- ═══════════════════════════════════════════════════════
                                 FORM UPLOAD BERKAS
                                 ═══════════════════════════════════════════════════════ --}}
                            <form action="{{ route('beuploadberkasusaha2new', $data->id) }}" method="POST" enctype="multipart/form-data" id="formUploadBerkas">
                                @csrf
                                @method('POST')

                                <div class="row">
                                    <div class="col-md-8 mx-auto">

                                        <div class="upload-dropzone">

                                            <i class="bi bi-cloud-arrow-up" style="font-size: 48px; color: #13A847; margin-bottom: 16px; display: block;"></i>

                                            <h6 style="font-weight: 800; color: #0f172a; margin-bottom: 8px; font-size: 16px;">
                                                Daftar Simak 1 b.2 Kesesuaian Segmentasi Pasar
                                            </h6>
                                            <p style="font-size: 12.5px; color: #64748b; margin-bottom: 20px;">
                                                Upload Berkas Dukung Kesesuaian Segmentasi Pasar. Format yang didukung: <strong>PDF, DOC, DOCX</strong>.
                                            </p>

                                            <!-- Cek File Sebelumnya -->
                                            @if(isset($data->cadangan2) && $data->cadangan2 != '' && file_exists(public_path('storage/' . $data->cadangan2)))
                                                @php
                                                    $filePath = public_path('storage/' . $data->cadangan2);
                                                    $fileName = basename($data->cadangan2);
                                                    $fileSize = round(filesize($filePath) / 1024, 2) . ' KB';
                                                    $fileTime = date('d F Y, H:i', filemtime($filePath));
                                                    $fileExt = strtoupper(pathinfo($fileName, PATHINFO_EXTENSION));
                                                @endphp

                                                <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 10px; padding: 20px; text-align: left; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">

                                                    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px dashed #bfdbfe; padding-bottom: 12px; margin-bottom: 12px;">
                                                        <div style="display: flex; align-items: center; gap: 12px;">
                                                            <div style="width: 40px; height: 40px; border-radius: 8px; background: #dbeafe; color: #1e40af; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                                                                <i class="bi bi-file-earmark-check-fill"></i>
                                                            </div>
                                                            <div>
                                                                <strong style="font-size: 14px; color: #1e3a8a; display: block;">Berkas Dukung Terunggah</strong>
                                                                <span style="font-size: 12px; color: #3b82f6;">Status: <strong>Selesai</strong></span>
                                                            </div>
                                                        </div>
                                                        <a href="{{ asset('storage/' . $data->cadangan2) }}" download target="_blank" class="button-berkas button-md" style="padding: 8px 16px; font-size: 13px; text-decoration: none; display: inline-flex; align-items: center; border-radius: 8px; box-shadow: 0 2px 4px rgba(19,168,71,0.3);">
                                                            <i class="bi bi-download" style="margin-right: 6px;"></i> Unduh Berkas
                                                        </a>
                                                    </div>

                                                    <table style="width: 100%; border-collapse: collapse; font-size: 13px; color: #1e293b;">
                                                        <tr>
                                                            <td style="padding: 4px 0; width: 130px; font-weight: 600;">Nama File</td>
                                                            <td style="padding: 4px 0;">: {{ $fileName }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 4px 0; font-weight: 600;">Tipe File</td>
                                                            <td style="padding: 4px 0;">:
                                                                <span class="badge {{ $fileExt == 'PDF' ? 'bg-danger' : 'bg-primary' }}" style="font-size: 11px;">
                                                                    {{ $fileExt }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 4px 0; font-weight: 600;">Ukuran File</td>
                                                            <td style="padding: 4px 0;">: {{ $fileSize }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 4px 0; font-weight: 600;">Tanggal Upload</td>
                                                            <td style="padding: 4px 0;">: {{ $fileTime }} WIB</td>
                                                        </tr>
                                                    </table>

                                                    @if(Str::endsWith(strtolower($data->cadangan2), '.pdf'))
                                                        <div style="margin-top: 16px; border-radius: 8px; overflow: hidden; border: 1px solid #bfdbfe; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                                            <iframe src="{{ asset('storage/' . $data->cadangan2) }}" frameborder="0" width="100%" height="350px"></iframe>
                                                        </div>
                                                    @else
                                                        <div style="margin-top: 16px; background: #ffffff; border: 1px solid #bfdbfe; border-radius: 8px; padding: 16px; text-align: center; color: #64748b; font-size: 13px;">
                                                            <i class="bi bi-file-earmark-word" style="font-size: 24px; color: #2563eb; display: block; margin-bottom: 8px;"></i>
                                                            File berupa dokumen Word. Silakan unduh file untuk melihat isinya.
                                                        </div>
                                                    @endif
                                                </div>
                                            @elseif(isset($data->cadangan2) && $data->cadangan2 != '')
                                                @php
                                                    $fileName = basename($data->cadangan2);
                                                    $fileExt = strtoupper(pathinfo($fileName, PATHINFO_EXTENSION));
                                                @endphp
                                                <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 10px; padding: 20px; text-align: left; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                                        <div style="display: flex; align-items: center; gap: 12px;">
                                                            <div style="width: 40px; height: 40px; border-radius: 8px; background: #dbeafe; color: #1e40af; display: flex; justify-content: center; align-items: center; font-size: 20px;">
                                                                <i class="bi bi-file-earmark-check-fill"></i>
                                                            </div>
                                                            <div>
                                                                <strong style="font-size: 14px; color: #1e3a8a; display: block;">Berkas Dukung Terunggah</strong>
                                                                <span style="font-size: 12px; color: #3b82f6;">{{ $fileName }}</span>
                                                            </div>
                                                        </div>
                                                        <a href="{{ asset($data->cadangan2) }}" download target="_blank" class="button-berkas button-md" style="padding: 8px 16px; font-size: 13px; text-decoration: none; display: inline-flex; align-items: center; border-radius: 8px; box-shadow: 0 2px 4px rgba(19,168,71,0.3);">
                                                            <i class="bi bi-download" style="margin-right: 6px;"></i> Unduh Berkas
                                                        </a>
                                                    </div>
                                                    @if(Str::endsWith(strtolower($data->cadangan2), '.pdf'))
                                                        <div style="margin-top: 16px; border-radius: 8px; overflow: hidden; border: 1px solid #bfdbfe; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                                                            <iframe src="{{ asset($data->cadangan2) }}" frameborder="0" width="100%" height="350px"></iframe>
                                                        </div>
                                                    @endif
                                                </div>
                                            @else
                                                <div style="background: #fef2f2; border: 1px solid #fecaca; border-radius: 8px; padding: 12px; color: #b91c1c; font-size: 13px; margin-bottom: 20px;">
                                                    <i class="bi bi-exclamation-triangle-fill" style="margin-right: 6px;"></i>
                                                    Berkas Dukung Belum Diupload!
                                                </div>
                                            @endif

                                            <div style="text-align: left; margin-top: 24px;">
                                                <label class="form-label" for="cadangan2" style="font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 8px; display: block;">
                                                    @if(isset($data->cadangan2) && $data->cadangan2 != '' && (file_exists(public_path('storage/' . $data->cadangan2)) || file_exists(public_path($data->cadangan2))))
                                                        Ganti Berkas (Opsional)
                                                    @else
                                                        Pilih Berkas Baru
                                                    @endif
                                                </label>
                                                <input type="file" id="cadangan2" name="cadangan2"
                                                       class="form-control @error('cadangan2') is-invalid @enderror"
                                                       accept=".pdf,.doc,.docx"
                                                       onchange="previewFile2(event)"
                                                       style="font-size: 13px; padding: 10px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f8fafc;" />
                                                @error('cadangan2')
                                                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div id="preview-container-2" style="margin-top: 16px; text-align: left;"></div>

                                        </div>

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

{{-- ═══════════════════════════════════════════════════════
     MODAL KONFIRMASI UPLOAD
     ═══════════════════════════════════════════════════════ --}}
<div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(15, 23, 42, 0.6); z-index: 9999; justify-content: center; align-items: center; padding: 20px; backdrop-filter: blur(4px);">
    <div style="background: white; padding: 28px 30px; border-radius: 16px; max-width: 400px; width: 100%; text-align: center; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.3); border: 1px solid #e2e8f0; transform: scale(1); animation: popIn 0.3s ease;">
        <div style="margin-bottom: 16px;">
            <i class="bi bi-cloud-arrow-up" style="font-size: 42px; color: #13A847;"></i>
        </div>
        <h5 style="font-size: 16px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Konfirmasi Upload</h5>
        <p style="font-size: 13px; color: #475569; margin-bottom: 24px; line-height: 1.5;">
            Apakah Anda yakin ingin mengunggah berkas dukung ini? Pastikan file sudah benar.
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
/* ═══════════════════════════════════════════════════════
   PREVIEW FILE
   ═══════════════════════════════════════════════════════ */
function previewFile2(event) {
    let file = event.target.files[0];
    let previewContainer = document.getElementById('preview-container-2');
    previewContainer.innerHTML = "";

    if (file) {
        let fileURL = URL.createObjectURL(file);

        if (file.type === "application/pdf") {
            previewContainer.innerHTML = `
                <div style="margin-top: 10px; border: 1px solid #cbd5e1; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                    <div style="background: #f8fafc; padding: 8px 12px; font-size: 12px; font-weight: 600; color: #475569; border-bottom: 1px solid #cbd5e1;">
                        Preview File Baru: ${file.name}
                    </div>
                    <iframe src="${fileURL}" frameborder="0" width="100%" height="300px"></iframe>
                </div>
            `;
        } else {
            previewContainer.innerHTML = `
                <div style="margin-top: 10px; background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 8px; padding: 12px; color: #15803d; font-size: 13px; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                    <i class="bi bi-file-earmark-check" style="margin-right: 6px;"></i>
                    File dipilih: <strong>${file.name}</strong> (Preview hanya tersedia untuk PDF).
                </div>
            `;
        }
    }
}

/* ═══════════════════════════════════════════════════════
   MODAL KONFIRMASI
   ═══════════════════════════════════════════════════════ */
function openModal() {
    const fileInput = document.getElementById('cadangan2');
    const hasPreviousFile = {{ (isset($data->cadangan2) && $data->cadangan2 != '' && (file_exists(public_path('storage/' . $data->cadangan2)) || file_exists(public_path($data->cadangan2)))) ? 'true' : 'false' }};

    if (!hasPreviousFile && (!fileInput || fileInput.files.length === 0)) {
        alert('Silakan pilih berkas terlebih dahulu sebelum mengunggah!');
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
