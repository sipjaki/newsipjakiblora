@include('backend.00_administrator.00_baganterpisah.01_header')

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

        @include('backend.00_administrator.00_baganterpisah.04_navbar')
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
                    <div class="row" style="margin-right: 10px; margin-left: 10px;">

                        <div class="col-md-12">
                            <div class="card-3d">

                                <!-- HEADER: Judul Memanjang Full Kiri-Kanan -->
                                <div class="header-full-width">
                                    @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                                </div>

                                <!-- FORM (Tambahkan id="formBujk" agar JS tidak salah target) -->
                                <form id="formBujk" action="{{ route('create.bebujkkonstruksicreatenew') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body p-4">
                                        <div class="row">

                                            <!-- KOLOM KIRI -->
                                            <div class="col-md-6 pe-md-4">

                                                <input type="hidden" name="user_id" value="{{ $user->id }}">

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="user_id_display">
                                                        <i class="bi bi-person" style="margin-right: 8px; color: #13A847;"></i> Administrator
                                                    </label>
                                                    <input type="text" id="user_id_display" class="form-control" value="{{ $user->name }}" disabled>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="asosiasimasjaki_id">
                                                        <i class="bi bi-people" style="margin-right: 8px; color: #13A847;"></i> Asosiasi Jasa Konstruksi
                                                    </label>
                                                    <select id="asosiasimasjaki_id" name="asosiasimasjaki_id" class="form-control @error('asosiasimasjaki_id') is-invalid @enderror">
                                                        <option value="" disabled selected>-- Pilih Asosiasi --</option>
                                                        @foreach($asosiasimasjaki as $asosiasi)
                                                            <option value="{{ $asosiasi->id }}" {{ old('asosiasimasjaki_id') == $asosiasi->id ? 'selected' : '' }}>
                                                                {{ $asosiasi->namaasosiasi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('asosiasimasjaki_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="namalengkap">
                                                        <i class="bi bi-building" style="margin-right: 8px; color: #13A847;"></i> Nama Badan Usaha
                                                    </label>
                                                    <input type="text" id="namalengkap" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" value="{{ old('namalengkap') }}" placeholder="Masukkan nama badan usaha" />
                                                    @error('namalengkap')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="alamat">
                                                        <i class="bi bi-house-door" style="margin-right: 8px; color: #13A847;"></i> Alamat
                                                    </label>
                                                    <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Masukkan alamat lengkap" />
                                                    @error('alamat')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="no_telepon">
                                                        <i class="bi bi-telephone" style="margin-right: 8px; color: #13A847;"></i> Nomor Telepon
                                                    </label>
                                                    <input type="number" id="no_telepon" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" value="{{ old('no_telepon') }}" placeholder="Contoh: 08123456789" />
                                                    @error('no_telepon')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="email">
                                                        <i class="bi bi-envelope" style="margin-right: 8px; color: #13A847;"></i> Email
                                                    </label>
                                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Contoh: email@domain.com" />
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="nomorindukberusaha">
                                                        <i class="bi bi-file-earmark" style="margin-right: 8px; color: #13A847;"></i> Nomor Induk Berusaha (NIB)
                                                    </label>
                                                    <input type="number" id="nomorindukberusaha" name="nomorindukberusaha" class="form-control @error('nomorindukberusaha') is-invalid @enderror" value="{{ old('nomorindukberusaha') }}" placeholder="Masukkan NIB" />
                                                    @error('nomorindukberusaha')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <!-- KOLOM KANAN -->
                                            <div class="col-md-6 ps-md-4" style="border-left: 1px dashed #e2e8f0;">

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="pju">
                                                        <i class="bi bi-lightbulb" style="margin-right: 8px; color: #13A847;"></i> Penanggung Jawab Umum
                                                    </label>
                                                    <input type="text" id="pju" name="pju" class="form-control @error('pju') is-invalid @enderror" value="{{ old('pju') }}" placeholder="Masukkan PJU" />
                                                    @error('pju')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="no_akte">
                                                        <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: #13A847;"></i> No Akte
                                                    </label>
                                                    <input type="text" id="no_akte" name="no_akte" class="form-control @error('no_akte') is-invalid @enderror" value="{{ old('no_akte') }}" placeholder="Masukkan nomor akte" />
                                                    @error('no_akte')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="tanggal">
                                                        <i class="bi bi-calendar" style="margin-right: 8px; color: #13A847;"></i> Tanggal
                                                    </label>
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" />
                                                    @error('tanggal')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="nama_notaris">
                                                        <i class="bi bi-person-check" style="margin-right: 8px; color: #13A847;"></i> Nama Notaris
                                                    </label>
                                                    <input type="text" id="nama_notaris" name="nama_notaris" class="form-control @error('nama_notaris') is-invalid @enderror" value="{{ old('nama_notaris') }}" placeholder="Masukkan nama notaris" />
                                                    @error('nama_notaris')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="no_pengesahan">
                                                        <i class="bi bi-file-earmark-check" style="margin-right: 8px; color: #13A847;"></i> No Pengesahan
                                                    </label>
                                                    <input type="text" id="no_pengesahan" name="no_pengesahan" class="form-control @error('no_pengesahan') is-invalid @enderror" value="{{ old('no_pengesahan') }}" placeholder="Masukkan nomor pengesahan" />
                                                    @error('no_pengesahan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="uploadberkas">
                                                        <i class="bi bi-file-earmark-pdf" style="margin-right: 8px; color: #13A847;"></i> Upload Berkas
                                                    </label>
                                                    <input type="file" id="uploadberkas" name="uploadberkas"
                                                        class="form-control @error('uploadberkas') is-invalid @enderror"
                                                        onchange="previewFile('uploadberkas', 'previewFoto')" accept="image/*,application/pdf" />

                                                    <div class="mt-3 preview-box">
                                                        <div id="previewContainer">
                                                            <img id="previewFoto" src="{{ old('uploadberkas') ? asset('03_datajakon/01_sertifikasi/' . old('uploadberkas')) : '' }}" style="display: none; max-width: 100%; max-height: 200px; border-radius: 8px; margin: 0 auto;" />
                                                            <canvas id="pdfPreview" style="display: none; max-width: 100%; max-height: 200px; border-radius: 8px; margin: 0 auto;"></canvas>
                                                            <div id="previewPlaceholder" style="color: #94a3b8; font-size: 0.85rem;">
                                                                <i class="bi bi-image" style="font-size: 2rem; display: block; margin-bottom: 5px;"></i>
                                                                Pratinjau file akan muncul di sini
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @error('uploadberkas')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- FOOTER: Tombol Aksi di Kanan Bawah -->
                                    <div class="form-footer">
                                        <a href="/bebujkkonstruksiblora" class="button-modern button-md" style="margin-right: 10px;">
                                            <i class="bi bi-arrow-left" style="margin-right: 8px;"></i> Kembali
                                        </a>

                                        <button type="button" onclick="openModal()" class="button-baru button-md" style="padding: 12px 24px; font-size: 14px;">
                                            <i class="bi bi-save" style="margin-right:8px;"></i> Simpan Data
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

    <!-- MODAL KONFIRMASI -->
    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1000; justify-content: center; align-items: center; backdrop-filter: blur(4px);">
        <div style="background: white; padding: 30px; border-radius: 20px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.2);">
            <div style="font-size: 3rem; color: #13A847; margin-bottom: 15px;">
                <i class="bi bi-shield-check"></i>
            </div>
            <h4 style="font-size: 1.2rem; font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Konfirmasi Simpan</h4>
            <p style="font-size: 0.95rem; color: #4a5a72; margin-bottom: 25px;">
                Apakah Anda yakin data yang dimasukkan sudah benar?
            </p>

            <div style="display: flex; justify-content: center; gap: 12px;">
                <button id="confirmSubmitBtn" onclick="submitForm()" class="button-baru button-md" style="width: 120px; justify-content: center; background: #13A847; color: white; border: none;">
                    <i class="bi bi-check2-circle" style="margin-right: 5px;"></i> Ya, Simpan
                </button>

                <button type="button" onclick="closeModal()" class="button-merah button-md" style="width: 120px; justify-content: center; border: none;">
                    <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Batal
                </button>
            </div>
        </div>
    </div>

    <!-- SCRIPT PDF PREVIEW & MODAL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script>
        function previewFile(inputId, previewId) {
            var file = document.getElementById(inputId).files[0];
            var imgPreview = document.getElementById(previewId);
            var pdfPreview = document.getElementById('pdfPreview');
            var placeholder = document.getElementById('previewPlaceholder');

            imgPreview.style.display = 'none';
            pdfPreview.style.display = 'none';
            placeholder.style.display = 'block';

            if (file) {
                placeholder.style.display = 'none';
                var reader = new FileReader();

                if (file.type === 'application/pdf') {
                    reader.onload = function(e) {
                        var pdfData = e.target.result;
                        pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdf) {
                            pdf.getPage(1).then(function(page) {
                                var canvas = document.getElementById('pdfPreview');
                                var context = canvas.getContext('2d');
                                var viewport = page.getViewport({scale: 1.5});
                                canvas.height = viewport.height;
                                canvas.width = viewport.width;
                                page.render({canvasContext: context, viewport: viewport}).promise.then(function() {
                                    pdfPreview.style.display = 'block';
                                });
                            });
                        });
                    };
                    reader.readAsArrayBuffer(file);
                } else {
                    reader.onloadend = function() {
                        imgPreview.src = reader.result;
                        imgPreview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            }
        }

        function openModal() {
            const modal = document.getElementById("confirmModal");
            if (modal) modal.style.display = "flex";
        }

        function closeModal() {
            const modal = document.getElementById("confirmModal");
            if (modal) modal.style.display = "none";
        }

        function submitForm() {
            // HANYA SUBMIT FORM DENGAN ID "formBujk" (Form Utama)
            document.getElementById('formBujk').submit();
        }
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')
