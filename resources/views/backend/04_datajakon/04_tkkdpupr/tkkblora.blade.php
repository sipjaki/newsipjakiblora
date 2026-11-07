@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div class="app-wrapper">
        @include('backend.00_administrator.00_baganterpisah.04_navbar')
        @include('backend.00_administrator.00_baganterpisah.03_sidebar')

        <main class="app-main">
            <section style="background: linear-gradient(to bottom, #ffffff, #ffffff); width: 100%; min-height: 100vh;">
                <div class="app-content-header">
                    <div class="container-fluid">
                        <div class="row">
                            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                            @include('backend.00_administrator.00_baganterpisah.11_alert')
                        </div>
                    </div>
                </div>

                <br>

                <div class="container-fluid">
                    <div class="row" style="margin-right: 10px; margin-left: 10px;">
                        <div class="card mb-4">
                            <div class="card-header">
                                @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                                {{-- SEARCH BOX --}}
                                <div class="search-full-wrapper">
                                    <i class="bi bi-search search-icon"></i>
                                    <input type="search" id="searchInput" placeholder="Cari Tenaga Kerja Konstruksi ...." value="{{ $search ?? '' }}" autocomplete="off">
                                    <span class="search-count" id="searchCount"></span>
                                    <button type="button" class="search-clear" id="searchClear" aria-label="Clear">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>

                                {{-- TOOLBAR --}}
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
                                    {{-- TOTAL DATA --}}
                                        <a href="/beskkdpupr" class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                                <path d="M8 0C4.134 0 1 1.12 1 2.5v11C1 14.88 4.134 16 8 16s7-1.12 7-2.5v-11C15 1.12 11.866 0 8 0zm0 1c3.314 0 6 .672 6 1.5S11.314 4 8 4 2 3.328 2 2.5 4.686 1 8 1zM2 4.13C3.25 5.01 5.45 5.5 8 5.5s4.75-.49 6-1.37v2.37C14 7.328 11.314 8 8 8S2 7.328 2 6.5V4.13zm0 4C3.25 9.01 5.45 9.5 8 9.5s4.75-.49 6-1.37v2.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5V8.13zm0 4C3.25 13.01 5.45 13.5 8 13.5s4.75-.49 6-1.37v1.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5v-1.37z"/>
                                            </svg>
                                            <span class="badge-count">Data Lengkap</span>
                                        </a>

                                    {{-- TOTAL DATA --}}
                                    <a class="button-modern button-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M8 0C4.134 0 1 1.12 1 2.5v11C1 14.88 4.134 16 8 16s7-1.12 7-2.5v-11C15 1.12 11.866 0 8 0zm0 1c3.314 0 6 .672 6 1.5S11.314 4 8 4 2 3.328 2 2.5 4.686 1 8 1zM2 4.13C3.25 5.01 5.45 5.5 8 5.5s4.75-.49 6-1.37v2.37C14 7.328 11.314 8 8 8S2 7.328 2 6.5V4.13zm0 4C3.25 9.01 5.45 9.5 8 9.5s4.75-.49 6-1.37v2.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5V8.13zm0 4C3.25 13.01 5.45 13.5 8 13.5s4.75-.49 6-1.37v1.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5v-1.37z"/>
                                        </svg>
                                        <span class="badge-count">Total {{ $data->total() }} Tenaga Kerja Konstruksi</span>
                                    </a>

                                    {{-- DOWNLOAD EXCEL --}}
                                    <button type="button" onclick="exportTableToExcel('tabelTkkDpupr2024','data_tkkdpupr2024')" class="button-berkas button-md">
                                        <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive table-wrapper">
                                    <table id="tabelTkkDpupr2024" class="zebra-table">
                                        <thead>
                                            <tr>
                                                <th style="width: 60px; text-align:center;">No</th>
                                                <th style="width: 240px; text-align:center;">Identitas TKK</th>
                                                <th style="width: 260px; text-align:center;">Pendidikan &amp; Jabatan</th>
                                                <th style="width: 260px; text-align:center;">Sertifikasi</th>
                                                <th style="width: 260px; text-align:center;">Masa Berlaku</th>
                                                {{-- <th style="width: 180px; text-align:center;">Aksi</th> --}}
                                            </tr>
                                        </thead>

                                        <tbody id="tableBody">
                                            @forelse ($data as $item)
                                                <tr class="align-middle">
                                                    <td style="text-align: center; vertical-align: middle; font-weight: 700; font-size: 14px;">
                                                        {{ $loop->iteration }}
                                                    </td>

                                                    {{-- KOLOM 2: IDENTITAS TKK --}}
                                                    <td style="text-align: left; vertical-align: top; padding: 10px 12px;">
                                                        <div class="info-cell">
                                                            <div class="info-label">Nama Lengkap</div>
                                                            <div class="info-value info-value-strong">
                                                                {{ $item->nama ?? 'Data Belum Di Update' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Alamat</div>
                                                            <div class="info-value">
                                                                {{ $item->alamat ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Tahun Lulus</div>
                                                            <div class="info-value">
                                                                {{ $item->tahunlulus ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Tahun Anggaran</div>
                                                            <div class="info-value">
                                                                {{ $item->tahunbimtek ?? '-' }}
                                                            </div>
                                                        </div>
                                                    </td>

                                                    {{-- KOLOM 3: PENDIDIKAN & JABATAN --}}
                                                    <td style="text-align: left; vertical-align: top; padding: 10px 12px;">
                                                        <div class="info-cell">
                                                            <div class="info-label">Universitas / Sekolah</div>
                                                            <div class="info-value">
                                                                {{ $item->namasekolah->namasekolah ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Pendidikan</div>
                                                            <div class="info-value">
                                                                {{ $item->jenjangpendidikan->jenjangpendidikan ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Jabatan Kerja</div>
                                                            <div class="info-value">
                                                                {{ $item->jabatankerja->jabatankerja ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Jurusan</div>
                                                            <div class="info-value">
                                                                {{ $item->jurusan->jurusan ?? '-' }}
                                                            </div>
                                                        </div>
                                                    </td>

                                                    {{-- KOLOM 4: SERTIFIKASI --}}
                                                    <td style="text-align: left; vertical-align: top; padding: 10px 12px;">
                                                        <div class="info-cell">
                                                            <div class="info-label">Penyelenggara</div>
                                                            <div class="info-value">
                                                                {{ $item->asosiasimasjaki->namaasosiasi ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Jenjang</div>
                                                            <div class="info-value">
                                                                {{ $item->jenjang->jenjang ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">LSP Penerbit</div>
                                                            <div class="info-value">
                                                                {{ $item->lpspenerbit->lpspenerbit ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Status Terbit</div>
                                                            <div class="info-value" style="text-transform: uppercase;">
                                                                {{ $item->statusterbit ?? '-' }}
                                                            </div>
                                                        </div>
                                                    </td>

                                                    {{-- KOLOM 5: MASA BERLAKU + AKSI KECIL --}}
                                                    <td class="status-col" style="text-align: center; vertical-align: middle;">
                                                        <div class="info-cell">
                                                            <div class="info-label">Tgl Terbit</div>
                                                            <div class="info-value">
                                                                {{ $item->tanggalterbit ? \Carbon\Carbon::parse($item->tanggalterbit)->translatedFormat('d F Y') : '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Tgl Habis</div>
                                                            <div class="info-value">
                                                                {{ $item->tanggalhabis ? \Carbon\Carbon::parse($item->tanggalhabis)->translatedFormat('d F Y') : '-' }}
                                                            </div>
                                                        </div>

                                                        <div class="status-detail" style="margin-top: 6px;">
                                                            <span class="masa-berlaku" data-masaberlaku="{{ $item->tanggalhabis ?? '' }}">
                                                                <button class="btn-masa-berlaku d-flex align-items-center justify-content-center w-100" style="font-size: 11px; padding: 6px 10px; border-radius: 6px; border: none; font-weight: 700; color: white;">
                                                                    <i class="bi bi-calendar3" style="margin-right: 5px;"></i> Status
                                                                </button>
                                                            </span>
                                                        </div>

                                                        {{-- Tombol Aksi kecil --}}
                                                        <div class="info-actions-mini" style="margin-top: 10px;">
                                                            @if($item->sertifikat && file_exists(public_path('storage/' . $item->sertifikat)))
                                                                <button class="button-berkas info-btn" data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                                    <i class="bi bi-file-earmark-pdf-fill"></i> Sertifikat
                                                                </button>
                                                                <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <span style="margin: 0 5px;">:</span>
                                                                                <h5 class="modal-title">Sertifikat</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body text-center">
                                                                                <iframe src="{{ asset('storage/' . $item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @elseif($item->sertifikat)
                                                                <button class="button-berkas info-btn" data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                                    <i class="bi bi-file-earmark-pdf-fill"></i> Sertifikat
                                                                </button>
                                                                <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <span style="margin: 0 5px;">:</span>
                                                                                <h5 class="modal-title">Sertifikat</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body text-center">
                                                                                <iframe src="{{ asset($item->sertifikat) }}" frameborder="0" width="100%" height="600px"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <button class="button-merah info-btn" disabled>
                                                                    <i class="bi bi-x-octagon-fill"></i> Tidak Ada
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </td>

                                                    {{-- KOLOM 6: AKSI --}}
                                                    {{-- <td style="text-align: center; vertical-align: middle;">
                                                        <div class="aksi-wrapper">
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

                            <br><br>

                            <!--begin::Modal Konfirmasi Hapus (STYLE BARU)-->
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
                                            <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Ingin Menghapus Data : <strong id="itemName"></strong>?</p>
                                        </div>
                                        <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #eaeaea; border-radius: 0 0 20px 20px; padding: 15px 25px;">
                                            <button type="button" class="button-modern button-md" data-bs-dismiss="modal"><i class="bi bi-x"></i> Batal</button>
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
                            <!--end::Modal Konfirmasi Hapus-->

                            <script>
                            (function() {
                                'use strict';
                                document.addEventListener('DOMContentLoaded', function() {
                                    var deleteModal = document.getElementById('deleteModal');
                                    var deleteForm  = document.getElementById('deleteForm');
                                    var itemName    = document.getElementById('itemName');

                                    // DELETE
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
                                    // STATUS MASA BERLAKU REALTIME
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
                                });
                            })();
                            </script>

                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!--end::Container-->

            </section>

        </main>
        <!--end::App Main-->

    </div>
    <!--end::App Wrapper-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <script>
        function exportTableToExcel(tableID, filename = '') {
            var table = document.getElementById(tableID);
            var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
            return XLSX.writeFile(wb, filename + '.xlsx');
        }
    </script>

    <!-- ============================================ -->
    <!-- SCRIPT: Entries, Search Full-Width            -->
    <!-- ============================================ -->
    <script>
    (function() {
        'use strict';

        window.updateEntries = function () {
            let selectedValue = document.getElementById("entries").value;
            let url = new URL(window.location.href);
            url.searchParams.set("perPage", selectedValue);
            window.location.href = url.toString();
        };

        document.addEventListener('DOMContentLoaded', function () {
            const searchInput  = document.getElementById('searchInput');
            const searchClear  = document.getElementById('searchClear');
            const searchCount  = document.getElementById('searchCount');

            let debounceTimer = null;

            function toggleClearBtn() {
                if (!searchInput || !searchClear) return;
                if (searchInput.value.length > 0) {
                    searchClear.classList.add('show');
                } else {
                    searchClear.classList.remove('show');
                }
            }

            function doSearchFetch() {
                const input = searchInput.value || '';

                fetch(`/beskkdpuprblora?search=${encodeURIComponent(input)}`)
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
    })();
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')