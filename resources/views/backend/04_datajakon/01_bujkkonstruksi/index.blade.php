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
                            <div class="card card-3d mb-4">
                                <div class="card-header" style="background: #ffffff; border-bottom: 1px solid #eaeaea; padding: 20px 30px;">
                                    <div class="header-title mb-3">
                                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                                    </div>

                                    <!-- SEARCH BOX -->
                                    <div class="search-full-wrapper">
                                        <i class="bi bi-search search-icon"></i>
                                        <input type="search" id="searchInput" placeholder="Cari Badan Usaha berdasarkan nama, NIB, alamat, atau asosiasi..." value="{{ $search ?? '' }}" autocomplete="off">
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

                                        <div class="toolbar-entries">
                                            <label for="filterTahun">Tahun :</label>
                                            <select id="filterTahun" onchange="filterTahun()">
                                                <option value="">Semua Tahun</option>
                                                @foreach(($daftarTahun ?? []) as $th)
                                                    <option value="{{ $th }}" {{ ($tahun ?? '') == $th ? 'selected' : '' }}>
                                                        {{ $th }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <span style="flex: 1;"></span>

                                        <a href="/bebujkkonstruksiblora" class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                            </svg>
                                            Kembali
                                        </a>

                                        <a href="/bebujkkonstruksi" class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                                <path d="M2 2.5A1.5 1.5 0 0 1 3.5 1h9A1.5 1.5 0 0 1 14 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5v-11zM3.5 2a.5.5 0 0 0-.5.5V5h10V2.5a.5.5 0 0 0-.5-.5h-9zM3 6v2h3V6H3zm4 0v2h6V6H7zM3 9v2h3V9H3zm4 0v2h6V9H7zm-4 3v1.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V12H3z"/>
                                            </svg>
                                            Data Lengkap
                                        </a>

                                        <a class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                                <path d="M8 0C4.134 0 1 1.12 1 2.5v11C1 14.88 4.134 16 8 16s7-1.12 7-2.5v-11C15 1.12 11.866 0 8 0zm0 1c3.314 0 6 .672 6 1.5S11.314 4 8 4 2 3.328 2 2.5 4.686 1 8 1zM2 4.13C3.25 5.01 5.45 5.5 8 5.5s4.75-.49 6-1.37v2.37C14 7.328 11.314 8 8 8S2 7.328 2 6.5V4.13zm0 4C3.25 9.01 5.45 9.5 8 9.5s4.75-.49 6-1.37v2.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5V8.13zm0 4C3.25 13.01 5.45 13.5 8 13.5s4.75-.49 6-1.37v1.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5v-1.37z"/>
                                            </svg>
                                            <span class="badge-count">Total {{ $data->total() }} BUJK</span>
                                        </a>

                                        <!-- TOMBOL DOWNLOAD EXCEL -->
                                        <button onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_bujkkonstruksi')" class="button-berkas button-md">
                                            <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                                        </button>

                                        <a href="/bebujkkonstruksi/create" class="button-baru button-md">
                                            <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                            Tambah Data
                                        </a>
                                    </div>
                                </div>

                                <!-- BODY: TABEL DENGAN SCROLL HORIZONTAL -->
                                <div class="card-body p-0">
                                    <div class="table-responsive-custom">
                                        <table id="tabelBujkkonstruksi" class="table-custom-modern">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">No</th>
                                                    <th style="text-align:center;">Asosiasi</th>
                                                    <th style="text-align:center;">Badan Usaha</th>
                                                    <th style="text-align:center;">Alamat</th>
                                                    <th style="text-align:center;">No Telepon</th>
                                                    <th style="text-align:center;">Email</th>
                                                    <th style="text-align:center;">NIB</th>
                                                    <th style="text-align:center;">PJU</th>
                                                    <th style="text-align:center;">No Akte</th>
                                                    <th style="text-align:center;">Tanggal</th>
                                                    <th style="text-align:center;">Notaris</th>
                                                    <th style="text-align:center;">Pengesahan</th>
                                                    <th style="text-align:center;">Sub Klasifikasi</th>
                                                    <th style="text-align:center;">Berkas</th>
                                                    {{-- <th style="text-align:center;">Dibuat Oleh</th> --}}
                                                    <th style="text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBody">
                                                @forelse ($data as $item)
                                                    <tr>
                                                        <td style="text-align: center; font-weight: 700;">{{ $loop->iteration }}</td>
                                                        <td style="text-align: center;">{{ $item->asosiasimasjaki->namaasosiasi ?? 'Data Belum Diupdate' }}</td>
                                                        <td>{{ $item->namalengkap ?? 'Data Belum Di Update' }}</td>
                                                        <td>{{ $item->alamat ?? 'Data Belum Di Update' }}</td>
                                                        <td style="text-align: center;">{{ $item->no_telepon ?? 'Data Belum Di Update' }}</td>
                                                        <td>{{ $item->email ?? 'Data Belum Di Update' }}</td>
                                                        <td style="text-align: center;">{{ $item->nomorindukberusaha ?? 'Data Belum Di Update' }}</td>
                                                        <td>{{ $item->pju ?? 'Data Belum Di Update' }}</td>
                                                        <td style="text-align: center;">{{ $item->no_akte ?? 'Data Belum Di Update' }}</td>
                                                        <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                                                        <td>{{ $item->nama_notaris ?? 'Data Belum Di Update' }}</td>
                                                        <td>{{ $item->no_pengesahan ?? 'Data Belum Di Update' }}</td>

                                                        <td style="text-align: center;">
                                                            <a href="{{ url('/bebujkkonstruksi/showsubklasifikasi/' . $item->namalengkap) }}" class="button-berkas">
                                                                <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                                                            </a>
                                                        </td>

                                                        <!-- BERKAS -->
                                                        <td style="text-align: center;">
                                                            @php
                                                                $filePath = $item->uploadberkas;
                                                                $isStorage = $filePath && file_exists(storage_path('app/public/' . $filePath));
                                                                $isPublic = $filePath && file_exists(public_path($filePath));
                                                            @endphp

                                                            @if($filePath && ($isStorage || $isPublic))
                                                                @php
                                                                    $urlFile = $isStorage ? asset('storage/' . $filePath) : asset($filePath);
                                                                @endphp
                                                                <button class="button-berkas" data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                                    <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                                                                </button>
                                                                <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Berkas</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body text-center">
                                                                                <iframe src="{{ $urlFile }}" frameborder="0" width="100%" height="600px"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <button class="button-merah" disabled>Tidak Ada Berkas</button>
                                                            @endif
                                                        </td>

                                                        {{-- <td style="text-align: center;">{{ $item->user?->name ?? 'Admin Tidak Ada' }}</td> --}}

                                                        <!-- Aksi -->
                                                        <td style="text-align: center;">
                                                            <div style="display: flex; gap: 5px; justify-content: center;">
                                                                <a href="/bebujkkonstruksi/show/{{ $item->namalengkap }}" class="button-baru" title="Show">
                                                                    <i class="bi bi-eye"></i>
                                                                </a>
                                                                <a href="/bebujkkonstruksi/update/{{ $item->id }}" class="button-berkas" title="Update">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" class="button-merah delete-trigger" title="Delete" data-judul="{{ $item->id }}">
                                                                    <i class="bi bi-trash"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                <tr class="empty-row">
                                                    <td colspan="16">
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

                                <!-- PAGINATION -->
                                @include('backend.00_administrator.00_baganterpisah.07_paginations')

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- MODAL HAPUS -->
    <div class="modal fade modal-custom" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="/assets/icon/jakonnew.png" alt="Logo" width="30" style="margin-right: 10px;">
                    <h5 class="modal-title" style="font-weight: 700;">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="width: 80px; height: 80px; background: #fee2e2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; color: #ef4444;"></i>
                    </div>
                    <h5 style="font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Apakah Anda Yakin?</h5>
                    <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Data yang dihapus tidak dapat dikembalikan.</p>
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


    <!-- LIBRARY XLSX UNTUK EXPORT EXCEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <script>
        // Export Excel
        function exportTableToExcel(tableID, filename = '') {
            var table = document.getElementById(tableID);
            var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
            return XLSX.writeFile(wb, filename + '.xlsx');
        }

        // Entries & Tahun
        function updateEntries() {
            let selectedValue = document.getElementById("entries").value;
            let url = new URL(window.location.href);
            url.searchParams.set("perPage", selectedValue);
            window.location.href = url.toString();
        }

        function filterTahun() {
            let tahun = document.getElementById("filterTahun").value;
            let url = new URL(window.location.href);
            if (tahun) {
                url.searchParams.set("tahun", tahun);
            } else {
                url.searchParams.delete("tahun");
            }
            window.location.href = url.toString();
        }

        // Search AJAX
        document.addEventListener('DOMContentLoaded', function () {
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
                const tahun = document.getElementById('filterTahun')?.value || '';

                fetch(`/bebujkkonstruksi?search=${encodeURIComponent(input)}&tahun=${encodeURIComponent(tahun)}`)
                    .then(response => response.text())
                    .then(html => {
                        let parser = new DOMParser();
                        let doc = parser.parseFromString(html, "text/html");
                        let newTableBody = doc.querySelector("#tableBody");
                        let currentTableBody = document.querySelector("#tableBody");
                        if (newTableBody && currentTableBody) {
                            currentTableBody.innerHTML = newTableBody.innerHTML;
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
        });

        // Modal Hapus
        document.addEventListener('DOMContentLoaded', function () {
            const deleteModalElement = document.getElementById('deleteModal');
            const deleteModal = new bootstrap.Modal(deleteModalElement);
            const deleteForm = document.getElementById('deleteForm');

            document.querySelectorAll('.delete-trigger').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const id = this.getAttribute('data-judul');
                    deleteForm.action = "/bebujkkonstruksi/delete/" + encodeURIComponent(id);
                    deleteModal.show();
                });
            });
        });
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')
