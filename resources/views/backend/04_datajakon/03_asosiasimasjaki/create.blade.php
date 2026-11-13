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
    min-width: 1400px;
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

/* Zebra + hover */
.table-custom-modern tbody tr:nth-child(odd) td {
    background-color: #ffffff !important;
}
.table-custom-modern tbody tr:nth-child(even) td {
    background-color: #f1f5f9 !important;
}
.table-custom-modern tbody tr:hover td {
    background-color: #bbf7d0 !important;
    border-bottom-color: #86efac !important;
    cursor: pointer;
}
.table-custom-modern tbody tr.empty-row:hover td {
    background-color: #ffffff !important;
    cursor: default;
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

/* ==========================================
   SEARCH FULL WIDTH
   ========================================== */
.search-full-wrapper {
    position: relative;
    width: 100%;
    margin-bottom: 14px;
}
.search-full-wrapper .search-icon {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
    font-size: 1.15rem;
    pointer-events: none;
}
.search-full-wrapper input[type="search"] {
    width: 100%;
    padding: 14px 52px;
    border: 2px solid #d8dde5;
    border-radius: 14px;
    font-size: 0.95rem;
    background: #fbfcfd;
    outline: none;
    transition: all 0.25s ease;
}
.search-full-wrapper input[type="search"]:focus {
    border-color: #13A847;
    background: #ffffff;
    box-shadow: 0 0 0 5px rgba(19, 168, 71, 0.18);
}
.search-full-wrapper .search-clear {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    background: #e9edf4;
    border: none;
    color: #6b7a93;
    width: 28px; height: 28px;
    border-radius: 50%;
    cursor: pointer;
    display: none;
    align-items: center;
    justify-content: center;
}
.search-full-wrapper .search-clear.show { display: flex; }

/* Toolbar */
.toolbar-buttons-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    justify-content: flex-end;
    padding-bottom: 14px;
}
.toolbar-entries {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #f8fafc;
    border: 1px solid #e9edf4;
    border-radius: 10px;
    padding: 0.35rem 0.7rem;
}
.toolbar-entries label {
    font-size: 0.72rem;
    font-weight: 600;
    color: #6b7a93;
    text-transform: uppercase;
    margin: 0;
}
.toolbar-entries select {
    border: none;
    background: transparent;
    font-size: 0.8rem;
    color: #1a2b4a;
    outline: none;
    cursor: pointer;
    font-weight: 600;
}
.spacer { flex: 1; }
@media (max-width: 768px) {
    .toolbar-buttons-row { justify-content: stretch; }
    .toolbar-buttons-row > * { width: 100%; justify-content: center; }
    .spacer { display: none; }
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
                                            <i class="bi bi-people"></i> Data Asosiasi Jasa Konstruksi
                                        </div>
                                        <div class="header-buttons">
                                            <button type="button" class="button-baru button-md" data-bs-toggle="modal" data-bs-target="#modalTambahAsosiasi">
                                                <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                                Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div class="table-responsive-custom">
                                        <table id="tabelAsosiasi" class="zebra-table table-striped table-custom-modern">
                                            <thead>
                                                <tr>
                                                    <th style="width: 75px; text-align:center;">No</th>
                                                    <th style="width: 350px; text-align:left;">Nama Asosiasi</th>
                                                    <th style="width: 400px; text-align:left;">Alamat</th>
                                                    <th style="width: 200px; text-align:center;">No Telepon</th>
                                                    <th style="width: 250px; text-align:center;">PIC</th>
                                                    <th style="width: 150px; text-align:center;">Jumlah</th>
                                                    <th style="width: 200px; text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBody">
                                                @forelse ($data as $item)
                                                <tr class="align-middle">
                                                    <td style="text-align: center;">{{ $loop->iteration }}</td>

                                                    <td style="text-align: left;">
                                                        @if($item->namaasosiasi)
                                                            {{ $item->namaasosiasi }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: left;">
                                                        @if($item->alamat)
                                                            {{ $item->alamat }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: center;">
                                                        @if($item->notelepon)
                                                            {{ $item->notelepon }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: center;">
                                                        @if($item->pic)
                                                            {{ $item->pic }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: center;">
                                                        @if($item->jumlahanggota)
                                                            {{ $item->jumlahanggota }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <div style="display: flex; gap: 5px; justify-content: center;">
                                                            <a href="/beasosiasi/update/{{ $item->id }}" class="button-data" title="Update">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" class="button-merah" title="Delete"
                                                               data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                               data-judul="{{ $item->namaasosiasi }}"
                                                               onclick="setDeleteUrl(this)">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr class="empty-row">
                                                    <td colspan="7">
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
    <!-- MODAL TAMBAH ASOSIASI (75%)                 -->
    <!-- ========================================== -->
    <div class="modal fade modal-custom" id="modalTambahAsosiasi" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahLabel" style="font-weight: 700;">
                        <i class="bi bi-plus-circle" style="margin-right: 8px; color: #13A847;"></i> Tambah Data Asosiasi
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('create.asosiasimasjakicreatenew') }}" method="POST" id="formTambahAsosiasi">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label-modern" for="namaasosiasi">
                                        <i class="bi bi-people-fill" style="margin-right:8px; color:#13A847;"></i> Nama Asosiasi
                                    </label>
                                    <input type="text" id="namaasosiasi" name="namaasosiasi" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="alamat">
                                        <i class="bi bi-geo-alt-fill" style="margin-right:8px; color:#13A847;"></i> Alamat
                                    </label>
                                    <input type="text" id="alamat" name="alamat" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="notelepon">
                                        <i class="bi bi-telephone-fill" style="margin-right:8px; color:#13A847;"></i> No Telepon
                                    </label>
                                    <input type="text" id="notelepon" name="notelepon" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label-modern" for="pic">
                                        <i class="bi bi-person-badge" style="margin-right:8px; color:#13A847;"></i> PIC
                                    </label>
                                    <input type="text" id="pic" name="pic" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label-modern" for="jumlahanggota">
                                        <i class="bi bi-people" style="margin-right:8px; color:#13A847;"></i> Jumlah Anggota
                                    </label>
                                    <input type="number" id="jumlahanggota" name="jumlahanggota" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button-modern button-md" data-bs-dismiss="modal"><i class="bi bi-x"></i> Batal</button>
                        <button type="submit" class="button-baru button-md"><i class="bi bi-save" style="margin-right: 5px;"></i> Simpan Data</button>
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
                    <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">
                        Ingin Menghapus Data : <strong id="itemName"></strong>?
                    </p>
                </div>
                <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #eaeaea; border-radius: 0 0 20px 20px; padding: 15px 25px;">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal"><i class="bi bi-x"></i> Batal</button>
                    <form id="deleteForm" method="POST" action="" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button-merah button-md"><i class="bi bi-trash"></i> Hapus Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setDeleteUrl(button) {
            var namaasosiasi = button.getAttribute('data-judul');
            document.getElementById('itemName').innerText = namaasosiasi;
            var deleteUrl = "/beasosiasi/delete/" + encodeURIComponent(namaasosiasi);
            document.getElementById('deleteForm').action = deleteUrl;
        }
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')