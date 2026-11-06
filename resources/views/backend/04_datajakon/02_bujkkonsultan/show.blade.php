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

                                <!-- BODY: TAMPILAN DATA (READ-ONLY) -->
                                <div class="card-body p-4">
                                    <div class="row">

                                        <!-- KOLOM KIRI -->
                                        <div class="col-md-6 pe-md-4">

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="asosiasimasjaki">
                                                    <i class="bi bi-people" style="margin-right: 8px; color: #13A847;"></i> Nama Asosiasi
                                                </label>
                                                <input type="text" id="asosiasimasjaki" class="form-control"
                                                value="{{ $data->asosiasimasjaki->namaasosiasi ?? 'Data Belum Di Update' }}"
                                                readonly
                                                style="background-color: #000080; color: white; border: 1px solid #000080; font-weight: 600;" />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="namalengkap">
                                                    <i class="bi bi-person" style="margin-right: 8px; color: #13A847;"></i> Nama Lengkap
                                                </label>
                                                <input type="text" id="namalengkap" class="form-control" value="{{ $data->namalengkap }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="alamat">
                                                    <i class="bi bi-house-door" style="margin-right: 8px; color: #13A847;"></i> Alamat
                                                </label>
                                                <input type="text" id="alamat" class="form-control" value="{{ $data->alamat }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="no_telepon">
                                                    <i class="bi bi-telephone" style="margin-right: 8px; color: #13A847;"></i> No Telepon
                                                </label>
                                                <input type="text" id="no_telepon" class="form-control" value="{{ $data->no_telepon }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="email">
                                                    <i class="bi bi-envelope" style="margin-right: 8px; color: #13A847;"></i> Email
                                                </label>
                                                <input type="email" id="email" class="form-control" value="{{ $data->email }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="nomorindukberusaha">
                                                    <i class="bi bi-file-earmark" style="margin-right: 8px; color: #13A847;"></i> Nomor Induk Berusaha
                                                </label>
                                                <input type="text" id="nomorindukberusaha" class="form-control" value="{{ $data->nomorindukberusaha }}" readonly />
                                            </div>

                                        </div>

                                        <!-- KOLOM KANAN -->
                                        <div class="col-md-6 ps-md-4" style="border-left: 1px dashed #e2e8f0;">

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="pju">
                                                    <i class="bi bi-lightbulb" style="margin-right: 8px; color: #13A847;"></i> PJU
                                                </label>
                                                <input type="text" id="pju" class="form-control" value="{{ $data->pju }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="no_akte">
                                                    <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: #13A847;"></i> No Akte
                                                </label>
                                                <input type="text" id="no_akte" class="form-control" value="{{ $data->no_akte }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="tanggal">
                                                    <i class="bi bi-calendar" style="margin-right: 8px; color: #13A847;"></i> Tanggal
                                                </label>
                                                <input type="date" id="tanggal" class="form-control" value="{{ $data->tanggal }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="nama_notaris">
                                                    <i class="bi bi-person-check" style="margin-right: 8px; color: #13A847;"></i> Nama Notaris
                                                </label>
                                                <input type="text" id="nama_notaris" class="form-control" value="{{ $data->nama_notaris }}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label-modern" for="no_pengesahan">
                                                    <i class="bi bi-file-earmark-check" style="margin-right: 8px; color: #13A847;"></i> No Pengesahan
                                                </label>
                                                <input type="text" id="no_pengesahan" class="form-control" value="{{ $data->no_pengesahan }}" readonly />
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- FOOTER: Tombol Kembali saja -->
                                <div class="form-footer">
                                    <a href="/bebujkkonsultanblora" class="button-modern button-xl">
                                        <i class="bi bi-arrow-left" style="margin-right: 8px;"></i> Kembali
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </section>
        </main>
    </div>

    @include('backend.00_administrator.00_baganterpisah.02_footer')