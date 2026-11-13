@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ==========================================
   STYLING 3D BACKGROUND & TABLE PREMIUM
   ========================================== */
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
    box-shadow: 0 10px 25px -5px rgba(19, 168, 71, 0.15), 0 20px 40px -10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    margin-bottom: 30px;
}

.card-3d:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px -5px rgba(19, 168, 71, 0.25), 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}

.card-header-custom {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
}

.header-action-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px dashed #e2e8f0;
}

.info-badan-usaha {
    display: inline-flex;
    align-items: center;
    background: #ecfdf5;
    color: #065f46;
    padding: 10px 20px;
    border-radius: 10px;
    border: 1px solid #a7f3d0;
    font-size: 0.95rem;
    font-weight: 700;
    margin: 0;
}
.info-badan-usaha i {
    color: #13A847;
    margin-right: 8px;
    font-size: 1.2rem;
}

.header-buttons {
    display: flex;
    gap: 10px;
    align-items: center;
}

@media (max-width: 768px) {
    .header-action-row { flex-direction: column; align-items: stretch; }
    .header-buttons { width: 100%; justify-content: flex-end; }
}

.table-responsive-custom {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    width: 100%;
    border-radius: 0 0 20px 20px;
}

.table-custom-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.85rem;
    min-width: 1600px;
    white-space: nowrap;
}

.table-custom-modern thead th {
    background: #f8fafc !important;
    color: #4a5a72 !important;
    font-weight: 700;
    padding: 15px 12px !important;
    text-align: left;
    border-bottom: 2px solid #e2e8f0 !important;
}

.table-custom-modern tbody td {
    padding: 12px !important;
    color: #1a2b4a;
    border-bottom: 1px solid #f1f5f9 !important;
    vertical-align: middle;
}

.table-custom-modern tbody tr:hover {
    background-color: #f8fafc !important;
}

/* Styling Modal Form */
.modal-custom .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
.modal-custom .modal-header {
    background: #f8fafc;
    border-bottom: 1px solid #eaeaea;
    border-radius: 20px 20px 0 0;
    padding: 20px 25px;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    text-align: left !important;
}
.modal-custom .modal-header .modal-title {
    text-align: left !important;
    margin: 0 !important;
    display: flex;
    align-items: center;
}
.modal-custom .modal-body {
    padding: 25px;
}
.modal-custom .modal-footer {
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
    border-radius: 0 0 20px 20px;
    padding: 15px 25px;
}

.form-label-modern {
    font-size: 0.85rem;
    font-weight: 600;
    color: #4a5a72;
    margin-bottom: 8px;
    display: block;
}
.form-control {
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 15px;
    font-size: 0.9rem;
    background-color: #f8fafc;
}
.form-control:focus {
    border-color: #13A847;
    background-color: #ffffff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
}

/* ==========================================
   MODAL UKURAN 75% (CUSTOM)
   ========================================== */
.modal-dialog-75 {
    max-width: 75%;
    width: 75%;
    margin: 1.75rem auto;
}

