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
body.modal-open .card-3d:hover { transform: none !important; }

.card-header-custom {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
    border-radius: 20px 20px 0 0 !important;
}
.card-3d > .card-body:last-child { border-radius: 0 0 20px 20px; }
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

/* ══════════════════════════════════════════════════════════
   TOOLBAR — SEJAJAR
   ══════════════════════════════════════════════════════════ */
.toolbar-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding: 14px 16px;
    background: #f8fafc;
    border: 1px dashed #cbd5e1;
    border-radius: 12px;
    margin-bottom: 0;
}
.toolbar-left {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px;
    flex: 1 1 auto;
    min-width: 280px;
}
.toolbar-right {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    flex: 0 0 auto;
}

.search-wrapper {
    position: relative;
    flex: 1 1 260px;
    min-width: 220px;
    max-width: 420px;
}
.search-input {
    width: 100%;
    border: 1.5px solid #e2e8f0;
    padding: 10px 40px 10px 16px;
    font-size: 13px;
    border-radius: 10px;
    background: #ffffff;
    transition: all 0.25s ease;
}
.search-input:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.search-icon {
    position: absolute;
    right: 14px; top: 50%;
    transform: translateY(-50%);
    font-size: 15px; color: #94a3b8;
    pointer-events: none;
}
.search-clear {
    position: absolute;
    right: 38px; top: 50%;
    transform: translateY(-50%);
    background: #e2e8f0;
    color: #64748b;
    border: none;
    border-radius: 50%;
    width: 20px; height: 20px;
    display: flex; align-items: center; justify-content: center;
    font-size: 11px;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.2s ease;
}
.search-clear:hover { background: #dc2626; color: #fff; }

.filter-inline {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
}
.filter-inline-label {
    font-size: 12px;
    font-weight: 600;
    color: #4a5a72;
    white-space: nowrap;
}
.filter-select {
    border: 1.5px solid #e2e8f0;
    padding: 9px 32px 9px 12px;
    font-size: 13px;
    border-radius: 10px;
    background: #ffffff;
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 10px center;
    transition: all 0.25s ease;
    min-width: 100px;
}
.filter-select:focus {
    border-color: #13A847;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}

/* ── Badge Total ── */
.badge-total {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 14px;
    background: #ecfdf5;
    border: 1.5px solid #a7f3d0;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 700;
    color: #065f46;
    white-space: nowrap;
    box-shadow: 0 2px 6px rgba(19, 168, 71, 0.1);
}
.badge-total i {
    color: #13A847;
    font-size: 14px;
}
.badge-total .badge-total-number {
    background: #13A847;
    color: #ffffff;
    padding: 2px 8px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 800;
    margin: 0 2px;
}

.btn-download {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px !important;
    font-weight: 600;
    padding: 9px 16px;
    border-radius: 10px;
    border: 1.5px solid #0ea5e9;
    background: #ffffff;
    color: #0369a1;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
}
.btn-download:hover {
    background: #0ea5e9;
    color: #fff;
    border-color: #0ea5e9;
    box-shadow: 0 4px 12px rgba(14, 165, 233, 0.3);
}
.btn-download:active { transform: scale(0.97); }
.btn-download i { font-size: 14px; }

/* ══════════════════════════════════════════════════════════
   ZEBRA TABLE
   ══════════════════════════════════════════════════════════ */
#dataTable,
#dataTable > tbody,
#dataTable > tbody > tr,
#dataTable > tbody > tr > td,
#dataTable > thead,
#dataTable > thead > tr > th {
    --bs-table-bg: transparent !important;
    --bs-table-striped-bg: transparent !important;
    --bs-table-accent-bg: transparent !important;
    --bs-table-hover-bg: transparent !important;
    background-image: none !important;
    box-shadow: none !important;
}
#dataTable {
    width: 100%;
    border-collapse: collapse;
    min-width: 900px;
    font-size: 13px;
}
#dataTable > thead > tr > th {
    padding: 14px 12px !important;
    font-size: 12px !important;
    font-weight: 700 !important;
    color: #166534 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    vertical-align: middle !important;
    background: linear-gradient(180deg, #f0fdf4 0%, #f8fafc 100%) !important;
    border-bottom: 2px solid #13A847 !important;
    white-space: nowrap;
    line-height: 1.4;
    position: sticky;
    top: 0;
    z-index: 2;
}
#dataTable > thead > tr > th i {
    color: #13A847;
    margin-right: 4px;
    font-size: 13px;
    vertical-align: middle;
}
#dataTable > tbody > tr > td {
    padding: 10px 14px;
    font-size: 13px;
    color: #1a2b4a;
    border-bottom: 1px solid #e5e7eb !important;
    vertical-align: middle;
    line-height: 1.5;
    transition: background-color 0.18s ease;
}
#dataTable > tbody > tr:nth-child(odd) > td { background-color: #ffffff !important; }
#dataTable > tbody > tr:nth-child(even) > td { background-color: #f0fdf4 !important; }
#dataTable > tbody > tr:hover > td {
    background-color: #bbf7d0 !important;
    color: #065f46 !important;
    border-bottom-color: #86efac !important;
    cursor: pointer;
}
#dataTable > tbody > tr:hover > td:first-child {
    box-shadow: inset 4px 0 0 #13A847;
}
#dataTable > tbody > tr.empty-row > td,
#dataTable > tbody > tr.empty-row:hover > td {
    background-color: #ffffff !important;
    cursor: default;
    box-shadow: none !important;
}
@media (max-width: 768px) {
    #dataTable { min-width: 100%; }
    #dataTable > thead > tr > th,
    #dataTable > tbody > tr > td { padding: 8px 10px; font-size: 12px; }
}
.table-responsive {
    max-width: 100%;
    overflow-x: auto;
    border-radius: 0 0 20px 20px;
}

