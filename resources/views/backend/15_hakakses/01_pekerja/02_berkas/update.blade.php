@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ══════════════════════════════════════════════════════════
   BACKGROUND 3D PATTERN & FLOATING CARD
   ══════════════════════════════════════════════════════════ */
.bg-3d-pattern {
    background-color: #f4f7f6;
    background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
    background-size: 20px 20px;
    min-height: 100vh;
    padding-top: 20px;
    padding-bottom: 40px;
}

.card-3d {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 10px 25px -5px rgba(19, 168, 71, 0.15),
                0 20px 40px -10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    margin-bottom: 30px;
}
.card-3d:hover {
    box-shadow: 0 15px 35px -5px rgba(19, 168, 71, 0.25),
                0 25px 50px -12px rgba(0, 0, 0, 0.15);
}
body.modal-open .card-3d,
body.modal-open .card-3d:hover {
    transform: none !important;
}

.card-header-custom {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
    border-radius: 20px 20px 0 0 !important;
}
.card-3d > .card-body:last-child,
.card-3d > form:last-child {
    border-radius: 0 0 20px 20px;
}

@media (max-width: 768px) {
    .card-header-custom { padding: 16px 18px !important; }
    .card-3d { border-radius: 16px; margin-bottom: 20px; }
}

/* ══════════════════════════════════════════════════════════
   TIPOGRAFI GLOBAL
   ══════════════════════════════════════════════════════════ */
body, .app-wrapper, .card-3d {
    font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
    line-height: 1.55;
    color: #1a2b4a;
}

.form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 8px;
    display: block;
}
.form-label-modern i {
    color: #13A847;
    margin-right: 6px;
}
.form-control {
    font-size: 13px;
    line-height: 1.55;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 15px;
    background: #f8fafc;
}
.form-control:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.form-text, small.text-muted {
    font-size: 12px;
    color: #64748b;
}

