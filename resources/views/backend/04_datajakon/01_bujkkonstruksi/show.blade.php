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

                                <!-- FORM UPDATE -->
                                <form id="formUpdateBerita" action="{{ route('update.beberitajakoncreateupdate', $data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    <div class="card-body p-4">
                                        <div class="row">

                                            <!-- KOLOM KIRI -->
                                            <div class="col-md-6 pe-md-4">

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="asosiasimasjaki">
                                                        <i class="bi bi-people" style="margin-right: 8px; color: #13A847;"></i> Nama Asosiasi
                                                    </label>
                                                    <!-- Input readonly biru navy -->
                                                    <input type="text" id="asosiasimasjaki" name="asosiasimasjaki" class="form-control"
                                                    value="{{ $data->asosiasimasjaki->namaasosiasi ?? 'Data Belum Di Update' }}"
                                                    readonly
                                                    style="background-color: #000080; color: white; border: 1px solid #000080; font-weight: 600;" />
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="namalengkap">
                                                        <i class="bi bi-person" style="margin-right: 8px; color: #13A847;"></i> Nama Lengkap
                                                    </label>
                                                    <input type="text" id="namalengkap" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" value="{{ old('namalengkap', $data->namalengkap) }}" />
                                                    @error('namalengkap')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="alamat">
                                                        <i class="bi bi-house-door" style="margin-right: 8px; color: #13A847;"></i> Alamat
                                                    </label>
                                                    <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $data->alamat) }}" />
                                                    @error('alamat')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="no_telepon">
                                                        <i class="bi bi-telephone" style="margin-right: 8px; color: #13A847;"></i> No Telepon
                                                    </label>
                                                    <input type="text" id="no_telepon" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" value="{{ old('no_telepon', $data->no_telepon) }}" />
                                                    @error('no_telepon')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="email">
                                                        <i class="bi bi-envelope" style="margin-right: 8px; color: #13A847;"></i> Email
                                                    </label>
                                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $data->email) }}" />
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="nomorindukberusaha">
                                                        <i class="bi bi-file-earmark" style="margin-right: 8px; color: #13A847;"></i> Nomor Induk Berusaha
                                                    </label>
                                                    <input type="text" id="nomorindukberusaha" name="nomorindukberusaha" class="form-control @error('nomorindukberusaha') is-invalid @enderror" value="{{ old('nomorindukberusaha', $data->nomorindukberusaha) }}" />
                                                    @error('nomorindukberusaha')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <!-- KOLOM KANAN -->
                                            <div class="col-md-6 ps-md-4" style="border-left: 1px dashed #e2e8f0;">

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="pju">
                                                        <i class="bi bi-lightbulb" style="margin-right: 8px; color: #13A847;"></i> PJU
                                                    </label>
                                                    <input type="text" id="pju" name="pju" class="form-control @error('pju') is-invalid @enderror" value="{{ old('pju', $data->pju) }}" />
                                                    @error('pju')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="no_akte">
                                                        <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: #13A847;"></i> No Akte
                                                    </label>
                                                    <input type="text" id="no_akte" name="no_akte" class="form-control @error('no_akte') is-invalid @enderror" value="{{ old('no_akte', $data->no_akte) }}" />
                                                    @error('no_akte')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="tanggal">
                                                        <i class="bi bi-calendar" style="margin-right: 8px; color: #13A847;"></i> Tanggal
                                                    </label>
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $data->tanggal) }}" />
                                                    @error('tanggal')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="nama_notaris">
                                                        <i class="bi bi-person-check" style="margin-right: 8px; color: #13A847;"></i> Nama Notaris
                                                    </label>
                                                    <input type="text" id="nama_notaris" name="nama_notaris" class="form-control @error('nama_notaris') is-invalid @enderror" value="{{ old('nama_notaris', $data->nama_notaris) }}" />
                                                    @error('nama_notaris')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label-modern" for="no_pengesahan">
                                                        <i class="bi bi-file-earmark-check" style="margin-right: 8px; color: #13A847;"></i> No Pengesahan
                                                    </label>
                                                    <input type="text" id="no_pengesahan" name="no_pengesahan" class="form-control @error('no_pengesahan') is-invalid @enderror" value="{{ old('no_pengesahan', $data->no_pengesahan) }}" />
                                                    @error('no_pengesahan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- FOOTER: Tombol Aksi di Kanan Bawah -->
                                    <div class="form-footer">
                                        <a href="/bebujkkonstruksiblora" class="button-modern button-xl" style="margin-right: 10px;">
                                            <i class="bi bi-arrow-left" style="margin-right: 8px;"></i> Kembali
                                        </a>

                                        {{-- <button type="button" onclick="openModal()" class="button-baru button-xl" style="padding: 12px 24px; font-size: 14px;">
                                            <i class="bi bi-save" style="margin-right:8px;"></i> Simpan Perubahan
                                        </button> --}}
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
            <h4 style="font-size: 1.2rem; font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Konfirmasi Update</h4>
            <p style="font-size: 0.95rem; color: #4a5a72; margin-bottom: 25px;">
                Apakah Anda yakin data yang diubah sudah benar?
            </p>

            <div style="display: flex; justify-content: center; gap: 12px;">
                <button id="confirmSubmitBtn" onclick="submitForm()" class="button-baru button-xl" style="width: 120px; justify-content: center; background: #13A847; color: white; border: none;">
                    <i class="bi bi-check2-circle" style="margin-right: 5px;"></i> Ya, Update
                </button>

                <button type="button" onclick="closeModal()" class="button-merah button-xl" style="width: 120px; justify-content: center; border: none;">
                    <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Batal
                </button>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            const modal = document.getElementById("confirmModal");
            if (modal) modal.style.display = "flex";
        }

        function closeModal() {
            const modal = document.getElementById("confirmModal");
            if (modal) modal.style.display = "none";
        }

        function submitForm() {
            // Menggunakan ID form spesifik agar aman
            document.getElementById('formUpdateBerita').submit();
        }
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')