@media (max-width: 991.98px) {
    .modal-dialog-75 {
        max-width: 95%;
        width: 95%;
    }
}
</style>

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
                            <div class="card card-3d mb-4">
                                <div class="card-header card-header-custom">
                                    <div class="header-title">
                                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                                    </div>
                                    <div class="header-action-row">
                                        <div class="info-badan-usaha">
                                            <i class="bi bi-building"></i> Badan Usaha : {{ $data->namalengkap }}
                                        </div>
                                        <div class="header-buttons">
                                            <a href="/bebujkkonsultanblora" class="button-modern button-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                                </svg>
                                                Kembali
                                            </a>
                                            <button type="button" class="button-baru button-md" data-bs-toggle="modal" data-bs-target="#modalTambahKlasifikasi">
                                                <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                                Tambah Klasifikasi
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div class="table-responsive-custom">
                                        <table class="zebra-table table-striped table-custom-modern">
                                            <thead>
                                                <tr>
                                                    <th style="width: 75px; text-align:center;">No</th>
                                                    <th style="width: 250px; text-align:center;">Nama Pengurus</th>
                                                    <th style="width: 350px; text-align:center;">Sub Klasifikasi Layanan</th>
                                                    <th style="width: 250px; text-align:center;">Kode</th>
                                                    <th style="width: 250px; text-align:center;">Kualifikasi</th>
                                                    <th style="width: 400px; text-align:center;">Penerbit</th>
                                                    <th style="width: 300px; text-align:center;">Tanggal Terbit</th>
                                                    <th style="width: 300px; text-align:center;">Masa Berlaku</th>
                                                    <th style="width: 350px; text-align:center;">Nama PSJK</th>
                                                    <th style="width: 350px; text-align:center;">Sub Klasifikasi Badan Usaha</th>
                                                    <th style="width: 300px; text-align:center;">Status</th>
                                                    <th style="width: 200px; text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($subdata as $item )
                                                <tr class="align-middle">
                                                    <td style="text-align: center;">{{ $loop->iteration }}</td>
                                                    <td style="text-align: left;">{{ $item->nama_pengurus }}</td>
                                                    <td style="text-align:left;">
                                                        @php
                                                            $text  = trim($item->sub_klasifikasi_layanan ?? '');
                                                            $words = preg_split('/\s+/', $text);
                                                        @endphp
                                                        @foreach(array_chunk($words, 3) as $chunk)
                                                            {{ implode(' ', $chunk) }}<br>
                                                        @endforeach
                                                    </td>
                                                    <td style="text-align: center;">{{ $item->kode }}</td>
                                                    <td style="text-align: center;">{{ $item->kualifikasi }}</td>
                                                    <td style="text-align: left;">{{ $item->penerbit }}</td>
                                                    <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggal_terbit)->translatedFormat('d F Y') }}</td>
                                                    <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->masa_berlaku)->translatedFormat('d F Y') }}</td>
                                                    <td style="text-align: left;">{{ $item->nama_psjk }}</td>
                                                    <td style="text-align: left;">{{ $item->sub_kualifikasi_bu }}</td>
                                                    <td style="text-align: center;" class="masa-berlaku" data-masaberlaku="{{ $item->masa_berlaku ?? '' }}">
                                                        <button class="btn-masa-berlaku d-flex align-items-center justify-content-center" style="font-size: 11px; padding: 6px 12px; border-radius: 6px; border: none; font-weight: 700; color: white;">
                                                            <i class="bi bi-calendar3" style="margin-right: 5px;"></i> Status
                                                        </button>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <div style="display: flex; gap: 5px; justify-content: center;">
                                                            <button type="button" class="button-berkas" title="Edit"
                                                                onclick="openEditModal(
                                                                    {{ $item->id }},
                                                                    '{{ addslashes($item->nama_pengurus) }}',
                                                                    '{{ addslashes($item->sub_klasifikasi_layanan) }}',
                                                                    '{{ addslashes($item->kode) }}',
                                                                    '{{ addslashes($item->kualifikasi) }}',
                                                                    '{{ addslashes($item->penerbit) }}',
                                                                    '{{ $item->tanggal_terbit }}',
                                                                    '{{ $item->masa_berlaku }}',
                                                                    '{{ addslashes($item->nama_psjk) }}',
                                                                    '{{ addslashes($item->sub_kualifikasi_bu) }}'
                                                                )" style="padding: 6px 10px; font-size: 12px; border: none; cursor: pointer;">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>

                                                            <a href="javascript:void(0)" class="button-merah" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                                data-id="{{ $item->id }}" onclick="setDeleteUrl(this)" style="padding: 6px 10px; font-size: 12px;">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                           @empty
                                                <tr class="empty-row">
                                                    <td colspan="12">
                                                        <div class="empty-state">
                                                            <div class="empty-icon">
                                                                <i class="bi bi-inbox"></i>
                                                            </div>
                                                            <h5 class="empty-title">Data Tidak Ditemukan !</h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- ========================================== -->
    <!-- MODAL TAMBAH KLASIFIKASI                    -->
    <!-- ========================================== -->
    <div class="modal fade modal-custom" id="modalTambahKlasifikasi" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel" style="font-weight: 700;">
                        <i class="bi bi-plus-circle" style="margin-right: 8px; color: #13A847;"></i> Tambah Klasifikasi
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('bebujkkonsultan.createklasifikasicreate') }}" method="POST" id="formTambahKlasifikasi">
                    @csrf
                    <input type="hidden" name="bujkkonsultan_id" value="{{ $data->id }}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label-modern" for="nama_pengurus">
                                        <i class="bi bi-person" style="margin-right:8px; color:#13A847;"></i> Nama Pengurus
                                    </label>
                                    <input type="text" id="nama_pengurus" name="nama_pengurus" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="nama_psjk">
                                        <i class="bi bi-person-badge" style="margin-right:8px; color:#13A847;"></i> Nama PSJK
                                    </label>
                                    <input type="text" id="nama_psjk" name="nama_psjk" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="sub_klasifikasi_layanan">
                                        <i class="bi bi-clipboard-data" style="margin-right:8px; color:#13A847;"></i> Sub Klasifikasi Layanan
                                    </label>
                                    <input type="text" id="sub_klasifikasi_layanan" name="sub_klasifikasi_layanan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="kode">
                                        <i class="bi bi-upc" style="margin-right:8px; color:#13A847;"></i> Kode Sub Klasifikasi
                                    </label>
                                    <input type="text" id="kode" name="kode" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label-modern" for="kualifikasi">
                                        <i class="bi bi-award" style="margin-right:8px; color:#13A847;"></i> Kualifikasi
                                    </label>
                                    <select id="kualifikasi" name="kualifikasi" class="form-control">
                                        <option value="">-- Pilih Kualifikasi --</option>
                                        <option value="Kecil">Kecil</option>
                                        <option value="Menengah">Menengah</option>
                                        <option value="Besar">Besar</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="sub_kualifikasi_bu">
                                        <i class="bi bi-diagram-3" style="margin-right:8px; color:#13A847;"></i> Sub Kualifikasi Badan Usaha
                                    </label>
                                    <input type="text" id="sub_kualifikasi_bu" name="sub_kualifikasi_bu" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="penerbit">
                                        <i class="bi bi-file-earmark-text" style="margin-right:8px; color:#13A847;"></i> Penerbit
                                    </label>
                                    <input type="text" id="penerbit" name="penerbit" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label-modern" for="tanggal_terbit">
                                            <i class="bi bi-calendar-check" style="margin-right:8px; color:#13A847;"></i> Tanggal Terbit
                                        </label>
                                        <input type="date" id="tanggal_terbit" name="tanggal_terbit" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label-modern" for="masa_berlaku">
                                            <i class="bi bi-calendar-event" style="margin-right:8px; color:#13A847;"></i> Tanggal Berlaku
                                        </label>
                                        <input type="date" id="masa_berlaku" name="masa_berlaku" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button-modern button-md" data-bs-dismiss="modal"><i class="bi bi-x"></i>Batal</button>
                        <button type="submit" class="button-baru button-md"><i class="bi bi-save" style="margin-right: 5px;"></i> Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- MODAL EDIT KLASIFIKASI                      -->
    <!-- ========================================== -->
    <div class="modal fade modal-custom" id="modalEditKlasifikasi" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel" style="font-weight: 700;">
                        <i class="bi bi-pencil-square" style="margin-right: 8px; color: #f59e0b;"></i> Edit Klasifikasi
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" id="formEditKlasifikasi">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label-modern" for="edit_nama_pengurus">
                                        <i class="bi bi-person" style="margin-right:8px; color:#13A847;"></i> Nama Pengurus
                                    </label>
                                    <input type="text" id="edit_nama_pengurus" name="nama_pengurus" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="edit_nama_psjk">
                                        <i class="bi bi-person-badge" style="margin-right:8px; color:#13A847;"></i> Nama PSJK
                                    </label>
                                    <input type="text" id="edit_nama_psjk" name="nama_psjk" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="edit_sub_klasifikasi_layanan">
                                        <i class="bi bi-clipboard-data" style="margin-right:8px; color:#13A847;"></i> Sub Klasifikasi Layanan
                                    </label>
                                    <input type="text" id="edit_sub_klasifikasi_layanan" name="sub_klasifikasi_layanan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="edit_kode">
                                        <i class="bi bi-upc" style="margin-right:8px; color:#13A847;"></i> Kode Sub Klasifikasi
                                    </label>
                                    <input type="text" id="edit_kode" name="kode" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label-modern" for="edit_kualifikasi">
                                        <i class="bi bi-award" style="margin-right:8px; color:#13A847;"></i> Kualifikasi
                                    </label>
                                    <select id="edit_kualifikasi" name="kualifikasi" class="form-control">
                                        <option value="">-- Pilih Kualifikasi --</option>
                                        <option value="Kecil">Kecil</option>
                                        <option value="Menengah">Menengah</option>
                                        <option value="Besar">Besar</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="edit_sub_kualifikasi_bu">
                                        <i class="bi bi-diagram-3" style="margin-right:8px; color:#13A847;"></i> Sub Kualifikasi Badan Usaha
                                    </label>
                                    <input type="text" id="edit_sub_kualifikasi_bu" name="sub_kualifikasi_bu" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="edit_penerbit">
                                        <i class="bi bi-file-earmark-text" style="margin-right:8px; color:#13A847;"></i> Penerbit
                                    </label>
                                    <input type="text" id="edit_penerbit" name="penerbit" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label-modern" for="edit_tanggal_terbit">
                                            <i class="bi bi-calendar-check" style="margin-right:8px; color:#13A847;"></i> Tanggal Terbit
                                        </label>
                                        <input type="date" id="edit_tanggal_terbit" name="tanggal_terbit" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label-modern" for="edit_masa_berlaku">
                                            <i class="bi bi-calendar-event" style="margin-right:8px; color:#13A847;"></i> Tanggal Berlaku
                                        </label>
                                        <input type="date" id="edit_masa_berlaku" name="masa_berlaku" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button-modern button-md" data-bs-dismiss="modal"><i class="bi bi-x"></i>Batal</button>
                        <button type="submit" class="button-baru button-md"><i class="bi bi-save" style="margin-right: 5px;"></i> Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- MODAL KONFIRMASI HAPUS                      -->
    <!-- ========================================== -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);">
                <div class="modal-header" style="background: #f8fafc; border-bottom: 1px solid #eaeaea; border-radius: 20px 20px 0 0; padding: 20px 25px;">
                    <h5 class="modal-title" id="deleteModalLabel" style="font-weight: 700;">Konfirmasi Hapus !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 30px; text-align: center;">
                    <div style="width: 80px; height: 80px; background: #fee2e2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; color: #ef4444;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Apakah Anda Yakin?</h5>
                    <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Data yang dihapus tidak dapat dikembalikan.</p>
                </div>
                <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #eaeaea; border-radius: 0 0 20px 20px; padding: 15px 25px;">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal"><i class="bi bi-x"></i>Batal</button>
                    <form id="deleteForm" method="POST" action="" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-merah button-md">
                            <i class="bi bi-trash"></i> Hapus Data
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // 1. Script Set URL Delete
        function setDeleteUrl(button) {
            var id = button.getAttribute('data-id');
            var deleteUrl = "{{ route('bebujkkonsultanklasifikasi.delete', ':id') }}";
            deleteUrl = deleteUrl.replace(':id', encodeURIComponent(id));
            document.getElementById('deleteForm').action = deleteUrl;
        }

        // 2. Script Buka Modal Edit & Isi Data
        function openEditModal(id, nama_pengurus, sub_klasifikasi_layanan, kode, kualifikasi, penerbit, tanggal_terbit, masa_berlaku, nama_psjk, sub_kualifikasi_bu) {
            var updateUrl = "{{ route('bebujkkonsultanklasifikasi.update', ':id') }}";
            updateUrl = updateUrl.replace(':id', encodeURIComponent(id));
            document.getElementById('formEditKlasifikasi').action = updateUrl;

            document.getElementById('edit_nama_pengurus').value = nama_pengurus;
            document.getElementById('edit_sub_klasifikasi_layanan').value = sub_klasifikasi_layanan;
            document.getElementById('edit_kode').value = kode;
            document.getElementById('edit_kualifikasi').value = kualifikasi;
            document.getElementById('edit_penerbit').value = penerbit;
            document.getElementById('edit_tanggal_terbit').value = tanggal_terbit;
            document.getElementById('edit_masa_berlaku').value = masa_berlaku;
            document.getElementById('edit_nama_psjk').value = nama_psjk;
            document.getElementById('edit_sub_kualifikasi_bu').value = sub_kualifikasi_bu;

            var modal = new bootstrap.Modal(document.getElementById('modalEditKlasifikasi'));
            modal.show();
        }

        // 3. Script Cek Status Masa Berlaku Realtime
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            const masaBerlakuElements = document.querySelectorAll('.masa-berlaku');

            masaBerlakuElements.forEach(function (element) {
                const masaBerlaku = element.getAttribute('data-masaberlaku');
                const button = element.querySelector('.btn-masa-berlaku');

                if (!masaBerlaku || masaBerlaku === '' || masaBerlaku === 'null') {
                    button.style.backgroundColor = '#f59e0b';
                    button.innerHTML = '<i class="bi bi-exclamation-circle" style="margin-right: 5px;"></i> SUSPEND';
                } else {
                    const masaBerlakuDate = new Date(masaBerlaku);
                    masaBerlakuDate.setHours(0, 0, 0, 0);
                    if (masaBerlakuDate < today) {
                        button.style.backgroundColor = '#ef4444';
                        button.innerHTML = '<i class="bi bi-x-circle" style="margin-right: 5px;"></i> TIDAK BERLAKU';
                    } else {
                        button.style.backgroundColor = '#13A847';
                        button.innerHTML = '<i class="bi bi-check-circle" style="margin-right: 5px;"></i> BERLAKU';
                    }
                }
            });
        });
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')