/* ── Preview box ── */
.preview-box {
    margin-top: 10px;
    padding: 12px;
    background: #f8fafc;
    border: 1px dashed #cbd5e1;
    border-radius: 10px;
    text-align: center;
}
.preview-box img,
.preview-box iframe {
    max-width: 100%;
    max-height: 300px;
    border-radius: 8px;
    border: 1px solid #e5e7eb;
    background: #fff;
}
.preview-box iframe { width: 100%; height: 300px; }
.preview-empty { color: #dc2626; font-weight: 600; font-size: 13px; margin: 0; }

/* ── Tombol ── */
.button-modern button-md,
.button-baru button-md,
.button-berkas button-md,
.button-merah {
    font-size: 13px !important;
    line-height: 1.4;
}
.card-header .button-modern button-md,
.card-header .button-baru button-md,
.card-header .button-berkas button-md { margin-right: 8px; }

/* ── Section title (Upload Perbaikan Berkas) ── */
.section-title {
    text-align: center;
    margin: 24px 0;
}
.section-title .dashed-line {
    border-top: 2px dashed #03157e;
    width: 60%;
    margin: 0 auto;
}
.section-title h5 {
    color: #03157e;
    font-weight: 800;
    margin: 10px 0;
    font-size: 15px;
}

/* ── Modal seragam ── */
.modal-title { font-size: 15px; font-weight: 700; }
.modal-body  { font-size: 13px; }
.modal-body p { font-size: 13px; margin: 0; }

.modal-confirm-update .modal-content {
    border-radius: 16px;
    border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}
.modal-confirm-update .modal-header {
    background: #f8fafc;
    border-bottom: 1px solid #eaeaea;
    padding: 18px 24px;
}
.modal-confirm-update .modal-body {
    padding: 30px 24px;
    text-align: center;
}
.modal-confirm-update .modal-footer {
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
    padding: 16px 24px;
    justify-content: center;
    gap: 12px;
}
.confirm-icon {
    width: 80px; height: 80px;
    background: #dbeafe;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px;
}
.confirm-icon i { font-size: 2.5rem; color: #3b82f6; }
.confirm-title {
    font-size: 16px;
    font-weight: 700;
    color: #1a2b4a;
    margin-bottom: 8px;
}
.confirm-text {
    font-size: 13px;
    color: #4a5a72;
    margin: 0;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .button-modern button-md, .button-baru button-md, .button-berkas button-md, .button-merah { font-size: 12px !important; }
    .section-title h5 { font-size: 14px; }
}
</style>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

        @include('backend.00_administrator.00_baganterpisah.04_navbar')
        @include('button')
        @include('backend.00_administrator.00_baganterpisah.03_sidebar')

        <main class="app-main">
            <section class="bg-3d-pattern">

                <div class="app-content-header">
                    <div class="container-fluid">
                        <div class="row">
                            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                            @include('backend.00_administrator.00_baganterpisah.11_alert')
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row" style="margin-right:10px; margin-left:10px;">
                        <div class="card card-3d mb-4">
                            <div class="card-header card-header-custom">
                                @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                                {{-- Tombol Kembali --}}
                                <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                                    <a href="{{ url()->previous() }}">
                                        <button type="button" class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                            </svg>
                                            Kembali
                                        </button>
                                    </a>
                                </div>

                                <hr>

                                {{-- Section Title --}}
                                <div class="section-title">
                                    <div class="dashed-line"></div>
                                    <h5>
                                        <i class="bi bi-upload" style="margin-right: 6px;"></i>
                                        Upload Perbaikan Berkas Saudara !
                                    </h5>
                                    <div class="dashed-line"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <form action="{{ route('berkasperbaikandatapeserta', $data->id) }}" method="POST" enctype="multipart/form-data" id="formPerbaikanData">
                                    @csrf
                                    @method('POST')

                                    <div class="card-body">
                                        <div class="row">

                                            {{-- ════════════════ LEFT COLUMN ════════════════ --}}
                                            <div class="col-md-6">

                                                {{-- 1. SKK Saudara --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="skkanda">
                                                        <i class="bi bi-file-earmark-text"></i>
                                                        Upload Screenshot SKK Saudara | .pdf maksimal 15 MB
                                                    </label>

                                                    @if($data->skkanda)
                                                        @php
                                                            $relativePath = $data->skkanda;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box" id="old-preview">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview SKK Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File Tidak Ditemukan !</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="skkanda" name="skkanda"
                                                           class="form-control mt-2 @error('skkanda') is-invalid @enderror"
                                                           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('skkanda')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- 2. KTP --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="uploadktp">
                                                        <i class="bi bi-file-earmark-person"></i>
                                                        Upload KTP | .pdf, .jpg, .jpeg, .png | Max 15 MB
                                                    </label>

                                                    @if($data->uploadktp)
                                                        @php
                                                            $relativePath = $data->uploadktp;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview KTP Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File KTP tidak ditemukan di server.</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview-ktp" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="uploadktp" name="uploadktp"
                                                           class="form-control mt-2 @error('uploadktp') is-invalid @enderror"
                                                           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('uploadktp')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- 3. Pas Foto --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="uploadfoto">
                                                        <i class="bi bi-file-earmark-person"></i>
                                                        Upload Pas Foto 4X6 Background Merah | jpg, jpeg, png | Max 15 MB
                                                    </label>

                                                    @if($data->uploadfoto)
                                                        @php
                                                            $relativePath = $data->uploadfoto;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview Foto Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File lama tidak ditemukan di server.</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview-foto" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="uploadfoto" name="uploadfoto"
                                                           class="form-control mt-2 @error('uploadfoto') is-invalid @enderror"
                                                           accept=".jpg,.jpeg,.png,.gif,.webp,.pdf">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('uploadfoto')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- 4. Ijazah --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="uploadijazah">
                                                        <i class="bi bi-file-earmark-person"></i>
                                                        Upload Ijazah | .pdf | Max 15 MB
                                                    </label>

                                                    @if($data->uploadijazah)
                                                        @php
                                                            $relativePath = $data->uploadijazah;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview Ijazah Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File lama tidak ditemukan di server.</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview-ijazah" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="uploadijazah" name="uploadijazah"
                                                           class="form-control mt-2 @error('uploadijazah') is-invalid @enderror"
                                                           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('uploadijazah')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                            {{-- ════════════════ RIGHT COLUMN ════════════════ --}}
                                            <div class="col-md-6">

                                                {{-- 5. Pengalaman --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="uploadpengalaman">
                                                        <i class="bi bi-file-earmark-text"></i>
                                                        Upload Pengalaman | .pdf | Max 15 MB
                                                    </label>

                                                    @if($data->uploadpengalaman)
                                                        @php
                                                            $relativePath = $data->uploadpengalaman;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview Pengalaman Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File lama tidak ditemukan di server.</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview-pengalaman" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="uploadpengalaman" name="uploadpengalaman"
                                                           class="form-control mt-2 @error('uploadpengalaman') is-invalid @enderror"
                                                           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('uploadpengalaman')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- 6. Kebenaran Data --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="uploadkebenarandata">
                                                        <i class="bi bi-file-earmark-text"></i>
                                                        Upload Kebenaran Data | .pdf | Max 15 MB
                                                    </label>

                                                    @if($data->uploadkebenarandata)
                                                        @php
                                                            $relativePath = $data->uploadkebenarandata;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview Kebenaran Data Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File lama tidak ditemukan di server.</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview-kebenarandata" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="uploadkebenarandata" name="uploadkebenarandata"
                                                           class="form-control mt-2 @error('uploadkebenarandata') is-invalid @enderror"
                                                           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('uploadkebenarandata')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- 7. NPWP --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="uploadnpwp">
                                                        <i class="bi bi-file-earmark-text"></i>
                                                        Upload NPWP | .pdf | Max 15 MB
                                                    </label>

                                                    @if($data->uploadnpwp)
                                                        @php
                                                            $relativePath = $data->uploadnpwp;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview NPWP Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File lama tidak ditemukan di server.</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview-npwp" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="uploadnpwp" name="uploadnpwp"
                                                           class="form-control mt-2 @error('uploadnpwp') is-invalid @enderror"
                                                           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('uploadnpwp')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- 8. Riwayat Hidup --}}
                                                <div class="mb-4">
                                                    <label class="form-label-modern" for="uploaddaftarriwayathidup">
                                                        <i class="bi bi-file-earmark-text"></i>
                                                        Upload Daftar Riwayat Hidup | .pdf | Max 15 MB
                                                    </label>

                                                    @if($data->uploaddaftarriwayathidup)
                                                        @php
                                                            $relativePath = $data->uploaddaftarriwayathidup;
                                                            $fullPath = public_path($relativePath);
                                                            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
                                                        @endphp
                                                        <div class="preview-box">
                                                            @if(file_exists($fullPath))
                                                                @if(in_array($ext, ['jpg','jpeg','png','gif','webp']))
                                                                    <img src="{{ asset($relativePath) }}" alt="Preview Lama">
                                                                @elseif($ext === 'pdf')
                                                                    <iframe src="{{ asset($relativePath) }}" frameborder="0"></iframe>
                                                                @else
                                                                    <a href="{{ asset($relativePath) }}" target="_blank" class="button-berkas button-md">
                                                                        <i class="bi bi-download"></i> Download File Lama
                                                                    </a>
                                                                @endif
                                                            @else
                                                                <p class="preview-empty">File lama tidak ditemukan di server.</p>
                                                            @endif
                                                        </div>
                                                    @endif

                                                    <div id="new-preview-riwayathidup" class="preview-box" style="display:none;"></div>

                                                    <input type="file" id="uploaddaftarriwayathidup" name="uploaddaftarriwayathidup"
                                                           class="form-control mt-2 @error('uploaddaftarriwayathidup') is-invalid @enderror"
                                                           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
                                                    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>
                                                    @error('uploaddaftarriwayathidup')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Hidden fields --}}
                                                <input type="hidden" name="verifikasipu" value="">
                                                <input type="hidden" name="validasi_ktp" value="">
                                                <input type="hidden" name="validasi_foto" value="">
                                                <input type="hidden" name="validasi_ijazah" value="">
                                                <input type="hidden" name="validasi_pengalaman" value="">
                                                <input type="hidden" name="validasi_kebenarandata" value="">
                                                <input type="hidden" name="validasi_npwp" value="">
                                                <input type="hidden" name="validasi_daftarriwayathidup" value="">

                                            </div>
                                        </div>
                                    </div>

                                    {{-- Submit button --}}
                                    <div style="display: flex; justify-content: flex-end; padding: 0 20px 20px;">
                                        <button type="button" class="button-berkas button-md" data-bs-toggle="modal" data-bs-target="#modalPerbaikanData">
                                            <i class="bi bi-pencil" style="font-size: 16px; margin-right: 6px;"></i>
                                            <span>Perbaikan Data ?</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════ --}}
    {{-- MODAL KONFIRMASI — di luar app-wrapper (Bootstrap seragam)      --}}
    {{-- ═══════════════════════════════════════════════════════════════ --}}
    <div class="modal fade modal-confirm-update" id="modalPerbaikanData" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-pencil-square" style="margin-right:8px; color:#3b82f6;"></i>
                        Konfirmasi Perbaikan Data
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="confirm-icon">
                        <i class="bi bi-question-circle"></i>
                    </div>
                    <h5 class="confirm-title">Yakin Ingin Memperbarui Data?</h5>
                    <p class="confirm-text">
                        Pastikan semua berkas yang diunggah sudah benar.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                    </button>
                    <button type="button" class="button-baru button-md" onclick="submitFormPerbaikan()">
                        <i class="bi bi-check-lg" style="margin-right:4px;"></i> Ya, Update
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function submitFormPerbaikan() {
        document.getElementById('formPerbaikanData').submit();
    }

    // ── Preview file baru untuk semua input ──
    document.addEventListener('DOMContentLoaded', function () {
        const fileInputs = [
            { id: 'skkanda',                 preview: 'new-preview' },
            { id: 'uploadktp',               preview: 'new-preview-ktp' },
            { id: 'uploadfoto',              preview: 'new-preview-foto' },
            { id: 'uploadijazah',            preview: 'new-preview-ijazah' },
            { id: 'uploadpengalaman',        preview: 'new-preview-pengalaman' },
            { id: 'uploadkebenarandata',     preview: 'new-preview-kebenarandata' },
            { id: 'uploadnpwp',              preview: 'new-preview-npwp' },
            { id: 'uploaddaftarriwayathidup', preview: 'new-preview-riwayathidup' },
        ];

        fileInputs.forEach(function (item) {
            const input = document.getElementById(item.id);
            const preview = document.getElementById(item.preview);
            if (!input || !preview) return;

            input.addEventListener('change', function (e) {
                const file = e.target.files[0];
                preview.innerHTML = '';
                if (!file) {
                    preview.style.display = 'none';
                    return;
                }
                const ext = file.name.split('.').pop().toLowerCase();
                const url = URL.createObjectURL(file);

                if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
                    preview.innerHTML = `<img src="${url}" alt="Preview Baru">`;
                } else if (ext === 'pdf') {
                    preview.innerHTML = `<iframe src="${url}" frameborder="0"></iframe>`;
                } else {
                    preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
                }
                preview.style.display = 'block';
            });
        });
    });
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')