/* ══════════════════════════════════════════════════════════
   Tombol umum
   ══════════════════════════════════════════════════════════ */
.button-modern,
.button-baru,
.button-berkas,
.button-merah,
.button-hijau,
.button-data { font-size: 13px !important; line-height: 1.4; }

/* ══════════════════════════════════════════════════════════
   MODAL TAMBAH DATA — 75% layar
   ══════════════════════════════════════════════════════════ */
.modal-dialog-75 {
    max-width: 75%;
    width: 75%;
    margin: 1.75rem auto;
}
@media (max-width: 991.98px) {
    .modal-dialog-75 { max-width: 95%; width: 95%; }
}
.modal-tambah-data .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}
.modal-tambah-data .modal-header {
    background: #ffffff;
    border-bottom: 1px solid #eaeaea;
    padding: 20px 28px;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    text-align: left !important;
}
.modal-tambah-data .modal-header .modal-title {
    text-align: left !important;
    margin: 0 !important;
    font-weight: 700;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.modal-tambah-data .modal-header .modal-title i {
    color: #13A847;
    font-size: 20px;
}
.modal-tambah-data .modal-body {
    padding: 24px 28px;
    max-height: 70vh;
    overflow-y: auto;
}
.modal-tambah-data .modal-footer {
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
    padding: 16px 28px;
    justify-content: flex-end;
    gap: 10px;
}
.modal-tambah-data .form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.modal-tambah-data .form-label-modern i {
    color: #13A847;
    font-size: 15px;
    width: 18px;
    text-align: center;
}
.modal-tambah-data .form-control {
    font-size: 13px;
    line-height: 1.55;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    background: #f8fafc;
    transition: all 0.2s ease;
}
.modal-tambah-data .form-control:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.modal-tambah-data .mb-3 { margin-bottom: 16px; }

/* ── Modal Hapus ── */
.modal-confirm-delete .modal-content {
    border-radius: 16px; border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}
.modal-confirm-delete .modal-header {
    background: #fef2f2; border-bottom: 1px solid #fecaca;
    padding: 18px 24px;
}
.modal-confirm-delete .modal-body { padding: 30px 24px; text-align: center; }
.modal-confirm-delete .modal-footer {
    background: #f8fafc; border-top: 1px solid #eaeaea;
    padding: 16px 24px; justify-content: center; gap: 12px;
}
.confirm-icon {
    width: 80px; height: 80px;
    background: #fee2e2; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px;
}
.confirm-icon i { font-size: 2.5rem; color: #ef4444; }
.confirm-title {
    font-size: 16px; font-weight: 700; color: #1a2b4a; margin-bottom: 8px;
}
.confirm-text {
    font-size: 13px; color: #4a5a72; margin: 0; line-height: 1.6;
}
.confirm-text strong { color: #dc2626; }

/* ── Responsive ── */
@media (max-width: 768px) {
    .button-modern, .button-baru, .button-berkas, .button-merah,
    .button-hijau, .button-data, .btn-download { font-size: 12px !important; }
    .toolbar-wrapper { flex-direction: column; align-items: stretch; }
    .toolbar-left, .toolbar-right { width: 100%; justify-content: stretch; }
    .toolbar-right > * { flex: 1 1 auto; justify-content: center; }
    .search-wrapper { max-width: 100%; }
    .filter-inline { width: 100%; justify-content: space-between; }
    .badge-total { font-size: 11px; padding: 6px 10px; }
    .badge-total .badge-total-number { font-size: 11px; padding: 1px 6px; }
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

                            <form method="GET" action="{{ url('/settingsjurusan') }}" id="filterForm" autocomplete="off">
                                <div class="toolbar-wrapper">

                                    {{-- Kiri: Search + Tampilkan + Total --}}
                                    <div class="toolbar-left">
                                        <div class="search-wrapper">
                                            <input type="search" name="search" id="searchInput"
                                                   placeholder="Cari Jurusan..."
                                                   value="{{ $search ?? '' }}"
                                                   class="search-input">
                                            @if(!empty($search))
                                                <a href="{{ url('/settingsjurusan') . '?' . http_build_query(array_filter(['perPage' => $perPage ?? 25])) }}"
                                                   class="search-clear" title="Hapus pencarian">
                                                    <i class="bi bi-x"></i>
                                                </a>
                                            @endif
                                            <i class="bi bi-search search-icon"></i>
                                        </div>

                                        <div class="filter-inline">
                                            <span class="filter-inline-label">Tampilkan:</span>
                                            <select name="perPage" id="filterPerPage"
                                                    class="filter-select"
                                                    onchange="document.getElementById('filterForm').submit()">
                                                @foreach([25, 50, 75, 100, 150, 200, 500, 1000, 2000] as $opt)
                                                    <option value="{{ $opt }}" {{ (int)($perPage ?? 25) === $opt ? 'selected' : '' }}>
                                                        {{ $opt }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        {{-- BADGE TOTAL --}}
                                        <div class="badge-total">
                                            <i class="bi bi-bookmark-fill"></i>
                                            Total
                                            <span class="badge-total-number">{{ $data->total() ?? 0 }}</span>
                                            Jurusan
                                        </div>
                                    </div>

                                    {{-- Kanan: Download + Tambah --}}
                                    <div class="toolbar-right">
                                        <button type="button" class="btn-download"
                                                onclick="exportTableToExcel('dataTable', 'data_jurusan')">
                                            <i class="bi bi-file-earmark-excel"></i>
                                            <span>Download Excel</span>
                                        </button>

                                        {{-- Tombol Tambah — buka modal --}}
                                        <button type="button" class="button-baru button-md"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalTambahData">
                                            <i class="fa fa-plus" style="margin-right: 6px;"></i>
                                            Tambah Data
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 75px; text-align:center;">
                                                <i class="bi bi-list-ol"></i> No
                                            </th>
                                            <th style="width: 800px; text-align:center;">
                                                <i class="bi bi-journal-bookmark-fill"></i> Jurusan
                                            </th>
                                            <th style="width: 200px; text-align:center;">
                                                <i class="bi bi-tools"></i> Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @forelse ($data as $item)
                                        <tr class="align-middle">
                                            <td style="text-align: center;">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                                            <td style="text-align: left;">
                                                @if(!empty($item->jurusan))
                                                    {{ $item->jurusan }}
                                                @else
                                                    <button class="button-berkas">Data Belum Update</button>
                                                @endif
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <a href="javascript:void(0)" class="button-merah" title="Delete"
                                                   data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                   data-judul="{{ $item->jurusan }}"
                                                   data-id="{{ $item->id }}"
                                                   onclick="setDeleteUrl(this)">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                                <tr class="empty-row">
                                                    <td colspan="6">
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

                        @include('backend.00_administrator.00_baganterpisah.07_paginations')
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL TAMBAH DATA — 75% layar                                 --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-tambah-data" id="modalTambahData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Jurusan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('create.jurusan') }}" method="POST" enctype="multipart/form-data" id="formTambahData">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label-modern" for="jurusan">
                                    <i class="bi bi-journal-bookmark-fill"></i> Nama Jurusan
                                </label>
                                <input type="text" id="jurusan" name="jurusan"
                                       class="form-control @error('jurusan') is-invalid @enderror"
                                       value="{{ old('jurusan') }}"
                                       placeholder="Contoh: Teknik Sipil / Teknik Mesin" maxlength="50" />
                                @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                <small class="text-muted" style="font-size:11px; color:#64748b; margin-top:4px; display:block;">
                                    <i class="bi bi-info-circle"></i> Masukkan nama jurusan (maksimal 50 karakter).
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                    </button>
                    <button type="submit" class="button-baru button-md">
                        <i class="bi bi-save" style="margin-right:4px;"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL HAPUS                                                    --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade modal-confirm-delete" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle" style="margin-right:8px; color:#ef4444;"></i>
                    Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="confirm-icon">
                    <i class="bi bi-trash"></i>
                </div>
                <h5 class="confirm-title">Yakin Ingin Menghapus?</h5>
                <p class="confirm-text">
                    Data <strong id="itemName"></strong> akan dihapus permanen.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                </button>
                <form id="deleteForm" method="POST" action="" style="margin:0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-merah">
                        <i class="bi bi-trash" style="margin-right:4px;"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

<script>
// ══════════════════════════════════════════════════════════
// SEARCH — form submit + debounce
// ══════════════════════════════════════════════════════════
(function () {
    const input  = document.getElementById('searchInput');
    const form   = document.getElementById('filterForm');
    if (!input || !form) return;

    let timer = null;

    input.addEventListener('input', function () {
        clearTimeout(timer);
        timer = setTimeout(function () { form.submit(); }, 600);
    });

    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            clearTimeout(timer);
            form.submit();
        }
    });
})();

// ══════════════════════════════════════════════════════════
// DELETE
// ══════════════════════════════════════════════════════════
function setDeleteUrl(button) {
    const id    = button.getAttribute('data-id');
    const judul = button.getAttribute('data-judul');

    document.getElementById('itemName').innerText = judul;
    document.getElementById('deleteForm').action = "{{ url('/jurusan/delete') }}/" + encodeURIComponent(id);
}

// ══════════════════════════════════════════════════════════
// EXPORT EXCEL
// ══════════════════════════════════════════════════════════
function exportTableToExcel(tableID, filename = '') {
    const table = document.getElementById(tableID);
    if (!table) { alert('Tabel tidak ditemukan.'); return; }
    const wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
    return XLSX.writeFile(wb, filename + '.xlsx');
}

// ══════════════════════════════════════════════════════════
// AUTO-BUKA MODAL KALAU ADA ERROR VALIDASI
// ══════════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', function () {
    @if ($errors->any())
        var modalTambah = new bootstrap.Modal(document.getElementById('modalTambahData'));
        modalTambah.show();
    @endif
});
</script>

@include('backend.00_administrator.00_baganterpisah.02_footer')