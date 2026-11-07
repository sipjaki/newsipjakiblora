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
    min-width: 2600px;
    white-space: nowrap;
}

.table-custom-modern thead th {
    background: #f8fafc !important;
    color: #4a5a72 !important;
    font-weight: 700;
    padding: 15px 12px !important;
    text-align: left;
    border-bottom: 2px solid #e2e8f0 !important;
    font-size: 0.8rem !important;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

.table-custom-modern tbody td {
    padding: 12px !important;
    color: #1a2b4a;
    border-bottom: 1px solid #f1f5f9 !important;
    vertical-align: middle;
}

/* Zebra + hover hijau */
.table-custom-modern tbody tr:nth-child(odd) td {
    background-color: #ffffff !important;
}
.table-custom-modern tbody tr:nth-child(even) td {
    background-color: #e2e8f0 !important;
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

/* Styling Modal */
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

/* SEARCH FULL WIDTH */
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
.toolbar-buttons-row .spacer { flex: 1; }
@media (max-width: 768px) {
    .toolbar-buttons-row { justify-content: stretch; }
    .toolbar-buttons-row > * { width: 100%; justify-content: center; }
    .toolbar-buttons-row .spacer { display: none; }
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

                                    <!-- SEARCH BOX -->
                                    <div class="search-full-wrapper">
                                        <i class="bi bi-search search-icon"></i>
                                        <input type="search" id="searchInput" placeholder="Cari Tenaga Kerja Konstruksi ...." value="{{ $search ?? '' }}" autocomplete="off">
                                        <span class="search-count" id="searchCount"></span>
                                        <button type="button" class="search-clear" id="searchClear" aria-label="Clear">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>

                                    <!-- TOOLBAR -->
                                    <div class="toolbar-buttons-row">
                                        <div class="toolbar-entries">
                                            <label for="entries">Tampilkan :</label>
                                            <select id="entries" onchange="updateEntries()">
                                                <option value="10" {{ ($perPage ?? 10) == 10 ? 'selected' : '' }}>10</option>
                                                <option value="25" {{ ($perPage ?? 10) == 25 ? 'selected' : '' }}>25</option>
                                                <option value="50" {{ ($perPage ?? 10) == 50 ? 'selected' : '' }}>50</option>
                                                <option value="75" {{ ($perPage ?? 10) == 75 ? 'selected' : '' }}>75</option>
                                                <option value="100" {{ ($perPage ?? 10) == 100 ? 'selected' : '' }}>100</option>
                                                <option value="150" {{ ($perPage ?? 10) == 150 ? 'selected' : '' }}>150</option>
                                                <option value="200" {{ ($perPage ?? 10) == 200 ? 'selected' : '' }}>200</option>
                                                <option value="500" {{ ($perPage ?? 10) == 500 ? 'selected' : '' }}>500</option>
                                                <option value="1000" {{ ($perPage ?? 10) == 1000 ? 'selected' : '' }}>1000</option>
                                                <option value="2000" {{ ($perPage ?? 10) == 2000 ? 'selected' : '' }}>2000</option>
                                            </select>
                                        </div>

                                        <span class="spacer"></span>

                                        <a href="/beskkdpuprblora" class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                                <path d="M8 0C4.134 0 1 1.12 1 2.5v11C1 14.88 4.134 16 8 16s7-1.12 7-2.5v-11C15 1.12 11.866 0 8 0zm0 1c3.314 0 6 .672 6 1.5S11.314 4 8 4 2 3.328 2 2.5 4.686 1 8 1zM2 4.13C3.25 5.01 5.45 5.5 8 5.5s4.75-.49 6-1.37v2.37C14 7.328 11.314 8 8 8S2 7.328 2 6.5V4.13zm0 4C3.25 9.01 5.45 9.5 8 9.5s4.75-.49 6-1.37v2.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5V8.13zm0 4C3.25 13.01 5.45 13.5 8 13.5s4.75-.49 6-1.37v1.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5v-1.37z"/>
                                            </svg>
                                            <span>Data Dasar</span>
                                        </a>

                                        <a href="/beskkdpupr" class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                                <path d="M8 0C4.134 0 1 1.12 1 2.5v11C1 14.88 4.134 16 8 16s7-1.12 7-2.5v-11C15 1.12 11.866 0 8 0zm0 1c3.314 0 6 .672 6 1.5S11.314 4 8 4 2 3.328 2 2.5 4.686 1 8 1zM2 4.13C3.25 5.01 5.45 5.5 8 5.5s4.75-.49 6-1.37v2.37C14 7.328 11.314 8 8 8S2 7.328 2 6.5V4.13zm0 4C3.25 9.01 5.45 9.5 8 9.5s4.75-.49 6-1.37v2.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5V8.13zm0 4C3.25 13.01 5.45 13.5 8 13.5s4.75-.49 6-1.37v1.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5v-1.37z"/>
                                            </svg>
                                            <span class="badge-count">Total {{ $data->total() }} TKK</span>
                                        </a>

                                        <button type="button" onclick="exportTableToExcel('tabelTkkDpupr2024','data_tkkdpupr2024')" class="button-berkas button-md">
                                            <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                                        </button>
                                    </div>
                                </div>

                                <!-- BODY: TABEL -->
                                <div class="card-body p-0">
                                    <div class="table-responsive-custom">
                                        <table id="tabelTkkDpupr2024" class="table-custom-modern">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">No</th>
                                                    <th style="text-align:center;">Nama Lengkap</th>
                                                    <th style="text-align:center;">Alamat</th>
                                                    <th style="text-align:center;">Tahun Lulus</th>
                                                    <th style="text-align:center;">Tahun Anggaran</th>
                                                    <th style="text-align:center;">Penyelenggara</th>
                                                    <th style="text-align:center;">Universitas / Sekolah</th>
                                                    <th style="text-align:center;">Pendidikan</th>
                                                    <th style="text-align:center;">Jabatan Kerja</th>
                                                    <th style="text-align:center;">Jenjang</th>
                                                    <th style="text-align:center;">LSP Penerbit</th>
                                                    <th style="text-align:center;">Jurusan</th>
                                                    <th style="text-align:center;">Tgl Terbit</th>
                                                    <th style="text-align:center;">Tgl Habis</th>
                                                    <th style="text-align:center;">Masa Berlaku</th>
                                                    <th style="text-align:center;">Status Terbit</th>
                                                    <th style="text-align:center;">Sertifikat</th>
                                                    {{-- <th style="text-align:center;">Aksi</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody id="tableBody">
                                                @forelse ($data as $item)
                                                    <tr>
                                                        <td style="text-align: center; font-weight: 700;">{{ $loop->iteration }}</td>

                                                        <td style="text-align: left;">{{ $item->nama ?? 'Data Belum Di Update' }}</td>
                                                        <td style="text-align: left;">{{ $item->alamat ?? '-' }}</td>
                                                        <td style="text-align: center;">{{ $item->tahunlulus ?? '-' }}</td>
                                                        <td style="text-align: center;">{{ $item->tahunbimtek ?? '-' }}</td>
                                                        <td style="text-align: center;">{{ $item->asosiasimasjaki->namaasosiasi ?? '-' }}</td>
                                                        <td style="text-align: left;">{{ $item->namasekolah->namasekolah ?? '-' }}</td>
                                                        <td style="text-align: center;">{{ $item->jenjangpendidikan->jenjangpendidikan ?? '-' }}</td>
                                                        <td style="text-align: left;">{{ $item->jabatankerja->jabatankerja ?? '-' }}</td>
                                                        <td style="text-align: center;">{{ $item->jenjang->jenjang ?? '-' }}</td>
                                                        <td style="text-align: left;">{{ $item->lpspenerbit->lpspenerbit ?? '-' }}</td>
                                                        <td style="text-align: left;">{{ $item->jurusan->jurusan ?? '-' }}</td>

                                                        <td style="text-align: center;">{{ $item->tanggalterbit ? \Carbon\Carbon::parse($item->tanggalterbit)->translatedFormat('d F Y') : '-' }}</td>
                                                        <td style="text-align: center;">{{ $item->tanggalhabis ? \Carbon\Carbon::parse($item->tanggalhabis)->translatedFormat('d F Y') : '-' }}</td>

                                                        <td style="text-align: center;" class="masa-berlaku" data-masaberlaku="{{ $item->tanggalhabis ?? '' }}">
                                                            <button class="btn-masa-berlaku d-flex align-items-center justify-content-center" style="font-size: 11px; padding: 6px 12px; border-radius: 6px; border: none; font-weight: 700; color: white;">
                                                                <i class="bi bi-calendar3" style="margin-right: 5px;"></i> Status
                                                            </button>
                                                        </td>

                                                        <td style="text-align: center; text-transform: uppercase;">{{ $item->statusterbit ?? '-' }}</td>

                                                        {{-- ✅ SERTIFIKAT — tombol saja, modal global di luar tabel --}}
                                                        <td style="text-align: center;">
                                                            @php
                                                                $filePath  = $item->sertifikat;
                                                                $isStorage = $filePath && file_exists(storage_path('app/public/' . $filePath));
                                                                $isPublic  = $filePath && file_exists(public_path($filePath));
                                                                $urlFile   = $isStorage ? asset('storage/' . $filePath) : ($isPublic ? asset($filePath) : null);
                                                            @endphp

                                                            @if($urlFile)
                                                                <button type="button"
                                                                    class="button-berkas btn-lihat-sertifikat"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalSertifikat"
                                                                    data-src="{{ $urlFile }}"
                                                                    data-nama="{{ $item->nama ?? '-' }}">
                                                                    <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                                                                </button>
                                                            @else
                                                                <button class="button-merah" disabled>
                                                                    <i class="bi bi-x-circle" style="margin-right: 5px;"></i> Tidak Ada
                                                                </button>
                                                            @endif
                                                        </td>

                                                        {{-- <td style="text-align: center; vertical-align: middle;">
                                                            <div style="display: flex; gap: 5px; justify-content: center;">
                                                                <a href="/beskkdpupr/show/{{ $item->nama }}" class="button-baru" title="Show">
                                                                    <i class="bi bi-eye"></i>
                                                                </a>
                                                                <a href="/beskkdpupr/update/{{ $item->nama }}" class="button-berkas" title="Update">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="button-merah delete-trigger" title="Delete" data-judul="{{ $item->nama }}">
                                                                    <i class="bi bi-trash"></i>
                                                                </a>
                                                            </div>
                                                        </td> --}}
                                                    </tr>
                                                @empty
                                                <tr class="empty-row">
                                                    <td colspan="18">
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
                </div>
            </section>
        </main>
    </div>

    <!-- ========================================== -->
    <!-- MODAL SERTIFIKAT (GLOBAL — 1 modal untuk semua) -->
    <!-- ========================================== -->
    <div class="modal fade modal-custom" id="modalSertifikat" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                    <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                    <span style="margin: 0 5px;">:</span>
                    <h5 class="modal-title">
                        Sertifikat — <span id="sertifikatNama" style="color: #13A847;">-</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" style="padding: 0;">
                    <iframe id="sertifikatIframe" src="about:blank" frameborder="0" width="100%" height="700px" style="display:block;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL KONFIRMASI HAPUS -->
    <div class="modal fade modal-custom" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-weight: 700;">Konfirmasi Hapus !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: #fee2e2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; color: #ef4444;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Apakah Anda Yakin?</h5>
                    <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Ingin Menghapus Data : <strong id="itemName"></strong>?</p>
                </div>
                <div class="modal-footer">
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
    (function() {
        'use strict';
        document.addEventListener('DOMContentLoaded', function() {
            var deleteModal = document.getElementById('deleteModal');
            var deleteForm  = document.getElementById('deleteForm');
            var itemName    = document.getElementById('itemName');

            // ==========================================
            // HAPUS
            // ==========================================
            document.querySelectorAll('.delete-trigger').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    var nama = this.getAttribute('data-judul');
                    if (itemName) itemName.innerText = nama;
                    if (deleteForm) {
                        deleteForm.action = "/beskkdpupr/delete/" + encodeURIComponent(nama);
                    }
                    if (deleteModal) {
                        var modal = new bootstrap.Modal(deleteModal);
                        modal.show();
                    }
                });
            });

            if (deleteModal) {
                deleteModal.addEventListener('click', function(e) {
                    if (e.target === deleteModal) {
                        var modal = bootstrap.Modal.getInstance(deleteModal);
                        if (modal) modal.hide();
                    }
                });
            }
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && deleteModal && deleteModal.classList.contains('show')) {
                    var modal = bootstrap.Modal.getInstance(deleteModal);
                    if (modal) modal.hide();
                }
            });

            // ==========================================
            // MODAL SERTIFIKAT — load iframe saat dibuka
            // ==========================================
            var modalSertifikat = document.getElementById('modalSertifikat');
            var sertifikatIframe = document.getElementById('sertifikatIframe');
            var sertifikatNama = document.getElementById('sertifikatNama');

            document.querySelectorAll('.btn-lihat-sertifikat').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var src  = this.getAttribute('data-src');
                    var nama = this.getAttribute('data-nama');

                    if (sertifikatNama) sertifikatNama.textContent = nama || '-';
                    if (sertifikatIframe) sertifikatIframe.src = src || 'about:blank';
                });
            });

            if (modalSertifikat) {
                modalSertifikat.addEventListener('hidden.bs.modal', function () {
                    if (sertifikatIframe) sertifikatIframe.src = 'about:blank';
                    if (sertifikatNama) sertifikatNama.textContent = '-';
                });
            }

            // ==========================================
            // STATUS MASA BERLAKU
            // ==========================================
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            document.querySelectorAll('.masa-berlaku').forEach(function (element) {
                const masaBerlaku = element.getAttribute('data-masaberlaku');
                const button = element.querySelector('.btn-masa-berlaku');

                if (!masaBerlaku || masaBerlaku === '' || masaBerlaku === 'null') {
                    button.style.backgroundColor = '#f59e0b';
                    button.innerHTML = '<i class="bi bi-exclamation-circle" style="margin-right:5px;"></i> SUSPEND';
                } else {
                    const tgl = new Date(masaBerlaku);
                    tgl.setHours(0, 0, 0, 0);
                    if (tgl < today) {
                        button.style.backgroundColor = '#ef4444';
                        button.innerHTML = '<i class="bi bi-x-circle" style="margin-right:5px;"></i> TIDAK BERLAKU';
                    } else {
                        button.style.backgroundColor = '#13A847';
                        button.innerHTML = '<i class="bi bi-check-circle" style="margin-right:5px;"></i> BERLAKU';
                    }
                }
            });

            // ==========================================
            // SEARCH AJAX
            // ==========================================
            const searchInput = document.getElementById('searchInput');
            const searchClear = document.getElementById('searchClear');
            const searchCount = document.getElementById('searchCount');
            let debounceTimer = null;

            function toggleClearBtn() {
                if (searchInput.value.length > 0) {
                    searchClear.classList.add('show');
                } else {
                    searchClear.classList.remove('show');
                }
            }

            function doSearchFetch() {
                const input = searchInput.value || '';

                fetch(`/beskkdpupr?search=${encodeURIComponent(input)}`)
                    .then(response => response.text())
                    .then(html => {
                        let parser = new DOMParser();
                        let doc = parser.parseFromString(html, "text/html");
                        let newTableBody = doc.querySelector("#tableBody");
                        let currentTableBody = document.querySelector("#tableBody");
                        if (newTableBody && currentTableBody) {
                            currentTableBody.innerHTML = newTableBody.innerHTML;

                            // Bind ulang tombol sertifikat yang baru
                            document.querySelectorAll('.btn-lihat-sertifikat').forEach(function(btn) {
                                btn.addEventListener('click', function() {
                                    var src  = this.getAttribute('data-src');
                                    var nama = this.getAttribute('data-nama');
                                    if (sertifikatNama) sertifikatNama.textContent = nama || '-';
                                    if (sertifikatIframe) sertifikatIframe.src = src || 'about:blank';
                                });
                            });

                            // Bind ulang delete
                            document.querySelectorAll('.delete-trigger').forEach(function(btn) {
                                btn.addEventListener('click', function(e) {
                                    e.preventDefault();
                                    var nama = this.getAttribute('data-judul');
                                    if (itemName) itemName.innerText = nama;
                                    if (deleteForm) {
                                        deleteForm.action = "/beskkdpupr/delete/" + encodeURIComponent(nama);
                                    }
                                    if (deleteModal) {
                                        var modal = new bootstrap.Modal(deleteModal);
                                        modal.show();
                                    }
                                });
                            });

                            const rows = currentTableBody.querySelectorAll('tr:not(.empty-row)');
                            if (searchCount) {
                                if (input.trim().length > 0) {
                                    searchCount.textContent = `${rows.length} hasil`;
                                    searchCount.classList.add('show');
                                } else {
                                    searchCount.classList.remove('show');
                                }
                            }
                        }
                    })
                    .catch(error => console.error("Error fetching search results:", error));
            }

            function searchDebounced() {
                toggleClearBtn();
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(doSearchFetch, 350);
            }

            if (searchInput) {
                searchInput.addEventListener('input', searchDebounced);
                searchInput.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        clearTimeout(debounceTimer);
                        doSearchFetch();
                    }
                });
            }

            if (searchClear) {
                searchClear.addEventListener('click', function () {
                    searchInput.value = '';
                    toggleClearBtn();
                    if (searchCount) searchCount.classList.remove('show');
                    doSearchFetch();
                    searchInput.focus();
                });
            }
            toggleClearBtn();

            // ==========================================
            // ENTRIES
            // ==========================================
            window.updateEntries = function() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            };
        });
    })();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <script>
        function exportTableToExcel(tableID, filename = '') {
            var table = document.getElementById(tableID);
            var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
            return XLSX.writeFile(wb, filename + '.xlsx');
        }
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')