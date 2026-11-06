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
                                    <input type="search" id="searchInput" placeholder="Cari Badan Usaha berdasarkan nama, NIB, alamat, atau asosiasi..." value="{{ $search ?? '' }}" autocomplete="off">
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

                                    <span class="spacer"></span>

                                    <a href="/bebujkjakon" class="button-modern button-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                        </svg>
                                        Kembali
                                    </a>

                                    <a href="/bebujkkonsultan" class="button-modern button-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M2 2.5A1.5 1.5 0 0 1 3.5 1h9A1.5 1.5 0 0 1 14 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5v-11zM3.5 2a.5.5 0 0 0-.5.5V5h10V2.5a.5.5 0 0 0-.5-.5h-9zM3 6v2h3V6H3zm4 0v2h6V6H7zM3 9v2h3V9H3zm4 0v2h6V9H7zm-4 3v1.5a.5.5 0 0 0.5.5h9a.5.5 0 0 0 .5-.5V12H3z"/>
                                        </svg>
                                        Data Lengkap
                                    </a>

                                    <a class="button-modern button-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M8 0C4.134 0 1 1.12 1 2.5v11C1 14.88 4.134 16 8 16s7-1.12 7-2.5v-11C15 1.12 11.866 0 8 0zm0 1c3.314 0 6 .672 6 1.5S11.314 4 8 4 2 3.328 2 2.5 4.686 1 8 1zM2 4.13C3.25 5.01 5.45 5.5 8 5.5s4.75-.49 6-1.37v2.37C14 7.328 11.314 8 8 8S2 7.328 2 6.5V4.13zm0 4C3.25 9.01 5.45 9.5 8 9.5s4.75-.49 6-1.37v2.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5V8.13zm0 4C3.25 13.01 5.45 13.5 8 13.5s4.75-.49 6-1.37v1.37c0 .828-2.686 1.5-6 1.5s-6-.672-6-1.5v-1.37z"/>
                                        </svg>
                                        <span class="badge-count">Total {{ $data->total() }} Konsultan</span>
                                    </a>

                                    <a href="/bebujkkonsultan/create" class="button-baru button-md">
                                        <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                        Tambah Data
                                    </a>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive table-wrapper">
                                    <table id="tabelBujkkonsultan" class="zebra-table">
                                        <thead>
                                            <tr>
                                                <th style="width: 60px; text-align:center;">
                                                    <i class="bi bi-list-ol"></i> No
                                                </th>
                                                <th style="width: 240px; text-align:center;">
                                                    <i class="bi bi-building"></i> Identitas Badan Usaha
                                                </th>
                                                <th style="width: 280px; text-align:center;">
                                                    <i class="bi bi-telephone-fill"></i> Kontak & Alamat
                                                </th>
                                                <th style="width: 280px; text-align:center;">
                                                    <i class="bi bi-file-earmark-text"></i> Legalitas
                                                </th>
                                                <th style="width: 220px; text-align:center;">
                                                    <i class="bi bi-shield-check"></i> Status & Keterangan
                                                </th>
                                                <th style="width: 180px; text-align:center;">
                                                    <i class="bi bi-tools"></i> Aksi
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody id="tableBody">
                                            @forelse ($data as $item)
                                                <tr class="align-middle">
                                                    <td style="text-align: center; vertical-align: middle; font-weight: 700; font-size: 14px;">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td style="text-align: left; vertical-align: top; padding: 10px 12px;">
                                                        <div class="info-cell">
                                                            <div class="info-label">Badan Usaha</div>
                                                            <div class="info-value info-value-strong">
                                                                {{ $item->namalengkap ?? 'Data Belum Di Update' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Asosiasi</div>
                                                            <div class="info-value">
                                                                {{ $item->asosiasimasjaki->namaasosiasi ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">NIB</div>
                                                            <div class="info-value">
                                                                {{ $item->nomorindukberusaha ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">PJU</div>
                                                            <div class="info-value">
                                                                {{ $item->pju ?? '-' }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: left; vertical-align: top; padding: 10px 12px;">
                                                        <div class="info-cell">
                                                            <div class="info-label">Alamat</div>
                                                            <div class="info-value">
                                                                {{ $item->alamat ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">No Telepon</div>
                                                            <div class="info-value">
                                                                {{ $item->no_telepon ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Email</div>
                                                            <div class="info-value">
                                                                {{ $item->email ?? '-' }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: left; vertical-align: top; padding: 10px 12px;">
                                                        <div class="info-cell">
                                                            <div class="info-label">No Akte</div>
                                                            <div class="info-value">
                                                                {{ $item->no_akte ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Tanggal</div>
                                                            <div class="info-value">
                                                                {{ $item->tanggal ? \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') : '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Notaris</div>
                                                            <div class="info-value">
                                                                {{ $item->nama_notaris ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="info-cell">
                                                            <div class="info-label">Pengesahan</div>
                                                            <div class="info-value">
                                                                {{ $item->no_pengesahan ?? '-' }}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="status-col" style="text-align: center; vertical-align: middle;">
                                                        @if(($item->status_total ?? 0) > 0)
                                                            <div class="status-detail">
                                                                <span class="status-mini status-mini-berlaku" title="Berlaku: {{ $item->status_berlaku }}">
                                                                    <i class="bi bi-check-circle-fill"></i>
                                                                    <span class="status-mini-label">Berlaku</span>
                                                                    <strong>{{ $item->status_berlaku }}</strong>
                                                                </span>
                                                                <span class="status-mini status-mini-tidak" title="Tidak Berlaku: {{ $item->status_tidak }}">
                                                                    <i class="bi bi-x-circle-fill"></i>
                                                                    <span class="status-mini-label">Tidak</span>
                                                                    <strong>{{ $item->status_tidak }}</strong>
                                                                </span>
                                                                <span class="status-mini status-mini-suspend" title="Suspend: {{ $item->status_suspend }}">
                                                                    <i class="bi bi-pause-circle-fill"></i>
                                                                    <span class="status-mini-label">Suspend</span>
                                                                    <strong>{{ $item->status_suspend }}</strong>
                                                                </span>
                                                            </div>
                                                            <div class="status-total">
                                                                <i class="bi bi-collection-fill"></i>
                                                                Total <strong>{{ $item->status_total }}</strong> sub
                                                            </div>
                                                        @else
                                                            <span class="button-baru status-pill status-belum">
                                                                <i class="bi bi-dash-circle-fill"></i>
                                                                Belum Ada Sub
                                                            </span>
                                                        @endif

                                                        <div class="info-actions-mini">
                                                            <a href="{{ url('/bebujkkonsultan/showsubklasifikasi/' . $item->namalengkap) }}" class="button-berkas info-btn">
                                                                <i class="bi bi-eye-fill"></i> Sub Klasifikasi
                                                            </a>
                                                            @if($item->uploadberkas && file_exists(public_path('storage/' . $item->uploadberkas)))
                                                                <button class="button-berkas info-btn" data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                                    <i class="bi bi-file-earmark-pdf-fill"></i> Berkas
                                                                </button>
                                                                <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <span style="margin: 0 5px;">:</span>
                                                                                <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Berkas</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body text-center">
                                                                                <iframe src="{{ asset('storage/' . $item->uploadberkas) }}" frameborder="0" width="100%" height="600px"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @elseif($item->uploadberkas)
                                                                <button class="button-berkas info-btn" data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                                    <i class="bi bi-file-earmark-pdf-fill"></i> Berkas
                                                                </button>
                                                                <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                                <span style="margin: 0 5px;">:</span>
                                                                                <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Berkas Sertifikasi</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body text-center">
                                                                                <iframe src="{{ asset($item->uploadberkas) }}" frameborder="0" width="100%" height="600px"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <button class="button-merah info-btn" disabled>
                                                                    <i class="bi bi-x-octagon-fill"></i> Tidak Ada Berkas
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <div class="aksi-wrapper">
                                                            <a href="/bebujkkonsultan/show/{{ $item->namalengkap }}" class="button-baru" title="Show">
                                                                <i class="bi bi-eye"></i>
                                                            </a>
                                                            <a href="/bebujkkonsultan/update/{{ $item->id }}" class="button-berkas" title="Update">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                            {{-- ✅ DELETE: kirim namalengkap sesuai route --}}
                                                            <a href="javascript:void(0)" class="button-merah delete-trigger" title="Delete" data-judul="{{ $item->namalengkap }}">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                        </div>
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
                                            <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Data yang dihapus tidak dapat dikembalikan.</p>
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
                                    var cancelBtn   = document.getElementById('cancelDelete');
                                    var deleteForm  = document.getElementById('deleteForm');
                                    var itemName    = document.getElementById('itemName');

                                    document.querySelectorAll('.delete-trigger').forEach(function(btn) {
                                        btn.addEventListener('click', function(e) {
                                            e.preventDefault();
                                            var id = this.getAttribute('data-judul');
                                            if (itemName) itemName.innerText = id;
                                            if (deleteForm) {
                                                deleteForm.action = "/bebujkkonsultan/delete/" + encodeURIComponent(id);
                                            }
                                            if (deleteModal) {
                                                var modal = new bootstrap.Modal(deleteModal);
                                                modal.show();
                                            }
                                        });
                                    });

                                    if (cancelBtn) {
                                        cancelBtn.addEventListener('click', function() {
                                            var modal = bootstrap.Modal.getInstance(deleteModal);
                                            if (modal) modal.hide();
                                        });
                                    }
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
    <!-- SCRIPT: Entries, Tahun, Search Full-Width    -->
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

        window.filterTahun = function () {
            let tahun = document.getElementById("filterTahun").value;
            let url = new URL(window.location.href);
            if (tahun) {
                url.searchParams.set("tahun", tahun);
            } else {
                url.searchParams.delete("tahun");
            }
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
                const tahun = document.getElementById('filterTahun')?.value || '';

                fetch(`/bebujkkonsultan?search=${encodeURIComponent(input)}&tahun=${encodeURIComponent(tahun)}`)
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